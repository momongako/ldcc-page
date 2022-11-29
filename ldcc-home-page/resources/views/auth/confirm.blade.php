@php
MetaTag::set('title', '会員情報 | BecenteGate 100年自分の歯を守るオーラルケア');
MetaTag::set('description', '');
@endphp
@extends('layouts.app')

@section('content')

<div id="confirm" class="cat_default wrapper">
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
				<form method="POST" action="{{ route('register.confirm') }}" id="confirm-form">
                @csrf
    				<div class="cmn_form_2col cmn_form_confirm cmn_form">
    					<dl>
    						<dt>お名前</dt>
    						<dd>{{ $user['first_name'] }} {{ $user['last_name'] }}</dd>
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
    						<dt>{{ __('E-Mail Address') }}</dt>
    						<dd>{{ $user['email'] }}</dd>
    						<dt>{{ __('Password') }}</dt>
    						<dd>************</dd>
    						<dt>{{ __('Subscribe') }}</dt>
    						<dd>
    							@if (isset($user['subscribe_flag']) && $user['subscribe_flag'] == 1)
									Pronexus
                                @else
									Pronexus
    							@endif
    						</dd>
    					</dl>
    				</div>
						<div class="confirm_btn_wrap">
								<button type="submit" name="action" class="cmn_btn_white cmn_btn" value="back"><span>戻る</span></button>
								<button type="submit" name="action" class="cmn_btn_white cmn_btn" value="sent"><span>会員情報の登録</span></button>
						</div>
				</form>
			</div>
		</div>
	</main>
	@include('partial.footer')
</div>
@endsection
