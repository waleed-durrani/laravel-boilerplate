@props(['color' => 'green', 'showIcon' => true])

<div {{ $attributes->merge(['class' => 'bg-'.$color.'-50 p-4']) }} role="alert">
    <div class="flex">
        @if ($showIcon)
            <div class="flex-shrink-0">
                <span class="text-{{ $color }}-400">
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
            <p class="text-sm leading-5 font-medium text-{{ $color }}-800">
                {{ $slot }}
            </p>
        </div>
    </div>
</div>
