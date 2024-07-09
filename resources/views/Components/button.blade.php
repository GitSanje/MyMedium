<button {{ $attributes->merge(['class' => 'border-3 text-black hover:bg-gray-300 rounded-full px-4 py-2 h-12 m-1']) }} type="button">
    {{ $slot }}
</button>
