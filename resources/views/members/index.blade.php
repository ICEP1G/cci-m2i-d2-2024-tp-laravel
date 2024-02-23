@extends('shared/layout')

@section('title')
    <h1>This is the Member index page</h1>
@endsection

<br>
<a href="{{ route('members.create') }} ">Create a new member</a>
<br>

@section('content')
    <table class="table">
        <tr class="table-row table-header">
            <th class="table-cell">Name</th>
            <th class="table-cell">Email</th>
            <th class="table-cell">Detail</th>
            <th class="table-cell">Delete</th>
        </tr>
            @foreach($members as $member)
                <tr class="table-row">
                    <td class="table-cell">{{ $member->name }}</td>
                    <td class="table-cell">{{ $member->email }}</td>
                    <td class="table-cell"><a href="{{ route('members.show', $member->id) }}" >Jump to</a></td>
                    <td class="table-cell">
                        <form action="{{ route('members.delete', $member->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
    </table>
@endsection