@extends('layouts.app')
@section('content')

<head>

<tbody>
  
 
@if(count($messages) > 0)
  
    <div class="panel-heading">
        <h1> {{ trans('messages.customers') }} </h1> 
    </div>

      <style>
        th{text-align: center;}
    </style>
          <table class= "table table-striped">
      <thead>
           <tr>
            <th>{{ trans('messages.firstname') }}</th>
            <th>{{ trans('messages.lastname') }}</th>
            <th>{{ trans('messages.address') }}</th>
            <th>{{ trans('messages.city') }}</th>
            <th>{{ trans('messages.zip') }}</th>
            <th>{{ trans('messages.started') }}</th>
            <th>{{ trans('messages.notes') }}</th>
            
          </tr>
      </thead>
    @foreach ($messages as $message)
 
                      <tr>    
                        <table class="table table-dark">
                          <tr>
                          <td>{{$message->firstname}}</td>
                          <td>{{$message->lastname}}</td>
                          <td>{{$message->address}}</td>
                          <td>{{$message->city}}</td>
                          <td>{{$message->zip}}</td>
                          <td>{{$message->email}}</td>
                          <td> {{ date('Y-m-d') }} </td>
                          <td>{{$message->message}}</td> 
                      </tr>
                        </table>
</body>
    @endforeach
    
@endif
@endsection

@section('sidebar')
    @parent

@endsection