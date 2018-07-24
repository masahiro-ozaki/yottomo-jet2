<style>
    .search2{
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
    
</style>

@extends('layouts.app')

@section('content')
    <?php $user = \Auth::user(); ?>
    <div class="search2">
    @if (Auth::check())
            <!--検索機能-->
        <form class="search" role="search"　method="get" action="/search">
	    <div class="form-group col-xs-8">
	    	<input name='keyword' type="text" class="form-control" placeholder="検索キーワード">
        </div>
             <button type="submit" class="btn btn-default">同期を検索</button>
         </form>
    @endif
    </div>
    <br>

    @include('users.users', ['users' => $users])
@endsection