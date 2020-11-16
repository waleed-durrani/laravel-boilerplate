@extends('layouts.base')

@section('content')
    @include('includes.partials.read-only')
    @include('includes.partials.logged-in-as')
    @include('includes.partials.announcements')
    @include('frontend.includes.nav')

    <div class="container mx-auto sm:mt-5">
        @include('includes.partials.messages')
    </div>

    <main>
        @yield('body')
    </main>
@endsection
