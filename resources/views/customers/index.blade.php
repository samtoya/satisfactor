@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="header">
                <h2>Are you satisfied?</h2>
                <p>Your opinion is important!</p>
            </div>
        </div>
        <div class="col-md-9 col-md-offset-2">
            <div class="card-buttons clearfix">
                <card which="very_satisfied"></card>
                <card which="satisfied"></card>
                <card which="not_satisfied"></card>
            </div>
        </div>
    </div>
@stop

@section('scripts')
    <script>

    </script>
@stop