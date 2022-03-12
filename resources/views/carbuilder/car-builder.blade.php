@extends('layouts.app')

@section('content')

<div class="container">
    <div>
        {{-- form for email and name --}}
        {{-- <form action="{{ route('carcreate-build') }}" method="POST"> --}}
            @csrf
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        {{-- </form> --}}
    </div>

</div>
@endsection

