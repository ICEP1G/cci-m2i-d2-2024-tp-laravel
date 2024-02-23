@extends('shared/layout')

@section('title')
    <h1>This is the welcome page</h1>
@endsection

@section('content')
    <a href="{{ route('members.index') }}">Go to the members page</a>
@endsection