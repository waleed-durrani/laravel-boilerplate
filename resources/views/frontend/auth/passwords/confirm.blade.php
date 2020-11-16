@extends('frontend.layouts.app')

@section('title', __('Please confirm your password before continuing.'))

@section('body')
    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <h2 class="text-3xl font-bold text-center text-gray-800 leading-9">
            @lang('Please confirm your password before continuing.')
        </h2>
    </div>

    <div class="mt-8 mb-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="px-4 py-8 bg-white shadow sm:rounded-lg sm:px-10">
            <x-forms.post :action="route('frontend.auth.password.confirm')">
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 leading-5">
                        @lang('Password')
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <input
                            type="password"
                            id="password"
                            name="password"
                            class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                            placeholder="{{ __('Password') }}"
                            value="{{ old('password') }}"
                            maxlength="100"
                            required
                            autofocus
                            autocomplete="current-password"
                        />
                    </div>
                </div>

                <div class="mt-6">
                    <span class="block w-full rounded-md shadow-sm">
                        <button type="submit" class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                            @lang('Confirm Password')
                        </button>
                    </span>
                </div>
            </x-forms.post>
        </div>
    </div>
@endsection

