<a {{ $attributes->merge(['class' => $type_class . ' type-'.$type . ' ' . $common_css]) }}>
    {{ $slot }}
</a>