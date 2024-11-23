@extends('master')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-5 ">
                <div class="p-5">
                    <form action={{route('post#create')}} method="POST">
                        @csrf
                        <div class="text-group mb-3">
                            <label for="" class="">Post Title</label>
                            <input type="text" name="postTitle" class="form-control" placeholder="Enter Post Title....." required>
                        </div>
                        <div class="text-group mb-3">
                            <label for="">Post Description</label>
                            <textarea name="postDescription" class="form-control" cols="30" rows="10" placeholder="Enter Post Description...." required></textarea>
                        </div>
                        <div class=" mb-3">
                            <input type="submit" value="Create" class=" btn btn-danger">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-7 ">
                <div class="data-container ">
                   @foreach ($posts as $item )
                    <div class="post p-3 shadow-sm mb-3">
                        <h5>{{$item['title']}}</h5>
                        <p>{{ Str::words($item['description'],10,'...')}}</p>
                        <div class="text-end ">
                            <a href="{{route('post#delete',$item['id'])}}">
                                <button class="btn btn-sm bg-danger me-1 text-white"><i class="fa-solid fa-trash me-1"></i>Delete</button>
                            </a>
                            <a href="{{route('post#updatePage',$item['id'])}}">
                                <button class="btn btn-sm bg-primary text-white"><i class="fa-solid fa-circle-info me-1"></i>See More</button>
                            </a>
                        </div>
                    </div>
                   @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
