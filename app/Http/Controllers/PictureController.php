<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Picture;
class PictureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pictures = Picture::all();
        return view('pictures.index',compact('pictures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pictures.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $newpicture = new Picture();
        $newpicture->title = $data['title'];
        if (!empty($data['description'])){
        $newpicture->image = $data['thumb'];
        $newpicture->description = $data['description'];
        }
        $newpicture->price = $data['price'];
        $newpicture->type = $data['type'];
        $newpicture->series = $data['series'];
            
        $newpicture->save();
        return redirect()->route('pictures.show', $newpicture->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $picture = Picture::findOrFail($id);
        return view('pictures.show',compact('picture'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $picture = Picture::FindOrFail($id);
      return view('pictures.edit',compact('picture'));
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
        $data = $request->all();
        $picture = Picture::FindOrFail($id);
        $picture->title = $data['title'];
        $picture->image = $data['image'];
        $picture->description = $data['description'];
        $picture->price = $data['price'];
        $picture->type = $data['type'];
        $picture->series = $data['series'];
            
        $picture->save();
        return redirect()->route('pictures.show',$picture->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $picture = Picture::FindOrFail($id);
        $picture->delete();
        return redirect()->route('pictures.index');
    }
}
