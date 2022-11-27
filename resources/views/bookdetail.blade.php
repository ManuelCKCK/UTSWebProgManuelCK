@extends('navbar')
@include('header')


@section('title','bookdetail')


@foreach ($books as $detail)
<center>
<div class="card shadow-sm p-3 mb-5 bg-white rounded" style="width: 24rem;">
    <img src={{ url('storage/'.$detail->image)}} class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="title">{{$detail->title}}</h5>
        <p class="author">Author: {{$detail->author}}</p>
            @foreach($publishers as $publish)
            <p class="publisher">Publisher: {{$publish->name}}</p>
             @endforeach
             <p class="synopsis">Year: {{$detail->year}}</p>
        <p class="synopsis">Synopsis: {{$detail->synopsis}}</p>
    </div>
</div>     
</center>       
@endforeach

@include('footer')