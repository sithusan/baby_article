@extends('layouts.back');
@section('content')
<div class="col-lg-12">
<a href="{{ action('SubSubCategoryController@create') }}" class="btn-transition btn btn-outline-primary"> Create SubSubCategory</a>
        <div class="main-card my-2 card">
            <div class="card-body"><h5 class="card-title">SubSubCategory</h5>
                <table class="mb-0 table table-sm">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Sub Category Name</th>
                        <th>Name</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                   @foreach($subsubCategories as $index => $data)
                    <tr>
                        <th scope="row">{{ ++$index }}</th>
                        <td>{{ $data->subCategory->name }}</td>
                        <td>{{ $data->name }}</td>
                        <td><a href="{{ action('SubSubCategoryController@edit',$data->id) }}" class="btn btn-outline-warning"> Edit</a></td>
                        <td>
                            <form action="{{ action('SubSubCategoryController@destroy',$data->id) }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" value="DELETE" name="_method">
                                <button class="btn btn-outline-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
 </div>
@endsection