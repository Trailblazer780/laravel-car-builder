@extends('layouts.app')
{{-- <?php use App\Http\Controllers\Admin\PartController; ?> --}}
@section('content')

<div class="row justify-content-center">
    <div class="col-md-4">
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
                                    <th>Client Name:</th>
                                    <td>{{ $build->name }}</td>
                                </tr>
                                <tr>
                                    <th>Client Email:</th>
                                    <td>{{ $build->email }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12" style="padding-bottom: 10px;">
            <div class="card">
                <div class="card-header text-center">Selected Car:</div>
                <div class="card-body">
                    <div>{{ $build->car }}</div>
                    {{-- <div>{{ PartController::getPart(15); }} </div> --}}
                </div>
            </div>
            <div class="card">
                <div class="card-header text-center">Engine Mods:</div>
                <div class="card-body">
                    @foreach(explode(',', $build->engine_options) as $option)
                    @if($option != "")
                        {{ $option }}
                        <br>
                    @endif
                    @endforeach
                </div>
            </div>
            <div class="card">
                <div class="card-header text-center">Transmission Mods:</div>
                <div class="card-body">
                    @foreach(explode(',', $build->transmission_options) as $option)
                    @if($option != "")
                        {{ $option }}
                        <br>
                    @endif
                    @endforeach
                </div>
            </div>
            <div class="card">
                <div class="card-header text-center">Suspension Mods:</div>
                <div class="card-body">
                    @foreach(explode(',', $build->suspension_options) as $option)
                    @if($option != "")
                        {{ $option }}
                        <br>
                    @endif
                    @endforeach
                </div>
            </div>
            <div class="card">
                <div class="card-header text-center">Brake Mods:</div>
                <div class="card-body">
                    @foreach(explode(',', $build->brakes_options) as $option)
                    @if($option != "")
                        {{ $option }}
                        <br>
                    @endif
                    @endforeach
                </div>
            </div>
            <div class="card">
                <div class="card-header text-center">Exhaust Mods:</div>
                <div class="card-body">
                    @foreach(explode(',', $build->exhaust_options) as $option)
                    @if($option != "")
                        {{ $option }}
                        <br>
                    @endif
                    @endforeach
                </div>
            </div>
            <div class="card">
                <div class="card-header text-center">Body Mods:</div>
                <div class="card-body">
                    @foreach(explode(',', $build->body_options) as $option)
                    @if($option != "")
                        {{ $option }}
                        <br>
                    @endif
                    @endforeach
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection