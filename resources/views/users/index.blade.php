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
    
</style>

@extends('layouts.app')

@section('content')
    <?php $user = \Auth::user(); ?>
    <div class="search2">
    @if (Auth::check())
            <!--検索機能-->
        <form class="search" role="search"　method="get" action="/search">
	    <div class="form-group col-xs-8">
	    	<input name='keyword' type="text" class="form-control" placeholder="例.Jet（ニックネーム）,1-C（ホームチーム）,JETS（コーディングチーム名）, etc...">
        </div>
             <button type="submit" class="btn btn-info">同期を検索しよう！</button>
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
            <br>
        </div> 
    @endif
    </div>
    <br>

    @include('users.users', ['users' => $users])
@endsection