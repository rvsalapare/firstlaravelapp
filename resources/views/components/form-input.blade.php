@props(['name', 'label', 'type' => 'text', 'placeholder' => '', 'required' => true, 'value' => null])

<div class="form-control w-full">
    <label for="{{ $name }}" class="label">
        <span class="label-text font-semibold">
            {{ $label }}
            @if($required)
                <span class="text-error" aria-label="required">*</span>
            @endif
        </span>
    </label>
    <input
        type="{{ $type }}"
        id="{{ $name }}"
        name="{{ $name }}"
        value="{{ $value ?? old($name) }}"
        @if($placeholder) placeholder="{{ $placeholder }}" @endif
        @if($required) required aria-required="true" @endif
        {{ $attributes->merge(['class' => 'input input-bordered w-full']) }}
    >
    @error($name)
        <span class="text-error text-sm mt-1" role="alert">{{ $message }}</span>
    @enderror
</div>