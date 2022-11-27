@extends('navbar')
@include('header')


@section('title','home')

<style>
    .content{

    }


</style>

<div class="d-flex flex-wrap justify-content-center">

    @foreach($book_data as $book)
        <div class="card m-4" style="width: 200px;" style="height: 150px">
            <img src={{ url('storage/'.$book->image)}} class="card-img-top" alt="...">
            <div class="card-header">
            </div>
                <div class="card-body">
                <h5 class="card-title">{{$book->title}}</h5>
                <p class="card-text text-success">{{$book->author}}</p>
                <p class="card-text">{{$book->synopsis}}</p>
                </div>
                <button type="button" class="btn btn-primary">
                <a style="color: white" href={{route('bookdetail', ['id' => $book->id])}}>Detail</a>
                </button>
                
        </div>
    @endforeach


</div>




@include('footer')