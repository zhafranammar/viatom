{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
         <div class="flex items-center justify-center mt-4">
                <a href="/auth/google" class="google-btn">
                    <div class="google-icon-wrapper">
                        <img
                            class="google-icon"
                            src="https://upload.wikimedia.org/wikipedia/commons/5/53/Google_%22G%22_Logo.svg"
                        />
                    </div>
                    <p class="btn-text">Sign In with Google</p>
                </a>
            </div>
    </form>
</x-guest-layout> --}}

<div style="width: 100%; height: 100%; position: relative; background: white">
    <div style="width: 171px; left: 104px; top: 48px; position: absolute">
        <img style="width: 49px; height: 48px; left: 0px; top: 0px; position: absolute" src="https://via.placeholder.com/49x48" />
        <img style="width: 114px; height: 43px; left: 57px; top: 3px; position: absolute" src="https://via.placeholder.com/114x43" />
    </div>
    <div style="width: 728px; height: 796.22px; left: 104px; top: 144px; position: absolute">
        <div style="width: 728px; height: 796.22px; left: 0px; top: 0px; position: absolute; background: #343530; border-top-left-radius: 50px; border-top-right-radius: 50px"></div>
        <img style="width: 592.42px; height: 592.42px; left: 63.91px; top: 101.90px; position: absolute" src="https://via.placeholder.com/592x592" />
    </div>
    <form method="POST" action="{{ route('login') }}">
        @csrf
            <div class="flex items-center justify-center mt-4">
                <a href="/auth/google" class="google-btn">
                    <div class="google-icon-wrapper">
                        <img
                            class="google-icon"
                            src="https://upload.wikimedia.org/wikipedia/commons/5/53/Google_%22G%22_Logo.svg"
                        />
                    </div>
                    <p class="btn-text">Sign In with Google</p>
                </a>
            </div>
        <div style="left: 966px; top: 294px; position: absolute; color: black; font-size: 32px; font-family: Plus Jakarta Sans; font-weight: 700; line-height: 32px; word-wrap: break-word">Login to your account</div>
        <div style="left: 985px; top: 352px; position: absolute; text-align: center; color: black; font-size: 16px; font-family: Plus Jakarta Sans; font-weight: 400; line-height: 20px; word-wrap: break-word">Mulai petualangan atommu sekarang!</div>
        <div style="width: 421px; height: 48px; left: 915px; top: 407px; position: absolute; border-radius: 8px; border: 1px solid rgba(42.50, 42.50, 42.50, 0.30)"></div>
        <div style="left: 1077.31px; top: 421px; position: absolute; text-align: center; color: black; font-size: 16px; font-family: Plus Jakarta Sans; font-weight: 700; line-height: 20px; word-wrap: break-word">Login with Google</div>
        <div style="width: 14.35px; height: 14.05px; left: 1038.95px; top: 428.22px; position: absolute; background: #4285F4"></div>
        <div style="width: 23.25px; height: 11.99px; left: 1025.59px; top: 433.90px; position: absolute; background: #34A853"></div>
        <div style="width: 6.44px; height: 13.49px; left: 1024px; top: 424.17px; position: absolute; background: #FBBC05"></div>
        <div style="width: 8.92px; height: 14.05px; left: 1040.25px; top: 424.17px; position: absolute; background: #EA4335"></div>
        <div style="width: 14.35px; height: 14.05px; left: 1056.50px; top: 424.17px; position: absolute; background: #4285F4"></div>
        <input type="email" name="email" placeholder="Email address" style="width: 385px; height: 32px; left: 926px; top: 411px; position: absolute; font-size: 16px; font-family: Plus Jakarta Sans; font-weight: 400; line-height: 20px; padding: 4px 8px; border-radius: 8px; border: 1px solid rgba(42.50, 42.50, 42.50, 0.30)" />
        <input type="password" name="password" placeholder="Password" style="width: 385px; height: 32px; left: 926px; top: 466px; position: absolute; font-size: 16px; font-family: Plus Jakarta Sans; font-weight: 400; line-height: 20px; padding: 4px 8px; border-radius: 8px; border: 1px solid rgba(42.50, 42.50, 42.50, 0.30)" />
        <button type="submit" style="width: 421px; height: 48px; left: 915px; top: 521px; position: absolute; background: #2A2A2A; color: white; font-size: 16px; font-family: Plus Jakarta Sans; font-weight: 700; line-height: 20px; border-radius: 8px; border: none; cursor: pointer">Login</button>
        <div style="left: 915px; top: 590px; position: absolute; color: black; font-size: 14px; font-family: Plus Jakarta Sans; font-weight: 400; line-height: 20px; word-wrap: break-word">Don't have an account? <a href="#" style="color: #2A2A2A; text-decoration: none; font-weight: 700">Sign up</a></div>
        <div style="left: 915px; top: 630px; position: absolute; color: black; font-size: 14px; font-family: Plus Jakarta Sans; font-weight: 400; line-height: 20px; word-wrap: break-word">Forgot your password? <a href="#" style="color: #2A2A2A; text-decoration: none; font-weight: 700">Reset password</a></div>
    </form>
</div>



