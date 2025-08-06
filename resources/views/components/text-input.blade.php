@props(['disabled' => false])

<div>
    <input @disabled($disabled) {{ $attributes->merge(['class' => 'form-control']) }} />
</div>
