@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card p-5">
                <h2 class="text-center  font-weight-light">Add New Post</h2>

                <div class="card-body">

                    <form action="/p" enctype="multipart/form-data" method="post">
                        @csrf
                        <div class="form-group row">
                            <!-- <label for="image" class="col-form-label ">Upload image</label> -->
                            <!-- <input type="file" class="form-control-file" id="image" name="image"> -->
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Upload</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="form-control-file" id="image" name="image">
                                    <label class="custom-file-label" for="image">Upload image</label>
                                </div>
                            </div>
                            @error('image')

                            <strong>{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="form-group row">
                            <label for="caption" class="col-form-label ">Post Caption</label>


                            <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}" required autocomplete="caption" autofocus>

                            @error('caption')

                            <strong>{{ $message }}</strong>

                            @enderror

                        </div>
                        <div class="form-group row">
                            <button class="btn btn-primary">Add New Post</button>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection