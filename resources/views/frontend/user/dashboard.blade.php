@extends('frontend.layouts.app')

@section('title', __('Dashboard'))

@section('body')
    <div class="max-w-screen-lg mx-auto bg-white shadow lg:mt-8 lg:rounded-lg">
        <div class="bg-gray-50 border-b border-gray-200 px-4 py-5 sm:px-6">
            @lang('Dashboard')
        </div>
        <div class="px-4 py-5 sm:p-6">
            @lang('You are logged in!')
        </div>
    </div>
@endsection
