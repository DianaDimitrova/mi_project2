@extends('templates.base')
@section('content')

<h2>{{$obj->name}}</h2>
<div>{!!$obj->body!!}</div>
@stop