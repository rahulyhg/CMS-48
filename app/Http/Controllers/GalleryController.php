<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\GalleryRequest;
use App\Repositories\GalleryRepository;

use App\Models\Gallery;

class GalleryController extends Controller
{

    protected $gallery;

    public function __construct(Gallery $gallery)
    {
        $this->gallery = new GalleryRepository($gallery);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $files = Gallery::all();

        return view('gallery.index', compact('files'));
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

    public function store(GalleryRequest $request)
    { // Note: Each request is a single image
        // Research video upload
        $file_type = $request->validated()['file']->extension();

        $this->gallery->validateFile($file_type);

        $file = $this->gallery->storeFile($request);

                $this->gallery->create($file);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
