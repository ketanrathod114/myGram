@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <img src="/storage/{{$post->image}}" class="w-100 img-fluid">
        </div>
        <div class="col-md-4">
        <div class="row align-items-center">
            <div class="col-3 pr-0">
                <img src="{{ $post->user->profile->profileImage() }}" class="w-100 rounded-circle" alt="{{$post->user->username}}">
            </div>

            <div class="col-9">
            <h6><a class="text-dark font-weight-bold" href="/profile/{{$post->user->id}}">{{$post->user->username}}</a></h6>
           
            </div>
        </div>
        <hr class='w-100' />
        <div class="row mt-4">
            <div class="col-sm-12 col-md-10">
                
            <h6><a class="text-dark font-weight-bold" href="/profile/{{$post->user->id}}">{{$post->user->username}}</a></h6>
            <p>{{ $post->caption }}</p>
            </div>
        
        </div>
           
        </div>
    </div>
</div>

@endsection