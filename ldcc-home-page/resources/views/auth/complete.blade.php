@php
MetaTag::set('title', '会員登録完了 | BecenteGate 100年自分の歯を守るオーラルケア');
MetaTag::set('description', '');
@endphp
@extends('layouts.app')

@section('content')
<div id="success" class="cat_default wrapper">
	@include('partial.header')
	<main>
		<div class="cmn_bg_fixed"></div>
		<div class="cmn_title_page">
			<h2>
                <span class="font_apple">Register</span>新規会員の登録
            </h2>
		</div>
		<div class="cmn_section">
			<div class="cmn_container">
				<div class="cmn_form_message">
					<p>会員登録が完了しました。</p>
				</div>
				<p class="cmn_btn_white cmn_btn"><a href="{{ route('login') }}">{{ __('Login') }}</a></p>
			</div>
		</div>
	</main>
	@include('partial.footer')
</div>
@endsection