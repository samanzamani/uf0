<div>
    <div id="auth">

        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <div class="auth-logo">
                        <a href="{{ url('/') }}"><img src="{{ asset('assets/img/logo.png') }}" alt="{{ __('app.uf0') }}"></a>
                    </div>
                    <h1 class="auth-title">{{ __('auth.register') }}</h1>
                    <p class="auth-subtitle mb-5">{{ __('auth.register_message') }}</p>
                    <br>
                    <div class="alert alert-info">
                        Right now, registration is disabled. Please contact the administrator to enable it.
                    </div>
                    <br>
                    <div class="text-center mt-5 text-lg fs-4">
                        <p class='text-gray-600'>{{ __('auth.have_account') }} <a href="{{ route('login') }}" class="font-bold">{{ __('auth.login') }}</a>.</p>
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
