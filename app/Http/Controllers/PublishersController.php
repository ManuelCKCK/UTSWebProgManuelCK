<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Books;
use App\Models\Publishers;
use Illuminate\Http\Request;

class PublishersController extends Controller
{
    public function publisher($id){
        $book_detail = Books::all()->where('id','=',$id);
        $book_publisher = Publishers::all()->where('id','=',$id);
        return view('publisher' , ['books' =>$book_detail,'publishers'=>$book_publisher]);

    }
}
