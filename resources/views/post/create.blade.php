@extends('base')
@section('title') Inicio @endsection
@section('content')

<form action="{{route('post.store') }}" method="post">
    {{ csrf_field() }}

</form>


@endsection