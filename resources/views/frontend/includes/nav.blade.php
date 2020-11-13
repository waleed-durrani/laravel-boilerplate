<header class="relative z-10 shadow bg-white flex items-center justify-between px-4 py-4 sm:px-6">
    <div class="md:flex items-center">
        <x-utils.link
            :href="route('frontend.index')"
            :text="appName()"
            class="block" />
    </div>

    <div class="flex text-sm">
        @if(config('boilerplate.locale.status') && count(config('boilerplate.locale.languages')) > 1)
            <div x-data="{open:false}" @keydown.escape="open = false" @click.away="open = false" class="relative">
                <div>
                    <button @click="open = !open" class="flex items-center font-medium text-gray-500 hover:text-gray-600 focus:outline-none">
                        {{ __(getLocaleName(app()->getLocale())) }}

                        <svg class="w-3 h-3 ml-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                </div>

                <div x-show="open"
                     x-transition:enter="transition ease-out duration-100"
                     x-transition:enter-start="transform opacity-0 scale-95"
                     x-transition:enter-end="transform opacity-100 scale-100"
                     x-transition:leave="transition ease-in duration-75"
                     x-transition:leave-start="transform opacity-100 scale-100"
                     x-transition:leave-end="transform opacity-0 scale-95"
                     class="origin-top-right absolute right-0 mt-2 w-56 min-w-max rounded-md shadow-lg"
                >
                    <div class="rounded-md bg-white shadow-x h-56 overflow-scroll">
                        @include('includes.partials.lang')
                    </div>
                </div>
            </div>
        @endif

        @guest
            <x-utils.link
                :href="route('frontend.auth.login')"
                :active="activeClass(Route::is('frontend.auth.login'), 'text-gray-900')"
                :text="__('Login')"
                class="ml-8 font-medium text-gray-500 hover:text-gray-900" />

            @if (config('boilerplate.access.user.registration'))
                <x-utils.link
                    :href="route('frontend.auth.register')"
                    :active="activeClass(Route::is('frontend.auth.register'), 'text-gray-900')"
                    :text="__('Register')"
                    class="ml-8 font-medium text-gray-500 hover:text-gray-900" />
            @endif
        @else
            <div x-data="{open:false}" @keydown.escape="open = false" @click.away="open = false" class="ml-8 relative">
                <div>
                    <button @click="open = !open" class="flex items-center text-gray-400 overflow-hidden hover:text-gray-600 focus:outline-none">
                        <img class="h-6 w-6 rounded-full border-2 border-gray-200 hover:border-gray-300" src="{{ $logged_in_user->avatar }}" />
                    </button>
                </div>

                <div x-show="open"
                     x-transition:enter="transition ease-out duration-100"
                     x-transition:enter-start="transform opacity-0 scale-95"
                     x-transition:enter-end="transform opacity-100 scale-100"
                     x-transition:leave="transition ease-in duration-75"
                     x-transition:leave-start="transform opacity-100 scale-100"
                     x-transition:leave-end="transform opacity-0 scale-95"
                     class="origin-top-right absolute right-0 mt-2 w-56 min-w-max rounded-md shadow-lg"
                >
                    <div class="rounded-md bg-white shadow-xs">
                        <div class="px-4 py-3">
                            <p class="font-medium text-gray-900">{{ $logged_in_user->name }}</p>
                        </div>

                        @if ($logged_in_user->isAdmin())
                            <x-utils.link
                                :href="route('admin.dashboard')"
                                :text="__('Administration')"
                                class="block px-4 py-2 text-sm text-gray-700 bg-red-50 text-red-700 hover:bg-red-100" />
                        @endif

                        @if ($logged_in_user->isUser())
                            <x-utils.link
                                :href="route('frontend.user.dashboard')"
                                :active="activeClass(Route::is('frontend.user.dashboard'), 'text-gray-900')"
                                :text="__('Dashboard')"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"/>
                        @endif

                        <x-utils.link
                            :href="route('frontend.user.account')"
                            :active="activeClass(Route::is('frontend.user.account'), 'text-gray-900')"
                            :text="__('My Account')"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" />

                        <x-utils.link
                            :text="__('Logout')"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 border-t-2 border-gray-100"
                            onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            <x-slot name="text">
                                @lang('Logout')
                                <x-forms.post :action="route('frontend.auth.logout')" id="logout-form" class="hidden" />
                            </x-slot>
                        </x-utils.link>
                    </div>
                </div>
            </div>
        @endguest
    </div>
</header>

@if (config('boilerplate.frontend_breadcrumbs'))
    @include('frontend.includes.partials.breadcrumbs')
@endif
