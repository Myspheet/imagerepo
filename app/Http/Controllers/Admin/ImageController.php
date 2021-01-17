<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('dashboard.index')->with('images', auth()->user()->images);
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

        if($request->type == 'private'){
            $image = Image::create([
                'user_id' => auth()->user()->id,
                'public' => false
            ]);
            $filenameToStore = $this->uploadImage($request->file('file'), $image->id, 'private');
            $image->image = $filenameToStore;
            $image->save();
        }else {
            $image = Image::create([
                'user_id' => auth()->user()->id,
                'public' => false
            ]);
            $filenameToStore = $this->uploadImage($request->file('file'), $image->id, 'public');
            $image->image = $filenameToStore;
            $image->save();

        }
        return response()->json($request->type == 'private');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        //
    }

    public function createPublic(Request $request)
    {
        return view('dashboard.addImage')->with('type', 'public');
    }

    public function createPrivate(Request $request)
    {
        return view('dashboard.addImage')->with('type', 'private');
    }

    protected function uploadImage($image, $imageID, $path){

        $extension = $image->extension();
        $filenameToStore = md5($imageID) . '.' . $extension;
        $image->storeAs($path, $filenameToStore);
        return $filenameToStore;
    }

    public function getImage(Image $image)
    {
        // dd($file);
        if(auth()->user()->id !== $image->id){
            return null;
        }
        $storagePath = storage_path('app/private/' . $image->image);
        return response()->file($storagePath);
    }

}
