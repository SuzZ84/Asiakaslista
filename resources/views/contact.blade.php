@extends('layouts.app')
@section('content')
<h1> {{ trans('messages.contacts') }} </h1>

{!! Form::open(['url' => 'contact/submit']) !!}
    <div class="form-row col-md-6">
      
        <label for="inputname">{{ trans('messages.firstname') }}</label>
        {{Form::text('firstname', '', ['class' => 'form-control', 'placeholder' => 'Enter First Name'])}}
    </div>
    <div class="form-row col-md-6">

        <label for="inputlastname">{{ trans('messages.lastname') }}</label>
        {{Form::text('lastname', '', ['class' => 'form-control', 'placeholder' => 'Enter Last Name'])}}
    </div>

    <div class="form-row col-md-6">

        <label for="inputphone">{{ trans('messages.phone') }}</label>
        {{Form::text('phone', '', ['class' => 'form-control', 'placeholder' => '045123456'])}}
    </div>
    <div class="form-row col-md-6">

        <label for="inputAddress">{{ trans('messages.address') }}</label>
        {{Form::text('address', '', ['class' => 'form-control', 'placeholder' => 'Enter Address'])}}
    </div>
    <div class="form-row col-md-6">
        <label for="inputCity">{{ trans('messages.city') }}</label>
        {{Form::text('city', '', ['class' => 'form-control', 'placeholder' => 'Enter City'])}}
    </div>
    <div class="form-row col-md-6">
        <label for="inputZip">{{ trans('messages.zip') }}</label>
        {{Form::text('zip', '', ['class' => 'form-control', 'placeholder' => 'Enter Zip'])}}
    </div>
    <div class="form-row col-md-6">
        <label for="inputEmail4">{{ trans('messages.email') }}</label>
        {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Enter email'])}}
    <br>
        <div>
            {{Form::submit('Submit', ['class'=> 'btn btn-primary'])}}
        </div>
    </div>
    <br>
    <div class="form-group col-md-6">
        <label for="inputnotes">{{ trans('messages.notes') }}</label>
        {{Form::textarea('message', '', ['class' => 'form-control', 'placeholder' => 'Enter Note'])}}
    </div>

    
{!! Form::close() !!}

@endsection