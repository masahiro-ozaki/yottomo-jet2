<style>
    body{
        background: linear-gradient(#F5A9D0, #81F7F3);
    }
    
    .panel{
        background-color: rgba(255,255,255,0.5);
    }
    
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
    
    
    .scroll{
        overflow-y:scroll;
        margin-top: 15px;
    }
    
    .panel-heading{
        font-family:'HuiFontP109';
        font-size: 20px;
    }
    
    .panel-body{
        font-family:'HuiFontP109';
        font-size: 15px;
    }
    
    .panel-title{
        font-family:'HuiFontP109';
        font-size: 50px;
    }
</style>


@if (count($users) > 0)
<ul class="media-list">
    
@foreach ($users as $user)
        <div class="users">
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="panel panel default">
                        <li class="media">
                            <div class="panel-heading">
                                <div class="col-xs-4"><img class="media-object img-rounded" src="{{ Gravatar::src($user->name, 50) }}" alt=""></div>
                                <div class="col-xs-8"><b>{!! link_to_route('users.show', $user->name, ['id' => $user->id]) !!}</b></div>
                            </div>
                            <div class="media-body">
                                <div class="panel-body">
                                    <div>
                                        <p class="users-title">
                                            <span class="glyphicon glyphicon-home"></span> {{ $user->hometeam }}
                                            <br>
                                            <span class="glyphicon glyphicon-cog"></span> {{ $user->codingteam }}
                                        </p>
                                    </div>
                                    <div>
                                        @include('user_friend.friend_button', ['user' => $user])
                                        
                                    </div>
                                    <p>
                                        <p>私の趣味は、[{{ $user->hobby }}]で、チャームポイントは[{{ $user->charmpoint }}]なんだ。</p>
                                    </p>
                                </div>
                            </div>
                        </li>
                    </div>
                </div>
        </div>
@endforeach
    
</ul>
{!! $users->render() !!}
@endif