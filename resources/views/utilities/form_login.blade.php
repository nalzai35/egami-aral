<section>
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title h3">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="sh6 text-secondary font-sm">Connect with a social network</p>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <a class="btn btn-facebook btn-block btn-social btn-lg">
                                <span class="fa fa-facebook"></span> Facebook
                            </a>
                        </div>
                        <div class="col-md-6 mb-3">
                            <a class="btn btn-google btn-block btn-social btn-lg">
                                <span class="fa fa-google"></span> Google
                            </a>
                        </div>
                    </div>
                    <div class="border-bottom py-1 mb-3"></div>
                    <p class="sh6 text-secondary font-sm">Log in with your email address</p>
                    <div class="row">
                        <div class="col-12">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="{{ __('Enter email') }}" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="{{ __('Password') }}" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <b-form-checkbox name="remember" {{ old('remember') ? 'checked' : '' }}>{{ __('Remember Me') }}</b-form-checkbox>
                                </div>

                                <div class="d-flex justify-content-between ">
                                    <button class="btn btn-primary" type="submit">Login</button>
                                    <a class="text-secondary align-self-center" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
