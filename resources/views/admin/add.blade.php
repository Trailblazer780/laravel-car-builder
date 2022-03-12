@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Part:</div>
                <div class="card-body">
                    <form action="{{ route('parts.store') }}" method="post">
                        {{ method_field('post') }}
                        @csrf
                        <div class="form-group row">
                            <label for="partName" class="col-md-4 col-form-label text-md-right">Part Name </label>

                            <div class="col-md-6">
                                <input id="partName" type="text" class="form-control" name="part_name"  required autocomplete="partName" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="partDescription" class="col-md-4 col-form-label text-md-right">Part Description </label>

                            <div class="col-md-6">
                                <input id="partDescription" type="text" class="form-control" name="part_description"  required autocomplete="partDescription" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="partCategory" class="col-md-4 col-form-label text-md-right">Part Category </label>
                            <div class="col-md-6">
                                <select name="part_category" id="part_category" class="form-control">
                                    <option value="Car">Car</option>
                                    <option value="Engine">Engine</option>
                                    <option value="Body">Body</option>
                                    <option value="Suspension">Suspension</option>
                                    <option value="Brakes">Brakes</option>
                                    <option value="Transmission">Transmission</option>
                                    <option value="Exhaust">Exhaust</option>
                                </select>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-4"></div>

                            <div class="col-md-6">
                                <button class="btn btn-info text-white float-left" type="submit">Add</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection