@extends('layouts.back');
@section('content')
<div class="col-lg-12">
<a href="" class="btn-transition btn btn-outline-primary"> Create Data</a>
        <div class="main-card my-2 card">
            <div class="card-body"><h5 class="card-title">Category</h5>
                <form action="{{ action('CategoryController@update',$category->id) }}" method = "POST">
                    <input type="hidden" value = "PUT" name = "_method">
                    @csrf
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label>Category</label>
                                <input name="name" type="text" class="form-control" value = "{{ $category->name }}">
                            </div>
                            <button class = "btn btn-primary"> Save </button>
                        </div>
                </form>
            </div>
        </div>
 </div>
@endsection