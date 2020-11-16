@if(isset($errors) && $errors->any())
    <x-utils.alert color="red" class="sm:rounded-md">
        <x-slot name="icon">
            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
            </svg>
        </x-slot>

        <h3 class="text-sm leading-5 font-medium text-red-800">
            @lang('There were :count errors with your submission:', ['count' => $errors->count()])
        </h3>

        <div class="mt-2 text-sm leading-5 text-red-700">
            <ul class="list-disc pl-8">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </x-utils.alert>
@endif

@if(session()->get('flash_success'))
    <x-utils.alert color="green" class="sm:rounded-md">
        <x-slot name="icon">
            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
            </svg>
        </x-slot>

        {{ session()->get('flash_success') }}
    </x-utils.alert>
@endif

@if(session()->get('flash_warning'))
    <x-utils.alert color="yellow" class="sm:rounded-md">
        {{ session()->get('flash_warning') }}
    </x-utils.alert>
@endif

@if(session()->get('flash_info') || session()->get('flash_message'))
    <x-utils.alert color="blue" class="sm:rounded-md">
        {{ session()->get('flash_info') }}
    </x-utils.alert>
@endif

@if(session()->get('flash_danger'))
    <x-utils.alert color="red" class="sm:rounded-md">
        <x-slot name="icon">
            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
            </svg>
        </x-slot>

        {{ session()->get('flash_danger') }}
    </x-utils.alert>
@endif

@if(session()->get('status'))
    <x-utils.alert color="green" class="sm:rounded-md">
        <x-slot name="icon">
            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
            </svg>
        </x-slot>

        {{ session()->get('status') }}
    </x-utils.alert>
@endif

@if(session()->get('resent'))
    <x-utils.alert color="green" class="sm:rounded-md">
        <x-slot name="icon">
            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
            </svg>
        </x-slot>

        @lang('A fresh verification link has been sent to your email address.')
    </x-utils.alert>
@endif

@if(session()->get('verified'))
    <x-utils.alert color="green" class="sm:rounded-md">
        <x-slot name="icon">
            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
            </svg>
        </x-slot>

        @lang('Thank you for verifying your e-mail address.')
    </x-utils.alert>
@endif
