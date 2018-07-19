<?php

namespace App\Http\Controllers;

use App\User;//モデル使用を宣言
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class UsersController extends Controller
{
    /**
      * @var User
      */
    protected $User;

    /**
      * @param User &user
      */
    public function __construct(User $user)
    {
        $this->middleware('auth');//追加、認証制御
        $this->user = $user;
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        // get all the users
        $users = User::all();//記録を取得
        // load the view and pass the users
        return view('users.index', compact('users'));//ビューを呼び出す、引数を渡す
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        // load the create form (app/views/dashboard/create.blade.php)
        return view('users.create');//ビューを呼び出す、引数を渡す
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
            'name'             => 'required',   
            'email'            => 'required|email', 
            'password'         => 'required',
            'password_confirm' => 'required|same:password'
        );
        $validator = Validator::make(Input::all(), $rules);

        // validate実行
        if ($validator->fails()) {
            return Redirect::to('users/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // パラメータを取得して保存
            $data = $request->all();
            $this->user->fill($data);
            $this->user->save();
            //ユーザーと関連付ける様、修正する
            //Auth::user()->users()->create($request->all());
            // 一覧画面へ遷移
            Session::flash('message', '担当者の追加ができました');
            return Redirect::to('users');
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
        // get the user
        $user = User::find($id);
        // show the view and pass the user to it
        return view('users.show', compact('user'));//ビューを呼び出す、引数を渡す
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        // get the user
        $user = $this->user->find($id);
        // show the edit form and pass the user
        //return view('users.edit', compact('user'));//ビューを呼び出す、引数を渡す
        return view('users.edit')->withUser($user);
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
        // validate
        $rules = array(
            'name'             => 'required',   
            'email'            => 'required|email', 
            'password'         => 'required',
            'password_confirm' => 'required|same:password'
        );
        $validator = Validator::make(Input::all(), $rules);
        // process the login
        if ($validator->fails()) {
            return Redirect::to('users/' . $id . '/edit')
                    ->withErrors($validator)
                    ->withInput(Input::except('password'));
        } else {
            $user = $this->user->find($id);
            $data = $request->all();
            $user->fill($data);
            $user->save();
            // redirect
            Session::flash('message', '担当者情報が更新できました');
            return Redirect::to('users');
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
        $user= User::find($id);
        $user->delete();
        // redirect
        Session::flash('message', 'データ削除しました');
        return Redirect::to('users');
    }
}
