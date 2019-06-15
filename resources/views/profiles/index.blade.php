@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://upload.wikimedia.org/wikipedia/commons/9/9a/Laravel.svg" alt="">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>
                    {{ $user->username }}
                </h1>
                <a href="#">Add New Post</a>

            </div>
            <div class="d-flex">
                <div class="pr-4"><strong>153</strong> posts</div>
                <div class="pr-4"><strong>24k</strong> followers</div>
                <div class="pr-4"><strong>212</strong> following</div>
            </div>
            <div class="pt-4" style="font-weight: bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#"> {{ $user->profile->url }}</a></div>
        </div>
    </div>
    <div class="row pt-4">
        <div class="col-4"><img src="https://via.placeholder.com/350" class="p-1" alt=""></div>
        <div class="col-4"><img src="https://via.placeholder.com/350" class="p-1" alt=""></div>
        <div class="col-4"><img src="https://via.placeholder.com/350" class="p-1" alt=""></div>
    </div>
</div>
@endsection