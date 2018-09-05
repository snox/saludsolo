@extends('layouts.app')

@section('content')
    <div class="container">
    <table class="table table-bordered table-striped table-hover" id="data-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Name</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($result as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->created_at }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>
@endsection