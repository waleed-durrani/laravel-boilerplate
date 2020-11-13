@if($announcements->count())
    @foreach($announcements as $announcement)
        <x-utils.alert :color="$announcement->color" :showIcon="false">
            {{ (new \Illuminate\Support\HtmlString($announcement->message)) }}
        </x-utils.alert>
    @endforeach
@endif
