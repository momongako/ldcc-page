@extends('layouts.app')

@section('content')
<div id="show" class="cat_default wrapper">
	@include('partial.header')
	<main>
		<div class="cmn_bg_fixed"></div>
		<div class="cmn_title_page">
			<h2><span class="font_apple">My page</span>会員情報</h2>
		</div>
		<div class="cmn_section">
			<div class="cmn_container">
                @if(session()->has('message'))
                <div class="show_form_message cmn_form_message">
					<p>{{ session()->get('message') }}</p>
				</div>
                @endif
				<div class="cmn_form_2col cmn_form_confirm cmn_form">
					<dl>
						<dt>お名前</dt>
						<dd>{{ $user['name'] }}</dd>
						<dt>{{ __('Year of birth') }}</dt>
						<dd>{{ $user['year_of_birth'] }}年</dd>
						<dt>{{ __('Gender') }}</dt>
						<dd>
							@if ($user['gender'] == 2)
                            	{{ __('Fermale') }}
                            @else
                                {{ __('Male') }}
                            @endif
						</dd>
						<dt>{{ __('Province') }}</dt>
						<dd>{{ $user['province'] }}</dd>
						<dt>メールアドレス</dt>
						<dd>{{ $user['email'] }}</dd>
						<dt>パスワード</dt>
						<dd>************</dd>
						<dt>{{ __('Subscribe') }}</dt>
						<dd>
							@if ($user['subscribe_flag'] == 1)
								BeCente Gate
                            @else
								登録なし
							@endif
						</dd>
					</dl>
				</div>
				<p class="cmn_btn_white cmn_btn"><a href="{{ route('user.edit') }}">会員情報の変更</a></p>
				<p class="show_link_back"><a href="{{ route('mypage') }}">戻る</a></p>
			</div>
		</div>
	</main>
	@include('partial.footer')
</div>
@endsection