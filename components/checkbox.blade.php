<div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">
    <div class="col-md-6 col-md-offset-4">
        <div class="form-check">
            <label class="form-check-label" for="{{ $name }}">
                {!! Form::checkbox($name, $value, (!empty($attributes['checked'])) ? true : false, array_merge(['class' => 'form-check-input'], $attributes)) !!}

                {!! $label !!}
            </label>
        </div>

        @if ($errors->has($name))
            <span class="help-block">
                <strong>{{ $errors->first($name) }}</strong>
            </span>
        @endif
    </div>
</div>
