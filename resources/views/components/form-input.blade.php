@props(['name', 'label', 'type' => 'text', 'placeholder' => '', 'required' => true, 'value' => null])

<div class="form-group">
    <label for="{{ $name }}">
        {{ $label }}
        @if($required)
            <span class="required" aria-label="required">*</span>
        @endif
    </label>
    <input
        type="{{ $type }}"
        id="{{ $name }}"
        name="{{ $name }}"
        value="{{ $value ?? old($name) }}"
        @if($placeholder) placeholder="{{ $placeholder }}" @endif
        @if($required) required aria-required="true" @endif
        {{ $attributes->merge(['class' => '']) }}
    >
    @error($name)
        <span class="error-message" role="alert">{{ $message }}</span>
    @enderror
</div>