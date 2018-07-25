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
    
    /*.background{*/
    /*background-image: ;*/
    /*}*/
    
    body {
          background-color: #486d46;
          background-image: url("../../yottomo-jet-image/tukue2.jpg");
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
    
    .text textarea{
        height: 50px;
        width: 65%;
    }
    
    textarea{
        width: 100%;
    
    }
    
    .center {
        opacity: 0.9;
        /*color: rgba(0,0,0,1);*/
    }
    
    .badge {
        font-family:'Meiryo';
    }
    
    p {
        font-family:'HuiFontP109'; 
    }
</style>

@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            @if (Auth::id() == $user->id)
                <ul class="nav nav-tabs nav-justified">
                    <!--<li role="presentation" class="{{ Request::is('users/' . $user->id) ? 'active' : '' }}"><a href="{{ route('users.show', ['id' => $user->id]) }}">メモ一覧 <span class="badge">{{ $count_memos }}</span></a></li>-->
                    <!--<li role="presentation" class="nav1" class="{{ Request::is('users/*/friends') ? 'active' : '' }}"><a href="{{ route('users.friends', ['id' => $user->id]) }}">友達になりたい人たち<span class="badge">{{ $count_friends }}</span></a></li>-->
                    <!--<li role="presentation" class="nav2" class="{{ Request::is('users/*/futures') ? 'active' : '' }}"><a href="{{ route('users.futures', ['id' => $user->id]) }}">ズッ友になるかも<span class="badge"></span></a></li>-->
                    <!--<li role="presentation" class="nav3" class="{{ Request::is('users/*/zuttomoings') ? 'active' : '' }}"><a href="{{ route('users.zuttomoings', ['id' => $user->id]) }}">ズッ友たち<span class="badge">{{ $count_zuttomoings }}</span></a></li>-->
                </ul>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-offset-2 col-lg-8">
                <br>
                
                <section class="background">
                <div class="center jumbotron" style="background:url(../../yottomo-jet-image/profilebackground.png);">
                    
                        <section class="icon">
                        <div class="panel">
                        
                            <div class="panel-body" >
                                <img class="media-object img-rounded img-responsive" src="{{ Gravatar::src($user->name, 500) }}" alt="">
                            </div>
                        </div>
                        </section>
                        
                        <div class="panel-heading" >
                            PROFILE
                        </div>
                        <div class="panel-title">
                            <h2>{{ $user->name }}<br> ({{ $user->hometeam }},{{ $user->codingteam }})</h2>
                        </div>
                        
                        <!-- link_to_route('profiles.show', $profile->name, ['id' => $profile->id]) !!}-->
                        {!! Form::model($user, ['route' => ['profiles.update', 'id' => $user->id], 'method' => 'put']) !!}
                        <div class="profile">
                            <section class="text">
                            私の誕生日は{!! Form::textarea('birthday') !!}で、出身地は{!! Form::textarea('birthplace') !!}だよ。<br>
                            性格は{!! Form::textarea('character1') !!}と思っているんだけど、<br>
                            まわりからは{!! Form::textarea('character2') !!}って言われるよ。<br>
                            そんな私の趣味は、{!! Form::textarea('hobby') !!}で、<br>
                            チャームポイントは{!! Form::textarea('charmpoint') !!}なんだ。<br>
                            将来の夢は{!! Form::textarea('dream') !!}で、<br>
                            好きなアプリは{!! Form::textarea('app') !!}だよ。<br>
                            私の{!! Form::textarea('ranktitle') !!}ランキングを発表するよ！<br>
                            第1位{!! Form::textarea('rank1') !!}<br>
                            第2位{!! Form::textarea('rank2') !!}<br>
                            第3位{!! Form::textarea('rank3') !!}<br>
                            自由記述欄
                            </section>
                            <div>
                                <p>{!! Form::textarea('content') !!}</p>
                            </div>
                            
                            
                            <div class="pull-right">
                                    {!! Form::submit('更新する', ['class' => 'btn btn-info btn-lg']) !!}
                            </div><br>
                        {!! Form::close() !!}
                        </div>
                </div>
                </section>
            </div>
            @else
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-offset-2 col-lg-8">
                    <div class="center jumbotron text-center"><p>他人の見たらダメだよ(/ω＼)</p></div>
                </div>
            @endif
        </div>
    </div>
@endsection