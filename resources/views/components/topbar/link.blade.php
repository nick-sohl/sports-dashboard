<!-- Active: "bg-gray-50 outline-none", Not Active: "" -->
@props(['active' => false])

<a
    {{ $attributes }}
    class="{{ $active ? 'bg-gray-50 outline-none' : 'text-gray-900' }} block px-3 py-1 text-sm/6 hover:text-indigo-600"
    role="menuitem"
    tabindex="-1"
    id="user-menu-item-0">
    {{ $slot }}
</a>
