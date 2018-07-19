<?php

namespace App\Http\Controllers;

use App\Image;
use App\Building;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //$images = Image::all();
        //return view('building_images.index')->with('images', $images);
        $buildings = Building::all();
        return view('building_images.index')->with('buildings', $buildings);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('images.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        // Validation //
        $validation = Validator::make($request->all(), [
           'description' => 'required',
           'file'     => 'required|image|mimes:jpeg,png|min:1|max:250'
        ]);

        // Check if it fails //
        if( $validation->fails() ){
           return redirect()->back()->withInput()
                            ->with('errors', $validation->errors() );
        }

        $image = new Image;
        // upload the image //
        $file = $request->file('file');
        $destination_path = 'uploads/';
        $filename = str_random(6).'_'.$file->getClientOriginalName();
        $file->move($destination_path, $filename);

        // save image data into database //
        $image->file = $destination_path . $filename;
        //$image->caption = $request->input('caption');
        $image->description = $request->input('description');
        //$image->save();
        
        //ユーザーと関連付ける様、修正する
        Auth::user()->buildings()->images()->create($image->all());

        return redirect('images')->with('message','イメージをアップロードしました。');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {        
        //$image = Image::find($id);
        $images = Building::find($id)->images;
        return view('building_images.show')->with('images', $images);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //$image = Image::find($id);
        //return view('images.edit')->with('image', $image);
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
        // Validation //
        $validation = Validator::make($request->all(), [
              //'caption'     => 'required|regex:/^[A-Za-z ]+$/',
              'description' => 'required',
              'file'    => 'sometimes|image|mimes:jpeg,png|min:1|max:250'
        ]);

        // Check if it fails //
        if( $validation->fails() ){
              return redirect()->back()->withInput()
                               ->with('errors', $validation->errors() );
        }

        // Process valid data & go to success page //
        $image = Image::find($id);

        // if user choose a file, replace the old one //
        if( $request->hasFile('file') ){
             $file = $request->file('file');
             $destination_path = 'uploads/';
             $filename = str_random(6).'_'.$file->getClientOriginalName();
             $file->move($destination_path, $filename);
             $image->file = $destination_path . $filename;
        }

        // replace old data with new data from the submitted form //
        $image->caption = $request->input('caption');
        $image->description = $request->input('description');
        $image->save();
        
        return redirect('images')->with('message','イメージを更新しました。');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $image = Image::find($id);
        $image->delete();
        return redirect('/')->with('message','イメージを削除しました。');
    }
}
