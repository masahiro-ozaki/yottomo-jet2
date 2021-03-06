<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
// use App\Http\Controllers\Controller;

use App\User;
use App\User_friend;
use App\Memo;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id','asc')->paginate(20);
        
        return view('users.index', [
            'users' => $users,
        ]);
    }
    
    public function show($id)
    {
        $user = User::find($id);
        // $memos = $user->memos()->orderBy('created_at', 'desc')->paginate(10);
        
        $data = [
            'user' => $user,
            // 'memos' => $memos,
        ];
        
        $data += $this->counts($user);
        
        return view('users.show', $data);
        
    }
    
    public function edit($id)
    {
        $user = User::find($id);
        // $memos = $user->memos()->orderBy('created_at', 'desc')->paginate(10);
        
        $data = [
            'user' => $user,
        //     'memos' => $memos,
        ];
        
        $data += $this->counts($user);
        
        return view('users.edit', $data);
        
        
    }
    
    public function friends($id)
    {
        $user = User::find($id);
        $friends = $user->friends()->paginate(10);

        $data = [
            'user' => $user,
            'users' => $friends,
        ];

        $data += $this->counts($user);

        return view('users.friends', $data);
    }
    
    
    // zuttomo
    public function zuttomoings($id)
    {
        $user = User::find($id);
        $zuttomoings = $user->zuttomoings()->paginate(10);

        $data = [
            'user' => $user,
            'users' => $zuttomoings,
        ];

        $data += $this->counts($user);

        return view('users.zuttomoings', $data);
    }
    
    // future
    public function futures($id)
    {
        $user = User::find($id);
        
        // $hoge_a：自分をフォローしてくれているユーザのidが配列型で格納
        $hoge_a = User_friend::join('users','users.id','=','user_friend.user_id')
                    ->select('users.*')
                    ->where('friend_id',$id)
                    ->pluck('id')
                    ->toArray();
        
        // $futures_a：自分がフォローしているユーザのidが配列型で格納
        $futures_a = User_friend::join('users','users.id','=','user_friend.friend_id')
                    ->select('users.*')
                    ->where('user_id',$id)
                    ->pluck('id')
                    ->toArray();
        
        // $sougo_id：$futures_aと$hoge_aの中で共通するidのみを取得
        $sougo_id = array_intersect($futures_a, $hoge_a);
        $count_sougo = count($sougo_id);
        
        // $data = [];
        
        // if ($sougo_id) {
            $futures = User::select()->whereIn('id', $sougo_id)->paginate(10);
        // } else {
        //     $futures = null;
        // }
        
        $data = [
            'user' => $user,
            'users' => $futures,
        ];
                
            // array_push($data, ['user' => $user], ['users' => $futures]);
            // array_push($data['users'], ['key' => 'val']);
                
        $data += $this->counts($user);
        return view('users.futures', $data)->with('count_sougo',$count_sougo);
        
        // usersテーブルの中から、【Judy】を取得し、$userに格納
        // $user = User::find($id);
        // $userに格納された【Judy】をフレンドしている人たちを$futuresに格納→【Jet】と【Yuki】
        // $futures = $user->futures()->paginate(10);
        // $userに格納された【Judy】がフレンドしている人たちを$friendsに格納→【Jet】
        // $friends = $user->friends()->paginate(10);
        //user_friendテーブルの中から、【Judy】がフレンドしている人たちを$hogeに格納→【Jet】(※でもuser_friendテーブルのデータ形式じゃ使えない)
        // $hoge = User_friend::all()->where('user_id', '=', '$id');
        
        // $hogehoge = array_diff($futures, $friends);
        // $friendsのidと$futuresのuser_idが一致していれば取得したい
        // $hogeのfriend_idと$futuresのuser_idが一致していれば取得したい
        // $sougo = $futures->where('user_id', '=', '$friends['id']);
    }
    
    public function getIndex(Request $request)
    {
        $user = \Auth::user();
         
        
        // 検索するテキスト取得
        $keyword = $request->get('keyword');
        $query = User::query()->where('name','like','%'.$keyword.'%') 
                              ->orWhere('hometeam','like', '%'.$keyword.'%')
                              ->orWhere('codingteam','like', '%'.$keyword.'%')
                              ->orWhere('hobby','like', '%'.$keyword.'%')
                              ->orWhere('birthday','like', '%'.$keyword.'%')
                              ->orWhere('birthplace','like', '%'.$keyword.'%')
                              ->orWhere('app','like', '%'.$keyword.'%')
                              ->orWhere('character1','like', $keyword)
                              ->orWhere('character2','like', $keyword)
                              ->orWhere('charmpoint','like', $keyword)
                              ->orWhere('ranktitle','like', $keyword);
        // ->orWhere('hometeam','like', $keyword); 
        
        

 
        // ページネーション
        $data = $query->orderBy('id','asc')->paginate(200);
        $users = $data;
        return view('users.index')
        ->with('keyword',$keyword)
        ->with('users', $users);
        
    }
   
    public function getRyoko(Request $request)
    {
        $user = \Auth::user();
        
        // 検索するテキスト取得
        $ryoko = $request->get('ryoko');
        $query = User::query()->where('hobby','like','%'.$ryoko.'%');
 
        // ページネーション
        $data = $query->orderBy('id','asc')->paginate(200);
        $users = $data;
        return view('users.index')
        ->with('ryoko',$ryoko)
        ->with('users', $users);
    }
    
    public function getEiga(Request $request)
    {
        $user = \Auth::user();
        
        // 検索するテキスト取得
        $eiga = $request->get('eiga');
        $query = User::query()->where('hobby','like','%'.$eiga.'%');
 
        // ページネーション
        $data = $query->orderBy('id','asc')->paginate(200);
        $users = $data;
        return view('users.index')
        ->with('eiga',$eiga)
        ->with('users', $users);
    }
    
    public function getSoccer(Request $request)
    {
        $user = \Auth::user();
        
        // 検索するテキスト取得
        $soccer = $request->get('soccer');
        $query = User::query()->where('hobby','like','%'.$soccer.'%');
 
        // ページネーション
        $data = $query->orderBy('id','asc')->paginate(200);
        $users = $data;
        return view('users.index')
        ->with('soccer',$soccer)
        ->with('users', $users);
    }
    
    public function getInsta(Request $request)
    {
        $user = \Auth::user();
        
        // 検索するテキスト取得
        $insta = $request->get('insta');
        $query = User::query()->where('app','like','%'.$insta.'%');
 
        // ページネーション
        $data = $query->orderBy('id','asc')->paginate(200);
        $users = $data;
        return view('users.index')
        ->with('insta',$insta)
        ->with('users', $users);
    }
    
    public function getYoko(Request $request)
    {
        $user = \Auth::user();
        
        // 検索するテキスト取得
        $yoko = $request->get('yoko');
        $query = User::query()->where('birthplace','like','%'.$yoko.'%');
 
        // ページネーション
        $data = $query->orderBy('id','asc')->paginate(200);
        $users = $data;
        return view('users.index')
        ->with('yoko',$yoko)
        ->with('users', $users);
    }
}
