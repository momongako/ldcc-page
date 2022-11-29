@extends('layouts.admin')

@section('content')
<script src='https://www.google.com/recaptcha/api.js?hl=vi'></script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.auth.login') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @if ($errors ->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        {{--<div class="form-group row">--}}
                            {{--<div class="col-md-4">--}}
                            {{--</div>--}}
                            {{--<div class="col-md-6">--}}
                                {{--<div class="g-recaptcha" data-sitekey="{{\App\Lib\BHelp::getConfigSetting('GOOGLE_RECAPTCHA_KEY',env('GOOGLE_RECAPTCHA_KEY'))}}"></div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <br/>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </div>
                            <div class="col-md-4">
                                <a class="btn btn-default" href="{{ route('admin.password.request') }}">Forgot password</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function submitUserForm(event ) {
        if (grecaptcha.getResponse() == ""){
            event.preventDefault();
        } else {

        }
    }
</script>
@endsection
