@extends('frontend.layouts.app')

@section('title', __('My Account'))

@section('body')
    <div class="max-w-screen-lg mx-auto bg-white shadow lg:mt-8 lg:rounded-lg">
        <div class="bg-gray-50 border-b border-gray-200 px-4 py-5 sm:px-6">
            @lang('My Account')
        </div>
        <div class="px-4 py-5 sm:p-6">
            <div x-data="{ tab: 'profile' }">
                <div class="flex -mx-px">
                    <button
                        x-on:click="tab = 'profile'"
                        x-bind:class="{ 'bg-gray-100 border-white': tab === 'profile' }"
                        class="bg-transparent hover:bg-gray-200 text-gray-700 text-sm md:text-base font-semibold rounded-t focus:outline-none mx-px py-px md:py-2 px-3 md:px-4"
                        type="button"
                    >
                        @lang('My Profile')
                    </button>

                    <button
                        x-on:click="tab = 'information'"
                        x-bind:class="{ 'bg-gray-100 border-white': tab === 'information' }"
                        class="bg-transparent hover:bg-gray-200 text-gray-700 font-semibold rounded-t focus:outline-none mx-px py-2 px-4"
                        type="button"
                    >
                        @lang('Edit Information')
                    </button>

                    @if (! $logged_in_user->isSocial())
                        <button
                            x-on:click="tab = 'password'"
                            x-bind:class="{ 'bg-gray-100 border-white': tab === 'password' }"
                            class="bg-transparent hover:bg-gray-200 text-gray-700 text-sm md:text-base font-semibold rounded-t focus:outline-none mx-px py-px md:py-2 px-3 md:px-4"
                            type="button"
                        >
                            @lang('Password')
                        </button>
                    @endif

                    <button
                        x-on:click="tab = 'two-factor-authentication'"
                        x-bind:class="{ 'bg-gray-100 border-white': tab === 'two-factor-authentication' }"
                        class="bg-transparent hover:bg-gray-200 text-gray-700 text-sm md:text-base font-semibold rounded-t focus:outline-none mx-px py-px md:py-2 px-3 md:px-4"
                        type="button"
                    >
                        @lang('Two Factor Authentication')
                    </button>
                </div>
                <ul class="bg-gray-100 text-sm rounded-b p-4">
                    <li x-show="tab === 'profile'">
                        @include('frontend.user.account.tabs.profile')
                    </li>

                    <li x-show="tab === 'information'">
                        @include('frontend.user.account.tabs.information')
                    </li>

                    @if (! $logged_in_user->isSocial())
                        <li x-show="tab === 'password'">
                            @include('frontend.user.account.tabs.password')
                        </li>
                    @endif

                    <li x-show="tab === 'two-factor-authentication'">
                        @include('frontend.user.account.tabs.two-factor-authentication')
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
