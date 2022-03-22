@extends('layouts.app')

@section('content')
<div class="row justify-content-center">

    {{-- display the build data --}}
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Build #{{ $build->id }}</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h5>Build Details</h5>
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <th>Build ID</th>
                                    <td>{{ $build->id }}</td>
                                </tr>
                                <tr>
                                    <th>Build Car</th>
                                    <td>{{ $build->car }}</td>
                                </tr>
                                <tr>
                                    <th>Engine Mod</th>
                                    <td>
                                        @foreach(explode(',', $build->engine_options) as $option)
                                            {{ $option }}
                                            <br>
                                        @endforeach
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


</div>
@endsection