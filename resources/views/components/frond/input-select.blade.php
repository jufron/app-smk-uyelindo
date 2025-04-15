<label for="{{ $name }}" class="mb-3 block text-base font-medium text-[#07074D]">
    {{ $label }}
</label>
<select 
    name="{{ $name }}" 
    id="{{ $name }}" 
    class="w-full rounded-md border border-yellow-200 bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:ring-yellow-300 focus:border-yellow-300 focus:shadow-md appearance-none"
>
    {{ $slot }}
</select>