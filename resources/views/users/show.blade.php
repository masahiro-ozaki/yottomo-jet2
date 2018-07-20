<style>
    .profile{
    font-family:'HuiFontP109';
    font-size: 30px;
    }
    
    @font-face{
    font-family:'HuiFontP109';
    src:url('https://dl.dropboxusercontent.com/s/6snqvg654tirsyv/HuiFontP109.eot');
    src:url('https://dl.dropboxusercontent.com/s/6snqvg654tirsyv/HuiFontP109.eot?#iefix') format('embedded-opentype'),
    url('https://dl.dropboxusercontent.com/s/7pscemjdvt0wyiq/HuiFontP109.woff') format('woff'),
    url('https://dl.dropboxusercontent.com/s/0w9uuopxrns8ehi/HuiFontP109.ttf') format('truetype'),
    url('https://dl.dropboxusercontent.com/s/xnnsbxtz8o6d98i/HuiFontP109.svg#HuiFontP109') format('svg');
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
    
    /*.btn1{*/
    /*    display: inline-block;*/
    /*  padding: .20em .20em;*/
    /*  border: 2px dashed #333;*/
    /*  border-radius: .4em 2em .5em 3em/3em .5em 2em .5em;*/
    /*  color: #333;*/
      /*text-decoration: none;*/
    /*  text-align: center;*/
    /*  font-size: 1.5em;*/
    /*  font-family:'HuiFontP109';*/
    /*}*/
    
    body {
        background-color: #486d46;
        background-image: url("../yottomo-jet-image/tukue3.jpg");
        background-size: cover;
        background-attachment: fixed;
        background-position: center center;
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
    
    /*.button {*/
    /*    display: inline-block;*/
    /*  padding: .2em 2.5em;*/
    /*  border: 2px solid #333;*/
    /*  border-radius: .4em 2em .5em 3em/3em .5em 2em .5em;*/
    /*  color: #333;*/
    /*  font-family: 'Covered By Your Grace', cursive;*/
    /*  font-weight: 400;*/
    /*  text-decoration: none;*/
    /*  text-align: center;*/
    /*}*/
    
    .output{
        font-weight: bold;
    }
    
    .center {
        opacity: 0.9;
        /*color: rgba(0,0,0,1);*/
    }
    
    .panel-title li{
        font-family:'HuiFontP109';
        font-size: 50px;
        font-weight: bold;
        list-style:none;
    }
    
    .panel-team li{
        font-family:'HuiFontP109';
        font-size: 40px;
        font-weight: bold;
        list-style:none;
    }
</style>

@extends('layouts.app')

@section('content')
    <div class="row">
        <!--<div class="col-12 clearfix">-->
        <!--<div class="float-left">-->
        
        <!--<aside class="col-xs-2">-->
        <!--    <div class="panel panel-default">-->
        <!--        <div class="panel-heading">-->
        <!--            <h3 class="panel-title">{{ $user->name }} ({{ $user->hometeam }},{{ $user->codingteam }})</h3>-->
        <!--        </div>-->
        <!--        <div class="panel-body">-->
        <!--        <img class="media-object img-rounded img-responsive" src="{{ Gravatar::src($user->name, 500) }}" alt="">-->
        <!--        </div>-->
        <!--    </div>-->
        <!--    <div class="pull-right">-->
        <!--        @include('user_friend.friend_button', ['user' => $user])-->
        <!--        @include('user_friend.zuttomo_button', ['user' => $user])-->
        <!--    </div>-->
        <!--</aside>-->
        <div class="col-xs-12">
            @if (Auth::id() == $user->id)
                <ul class="nav nav-tabs nav-justified">
                    <!--<li role="presentation" class="{{ Request::is('users/' . $user->id) ? 'active' : '' }}"><a href="{{ route('users.show', ['id' => $user->id]) }}">メモ一覧 <span class="badge">{{ $count_memos }}</span></a></li>-->
                    <li role="presentation" class="nav1" class="{{ Request::is('users/*/friends') ? 'active' : '' }}"><a href="{{ route('users.friends', ['id' => $user->id]) }}">友達になりたい人たち<span class="badge">{{ $count_friends }}</span></a></li>
                    <li role="presentation" class="nav2" class="{{ Request::is('users/*/futures') ? 'active' : '' }}"><a href="{{ route('users.futures', ['id' => $user->id]) }}">ズッ友になるかも<span class="badge"></span></a></li>
                    <li role="presentation" class="nav3" class="{{ Request::is('users/*/zuttomoings') ? 'active' : '' }}"><a href="{{ route('users.zuttomoings', ['id' => $user->id]) }}">ズッ友たち<span class="badge">{{ $count_zuttomoings }}</span></a></li>
                </ul>
            @endif
             <!--
             ここにプロフィールを表示できるようにする
             [編集]ボタンがあって、それを押すと、edit.blade.phpにとぶ
             edit.blade.phpで[更新]を押すと、更新されてこのページにかえってくる
             -->
            <div class="col-xs-10 col-xs-offset-1 col-sm-offset-1 col-sm-10 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
                <br>
                <div class="center jumbotron" style="background:url(../yottomo-jet-image/profilebackground.png);">
                    
                    <section class="icon">
                    <div class="panel">
                        <div class="panel-body">
                            <img class="media-object img-rounded img-responsive" src="{{ Gravatar::src($user->name, 200) }}" alt="">
                        </div>
                    </div>
                    
                    <div class="pull-right">
                        @include('user_friend.friend_button', ['user' => $user])
                        @include('user_friend.zuttomo_button', ['user' => $user])
                    </div>
                    
                    </section>
                    
                    
                    <div class="panel-heading" >
                        PROFILE
                    </div>
                    <div class="panel-title">
                        <li>{{ $user->name }}</li>
                    </div>    
                    <div class="panel-team">
                        <li>({{ $user->hometeam }},{{ $user->codingteam }})</li>
                    </div>
                        
                    <br>
                    
                    <section class="profile">
                        私の誕生日は[_<span class="output">{!! $user->birthday !!}</span>_]で、
                        出身地は[_<span class="output">{!! $user->birthplace !!}</span>_]だよ。<br>
                        性格は[_<span class="output">{!! $user->character1 !!}</span>_]と思っているんだけど、
                        まわりからは[_<span class="output">{!! $user->character2 !!}</span>_]って言われるよ。<br>
                        そんな私の趣味は、[_<span class="output">{!! $user->hobby !!}</span>_]で、
                        チャームポイントは[_<span class="output">{!! $user->charmpoint !!}</span>_]なんだ。<br>
                        将来の夢は[_<span class="output">{!! $user->dream !!}</span>_]で、
                        好きなアプリは[_<span class="output">{!! $user->app !!}</span>_]だよ。<br> 
                        私の[_<span class="output">{!! $user->ranktitle !!}</span>_]ランキングを発表するよ！<br>
                        第1位[_<span class="output">{!! $user->rank1 !!}</span>_]<br>
                        第2位[_<span class="output">{!! $user->rank2 !!}</span>_]<br>
                        第3位[_<span class="output">{!! $user->rank3 !!}</span>_]<br>
                        よろしくね！<br><br>
                        自由記述欄
                        <div class='panel panel-info scroll' style="height: 10vh;">
                        <p>{!!  nl2br($user->content)  !!}</p>
                        </div>
                        
                        <!--最後に一言、[________]。よろしくね！<br>-->
                        
                    </section>
                </div>
                <div class="pull-right">
                    @if (Auth::id() == $user->id)
                        {!! link_to_route('users.edit', ' 編集する', ['id' => $user->id], ['class' => 'btn btn-primary glyphicon glyphicon-pencil']) !!}
                    @endif
                </div>
            </div>
        </div>
        
        <!--</div>-->
        <!--</div>-->
    </div>
@endsection