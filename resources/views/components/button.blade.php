<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center bg-indigo-700 text-white px-3 py-2 rounded-md text-sm font-medium cursor-pointer hover:opacity-75 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
