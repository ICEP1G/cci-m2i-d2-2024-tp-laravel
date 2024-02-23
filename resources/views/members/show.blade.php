@extends('shared/layout')

@section('title')
    <h1>This is the Member Show page</h1>
@endsection

<br>
<a href="{{ route('members.create') }} ">Create a new member</a>
<br>

@section('content')
    <h1>{{ $member->name }}</h1>
    <h1>{{ $member->email }}</h1>
    <form action="{{ route('members.delete', $member->id) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endsection