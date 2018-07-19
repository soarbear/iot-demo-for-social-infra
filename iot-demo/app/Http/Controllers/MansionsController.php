<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Mansion;//モデル使用を宣言
use Input;

class MansionsController extends Controller
{
    /**
      * @var Mansion
      */
    //protected $mansion;

    /**
      * @param Building &building
      */
    public function __construct(Mansion $mansion)
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
        // get all the mansions
        $mansions = Mansion::all();//記録を取得
        // load the view and pass the mansions
        return view('mansions.index', compact('mansions'));//ビューを呼び出す、引数を渡す
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
        $mansion = Mansion::find($id);
        // show the view and pass the building to it
        return view('mansions.show', compact('mansion'));//ビューを呼び出す、引数を渡す
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
