<div class="@if ($type === 'hidden') d-none @else form-group @endif">
    <x-form-label :label="$label" :for="$attributes->get('id') ?: $id()" />

    <div class="input-group input-icon">
        <input {!! $attributes->merge([
            'class' => 'form-control ' . ($hasError($name) ? 'is-invalid' : ''),
            'placeholder' => 'Select Date',
            'type' => 'text',
        ]) !!} {{ $selector }}
            @if ($isWired()) wire:model{!! $wireModifier() !!}="{{ $name }}"
        @else
        value="{{ $value }}" @endif
            name="{{ $name }}" @if ($label && !$attributes->get('id')) id="{{ $id() }}" @endif />

        <span class="input-icon-addon">
            <i class="{{ $attributes->has('icon') ? $attributes->get('icon') : 'ti ti-calendar-month' }}"></i>
        </span>

        @if ($hasErrorAndShow($name))
            <x-form-errors :name="$name" />
        @endif
    </div>

    {!! $help ?? null !!}

</div>
