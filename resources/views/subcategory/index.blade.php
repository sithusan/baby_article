@extends('layouts.back');
@section('content')
<div class="col-lg-12">
<a href="{{ action('SubCategoryController@create') }}" class="btn-transition btn btn-outline-primary"> Create SubCategory</a>
        <div class="main-card my-2 card">
            <div class="card-body"><h5 class="card-title">Category</h5>
                <table class="mb-0 table table-sm">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Category Name</th>
                        <th>Name</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                   @foreach($subCategories as $index => $data)
                    <tr>
                        <th scope="row">{{ ++$index }}</th>
                        <td>{{ $data->category->name }}</td>
                        <td>{{ $data->name }}</td>
                        <td><a href="{{ action('SubCategoryController@edit',$data->id) }}" class="btn btn-outline-warning"> Edit</a></td>
                        <td>
                            <form action="{{ action('SubCategoryController@destroy',$data->id) }}" method="POST">
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