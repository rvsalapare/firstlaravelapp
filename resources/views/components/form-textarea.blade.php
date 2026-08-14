@props(['name', 'label', 'rows' => 8, 'placeholder' => '', 'required' => true, 'value' => null])

<div class="form-group">
    <label for="{{ $name }}">
        {{ $label }}
        @if($required)
            <span class="required" aria-label="required">*</span>
        @endif
    </label>
    <textarea 
        id="{{ $name }}" 
        name="{{ $name }}" 
        rows="{{ $rows }}"
        @if($placeholder) placeholder="{{ $placeholder }}" @endif
        @if($required) required aria-required="true" @endif
        {{ $attributes->merge(['class' => '']) }}
    >{{ $value ?? old($name) }}</textarea>
    @error($name)
        <span class="error-message" role="alert">{{ $message }}</span>
    @enderror
</div>
