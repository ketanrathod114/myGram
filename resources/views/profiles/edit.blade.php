@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card p-5">
                <h2 class="text-center  font-weight-light">Edit Profile</h2>

                <div class="card-body">

                    <form action="/profile/{{ $user->id}}" enctype="multipart/form-data" method="post">
                        @csrf
                        @method('patch')
                        <div class="form-group row">
                            <!-- <label for="image" class="col-form-label ">Upload image</label> -->
                            <!-- <input type="file" class="form-control-file" id="image" name="image"> -->
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Upload</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="form-control-file" id="image" name="image">
                                    <label class="custom-file-label" for="image">Profile image</label>
                                </div>
                            </div>
                            @error('image')

                            <strong>{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="form-group row">
                            <label for="title" class="col-form-label ">Title</label>
                            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') ?? $user->profile->title }}" required autocomplete="title" autofocus>
                            @error('title')
                            <strong>{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="form-group row">
                            <label for="description" class="col-form-label ">Descriptiom</label>
                            <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') ?? $user->profile->description }}" required autocomplete="description" autofocus>
                            @error('description')
                            <strong>{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="form-group row">
                            <label for="url" class="col-form-label ">Url</label>
                            <input id="url" type="text" class="form-control @error('url') is-invalid @enderror" 
                            name="url" value="{{ old('url')  ?? $user->profile->url }}" required autocomplete="url" autofocus>
                            @error('url')
                            <strong>{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="form-group row">
                            <button class="btn btn-primary">Save Profile</button>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection