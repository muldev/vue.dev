@extends('layouts.guest', [
                'title'  => "Vue.js Task List from database"
                ])

@section('content-body')
    <div class="section">
        <tasks-list></tasks-list>
    </div>
@stop