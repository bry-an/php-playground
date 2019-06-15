@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://upload.wikimedia.org/wikipedia/commons/9/9a/Laravel.svg" alt="">
        </div>
        <div class="col-9 pt-5">
            <div>
                <h1>
                    {{ $user->username }}
                </h1>
            </div>
            <div class="d-flex">
                <div class="pr-4"><strong>153</strong> posts</div>
                <div class="pr-4"><strong>24k</strong> followers</div>
                <div class="pr-4"><strong>212</strong> following</div>
            </div>
            <div class="pt-4" style="font-weight: bold">bry</div>
            <div>I'm an interesting person who finds other things and people interesting and I'd like to learn more about interesting things.</div>
            <div><a href="#">www.bryanyunis.com</a></div>
        </div>
    </div>
    <div class="row pt-4">
        <div class="col-4"><img src="https://via.placeholder.com/350" class="p-1" alt=""></div>
        <div class="col-4"><img src="https://via.placeholder.com/350" class="p-1" alt=""></div>
        <div class="col-4"><img src="https://via.placeholder.com/350" class="p-1" alt=""></div>
    </div>
</div>
@endsection