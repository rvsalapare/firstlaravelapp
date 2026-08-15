@props(['name', 'label', 'rows' => 8, 'placeholder' => '', 'required' => true, 'value' => null])

<div class="form-control w-full">
    <label for="{{ $name }}" class="label">
        <span class="label-text font-semibold">
            {{ $label }}
            @if($required)
                <span class="text-error" aria-label="required">*</span>
            @endif
        </span>
    </label>
    <textarea
        id="{{ $name }}"
        name="{{ $name }}"
        rows="{{ $rows }}"
        @if($placeholder) placeholder="{{ $placeholder }}" @endif
        @if($required) required aria-required="true" @endif
        {{ $attributes->merge(['class' => 'textarea textarea-bordered w-full']) }}
    >{{ $value ?? old($name) }}</textarea>
    @error($name)
        <span class="text-error text-sm mt-1" role="alert">{{ $message }}</span>
    @enderror
</div>