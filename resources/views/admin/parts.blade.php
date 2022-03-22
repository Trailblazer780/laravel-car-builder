@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Car Parts:</div>
                <div class="card-body">
                        {{-- add button to go to add page --}}
                        <a href="{{ route('parts.add') }}"><button type="submit" class="btn btn-primary">Add</button></a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Part ID</th>
                                <th scope="col">Part Name</th>
                                <th scope="col">Part Category</th>
                                <th scope="col">Part Description</th>
                                <th scope="col">Edit/Delete</th>
                            </tr>
                        </thead>
                            <tbody>
                                @foreach ($parts as $part)
                                    <tr>
                                        <th>{{ $part->id }}</th>
                                        <td>{{ $part->part_name }}</td>
                                        <td>{{ $part->part_category }}</td>
                                        <td>{{ $part->part_description }}</td>
                                        {{-- <td>{{ implode(', ', $user->roles()->get()->pluck('name')->toArray()) }}</td> --}}
                                        <td>
                                        <a href="{{ route('parts.edit', $part->id )}}"><button class="btn btn-info text-white float-left mr-2" type="submit">Edit</button></a>
                                        <form action="{{ route('parts.destroy', $part)}}" method="post" class="float-left" style="display: inline">
                                            {{ method_field('DELETE')}}
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $part->id }}">
                                            <button class="btn btn-danger text-white" type="submit">Delete</button></a>
                                        </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                    </table>
                    <a href="{{ URL::previous() }}" class="btn btn-info text-white" role="button">Go Back</a>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection