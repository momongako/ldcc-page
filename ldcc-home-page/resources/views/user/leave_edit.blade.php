@extends('layouts.app')

@section('content')
<div id="edit" class="cat_default wrapper">
	@include('partial.header')
	<main>
		<div class="cmn_bg_fixed"></div>
		<div class="cmn_title_page">
			<h2><span class="font_apple">My page</span>退会</h2>
		</div>

		<div class="cmn_section">
			<div class="cmn_container">
				<form method="POST" action="{{ route('user.leave_update') }}" id="leave-edit-form">
					@csrf
					<input type="hidden" id="Status" name="status" value="2">
					<div class="cmn_form_message">
						<p>退会を希望する場合は下のボタンをクリックしてください。</p>
					</div>
					<p class="cmn_btn_white cmn_btn">
						<a href="javascript:void(0)" onclick="$('#leave-edit-form').submit();" id="sumbit">退会する</a>
					</p>
				</form>
			</div>
		</div>
	</main>
    <script>
    	$(function(){
    		$('#Status').change(function(){

			});
		})
    </script>
	@include('partial.footer')
</div>
@endsection