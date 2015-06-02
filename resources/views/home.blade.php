@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
					You are logged in! See your profile here: <a href="{{url('profile/'.Auth::user()->name)}}">Click me!</a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection