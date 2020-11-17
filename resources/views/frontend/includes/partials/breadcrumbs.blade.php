@if (Breadcrumbs::has() && !Route::is('frontend.index'))
    <nav class="bg-gray-50 px-4 py-4 sm:px-6" id="breadcrumbs" aria-label="Breadcrumb">
        <ul class="flex text-gray-500 text-sm lg:text-base">
            @foreach (Breadcrumbs::current() as $crumb)
                @if ($crumb->url() && !$loop->last)
                    <li class="inline-flex items-center">
                        <x-utils.link :href="$crumb->url()" :text="$crumb->title()" class="hover:text-indigo-400" />

                        <svg class="h-5 w-auto text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"
                            ></path>
                        </svg>
                    </li>
                @else
                    <li class="text-indigo-400" aria-current="page">
                        {{ $crumb->title() }}
                    </li>
                @endif
            @endforeach
        </ul>
    </nav>
@endif
