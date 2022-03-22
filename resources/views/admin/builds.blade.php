@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Car Builds:</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Build ID</th>
                                <th scope="col">Client Name</th>
                                <th scope="col">Client Email</th>
                                <th scope="col">Selected Car</th>
                            </tr>
                        </thead>
                            <tbody>
                                @foreach ($builds as $build)
                                    <tr>
                                        <th>{{ $build->id }}</th>
                                        <td>{{ $build->name }}</td>
                                        <td>{{ $build->email }}</td>
                                        <td>{{ $build->car }}</td>
                                        <td>
                                        <a href="{{ route('builder.fullbuild', $build->id )}}"><button class="btn btn-info text-white float-left mr-2" type="submit">View</button></a>
                                        <form action="{{ route('build.destroy', $build)}}" method="post" class="float-left" style="display: inline">
                                            {{ method_field('DELETE')}}
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $build->id }}">
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