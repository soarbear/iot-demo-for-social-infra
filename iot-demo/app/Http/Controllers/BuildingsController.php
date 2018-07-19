<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Building;//モデル使用を宣言
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class BuildingsController extends Controller
{
    /**
      * @var Building
      */
    protected $building;

    /**
      * @param Building &building
      */
    public function __construct(Building $building)
    {
        $this->middleware('auth');//追加、認証制御
        $this->building = $building;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        // get all the buildings
        $buildings = Building::all();//記録を取得
        // load the view and pass the buildings
        return view('buildings.index', compact('buildings'));//ビューを呼び出す、引数を渡す
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        // load the create form (app/views/dashboard/create.blade.php)
        return view('buildings.create');//ビューを呼び出す、引数を渡す
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        // validate定義
        $rules = array(
            'b_data4' => 'required',
            'b_data5' => 'required',
            'b_data6' => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        // validate実行
        if ($validator->fails()) {
            return Redirect::to('buildings/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // パラメータを取得して保存
            //$data = $request->all();
            //$this->building->fill($data);
            //$this->building->save();
            //ユーザーと関連付ける様、修正する
            Auth::user()->buildings()->create($request->all());
            // 一覧画面へ遷移
            Session::flash('message', '案件を作成しました');
            return Redirect::to('buildings');
        }
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
        $building = Building::find($id);
        // show the view and pass the building to it
        return view('buildings.show', compact('building'));//ビューを呼び出す、引数を渡す
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        // get the building
        $building = $this->building->find($id);
        // show the edit form and pass the building
        //return view('buildings.edit', compact('building'));//ビューを呼び出す、引数を渡す
        return view('buildings.edit')->withBuilding($building);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        // validate
        $rules = array(
            'b_data4' => 'required',
            'b_data5' => 'required',
            'b_data6' => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);
        // process the login
        if ($validator->fails()) {
            return Redirect::to('buildings/' . $id . '/edit')
                    ->withErrors($validator)
                    ->withInput(Input::except('password'));
        } else {
            $building = $this->building->find($id);
            $data = $request->all();
            $building->fill($data);
            $building->save();
            // redirect
            Session::flash('message', '案件を更新しました');
            return Redirect::to('buildings');
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        // delete
        $building= Building::find($id);
        $building->delete();
        // redirect
        Session::flash('message', 'データを削除しました');
        return Redirect::to('buildings');
    }
}
