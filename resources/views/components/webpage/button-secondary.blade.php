<a {{ $attributes->merge(['class' => "rounded-md px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-400"]) }}>
    {{ $slot }} <span aria-hidden="true">→</span>
</a>
