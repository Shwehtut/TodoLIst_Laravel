@extends('master')
@section('content')

    <div class="container shadow-sm">
        <div class="row mt-5">
            <div class="col-6  offset-3 " >
                <div class="mt-3 mb-2">
                  <a href="{{route('post#updatePage',$post['id'])}}" class="text-black">  <i class="fa-solid fa-arrow-left"></i></a>
                </div>
                <form action="{{route('post#updatePost')}}" method="POST">
                    @csrf
                    <input type="hidden" name="postId" value="{{$post['id']}}" class="form-control">
                    <input type="text" name="postTitle" class="form-control my-3" placeholder="Enter post Title" value="{{$post['title']}}" required>
                    <textarea name="postDescription" class="form-control" cols="30" rows="10" placeholder="Enter post Description...." required>
                        {{$post['description']}}
                    </textarea>
                    <input type="submit" value="Update" class="btn bg-black text-white my-3 float-end">
                </form>
            </div>
        </div>
    </div>

@endsection
