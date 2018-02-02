<div class="form-group{{ $errors->has($errorName) ? ' has-error' : '' }}">
	@if ($label !== false)
		{!! Form::label($name, $label, ['class' => 'col-md-4 control-label']) !!}

		<div class="col-md-6">
	@else
		<div class="col-md-6 col-md-offset-4">
	@endif

		{{-- À MODIFIER POUR CRÉER DES URL AVEC LARAVEL - COLLECTIVE --}}

		{!! Form::text(
			$name,
			(!empty(old($name))) ? old($name) : null,
			array_merge(['class' => 'form-control'], $attributes)
		) !!}

		{{ link_to('foo/bar', $title = null, $attributes = [], $secure = null) }}

		<input type="url" id="{{ $name }}" name="{{ $name }}"
			{!! Form::attributes($attributes, [ 'class' => 'form-control' ]) !!}>

		@if ($errors->has($errorName))
			<span class="help-block">
				<strong>{{ $errors->first($errorName) }}</strong>
			</span>
		@endif
	</div>
</div>
