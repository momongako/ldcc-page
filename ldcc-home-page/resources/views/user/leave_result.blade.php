@extends('layouts.app')

@section('content')
<div id="show" class="cat_default wrapper">
	@include('partial.header')
	<main>
		<div class="cmn_bg_fixed"></div>
		<div class="cmn_title_page">
			<h2><span class="font_apple">My page</span>退会</h2>
		</div>
		<div class="cmn_section">
			<div class="cmn_container">
				<div class="cmn_form_message">
					<p>{{ session()->get('message') }}</p>
				</div>
				<p class="show_link_back"><a href="{{ route('mypage') }}">戻る</a></p>
			</div>
		</div>
	</main>
	@include('partial.footer')
</div>
@endsection