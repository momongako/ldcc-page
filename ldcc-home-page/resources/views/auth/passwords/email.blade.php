@php
MetaTag::set('title', 'パスワードをリセット | BecenteGate 100年自分の歯を守るオーラルケア');
MetaTag::set('description', '');
@endphp
@extends('layouts.app')

@section('content')

<div id="reset" class="cat_default wrapper">
	@include('partial.header')
	<main>
		<div class="cmn_bg_fixed"></div>
		<div class="cmn_title_page">
			<h2><span class="font_apple">Password</span>パスワードをリセット</h2>
		</div>
		<div class="cmn_section">
			<div class="cmn_container">
                @if (session('status'))
				<div class="cmn_form_message">
					<p>ご入力いただいたユーザーにメールを送信しました。<br>メールの内容にしたがって、パスワードを設定してください。</p>
				</div>
					<p class="show_link_back"><a href="{{ route('login') }}?back=1">戻る</a></p>
                @else
				<p class="cmn_section_lead">ご登録のメールアドレスを入力してください。</p>
				<form method="POST" action="{{ route('password.email') }}" id="reset-form">
                    @csrf
					<div class="register_form cmn_form_2col cmn_form">
						<dl>
							<dt>メールアドレス</dt>
							<dd>
								<input type="email" name="email" value="{{ old('email') }}">
								@if ($errors->has('email'))
									<p class="cmn_form_error">{{ $errors->first('email') }}</p>
                                @endif
							</dd>
						</dl>
					</div>
					<p class="cmn_btn_white cmn_btn"><a href="javascript:void(0)" onclick="$('#reset-form').submit();">送信</a></p>
				</form>
				@endif
			</div>
		</div>
	</main>
	@include('partial.footer')

</div>
@endsection
