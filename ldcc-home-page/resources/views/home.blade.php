@extends('layouts.app')

@section('content')
	<div id="mypage" class="cat_default wrapper">
	@include('partial.header')
	<main>
		<div class="container">
			<div class="title m-b-md">
				LDCC Home page
			</div>
		</div>
	</main>
	@include('partial.footer')
</div>
@endsection
