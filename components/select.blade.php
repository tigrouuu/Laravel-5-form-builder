{{-- Required for multiple select --}}
@php
    $errorName = str_replace('[', '', $name);
    $errorName = str_replace(']', '', $errorName);
@endphp

<div class="form-group{{ $errors->has($errorName) ? ' has-error' : '' }}">
    @if ($label !== false)
        {!! Form::label($name, $label, ['class' => $labelClass]) !!}
    @endif

    {!! Form::select(
        $name,
        $list,
        $selected,
        array_merge(['class' => 'form-control'], $attributes),
        $optionsAttributes
    ) !!}

    @if ($errors->has($errorName))
        <span class="help-block">
            <strong>{{ $errors->first($errorName) }}</strong>
        </span>
    @endif
</div>
