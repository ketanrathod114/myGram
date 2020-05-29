@extends('layouts.app')

@section('content')

<div class="container">

    @foreach($posts as $post)
    <div class="row">
        <div class="col-sm-6 mx-auto">
            <img src="/storage/{{$post->image}}" class="w-100 img-fluid">
        </div>
    </div>
    
    <div class="row">
    
        <div class="col-sm-6 mx-auto">
            <div class="row mt-2 mb-3">

                <div class="col-2">
                    <a href="/profile/{{$post->user->id}}">
                    <img src="{{ $post->user->profile->profileImage() }}" class="w-100 rounded-circle" alt="{{$post->user->username}}">
                    </a>
                </div>
                <div class="col-10 mx-auto">
                    <h6><a class="text-dark font-weight-bold" href="/profile/{{$post->user->id}}">{{$post->user->username}}</a></h6>
                    <p>{{ $post->caption }}</p>
                </div>
            </div>

        </div>

    </div>
    <!-- <hr class='w-100' /> -->

@endforeach

<div class="row">
    <div class="col-12 d-flex justify-content-center">
        {{ $posts->links() }}
    </div>
</div>

</div>

@endsection