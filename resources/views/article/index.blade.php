@extends('layouts.back');
@section('content')
<div class="col-lg-12">
<a href="{{ action('ArticleController@create') }}" class="btn-transition btn btn-outline-primary"> Create Article</a>
        <div class="main-card my-2 card">
            <div class="card-body"><h5 class="card-title">Article</h5>
                <table class="mb-0 table table-sm">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>SubSubCategory</th>
                        <th>Title</th>
                        <th>Summary</th>
                        <th>Video URl</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                   @foreach($articles as $index => $data)
                    <tr>
                        <th scope="row">{{ ++$index }}</th>
                        <td>{{ $data->subsubcategory->name }}</td>
                        <td>{{ $data->title }}</td>
                        <td>{{ $data->summary }}...</td>
                        <td>{{ $data->video_url }}</td>
                        <td><a href="{{ action('ArticleController@edit',$data->id) }}" class="btn btn-outline-warning"> Edit</a></td>
                        <td>
                            <form action="{{ action('ArticleController@destroy',$data->id) }}" method="POST">
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
