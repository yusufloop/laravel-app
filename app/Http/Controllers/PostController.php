<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$posts = DB::statement('SELECT * FROM posts');//SQL injection code. DB facade. select from posts table. return true if okay.
        //$posts = DB::select('SELECT * FROM posts WHERE id = ?', [1]);//array , not direct id 1.
        //$posts = DB::select('SELECT * FROM posts WHERE id = :id', ['id' => 1]);//array , by var id ,to array id 1.

        // $posts = DB::insert('INSERT INTO posts (title, excerpt, body, image_path, is_published, min_to_read) VALUES (?, ?, ?, ?, ?, ?)', [
        //     'TEST', 'TEST', 'TEST', 'TEST', TRUE, 1
        // ]); //query builder, insert method, facade DB.
        
        // $posts = DB::update('UPDATE posts set body = ? where id = ?', [
        //     'Body 2' , 203
        // ]); //update field body id is 203. ? maksudnya pilihan

        //$posts = DB::delete('DELETE FROM posts WHERE id = ?', ['203']); //delete id 203

        //$posts = DB::table('posts')
            //->select('title','body') //select title only
            //->where('id', '>', 50) //get value where id is greater than 50
            //->where('is_published', true) //cari field is_published yang value true shj. di database
            //->whereBetween('min_to_read',  [2,6]) //cari dalam min_to_read dalam range 2-6, maksudnya 2,3,4,5,6 value.
            //->whereNotBetween('min_to_read',  [2,6]) //cari dalam min_to_read dalam range bukan 2-6, maksudnya 0,1,7,8,9.... value.
            //->whereIn('min_to_read',  [2,6,8]) //cari dalam min_to_read dalam  2,6,8 value sahaja,
            //->whereNull('excerpt')// cari dalam field exceprt , data yang NULL
            //->whereNotNull('excerpt')// cari dalam field exceprt , data yang not NULL

            // ->select('min_to_read')
            // ->distinct()// find unique value in field min_to_read

            //->orderBy('id', 'desc')// keluarkan data in orderBy or in descending . id last hingga id first.
            //->skip(30) //skip 30 row before take data
            //->take(10) //take only 10 data after 30 row , 31-40
            // ->inRandomOrder() //randomkan id punya order. bekecamukkan id punya susunan
            // -> get(); //get method to get value

            // ->where('id', 100)
            // ->first();// find first data with the limit of 1

            //->find(100); //find primary key 100 on posts table

            // ->where('id',100) //find id 100 value untuk field body
            // ->value('body');

            // ->where('id', '>' , 50) // cari range lebih daripafa 50
            // ->count(); //count semua yang dicari

            //->min('min_to_read'); //cari value dalam field 'min_to_read'

            //->max('min_to_read'); //cari max value dalam field 'min_to_read'

            //->sum('min_to_read'); //sum kan semua value

            //->avg('min_to_read'); //cari average of all of min_to_read value

           // ->get();

        //return view('blog.index')->with('posts', $posts); //call blade blog.index with macm where sikit. posts string and var $posts
        //return view('blog.index', compact('posts'));
        return view('blog.index',[
            //'posts' => $posts //first method, ambik $post yang di comment
            'posts' => DB::table('posts')->get() //second method
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
