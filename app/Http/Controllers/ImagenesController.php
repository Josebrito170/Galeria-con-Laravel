<?php

namespace App\Http\Controllers;

use App\Models\imagenes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

use Illuminate\Support\Str;

class ImagenesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $files = imagenes::where('user_id', auth()->user()->id)->paginate(10);
        return view('imagenes.index', compact('files'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('imagenes.create');
    }

    /**
     * Store a newly created resource in storagse.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|image|max:2040'
        ]);
        //se usa el file con el archivo que se está enviando para saber a donde se guarda
        $imagenes = $request->file('file')->store('public/imagenes');

        $url = Storage::url($imagenes);

        imagenes::create([
            'user_id' => auth()->user()->id,
            'url' => $url
        ]);

        return redirect()->route('imagenes.index');

        // $nombre = Str::random(10) . $request->file('file')->getClientOriginalName();

        // $ruta = storage_path() . 'public\storage\imagenes' . $nombre;
        
        // Image::make($request->file('file'))
        //     ->resize(1200,null, function($constraint) {
        //     $constraint->aspectRatio();
        //     })
        //     ->save ($ruta);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\imagenes  $imagenes
     * @return \Illuminate\Http\Response
     */
    public function show(imagenes $imagenes)
    {
        return view('imagenes.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\imagenes  $imagenes
     * @return \Illuminate\Http\Response
     */
    public function edit(imagenes $imagenes)
    {
        return view('imagenes.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\imagenes  $imagenes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, imagenes $imagenes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\imagenes  $imagenes
     * @return \Illuminate\Http\Response
     */
    public function destroy($file)
    {   
        imagenes::destroy($file);
        return redirect()->route('imagenes.index');
    }
}
