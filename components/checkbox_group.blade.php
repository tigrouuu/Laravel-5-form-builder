<div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">
	@if ($label !== false)
		{!! Form::label($name, $label, ['class' => 'col-md-4 control-label']) !!}

		<div class="col-md-6">
	@else
		<div class="col-md-6 col-md-offset-4">
	@endif

		@foreach ($list as $key => $item)
			@isset ($attributes['inline'])
				<label class="checkbox-inline" for="{{ $name.$key }}">
			@else
				<div class="checkbox">
					<label for="{{ $name.$key }}">
			@endisset

			{!! Form::checkbox(
				$name.'[]',
				$item->id,
				(is_array($selected) && in_array($item->id, $selected)) ? ' checked' : '',
				array_merge([
					'class' => 'form-check-input',
					'id'    => $name.$key
				], $attributes)
			) !!}

			{!! ucfirst($item->name) !!}

			</label>

			@empty ($attributes['inline'])
				</div>
			@endempty
		@endforeach

		@if ($errors->has($name))
			<span class="help-block">
				<strong>{{ $errors->first($name) }}</strong>
			</span>
		@endif
	</div>
</div>
