@extends('layouts.back');
@section('content')
<div class="col-lg-12">
<a href="" class="btn-transition btn btn-outline-primary"> Create Data</a>
        <div class="main-card my-2 card">
            <div class="card-body"><h5 class="card-title">Category</h5>
                <form action="{{ action('SubSubCategoryController@update',$subSubCategory->id) }}" method = "POST">
                    <input type="hidden" value = "PUT" name = "_method">
                    @csrf
                    <div class="form-row">
                        <div class="col-md-6">
                                <div class="position-relative form-group">
                                        <label>Category</label>
                                        <select name="sub_category_id" class="form-control">
                                            @foreach ($subCategories as $subCategory)
                                                <option value="{{ $subCategory->id}}" class="form-control" {{ $subCategory->id == $subSubCategory->sub_category_id ? 'selected' : ''}}>
                                                     {{ $subCategory->name }}
                                                </option>                                    
                                            @endforeach
                                        </select>
                                    </div>
        
                                    <div class="position-relative form-group" @error('name') has-danger @enderror">
                                        <label>Category</label>
                                        <input class="form-control @error('name') form-control-danger @enderror" name="name" value="{{ old('name', $subSubCategory->name) }}"  autocomplete="name" id="name" autofocus type="text">
                                    </div>
                                    @error('name')
                                            <span class="form-control-feedback">
                                                <strong style="color:red;">{{ $message }}</strong>
                                            </span>
                                            <br>
                                    @enderror
                            <button class = "btn btn-primary"> Save </button>
                        </div>
                </form>
            </div>
        </div>
 </div>
@endsection