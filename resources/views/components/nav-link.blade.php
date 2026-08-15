@props(['active' => false])

<a {{ $attributes->class([
        'px-3 py-2 rounded-lg text-sm font-semibold transition-colors',
        'text-primary bg-primary/10' => $active,
        'text-base-content/60 hover:text-primary hover:bg-primary/10' => !$active,
    ]) }}>
    {{ $slot }}
</a>