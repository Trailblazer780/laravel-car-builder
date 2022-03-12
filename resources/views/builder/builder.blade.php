@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-4">
    <form action="" method="POST">
        @csrf
        <div class="col-md-12" style="padding-bottom: 10px">
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
        <div class="col-md-12" style="padding-bottom: 10px">
            <div class="card">
                <div class="card-header">Pick a Car:</div>
                <div class="card-body">
                    <Car-Component></Car-Component>
                </div>
            </div>
        </div>
        <div class="col-md-12" style="padding-bottom: 10px">
            <div class="card">
                <div class="card-header">Engine Mods:</div>
                <div class="card-body">
                    <Engine-Component></Engine-Component>
                </div>
            </div>
        </div>
        <div class="col-md-12" style="padding-bottom: 10px">
            <div class="card">
                <div class="card-header">Body Mods:</div>
                <div class="card-body">
                    <Body-Component></Body-Component>
                </div>
            </div>
        </div>
        <div class="col-md-12" style="padding-bottom: 10px">
            <div class="card">
                <div class="card-header">Suspension Mods:</div>
                <div class="card-body">
                    <Suspension-Component></Suspension-Component>
                </div>
            </div>
        </div>
        <div class="col-md-12" style="padding-bottom: 10px">
            <div class="card">
                <div class="card-header">Brake Mods:</div>
                <div class="card-body">
                    <Brake-Component></Brake-Component>
                </div>
            </div>
        </div>
        <div class="col-md-12" style="padding-bottom: 10px">
            <div class="card">
                <div class="card-header">Transmission Mods:</div>
                <div class="card-body">
                    <Transmission-Component></Transmission-Component>
                </div>
            </div>
        </div>
        <div class="col-md-12" style="padding-bottom: 10px">
            <div class="card">
                <div class="card-header">Exhaust Mods:</div>
                <div class="card-body">
                    <Exhaust-Component></Exhaust-Component>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
</div>
@endsection

