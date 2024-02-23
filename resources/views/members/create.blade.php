@extends('shared/layout')

@section('title')
    <h1>This is the Member Creation page</h1>
@endsection


@section('content')
<div>
    <form class="form-size-std" method="post" action="{{ route('members.store') }}" >
        @csrf
        <div class="v-form-input">
            <label>Name</label>
            <input type="text" name="name" value="{{old('name')}}" />
            @error('name')
                <div style="color: red">{{ $message }}</div>
            @enderror
        </div>
        <div class="v-form-input">
            <label>email</label>
            <input type="text" name="email" value="{{old('email')}}" />
            @error('email')
                <div style="color: red">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" >SEND</button>
    </form>
</div>
@endsection