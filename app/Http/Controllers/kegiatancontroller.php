<?php

namespace App\Http\Controllers;
use App\kegiatan_model;
use Illuminate\Http\Request;

class kegiatancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gso25a = kegiatan_model::all();
      return view('backend.kegiatanend',['gso25a' => $gso25a]);
    }

    public function kegiatan()
    {
        $gso25a = kegiatan_model::latest()->paginate(3);
      return view('kegiatan',['gso25a' => $gso25a]);
    }
    
    public function main()
    {
        return view('backend.main');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.tambahkegiatan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'penjelasan' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
    
        $input = $request->all();
    
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
    
        kegiatan_model::create($input);
    
        return redirect('/kegiatanend');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(kegiatan_model $gso25a)
    {
        return view ('detailkegiatan', compact('gso25a'));
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
    public function destroy(kegiatan_model $gso25a)
    {
        kegiatan_model::destroy($gso25a->id);
        return redirect('/kegiatanend');
    }
}
