<?php

namespace App\Http\Controllers;

use App\Cat;
use Illuminate\Http\Request;

class CatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cat = Cat::all(); // select * from cats;
        $breedId = 1;

        //dd($cat);

        return view('cat.list_cat', compact('cat', 'breedId'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cat.form_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        /***
         * loại bỏ trường không muốn insert vào data
         */
        //$data = $request->except('_token');

        /***
         *  chọn những trường muốn insert vào data
         */
        $data = $request->only('name', 'age', 'breed_id');
        /**
         * insert dữ liệu vào data
         */
        //c1 hàm insert
        //$result = Cat::insert($data);

        //c2 hàm create
       $cat = Cat::create($data);

        //dd($result);

        //tạo nhiều record (insert nhiều dòng một lúc)
//        $data = [[
//            'name' => 'aaa',
//            'age' => 12,
//            'breed_id' => 1,
//            'created_at' => now(),
//            'updated_at' =>now()
//        ],
//        [
//            'name' => 'aaa',
//            'age' => 12,
//            'breed_id' => 1,
//            'created_at' => now(),
//            'updated_at' =>now()
//        ]];
//        Cat::insert($data);
        return redirect()->route('list_cat');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat = Cat::find($id);
        $cat->delete();

        return redirect()->route('list_cat');
    }
}
