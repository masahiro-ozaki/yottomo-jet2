<style>
/*.navbar{*/
/*    background-image: url("../../yottomo-jet-image/profilebackground.png");*/
/*}*/

    @font-face{
    font-family:'HuiFontP109';
    src:url('https://dl.dropboxusercontent.com/s/6snqvg654tirsyv/HuiFontP109.eot');
    src:url('https://dl.dropboxusercontent.com/s/6snqvg654tirsyv/HuiFontP109.eot?#iefix') format('embedded-opentype'),
    url('https://dl.dropboxusercontent.com/s/7pscemjdvt0wyiq/HuiFontP109.woff') format('woff'),
    url('https://dl.dropboxusercontent.com/s/0w9uuopxrns8ehi/HuiFontP109.ttf') format('truetype'),
    url('https://dl.dropboxusercontent.com/s/xnnsbxtz8o6d98i/HuiFontP109.svg#HuiFontP109') format('svg');
    }
</style>

<header>
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container">
            <!--<section class="navbar">-->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><span style="font : normal 900 20pt 'HuiFontP109'">ときめきフレンズ</span></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::check())
                        <li>{!! link_to_route('users.index', '同期一覧') !!}</li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <span class="gravatar">
                                    <img src="{{ Gravatar::src(Auth::user()->name, 20) . '&d=mm' }}" alt="" class="img-circle">
                                </span>
                                {{ Auth::user()->name }} 
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li>{!! link_to_route('users.show', ' MyProfile', ['id' => Auth::id()], ['class' => 'glyphicon glyphicon-user']) !!}</li>
                                <li role="separator" class="divider"></li>
                                <li>{!! link_to_route('logout.get', ' Logout', null, ['class' => 'glyphicon glyphicon-log-out']) !!}</li>
                            </ul>
                        </li>
                    @else
                        <li>{!! link_to_route('signup.get', ' Signup', null, ['class' => 'glyphicon glyphicon-home']) !!}</li>
                        <li>{!! link_to_route('login', ' Login', null, ['class' => 'glyphicon glyphicon-log-in']) !!}</li>
                    @endif
                </ul>
            </div>
            <!--</section>-->
        </div>
    </nav>
</header>