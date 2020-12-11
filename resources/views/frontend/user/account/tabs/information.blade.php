<x-forms.patch :action="route('frontend.user.profile.update')">
    <div>
        <label for="name" class="block text-sm font-medium text-gray-700 leading-5">
            @lang('Name')
        </label>

        <div class="mt-1 rounded-md shadow-sm">
            <input
                type="text"
                name="name"
                class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                placeholder="{{ __('Name') }}"
                value="{{ old('name') ?? $logged_in_user->name }}"
                required
                autofocus
                autocomplete="name" />
        </div>
    </div>

    @if ($logged_in_user->canChangeEmail())
        <div class="mt-6">
            <label for="email" class="block text-sm font-medium text-gray-700 leading-5">
                @lang('E-mail Address')
            </label>

            <x-utils.alert color="blue" class="rounded-md my-4">
                @lang('If you change your e-mail you will be logged out until you confirm your new e-mail address.')
            </x-utils.alert>

            <div class="mt-1 rounded-md shadow-sm">
                <input
                    type="email"
                    name="email"
                    id="email"
                    class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                    placeholder="{{ __('E-mail Address') }}"
                    value="{{ old('email') ?? $logged_in_user->email }}"
                    required
                    autocomplete="email" />
            </div>
        </div>
    @endif

    <div class="mt-6">
        <span class="block w-full rounded-md shadow-sm">
            <button type="submit" class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:ring-indigo active:bg-indigo-700 transition duration-150 ease-in-out disabled:opacity-75">
                @lang('Update')
            </button>
        </span>
    </div>
</x-forms.patch>
