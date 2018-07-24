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