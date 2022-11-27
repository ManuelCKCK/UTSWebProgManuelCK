@extends('navbar')
@include('header')

@section('title','publisher')
@foreach ($publishers as $detail)
<center>
<div class="card shadow-sm p-3 mb-5 bg-white rounded" style="width: 24rem;">
    <div class="card-body">
        <h5 class="title">{{$detail->name}}</h5>
        <h5 class="title">{{$detail->address}}</h5>
        <h5 class="title">{{$detail->phone}}</h5>
        <h5 class="title">{{$detail->email}}</h5>
        @foreach ($books as $book)
        <center>
            <br>
            <div class="card m-4" style="width: 200px;" style="height: 150px">
            <img src={{ url('storage/'.$book->image)}} class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="title">{{$book->title}}</h5>
                <p class="card-text text-success">{{$book->author}}</p>
                <button type="button" class="btn btn-primary">
                    <a style="color: white" href={{route('bookdetail', ['id' => $book->id])}}>Detail</a>
                    </button>
            </div>
        </div>    
         
            
        @endforeach   
        </center>  
    </div>
</div>  
  

@endforeach

@include('footer')