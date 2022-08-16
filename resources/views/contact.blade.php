@extends('layouts.app')
@section('content')
<h1> {{ trans('messages.contacts') }} </h1>

{!! Form::open(['url' => 'contact/submit']) !!}
    <div class="form-row col-md-6">
      
        <label for="inputname">{{ trans('messages.firstname') }}</label>
        {{Form::text('firstname', '', ['class' => 'form-control', 'placeholder' => trans('messages.firstnameplaceholder') ] )}}
    </div>
    <div class="form-row col-md-6">

        <label for="inputlastname">{{ trans('messages.lastname') }}</label>
        {{Form::text('lastname', '', ['class' => 'form-control', 'placeholder' => trans('messages.lastnameplaceholder')  ] )}}
    </div>

    <div class="form-row col-md-6">

        <label for="inputphone">{{ trans('messages.phone') }}</label>
        {{Form::text('phone', '', ['class' => 'form-control', 'placeholder' => '045123456'])}}
    </div>
    <div class="form-row col-md-6">

        <label for="inputAddress">{{ trans('messages.address') }}</label>
        {{Form::text('address', '', ['class' => 'form-control', 'placeholder' =>  trans('messages.addressplaceholder') ])}}
    </div>
    <div class="form-row col-md-6">
        <label for="inputCity">{{ trans('messages.city') }}</label>
        {{Form::text('city', '', ['class' => 'form-control', 'placeholder' =>  trans('messages.cityplaceholder') ])}}
    </div>
    <div class="form-row col-md-6">
        <label for="inputZip">{{ trans('messages.zip') }}</label>
        {{Form::text('zip', '', ['class' => 'form-control', 'placeholder' => trans('messages.zipplaceholder') ])}}
    </div>
    <div class="form-row col-md-6">
        <label for="inputEmail4">{{ trans('messages.email') }}</label>
        {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => trans('messages.emailplaceholder') ])}}
    <br>
        <div>
            {{Form::submit('Submit', ['class'=> 'btn btn-primary'])}}
        </div>
    </div>
    <br>
    <div class="form-group col-md-6">
        <label for="inputnotes">{{ trans('messages.notes') }}</label>
        {{Form::textarea('message', '', ['class' => 'form-control', 'placeholder' => trans('messages.notesplaceholder') ])}}
    </div>

    
{!! Form::close() !!}

@endsection