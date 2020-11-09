@extends('layouts.base')

@section('body')
    @include('includes.partials.read-only')
    @include('includes.partials.logged-in-as')
    @include('includes.partials.announcements')

    <div>
        @include('frontend.includes.nav')
        @include('includes.partials.messages')

        <main>
            @yield('content')
        </main>
    </div><!--app-->
@endsection
