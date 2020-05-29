@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3 px-3 text-center">
            <img src="{{ $user->profile->profileImage() }}" class="rounded-circle w-100 mx-auto" />
        </div>
        <div class="col-md-9 px-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h3>{{ $user->username }}</h3>
                <follow-button user-id="{{ $user->id}}" follows="{{ $follows }}"></follow-button>

                @can('update', $user->profile)
                <a href="/profile/{{ $user->id }}/edit" class="btn btn-info">Edit Profile</a>
                @endcan
            </div>

            <div class="d-flex">
                <div class="pr-3"><strong>{{ $postCount }}</strong> posts</div>
                <div class="px-3"><strong>{{ $followersCount }}</strong> followers</div>
                <div class="px-3"><strong>{{ $followingCount  }}</strong> following</div>
            </div>

            <div class="pt-4 font-weight-bold">
                {{ $user->profile->title}}
            </div>
            <div>
                {{ $user->profile->description }}
            </div>
            <div>
                <a href="#" class="btn-link">{{ $user->profile->url }}</a>
            </div>
        </div>
    </div>
    <div class="row  pt-4">
        @foreach ($user->posts as $post)
        <div class="col-md-4 pb-4">
            <a href="/p/{{ $post->id }}">
        <img class="w-100" src="/storage/{{$post->image}}">
        </a>
        </div>
        

        @endforeach
      </div>
</div>
@endsection