@extends('layouts.base')

@section('content')
    @include('includes.partials.read-only')
    @include('includes.partials.logged-in-as')
    @include('includes.partials.announcements')
    @include('frontend.includes.nav')
    @include('includes.partials.messages')

    <main>
        @yield('body')
    </main>
@endsection
