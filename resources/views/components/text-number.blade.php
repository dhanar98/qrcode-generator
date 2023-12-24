@props([
'max' => 5,
'disabled' => false,
'title' => 'Select Margin'
])

<div {{ $attributes->merge(['class' => 'py-2 px-3 bg-white border border-gray-200 rounded-lg']) }} data-hs-input-number>
    <div class="w-full flex justify-between items-center gap-x-5">
        <div class="grow">
            <span class="block text-xs text-gray-500">
                {{ $title }}
            </span>
            <input class="w-full p-0 bg-transparent border-0 text-gray-800 focus:ring-0" type="text" value="1" data-hs-input-number-input {{ $disabled ? 'disabled' : '' }} max="{{ $max }}">
        </div>
        <div class="flex justify-end items-center gap-x-1.5">
            <button type="button" class="w-6 h-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none " data-hs-input-number-decrement>
                <svg class="flex-shrink-0 w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14" />
                </svg>
            </button>
            <button type="button" class="w-6 h-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none " data-hs-input-number-increment>
                <svg class="flex-shrink-0 w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14" />
                    <path d="M12 5v14" />
                </svg>
            </button>
        </div>
    </div>
</div>