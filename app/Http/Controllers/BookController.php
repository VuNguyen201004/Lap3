<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function index()
    {
        $books = DB::table('books')
            ->join('categories', 'books.category_id', '=', 'categories.id')
            ->select('books.*', 'categories.name')
            ->orderByDesc('books.id')
            ->get();

        // Trả về view với dữ liệu sách
        return view('books.index', compact('books'));
    }


    //Hien thi form create
    public function create()
    {
        $categories = DB::table('categories')->get();
        return view('books.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $data = [
            'title' => $request->input('title'),
            'thumbnail' => $request->input('thumbnail'),
            'author' => $request->input('author'),
            'publisher' => $request->input('publisher'),
            'publication' => $request->input('publication'),
            'price' => $request->input('price'),
            'quanlity' => $request->input('quanlity'),
            'category_id' => $request->input('category_id'),
        ];

        DB::table('books')->insert($data);
        return redirect()->route('books.index');
    }
    
}
