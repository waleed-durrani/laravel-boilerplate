@props(['color' => 'green', 'showIcon' => true])

<div x-data="{open:true}" x-show="open" {{ $attributes->merge(['class' => 'bg-'.$color.'-50 p-4']) }} role="alert">
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

        <div class="ml-auto pl-3">
            <div class="-mx-1.5 -my-1.5">
                <button
                    @click="open = false;"
                    class="inline-flex rounded-md p-1.5 text-{{ $color }}-500 hover:bg-{{ $color }}-100 focus:outline-none focus:bg-{{ $color }}-100 transition ease-in-out duration-150"
                    aria-label="{{ __('Dismiss') }}"
                >
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>
