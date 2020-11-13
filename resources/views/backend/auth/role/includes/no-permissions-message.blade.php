@if ($general->count() + $categories->count() === 0)
    <x-utils.alert color="yellow" :showIcon="false" class="rounded-md">
        @lang('There are no permissions to choose from.')
    </x-utils.alert>
@endif
