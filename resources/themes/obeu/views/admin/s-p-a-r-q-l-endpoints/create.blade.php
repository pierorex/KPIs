@extends('layouts.app')

@section('title', 'SPARQL Endpoints')
@section('subtitle', 'Define SPARQL Endpoint to be used.')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Create New SPARQL Endpoint</div>
                    <div class="panel-body">
                        <a href="{{ url('/admin/s-p-a-r-q-l-endpoints') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::open(['url' => '/admin/s-p-a-r-q-l-endpoints', 'class' => 'form-horizontal', 'files' => true]) !!}

                        @include ('admin.s-p-a-r-q-l-endpoints.form')

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
