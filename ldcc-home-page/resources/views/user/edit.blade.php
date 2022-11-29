@extends('layouts.app')

@section('content')
<div id="edit" class="cat_default wrapper">
	@include('partial.header')
	<main>
		<div class="cmn_bg_fixed"></div>
		<div class="cmn_title_page">
			<h2><span class="font_apple">My page</span>会員情報</h2>
		</div>

		<div class="cmn_section">
			<div class="cmn_container">
				<p class="cmn_form_caption"><em>＊</em>は、入力必須項目です。</p>
				<form method="POST" action="{{ route('user.update') }}" id="edit-form">
					@csrf
					<div class="register_form cmn_form_2col cmn_form">
						<dl>
							<dt>お名前<span class="cmn_form_require">＊</span></dt>
							<dd class="register_name">
								<input type="text" name="first_name" placeholder="姓" value="{{ old('first_name', $user['first_name']) }}">
								<input type="text" name="last_name" placeholder="名" value="{{ old('last_name', $user['last_name']) }}">
								@if ($errors->has('first_name'))
									<p class="cmn_form_error">{{ $errors->first('first_name') }}</p>
                                @endif
                                @if ($errors->has('last_name'))
									<p class="cmn_form_error">{{ $errors->first('last_name') }}</p>
                                @endif
							</dd>
							<dt>{{ __('Year of birth') }}<span class="cmn_form_require">＊</span></dt>
							<dd>
								<div class="cmn_form_select_wrap">
									<select class="cmn_form_select" name="year_of_birth">
										<option value="">選択してください</option>
										@foreach ($years as $key => $value)
                              			<option value="{{ $key }}" @if (old('year_of_birth', $user['year_of_birth']) == $key) selected @endif>{{ $value }}</option>
                          				@endforeach
									</select>
								</div>
								@if ($errors->has('year_of_birth'))
									<p class="cmn_form_error">{{ $errors->first('year_of_birth') }}</p>
                                @endif
							</dd>
							<dt>性別<span class="cmn_form_require">＊</span></dt>
							<dd class="cmn_form_radio">
								<label>
									<input type="radio" name="gender" value="1" @if (old('gender', $user['gender']) == 1) checked @endif><span>{{ __('Male') }}</span>
								</label>
								<label>
									<input type="radio" name="gender" value="2" @if (old('gender', $user['gender']) == 2) checked @endif><span>{{ __('Fermale') }}</span>
								</label>
								@if ($errors->has('gender'))
									<p class="cmn_form_error">{{ $errors->first('gender') }}</p>
                                @endif
							</dd>
							<dt>{{ __('Province') }}<span class="cmn_form_require">＊</span></dt>
							<dd>
								<div class="cmn_form_select_wrap">
									<select class="cmn_form_select" name="province">
										<option value="">選択してください</option>
										@foreach ($provinces as $value)
                              			<option value="{{ $value }}" @if (old('province', $user['province']) == $value) selected @endif>{{ $value }}</option>
                          				@endforeach
									</select>
								</div>
								@if ($errors->has('province'))
									<p class="cmn_form_error">{{ $errors->first('province') }}</p>
                                @endif
							</dd>
							<dt>{{ __('E-Mail Address') }}</dt>
							<dd class="cmn_form_email">
								{{ $user['email'] }}
							</dd>
							<dt>{{ __('Password') }}<span class="cmn_form_require">＊</span></dt>
							<dd>
								<input type="password" name="password" id="password" style="width: 100%;max-width: 100%" placeholder="*************">
								@if ($errors->has('password'))
									<p class="cmn_form_error">{{ $errors->first('password') }}</p>
                                @endif
								<p class="cmn_form_caution">※半角英数字6〜13文字</p>
								<label class="cmn_form_check">
									<input type="checkbox" onclick="tooglePassword()"><span>パスワードを表示する</span>
								</label>
							</dd>
							<dt>メールマガジン登録</dt>
							<dd class="register_mm">
								<label class="cmn_form_check">
									<input type="checkbox" name="subscribe_flag" value="1" @if (old('subscribe_flag', $user['subscribe_flag']) == 1) checked @endif><span>BeCente Gate</span>
								</label>
							</dd>
						</dl>
					</div>
					<p class="cmn_btn_white cmn_btn">
						<a href="javascript:void(0)" onclick="$('#edit-form').submit();">変更を保存する</a>
					</p>
				</form>
			</div>
		</div>
	</main>
    <script type="text/javascript">
    	function tooglePassword() {
    	  var x = document.getElementById("password");
    	  if (x.type === "password") {
    	    x.type = "text";
    	  } else {
    	    x.type = "password";
    	  }
    	}
    </script>
	@include('partial.footer')
</div>
@endsection