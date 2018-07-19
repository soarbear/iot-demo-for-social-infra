<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\House;//モデル使用を宣言
use Input;

class HousesController extends Controller
{
    /**
      * @var House
      */
    //protected $house;

    /**
      * @param Building &building
      */
    public function __construct(House $house)
    {
        //$this->building = $building;
        $this->middleware('auth');//追加、認証制御
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        // get all the houses
        $houses = House::all();//記録を取得
        // load the view and pass the houses
        return view('houses.index', compact('houses'));//ビューを呼び出す、引数を渡す
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        // get the building
        $house = House::find($id);
        // show the view and pass the building to it
        return view('houses.show', compact('house'));//ビューを呼び出す、引数を渡す
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
