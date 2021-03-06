@extends('layouts.app')

@section('title', 'Indicator Groups')
@section('subtitle', 'Define indicators groups to be shown.')

@section('content')
<div class="container">
    <div class="row">
        @include('admin.sidebar')
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">Group {{ $group->id }}</div>
                <div class="panel-body">

                    <a href="{{ url('admin/groups/' . $group->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Group"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                    {!! Form::open([
                    'method'=>'DELETE',
                    'url' => ['admin/groups', $group->id],
                    'style' => 'display:inline'
                    ]) !!}
                    {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                    'type' => 'submit',
                    'class' => 'btn btn-danger btn-xs',
                    'title' => 'Delete Group',
                    'onclick'=>'return confirm("Confirm delete?")'
                    ))!!}
                    {!! Form::close() !!}
                    <br/>
                    <br/>

                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <th>ID</th>
                                    <td>{{ $group->id }}</td>
                                </tr>
                                <tr>
                                    <th> Code </th>
                                    <td> {{ $group->code }} </td>
                                </tr>
                                @foreach(config('translatable.locales') as $locale)
                                <tr> 
                                    <th> Title {{$locale}} </th>
                                    <td> {{ $aggregator->translate($locale)->title }} </td>
                                </tr>
                                <tr>
                                    <th> Description {{$locale}} </th>
                                    <td> {{ $aggregator->translate($locale)->description }} </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection