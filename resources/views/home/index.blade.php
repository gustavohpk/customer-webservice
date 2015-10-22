@extends('layouts.layout')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <div class="row shadow-z-1" style="background-color: #fff">
    	<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">

    	</div>
    </div>
@endsection