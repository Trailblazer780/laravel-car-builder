@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">Edit part: {{ $part->part_name }}</div>
                <div class="card-body">
                    <form action="{{ route('parts.update', $part) }}" method="post">
                        {{ method_field('put') }}
                        @csrf
                        <input type="hidden" name="id" value="{{ $part->id }}">
                        <div class="form-group row">
                            <label for="partName" class="col-md-4 col-form-label text-md-right">Part Name </label>

                            <div class="col-md-6">
                                <input id="partName" type="text" class="form-control" name="part_name" value="{{ $part->part_name }}" required autocomplete="partName" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="partDescription" class="col-md-4 col-form-label text-md-right">Part Description </label>

                            <div class="col-md-6">
                                <input id="partDescription" type="text" class="form-control" name="part_description" value="{{ $part->part_description }}" required autocomplete="partDescription" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="partCategory" class="col-md-4 col-form-label text-md-right">Part Category </label>
                            <div class="col-md-6">

                            <div class="col-md-6">
                                <select name="part_category" id="part_category" class="form-control" wire:model="part_category">
                                    <option value="Car" {{ $part->part_category == "Car" ? 'selected="selected"' : '' }}>Car</option>
                                    <option value="Engine" {{ $part->part_category == "Engine" ? 'selected="selected"' : '' }}>Engine</option>
                                    <option value="Body" {{ $part->part_category == "Body" ? 'selected="selected"' : '' }}>Body</option>
                                    <option value="Suspension" {{ $part->part_category == "Suspension" ? 'selected="selected"' : '' }}>Suspension</option>
                                    <option value="Brakes" {{ $part->part_category == "Brakes" ? 'selected="selected"' : '' }}>Brakes</option>
                                    <option value="Transmission" {{ $part->part_category == "Transmission" ? 'selected="selected"' : '' }}>Transmission</option>
                                    <option value="Exhaust" {{ $part->part_category == "Exhaust" ? 'selected="selected"' : '' }}>Exhaust</option>
                                </select>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ URL::previous() }}" class="btn btn-info text-white" role="button">Go Back</a>
                            <button class="btn btn-info text-white float-left" type="submit">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

@endsection