<div>
    <div id="auth">

        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <div class="auth-logo">
                        <a href="{{ url('/') }}"><img src="{{ asset('assets/img/logo.png') }}" alt="{{ __('app.uf0') }}"></a>
                    </div>
                    <h1 class="auth-title">{{ __('auth.login') }}</h1>
                    <p class="auth-subtitle mb-5">{{ __('auth.login_message') }}</p>
                    @if(session()->has('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>{{ session('error') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <form wire:submit="login">
                        <div class="form-group position-relative has-icon-left mb-4 @if ($errors->has('email')) is-invalid @endif">
                            <input type="text" wire:model="email" class="form-control form-control-xl" placeholder="{{ __('auth.email_placeholder') }}">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                            @if ($errors->has('email'))
                                <div class="invalid-feedback d-block">{{ $errors->first('email') }}</div>
                            @endif
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4 @if ($errors->has('password')) is-invalid @endif">
                            <input type="password" wire:model="password" class="form-control form-control-xl" placeholder="{{ __('auth.password_placeholder') }}">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                            @if ($errors->has('password'))
                                <div class="invalid-feedback d-block">{{ $errors->first('password') }}</div>
                            @endif
                        </div>
                        <div class="form-check form-check-lg d-flex align-items-end">
                            <input class="form-check-input me-2" type="checkbox" wire:model="remember" id="flexCheckDefault">
                            <label class="form-check-label text-gray-600" for="flexCheckDefault">
                                {{ __('auth.remember_me') }}
                            </label>
                        </div>
                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5" type="submit" wire:loading.remove>
                            {{ __('auth.login_button') }}
                        </button>
                        <button class="btn btn-light btn-block btn-lg shadow-lg mt-5 opacity-50" type="button" wire:loading wire:target="login">
                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                            {{ __('auth.loading') }}
                        </button>
                    </form>
                    <div class="text-center mt-5 text-lg fs-4">
                        <p class="text-gray-600">{{ __('auth.do_not_have_account') }} <a href="{{ route('register') }}" class="font-bold">{{ __('auth.create_account') }}</a>.</p>
                        <p><a class="font-bold" href="{{ route('forget-password') }}">{{ __('auth.forget_password') }}</a>.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">

                </div>
            </div>
        </div>

    </div>
</div>
