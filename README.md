# Laravel-5-form-builder
This package allows to modify the LaravelCollective components and adapt the template to Bootstrap CSS.

## Installation

Open your `App\Providers\AppServiceProvider.php`, add in top `use App\Services\FormBuilder;` and put in boot method `FormBuilder::boot();`.

Create a Services folder in App folder, and copy/paste `FormBuilder.php` file from this repo in Services folder.

Then, copy/paste `/components` folder from this repo again in `/resources/views`. 

Modify the static `$viewPath` variable of `FormBuilder.php` according to the location of the `/components` folder. Here, `/components` is at the root of `/views`.

## Result

Let's take an ordinary contact form :

```php
@extends('layouts.frontend')

@section('title', 'Login')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
	    <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Login</h3>
                </div>

		<div class="panel-body">
	            @include('errors.forms')

		    {!! Form::open([
                        'route' => 'login.post',
                        'class' => 'form-horizontal'
                    ]) !!}

		    <div class="form-group row{{ $errors->has('email') ? ' has-error' : '' }}">
			<label for="email" class="col-md-4 control-label">E-mail</label>
			<div class="col-md-6">
			    <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

			    @if ($errors->has('email'))
			        <span class="help-block">
				    <strong>{{ $errors->first('email') }}</strong>
			        </span>
			    @endif
                        </div>
	            </div>

	            <div class="form-group row{{ $errors->has('password') ? ' has-error' : '' }}">
		        <label for="password" class="col-md-4 control-label">Password</label>
		        <div class="col-md-6">
		            <input id="password" type="password" class="form-control" name="password" required>

		            @if ($errors->has('password'))
			        <span class="help-block">
			            <strong>{{ $errors->first('password') }}</strong>
			        </span>
		            @endif
		        </div>
	            </div>

	            <div class="form-group row">
		        <div class="col-md-6 col-md-offset-4">
			    <div class="form-check">
			        <label class="form-check-label">
			    	    <input class="form-check-input" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember me
			        </label>
			    </div>
		        </div>
		    </div>

	            <div class="form-group">
	                <div class="col-md-6 col-md-offset-4">
	                    <button type="submit" class="btn btn-primary">Login</button>
	                </div>
	            </div>
	            {!! Form::close() !!}
	        </div>
            </div>
        </div>
    </div>
</div>
@endsection
```

With **Laravel-5-form-builder**, here is the result:

```php
@extends('layouts.frontend')

@section('title', 'Login')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
	    <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Login</h3>
                </div>

		<div class="panel-body">
	            @include('errors.forms')

		    {!! Form::open([
	                'route' => 'login.post',
	                'class' => 'form-horizontal'
	            ]) !!}

                    {!! Form::emailH('email', 'E-mail', ['required', 'autofocus']) !!}

                    {!! Form::passwordH('password', 'Password', ['required']) !!}

                    {!! Form::checkboxH('remember', 'Remember me', old('remember'), []) !!}

                    {!! Form::submitH('Login') !!}
		    {!! Form::close() !!}
	        </div>
            </div>
        </div>
    </div>
</div>
@endsection
```

No more Bootstrap CSS Framework presence. Instead of modifying several forms, you will only have the files in `/components` to adapt to your favorite css framework.

## ToDo

Manage all the elements of a form.
