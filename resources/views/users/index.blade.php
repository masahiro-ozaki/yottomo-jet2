<style>
    .search2{
    font-family:'HuiFontP109';
    font-size: 30px;
    }
    
    .form-inline button{
        display: inline-block;
        font-family:'HuiFontP109', 'Glyphicons Halflings';
    }
    
    @font-face{
    font-family:'HuiFontP109';
    src:url('https://dl.dropboxusercontent.com/s/6snqvg654tirsyv/HuiFontP109.eot');
    src:url('https://dl.dropboxusercontent.com/s/6snqvg654tirsyv/HuiFontP109.eot?#iefix') format('embedded-opentype'),
    url('https://dl.dropboxusercontent.com/s/7pscemjdvt0wyiq/HuiFontP109.woff') format('woff'),
    url('https://dl.dropboxusercontent.com/s/0w9uuopxrns8ehi/HuiFontP109.ttf') format('truetype'),
    url('https://dl.dropboxusercontent.com/s/xnnsbxtz8o6d98i/HuiFontP109.svg#HuiFontP109') format('svg');
    }
    
    .panel2{
        background-color: rgba(255,255,255,0.5);
        padding: 30px;
        margin-bottom: 20px;
    }
    
    .panel2 p{
       font-size: 20px;
    }
    
    
</style>

@extends('layouts.app')

@section('content')
    <?php $user = \Auth::user(); ?>
    <div class="search2">
    @if (Auth::check())
        <!--検索機能-->
        <div class="panel2 col-xs-12 col-sm-12 col-md-12 col-lg-offset-1 col-lg-10">
            <p>興味ある同期を見つけてみよう！</p>
        <form class="search" role="search"　method="get" action="/search">
	    <div class="form-group col-xs-6 col-lg-9">
	    	<input name='keyword' type="text" class="form-control" placeholder="例.Jet(ニックネーム),1-C(ホームチーム),JETS(コーディングチーム名), etc...">
        </div>
             <button type="submit" class="btn btn-info">同期を検索！</button>
        </form>
        
        <div class="form-inline">
            <form class="ryoko" role="ryoko"　method="get" action="/ryoko">
                <button type='submit' name='ryoko' value='旅行' class="btn btn-info glyphicon glyphicon-tag" style="margin:10px; float:left;"> 旅行</button>
            </form>
            <form class="eiga" role="eiga"　method="get" action="/eiga">
                <button type='submit' name='eiga' value='映画' class="btn btn-info glyphicon glyphicon-tag" style="margin:10px; float:left;"> 映画</button>
            </form>
            <form class="soccer" role="soccer"　method="get" action="/soccer">
                <button type='submit' name='soccer' value='サッカー' class="btn btn-info glyphicon glyphicon-tag" style="margin:10px; float:left;"> サッカー</button>
            </form>
            <form class="insta" role="insta"　method="get" action="/insta">
                <button type='submit' name='insta' value='インスタ' class="btn btn-danger glyphicon glyphicon-tag" style="margin:10px; float:left;">インスタグラム</button>
            </form>
            <form class="yoko" role="yoko"　method="get" action="/yoko">
                <button type='submit' name='yoko' value='横浜' class="btn btn-success glyphicon glyphicon-tag" style="margin:10px; float:left;">横浜</button>
            </form>
        </div>
        </div>
    @endif
    </div>
    <br>

    @include('users.users', ['users' => $users])
@endsection

