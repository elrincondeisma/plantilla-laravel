@props(['icon','url','title'])
<li class="flex flex-row">
    @if($icon)
        {{-- Renderizar el ícono dinámicamente --}}
        <x-dynamic-component :component="$icon" class="w-6 h-6" />
    @endif
    <a href="{{ $url }}" target="_blank" class="ml-2 text-gray-500 font-mono mb-4 dark:text-neutral-400 hover:underline">{{ $title }}</a>
</li>
