@extends('layouts.app')
<?php use App\Http\Controllers\Admin\PartController; ?>
@section('content')

<div class="row justify-content-center">
    <div class="col-md-4">
        <div style="padding-bottom: 10px;">
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
                                        <td>{{ PartController::getPartName($build->car); }}</td>
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
        </div>
        <div class="col-md-12" style="padding-bottom: 10px;">
            <div style="padding-bottom: 10px;">
                <div class="card">
                    <div class="card-header text-center">Selected Car:</div>
                    <div class="card-body">
                        <div>{{ PartController::getPartName($build->car); }} </div>
                        <hr>
                        <div>Description:</div>
                        <div>{{ PartController::getPartDesc($build->car); }} </div>
                    </div>
                </div>
            </div>
            <div style="padding-bottom: 10px;">
                <div class="card">
                    <div class="card-header text-center">Engine Mods:</div>
                    <div class="card-body">
                        @if(strlen($build->engine_options) <= 0)
                        <div class="text-center">There are no engine mods selected on this build.</div>
                        @endif
                        @foreach(explode(',', $build->engine_options) as $option)
                        {{-- check to see if there are options --}}
                        @if($option != "")
                            <div>Part: <strong>{{ PartController::getPartName($option); }}</strong></div>
                            <div>Description:</div>
                            <div>{{ PartController::getPartDesc($option); }}</div>
                            <br>
                            <hr>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div style="padding-bottom: 10px;">
                <div class="card">
                    <div class="card-header text-center">Transmission Mods:</div>
                    <div class="card-body">
                        @if(strlen($build->transmission_options) <= 0)
                        <div class="text-center">There are no transmission mods selected on this build.</div>
                        @endif
                        @foreach(explode(',', $build->transmission_options) as $option)
                        @if($option != "")
                            <div>Part: <strong>{{ PartController::getPartName($option); }}</strong></div>
                            <div>Description:</div>
                            <div>{{ PartController::getPartDesc($option); }}</div>
                            <br>
                            <hr>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div style="padding-bottom: 10px;">
                <div class="card">
                    <div class="card-header text-center">Suspension Mods:</div>
                    <div class="card-body">
                        @if(strlen($build->suspension_options) <= 0)
                        <div class="text-center">There are no suspension mods selected on this build.</div>
                        @endif
                        @foreach(explode(',', $build->suspension_options) as $option)
                        @if($option != "")
                            <div>Part: <strong>{{ PartController::getPartName($option); }}</strong></div>
                            <div>Description:</div>
                            <div>{{ PartController::getPartDesc($option); }}</div>
                            <br>
                            <hr>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div style="padding-bottom: 10px;">
                <div class="card">
                    <div class="card-header text-center">Brake Mods:</div>
                    <div class="card-body">
                        @if(strlen($build->brakes_options) <= 0)
                        <div class="text-center">There are no brake mods selected on this build.</div>
                        @endif
                        @foreach(explode(',', $build->brakes_options) as $option)
                        @if($option != "")
                            <div>Part: <strong>{{ PartController::getPartName($option); }}</strong></div>
                            <div>Description:</div>
                            <div>{{ PartController::getPartDesc($option); }}</div>
                            <br>
                            <hr>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div style="padding-bottom: 10px;">
            <div class="card">
                <div class="card-header text-center">Exhaust Mods:</div>
                <div class="card-body">
                    @if(strlen($build->exhaust_options) <= 0)
                    <div class="text-center">There are no exhaust mods selected on this build.</div>
                    @endif
                    @foreach(explode(',', $build->exhaust_options) as $option)
                    @if($option != "")
                    <div>Part: <strong>{{ PartController::getPartName($option); }}</strong></div>
                    <div>Description:</div>
                    <div>{{ PartController::getPartDesc($option); }}</div>
                    <br>
                    <hr>
                    @endif
                    @endforeach
                </div>
            </div>
            <div style="padding-bottom: 10px;">
                <div class="card">
                    <div class="card-header text-center">Body Mods:</div>
                    <div class="card-body">
                        @if(strlen($build->body_options) <= 0)
                        <div class="text-center">There are no body mods selected on this build.</div>
                        @endif
                        @foreach(explode(',', $build->body_options) as $option)
                        @if($option != "")
                            <div>Part: <strong>{{ PartController::getPartName($option); }}</strong></div>
                            <div>Description:</div>
                            <div>{{ PartController::getPartDesc($option); }}</div>
                            <br>
                            <hr>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection