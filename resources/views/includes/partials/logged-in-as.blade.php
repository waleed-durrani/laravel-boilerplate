@impersonating
    <x-utils.alert color="yellow" :showIcon="false">
        @lang('You are currently logged in as :name.', ['name' => $logged_in_user->name]) <a href="{{ route('impersonate.leave') }}">@lang('Return to your account')</a>.
    </x-utils.alert>
@endImpersonating
