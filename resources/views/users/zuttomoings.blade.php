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
</style>

@extends('layouts.app')

@section('content')
    <div class="row">
        <!--<aside class="col-xs-2">-->
        <!--    <div class="panel panel-default">-->
        <!--        <div class="panel-heading">-->
        <!--            <h3 class="panel-title">{{ $user->name }} ({{ $user->hometeam }},{{ $user->codingteam }})</h3>-->
        <!--        </div>-->
        <!--        <div class="panel-body">-->
        <!--            <img class="media-object img-rounded img-responsive" src="{{ Gravatar::src($user->name, 500) }}" alt="">-->
        <!--        </div>-->
        <!--    </div>-->
        <!--    @include('user_friend.friend_button', ['user' => $user])-->
        <!--    @include('user_friend.zuttomo_button', ['user' => $user])-->
        <!--</aside>-->
        <div class="col-xs-12">
            <ul class="nav nav-tabs nav-justified">
                <!--<li role="presentation" class="{{ Request::is('users/' . $user->id) ? 'active' : '' }}"><a href="{{ route('users.show', ['id' => $user->id]) }}">メモ一覧 <span class="badge">{{ $count_memos }}</span></a></li>-->
                <li role="presentation" class="nav1" class="{{ Request::is('users/*/friends') ? 'active' : '' }}"><a href="{{ route('users.friends', ['id' => $user->id]) }}">友達になりたい人たち<span class="badge">{{ $count_friends }}</span></a></li>
                <li role="presentation" class="nav2" class="{{ Request::is('users/*/futures') ? 'active' : '' }}"><a href="{{ route('users.futures', ['id' => $user->id]) }}">ズッ友になるかも<span class="badge"></span></a></li>
                <li role="presentation" class="nav3" class="{{ Request::is('users/*/zuttomoings') ? 'active' : '' }}"><a href="{{ route('users.zuttomoings', ['id' => $user->id]) }}">ズッ友たち<span class="badge">{{ $count_zuttomoings }}</span></a></li>
            </ul>
            <div>
            @include('users.users', ['users' => $users])
            </div>
        </div>
    </div>
@endsection