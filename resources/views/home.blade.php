@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
					You are logged in! See your profile here: <a href="{{url('profile/'.Auth::user()->name)}}">Click me!</a>
					<br><a href="{{url('route/69/sexy')}}">Route test with {ID} and {name} params</a>
					<br><a href="{{url('age/100')}}">Age Middleware test invalid</a>
					<br><a href="{{url('age/400')}}">Age Middleware test valid</a>
				</div>

				<?php
				 $users = \Illuminate\Support\Facades\DB::table('users')->paginate(2);
				 $users->setPath('home');
				?>

				<div class="container">
                    @foreach ($users as $user)
                        {{ $user->name }}
                    @endforeach
                </div>

                {!! $users->render() !!}
			</div>
		</div>
	</div>
</div>
@endsection
