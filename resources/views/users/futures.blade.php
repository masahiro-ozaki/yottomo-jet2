<style>
    @font-face{
    font-family:'HuiFontP109';
    src:url('https://dl.dropboxusercontent.com/s/6snqvg654tirsyv/HuiFontP109.eot');
    src:url('https://dl.dropboxusercontent.com/s/6snqvg654tirsyv/HuiFontP109.eot?#iefix') format('embedded-opentype'),
    url('https://dl.dropboxusercontent.com/s/7pscemjdvt0wyiq/HuiFontP109.woff') format('woff'),
    url('https://dl.dropboxusercontent.com/s/0w9uuopxrns8ehi/HuiFontP109.ttf') format('truetype'),
    url('https://dl.dropboxusercontent.com/s/xnnsbxtz8o6d98i/HuiFontP109.svg#HuiFontP109') format('svg');
    }

    .nav {
        font-family:'HuiFontP109'; 
        font-size: 20px;
        font-weight: bolder;
    }
    
    .nav1 {
        background: #dee3e5;
        background-image: radial-gradient(#fff 20%, transparent 0), radial-gradient(#fff 20%, transparent 0);
        background-position: 0 0, 10px 10px;
        background-size: 20px 20px;
        padding: 1em;
        color: #593869;
    }
          
    .nav2 {
        background:#e7c7f9;
        background-image: radial-gradient(#fff 20%, transparent 0), radial-gradient(#fff 20%, transparent 0);
        background-position: 0 0, 10px 10px;
        background-size: 20px 20px;
        padding: 1em;
        color: #593869;
    }
    
    
    .nav3 {
        background: #bee9f7;
        background-image: radial-gradient(#fff 20%, transparent 0), radial-gradient(#fff 20%, transparent 0);
        background-position: 0 0, 10px 10px;
        background-size: 20px 20px;
        padding: 1em;
        color: #593869;
    }    
    
    .icon{
        float: right;
        width: 150px;
    }
    
    .scroll{
        overflow-y:scroll;
        margin-top: 15px;
    }
    
    .panel-heading{
        font-family:'HuiFontP109';
        font-size: 40px;
    }
    
    .panel-title{
        font-family:'HuiFontP109';
        font-size: 50px;
    }
    
    .badge {
        font-family:'Meiryo';
    }
    
    .futurebackground{
        background-color: #486d46;
        background-image: url("../../yottomo-jet-image/sea.jpg");
        background-size: cover;
      background-attachment: fixed;
      background-position: center center;
    }
    
    p {
        font-family:'HuiFontP109'; 
    }
</style>

@extends('layouts.app')

@section('content')
<body class="futurebackground">
    <div class="row">
        <div class="col-xs-12">
            @if (Auth::id() == $user->id)
                <ul class="nav nav-tabs nav-justified">
                    <!--<li role="presentation" class="{{ Request::is('users/' . $user->id) ? 'active' : '' }}"><a href="{{ route('users.show', ['id' => $user->id]) }}">メモ一覧 <span class="badge">{{ $count_memos }}</span></a></li>-->
                    <!--<li role="presentation" class="nav1" class="{{ Request::is('users/*/friends') ? 'active' : '' }}"><a href="{{ route('users.friends', ['id' => $user->id]) }}">友達になりたい人たち<span class="badge">{{ $count_friends }}</span></a></li>-->
                    <li role="presentation" class="nav2 text-center" class="{{ Request::is('users/*/futures') ? 'active' : '' }}">マッチング成立一覧<span class="badge">{{ $count_sougo }}</span></li>
                    <!--<li role="presentation" class="nav3" class="{{ Request::is('users/*/zuttomoings') ? 'active' : '' }}"><a href="{{ route('users.zuttomoings', ['id' => $user->id]) }}">ズッ友たち<span class="badge">{{ $count_zuttomoings }}</span></a></li>-->
                </ul>
                <div>
                @include('users.users', ['users' => $users])
                </div>
            @else
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-offset-2 col-lg-8">
                    <div class="center jumbotron text-center"><p>他人の見たらダメだよ(/ω＼)</p></div>
                </div>
            @endif
        </div>
    </div>
</body>
@endsection