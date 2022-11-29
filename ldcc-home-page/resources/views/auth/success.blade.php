@php
MetaTag::set('title', '会員仮登録 | BecenteGate 100年自分の歯を守るオーラルケア');
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
					<p>
						仮登録が完了しました。<br>
						入力されたメールアドレス宛てに確認のメールが届きますので、メールの内容に従って登録手続きを完了してください。<br>
						仮登録から72時間を経過しますとお手続きをはじめからやり直す必要がございます。
					</p>
				</div>
				<p class="cmn_btn_white cmn_btn"><a href="{{ route('home') }}">TOPページへ</a></p>
			</div>
		</div>
	</main>
	@include('partial.footer')
</div>
@endsection
