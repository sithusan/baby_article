@extends('layouts.marchant');
@section('content')
<div class="col-lg-12">
<a href="" class="btn-transition btn btn-outline-primary"> Create Data</a>
        <div class="main-card my-2 card">
            <div class="card-body"><h5 class="card-title">Table sizing</h5>
                <table class="mb-0 table table-sm">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th> Name</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                   
                    <tr>
                        <th scope="row">1</th>
                        <td>Test</td>
                        <td><a href="" class="btn btn-outline-warning"> Edit</a></td>
                        <td>
                            <form action="" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" value="DELETE" name="_method">
                                <button class="btn btn-outline-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                        
                    </tbody>
                </table>
            </div>
        </div>
 </div>
@endsection