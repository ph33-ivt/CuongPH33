<?php

namespace App\Http\Controllers;

use App\Breed;
use Illuminate\Http\Request;

class BreedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        // c1
        //$breed = Breed::find($id);
        //\DB::enableQueryLog();
        //$listCats = $breed->cats;
        //show câu lệnh sql dd(\DB::getQueryLog());
        //dd($breed,$listCats);
        // c2
        $breed = Breed::with(['cats'  => function ($query){
            return $query->where('age','>',7);
                        //->where('name','like','%'.'Dillon'.'%')->get();
        }
        ])->find($id)
           ->toArray();//có thể dùng để show ngắn gọn hơn find($id)->toArray()
       //dd($breed, $breed->name, $breed->cats[0]->name);
        //c1
        //return view('breed.show_cat',compact('breed','listCats'));
        //c2
        return view('breed.show_cat',compact('breed'));
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
