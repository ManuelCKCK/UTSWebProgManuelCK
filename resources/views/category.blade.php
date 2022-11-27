@extends('navbar')
@include('header')


@section('title','bookcategory')
@foreach ($book_category as $detail)
<center>
<div class="card shadow-sm p-3 mb-5 bg-white rounded" style="width: 24rem;">
    <img src={{ url('storage/'.$detail->image)}} class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="title">{{$detail->title}}</h5>
        <p class="author">Author: {{$detail->author}}</p>
            <p class="Category">Category: {{$detail->name}}</p>
            <button type="button" class="btn btn-primary">
                <a style="color: white" href={{route('bookdetail', ['id' => $detail->id])}}>Detail</a>
                </button>

    </div>
</div>     
</center>       
@endforeach

@include('footer')