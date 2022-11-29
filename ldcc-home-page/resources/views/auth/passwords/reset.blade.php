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
				<p class="cmn_section_lead">メールアドレスと新しいパスワードを入力してください。</p>

				 <form method="POST" action="{{ route('password.update') }}" id="reset-form">
                 @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
					<div class="register_form cmn_form_2col cmn_form">
						<dl>
							<dt>メールアドレス</dt>
							<dd>
								<input type="email" name="email" value="{{ $email ?? old('email') }}">
								@if ($errors->has('email'))
									<p class="cmn_form_error">{{ $errors->first('email') }}</p>
                                @endif
							</dd>
							<dt>新しいパスワード</dt>
							<dd>
								<input type="password" name="password">
								@if ($errors->has('password'))
									<p class="cmn_form_error">{{ $errors->first('password') }}</p>
                                @endif
							</dd>
							<dt>新しいパスワード（確認）</dt>
							<dd>
								<input type="password" name="password_confirmation">
								@if ($errors->has('password_confirmation'))
									<p class="cmn_form_error">{{ $errors->first('password_confirmation') }}</p>
                                @endif
							</dd>
						</dl>
					</div>
					<p class="cmn_btn_white cmn_btn"><a href="javascript:void(0)" onclick="$('#reset-form').submit();">送信</a></p>
				</form>
			</div>
		</div>
	</main>	
	@include('partial.footer')
</div>
@endsection
