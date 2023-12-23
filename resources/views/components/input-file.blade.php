@props(['disabled' => false])

<label class="block">
    <span class="sr-only">Choose File</span>
    <input type="file" 
        {{ $disabled ? 'disabled' : '' }}
        {!! $attributes->merge([
            'class' => 'block w-full text-sm text-gray-500
                        file:mr-4 file:py-2 file:px-4
                        file:rounded-lg file:border-0
                        file:text-sm file:font-semibold
                        file:bg-blue-600 file:text-white
                        hover:file:bg-blue-700
                        file:disabled:opacity-50 file:disabled:pointer-events-none
                        dark:file:bg-blue-500
                        dark:hover:file:bg-blue-400'
        ]) !!}>
</label>