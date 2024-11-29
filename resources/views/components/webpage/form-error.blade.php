@props(['name'])

@error($name)
    <p class="text-red-500 text-xs font-semibold mt-2 pl-3">{{ $message }}</p>
@enderror
