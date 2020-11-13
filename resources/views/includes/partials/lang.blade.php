@foreach(collect(config('boilerplate.locale.languages'))->sortBy('name') as $code => $details)
    @if($code !== app()->getLocale())
        <x-utils.link
            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
            :href="route('locale.change', $code)"
            :text="__(getLocaleName($code))" />
    @endif
@endforeach
