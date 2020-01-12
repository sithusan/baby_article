@extends('layouts.back');
@section('content')
<div class="col-lg-12">
<a href="" class="btn-transition btn btn-outline-primary"> Create Data</a>
        <div class="main-card my-2 card">
            <div class="card-body"><h5 class="card-title">Category</h5>
                <form action="{{ action('ArticleController@store') }}" method = "POST">
                    @csrf
                    <div class="form-row">
                           <div class="col-md-6">
                            <div class="position-relative form-group" @error('title') has-danger @enderror">
                                <label>Title</label>
                                <input class="form-control @error('title') form-control-danger @enderror" name="title" value="{{ old('title') }}"  autocomplete="title" id="title" autofocus type="text">
                            </div>
                            @error('title')
                                    <span class="form-control-feedback">
                                        <strong style="color:red;">{{ $message }}</strong>
                                    </span>
                                    <br>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative form-group" @error('sub_sub_category_id') has-danger @enderror">
                                <label id = "sub_sub_category_id">Sub Sub Category</label>
                                <select class="form-control @error('sub_sub_category_id') form-control-danger @enderror" name="sub_sub_category_id" value="{{ old('sub_sub_category_id') }}" autocomplete="sub_sub_category_id">
                                    @foreach ($subSubCategories as $subSubCategory)
                                    <option value="{{$subSubCategory->id}}"> {{ $subSubCategory->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('sub_sub_category_id')
                                    <span class="form-control-feedback">
                                        <strong style="color:red;">{{ $message }}</strong>
                                    </span>
                                    <br>
                            @enderror
                        </div>

                    </div>

                    <div class="form-row">
                        <div class="col-md-4">
                                <div class="position-relative form-group" @error('video_url') has-danger @enderror">
                                    <label>Video Url</label>
                                    <input class="form-control @error('video_url') form-control-danger @enderror" name="video_url" value="{{ old('video_url') }}"  autocomplete="video_url" id="video_url" autofocus type="text">
                                </div>
                                @error('video_url')
                                        <span class="form-control-feedback">
                                            <strong style="color:red;">{{ $message }}</strong>
                                        </span>
                                        <br>
                                @enderror
                        </div>
                        <div class="col-md-4">
                                <div class="position-relative form-group" @error('description') has-danger @enderror">
                                    <label>Description</label>
                                    <input class="form-control @error('description') form-control-danger @enderror" name="description" value="{{ old('description') }}"  autocomplete="description" id="description" autofocus type="text">
                                </div>
                                @error('description')
                                        <span class="form-control-feedback">
                                            <strong style="color:red;">{{ $message }}</strong>
                                        </span>
                                        <br>
                                @enderror

                        </div>
                        <div class="col-md-4">
                                <div class="position-relative form-group" @error('summary') has-danger @enderror">
                                    <label>Summary</label>
                                    <input class="form-control @error('summary') form-control-danger @enderror" name="summary" value="{{ old('summary') }}"  autocomplete id="summary" autofocus type="text">
                                </div>
                                @error('summary')
                                        <span class="form-control-feedback">
                                            <strong style="color:red;">{{ $message }}</strong>
                                        </span>
                                        <br>
                                @enderror

                        </div>

                 </div>
                 <button class="btn btn-primary">Save</button>

                        
                </form>
            </div>
        </div>
 </div>
@endsection