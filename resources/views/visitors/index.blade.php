@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Visitors Info <a href="{{ route('visitors.create') }}" class="float-right btn btn-primary btn-sm">create</a></div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Sl no.</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Age</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($visitors  as $key => $visitor)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $visitor->name }}</td>
                            <td>{{ $visitor->address }}</td>
                            <td>{{ $visitor->age }}</td>
                            <td>
                                <a href="{{ url('visitors/'.$visitor->id) }}" class="btn btn-info btn-sm">Details</a>
                                <a href="" class="btn btn-warning btn-sm">Edit</a>
                                <a href="" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
