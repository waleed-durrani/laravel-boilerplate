@props(['color' => 'green', 'showIcon' => true])

{{-- We need to do it this way so that PurgeCSS can find the class names --}}
{{-- See: https://tailwindcss.com/docs/controlling-file-size#writing-purgeable-html --}}
@php
    switch($color) {
        case 'green':default:
            $colors = [
                'bg' => 'bg-green-50',
                'icon' => 'text-green-400',
                'text' => 'text-green-800',
            ];
        break;

        case 'blue':
            $colors = [
                'bg' => 'bg-blue-50',
                'icon' => 'text-blue-400',
                'text' => 'text-blue-800',
            ];
        break;

        case 'yellow':
            $colors = [
                'bg' => 'bg-yellow-50',
                'icon' => 'text-yellow-400',
                'text' => 'text-yellow-800',
            ];
        break;

        case 'red':
            $colors = [
                'bg' => 'bg-red-50',
                'icon' => 'text-red-400',
                'text' => 'text-red-800',
            ];
        break;
    }
@endphp

<div {{ $attributes->merge(['class' => $colors['bg'] . ' p-4']) }} role="alert">
    <div class="flex">
        @if ($showIcon)
            <div class="flex-shrink-0">
                <span class="{{ $colors['icon'] }}">
                    @if (isset($icon))
                        {{ $icon }}
                    @else
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    @endif
                </span>
            </div>
        @endif

        <div class="@if ($showIcon) ml-3 @endif">
            <p class="text-sm leading-5 font-medium {{ $colors['text'] }}">
                {{ $slot }}
            </p>
        </div>
    </div>
</div>
