{{-- Required for association field --}}
@php
	$errorName = str_replace('[', '.', $name);
	$errorName = str_replace(']', '', $errorName);
@endphp

<div class="form-group{{ $errors->has($errorName) ? ' has-error' : '' }}">
	@if ($label !== false)
		{!! Form::label($name, $label, ['class' => 'col-md-4 control-label']) !!}

		<div class="col-md-6">
	@else
		<div class="col-md-6 col-md-offset-4">
	@endif

		{!! Form::textarea(
			$name,
			(!empty(old($name))) ? old($name) : null,
			array_merge(['class' => 'form-control'], $attributes)
		) !!}

		@if ($errors->has($errorName))
			<span class="help-block">
				<strong>{{ $errors->first($errorName) }}</strong>
			</span>
		@endif
	</div>
</div>
