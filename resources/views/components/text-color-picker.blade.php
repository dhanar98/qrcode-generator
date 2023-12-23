@props(['disabled' => false, 'id' => 'colorPicker'])


<div class="flex rounded-lg shadow-sm">
    <input type="text" id="colorValue" class="py-3 px-4 pl-12 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500" placeholder="Color value" readonly>
    <div class="px-4 inline-flex items-center min-w-100 rounded-s-md bg-dark-50">
        <input type="color" id="{{ $id }}" {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'absolute inset-y-100 left-0 ml-2 w-8 h-8 border-none cursor-pointer rounded-l-lg']) !!}
        title="Choose your color">
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var colorPicker = document.getElementById("{{ $id }}");
        var colorValue = document.getElementById('colorValue');

        colorPicker.addEventListener('input', function() {
            colorValue.value = colorPicker.value;
            colorValue.style.color = '000000';
        });
    });
</script>