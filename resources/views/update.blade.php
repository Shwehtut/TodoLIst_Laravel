@extends('master')
@section('content')

    <div class="container shadow-sm">
        <div class="row mt-5">
            <div class="col-6  offset-3 " >
                <div class="mt-3 mb-2">
                  <a href="{{route('post#home')}}" class="text-black">  <i class="fa-solid fa-arrow-left"></i></a>
                </div>
               <h3>{{ $post['title']}}</h3>
               <p class="text-muted">{{$post['description']}}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-3 offset-8 my-3 ">
                <a href="{{route('post#editPage',$post['id'])}}">
                    <button class="btn bg-black text-white">Edit</button>
                </a>
            </div>
        </div>
    </div>

@endsection
