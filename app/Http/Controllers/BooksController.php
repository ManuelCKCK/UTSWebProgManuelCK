<?php

namespace App\Http\Controllers;

use App\Models\BookCategory;
use Illuminate\Http\Request;
use App\Models\Books;
use App\Models\Publishers;
use Illuminate\Support\Facades\DB;
class BooksController extends Controller
{
    public function index(){
        $book_data = Books::all();

        return view('home',compact('book_data'));
    }
    public function bookdetail($id){
        $book_detail = Books::all()->where('id','=',$id);
        $book_publisher = Publishers::all()->where('id','=',$id);
        return view('bookdetail' , ['books' =>$book_detail,'publishers'=>$book_publisher]);

        // $book_detail = Books::join('publishers','books.publisher_id','=','publishers.id')->where('books.id','=',$id)
        // ->get('publishers.name','books.title','books.author','books.synopsis','books.year','books.image');
        // return view('bookdetail' , compact('book_detail'));
    }
    

}
