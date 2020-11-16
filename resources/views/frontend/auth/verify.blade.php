@extends('frontend.layouts.app')

@section('title', __('Verify Your E-mail Address'))

@section('body')
    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <h2 class="text-3xl font-bold text-center text-gray-800 leading-9">
            @lang('Verify Your E-mail Address')
        </h2>
    </div>

    <div class="mt-8 mb-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="px-4 py-8 bg-white shadow sm:rounded-lg sm:px-10">
            <p>@lang('Before proceeding, please check your email for a verification link.')</p>
            <p class="mt-4">@lang('If you did not receive the email')</p>

            <x-forms.post :action="route('frontend.auth.verification.resend')" class="mt-4">
                <button type="submit" class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                    @lang('click here to request another')
                </button>
            </x-forms.post>
        </div>
    </div>
@endsection
