<?php

namespace App\Http\Controllers;

use App\Models\BookCategory;
use App\Models\Books;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookCategoryController extends Controller
{
    public function category($id){
        $book_category = DB::table('books')->where('categories.id','=',$id)->
        join('book_categories','books.id','=','book_categories.book_id')->
        join('categories','categories.id','=','book_categories.category_id')->
        get();
        // $categories_data = Categories::all()->where('id','=',$id);
        // $book_category = BookCategory::join('books','books.id','=','book_categories.book_id')
        // ->join('categories','categories.id','=','book_categories.category_id')
        // ->get(['books.title','books.author','books.image','categories.name'])
        // ->where('categories.name','=','Historical');
         return view('category', compact('book_category'));
    }

}
