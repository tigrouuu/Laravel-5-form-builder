<div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">
    <div class="col-md-6 col-md-offset-4">
        <div class="radio"> {{-- radio-inline --}}
            <label class="form-check-label" for="{{ $name }}">
                {!! Form::radio($name, $value, (!empty($attributes['checked'])) ? true : false, $attributes) !!}

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
