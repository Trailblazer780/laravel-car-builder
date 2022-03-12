@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-4">
    <form action="" method="POST">
        @csrf
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Who is this build for?</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Pick a Car:</div>
                <div class="card-body">
                    {{-- Display Car parts that are category type 'Car' here --}}
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Engine Mods:</div>
                <div class="card-body">
                    {{-- Display Car parts that are category type 'Engine' here --}}
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Body Mods:</div>
                <div class="card-body">
                    {{-- Display Car parts that are category type 'Body' here --}}
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Suspension Mods:</div>
                <div class="card-body">
                    {{-- Display Car parts that are category type 'Suspension' here --}}
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Brake Mods:</div>
                <div class="card-body">
                    {{-- Display Car parts that are category type 'Breaks' here --}}
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Transmission Mods:</div>
                <div class="card-body">
                    {{-- Display Car parts that are category type 'Transmission' here --}}
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Exhaust Mods:</div>
                <div class="card-body">
                    {{-- Display Car parts that are category type 'Exhaust' here --}}
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
</div>
@endsection

