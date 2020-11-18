<table class="table-auto w-full">
    <tr>
        <td class="border px-4 py-2"><strong>@lang('Type')</strong></td>
        <td class="border px-4 py-2">@include('backend.auth.user.includes.type', ['user' => $logged_in_user])</td>
    </tr>

    <tr>
        <td class="border px-4 py-2"><strong>@lang('Avatar')</strong></td>
        <td class="border px-4 py-2"><img src="{{ $logged_in_user->avatar }}" class="user-profile-image" /></td>
    </tr>

    <tr>
        <td class="border px-4 py-2"><strong>@lang('Name')</strong></td>
        <td class="border px-4 py-2">{{ $logged_in_user->name }}</td>
    </tr>

    <tr>
        <td class="border px-4 py-2"><strong>@lang('E-mail Address')</strong></td>
        <td class="border px-4 py-2">{{ $logged_in_user->email }}</td>
    </tr>

    @if ($logged_in_user->isSocial())
        <tr>
            <td class="border px-4 py-2"><strong>@lang('Social Provider')</strong></td>
            <td class="border px-4 py-2">{{ ucfirst($logged_in_user->provider) }}</td>
        </tr>
    @endif

    <tr>
        <td class="border px-4 py-2"><strong>@lang('Timezone')</strong></td>
        <td class="border px-4 py-2">{{ $logged_in_user->timezone ? str_replace('_', ' ', $logged_in_user->timezone) : __('N/A') }}</td>
    </tr>

    <tr>
        <td class="border px-4 py-2"><strong>@lang('Account Created')</strong></td>
        <td class="border px-4 py-2">@displayDate($logged_in_user->created_at) ({{ $logged_in_user->created_at->diffForHumans() }})</td>
    </tr>

    <tr>
        <td class="border px-4 py-2"><strong>@lang('Last Updated')</strong></td>
        <td class="border px-4 py-2">@displayDate($logged_in_user->updated_at) ({{ $logged_in_user->updated_at->diffForHumans() }})</td>
    </tr>
</table>
