@extends('master')
@section('title', 'Edit a post')

@section('content')
    <div class="container col-md-10 col-md-offset-2">
        <div class="card mt-5">
            <div class="card-header ">
                <h5 class="float-left">Edit a post</h5>
                <div class="clearfix"></div>
            </div>
            <div class="card-body mt-2">
                <form method="post">

                @foreach ($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error }}</p>
                @endforeach

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                    <label for="title" class="col-lg-12 control-label">Title</label>
                    <div class="col-lg-12">
                        <input type="text" class="form-control" id="title" placeholder="Title" name="title" value="{{ $post->title }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="content" class="col-lg-12 control-label">Content</label>
                    <div class="col-lg-12">
                        <textarea class="form-control" rows="3" id="content" name="content">{{ $post->content }}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="categories" class="col-lg-12 control-label">Categories</label>

                    <div class="col-lg-12">
                        <select class="form-control" id="category" name="categories[]" multiple>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}"  @if(in_array($category->id, $selectedCategories))
                                selected="selected" @endif >{{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                        <button type="reset" class="btn btn-default">Cancel</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
@endsection