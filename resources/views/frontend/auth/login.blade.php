@extends('frontend.layouts.app')

@section('title', __('Login'))

@section('body')
    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <h2 class="text-3xl font-bold text-center text-gray-800 leading-9">
            @lang('Login')
        </h2>

        @if (config('boilerplate.access.user.registration'))
            <p class="mt-2 text-sm text-center text-gray-600 leading-5 max-w">
                @lang('Or')

                <a href="{{ route('frontend.auth.register') }}" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                    @lang('register a new account')
                </a>
            </p>
        @endif
    </div>

    <div class="mt-8 mb-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="px-4 py-8 bg-white shadow sm:rounded-lg sm:px-10">
            <x-forms.post :action="route('frontend.auth.login')">
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 leading-5">
                        @lang('E-mail Address')
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <input
                            type="email"
                            id="email"
                            name="email"
                            class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                            placeholder="{{ __('E-mail Address') }}"
                            value="{{ old('email') }}"
                            maxlength="255"
                            required
                            autofocus
                            autocomplete="email"
                         />
                    </div>
                </div>

                <div class="mt-6">
                    <label for="password" class="block text-sm font-medium text-gray-700 leading-5">
                        @lang('Password')
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <input
                            type="password"
                            name="password"
                            id="password"
                            class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                            placeholder="{{ __('Password') }}"
                            maxlength="100"
                            required
                            autocomplete="current-password"
                        />
                    </div>
                </div>

                <div class="flex items-center justify-between mt-6">
                    <div class="flex items-center">
                        <input
                            type="checkbox"
                            name="remember"
                            id="remember"
                            class="form-checkbox w-4 h-4 text-indigo-600 transition duration-150 ease-in-out"
                            {{ old('remember') ? 'checked' : '' }}
                        />

                        <label for="remember" class="block ml-2 text-sm text-gray-900 leading-5">
                            @lang('Remember Me')
                        </label>
                    </div>

                    <div class="text-sm leading-5">
                        <x-utils.link
                            :href="route('frontend.auth.password.request')"
                            class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150"
                            :text="__('Forgot Your Password?')" />
                    </div>
                </div>

                <div class="mt-6">
                    @if(config('boilerplate.access.captcha.login'))
                        @captcha
                        <input type="hidden" name="captcha_status" value="true" />
                    @endif

                    <span class="block w-full rounded-md shadow-sm">
                        <button type="submit" class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                            @lang('Login')
                        </button>
                    </span>

                    @include('frontend.auth.includes.social')
                </div>
            </x-forms.post>
        </div>
    </div>
@endsection
