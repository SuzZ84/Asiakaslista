@extends('layouts.app')
@section('content')
<h1> {{ trans('messages.homenav') }} </h1>
<p> 
    {{ trans('messages.home') }}
</p>
@endsection

@section('sidebar')
    @parent

    <p> {{ trans('messages.created') }}</p>
@endsection