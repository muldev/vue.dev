@extends('layouts.guest', [
                'title'  => "Vue.js Task Slots <slot>"
                ])

@section('content-body')
    <div class="section">
        <div class="panel">
            <div class="panel-heading">
                Tasks Slot Example
            </div>
            <div class="panel-block">
                <tasks-slots>Go to store</tasks-slots>
            </div>
            <div class="panel-block">
                <tasks-slots>Work on App</tasks-slots>
            </div>
            <div class="panel-block">
                <tasks-slots> Pickup Julz</tasks-slots>
            </div>
            <div class="panel-block">
                <tasks-slots>Gym</tasks-slots>
            </div>
            <div class="panel-block">
                <tasks-slots>Drive</tasks-slots>
            </div>
        </div>
    </div>
@stop