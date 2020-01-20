@extends('layouts.back');
@section('content')
<div>
        <div class="main-card my-2 card">
            <div class="card-body"><h5 class="card-title">Customer</h5>
                <table class="mb-0 table table-sm">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Daddy Name</th>
                        <th>Division Or State</th>                        
                    </tr>
                    </thead>
                    <tbody>
                   @foreach($customers as $index => $data)
                    <tr>
                        <th scope="row">{{ ++$index }}</th>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->daddy_name }}</td>
                        <td>{{ $data->division_or_state }}...</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
 </div>
@endsection