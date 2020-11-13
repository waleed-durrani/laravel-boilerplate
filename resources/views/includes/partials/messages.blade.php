@if(isset($errors) && $errors->any())
    <x-utils.alert color="red" :showIcon="false" class="rounded-md">
        @foreach($errors->all() as $error)
            {{ $error }}<br/>
        @endforeach
    </x-utils.alert>
@endif

@if(session()->get('flash_success'))
    <x-utils.alert color="green" :showIcon="false" class="rounded-md">
        {{ session()->get('flash_success') }}
    </x-utils.alert>
@endif

@if(session()->get('flash_warning'))
    <x-utils.alert color="yellow" :showIcon="false" class="rounded-md">
        {{ session()->get('flash_warning') }}
    </x-utils.alert>
@endif

@if(session()->get('flash_info') || session()->get('flash_message'))
    <x-utils.alert color="blue" :showIcon="false" class="rounded-md">
        {{ session()->get('flash_info') }}
    </x-utils.alert>
@endif

@if(session()->get('flash_danger'))
    <x-utils.alert color="red" :showIcon="false" class="rounded-md">
        {{ session()->get('flash_danger') }}
    </x-utils.alert>
@endif

@if(session()->get('status'))
    <x-utils.alert color="green" :showIcon="false" class="rounded-md">
        {{ session()->get('status') }}
    </x-utils.alert>
@endif

@if(session()->get('resent'))
    <x-utils.alert color="green" :showIcon="false" class="rounded-md">
        @lang('A fresh verification link has been sent to your email address.')
    </x-utils.alert>
@endif

@if(session()->get('verified'))
    <x-utils.alert color="green" :showIcon="false" class="rounded-md">
        @lang('Thank you for verifying your e-mail address.')
    </x-utils.alert>
@endif
