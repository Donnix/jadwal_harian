<?php

namespace App\Http\Controllers;
use App\Berita;
Use App\Status;

use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beritas = Berita::all();
        return view('beritas.index',compact('beritas'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $statuses=Status::all(); 
        return view('beritas.create',compact('statuses',$statuses));
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
          
        ]);
        Berita::create($request->all());
        return redirect()->route('beritas.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show(Berita $berita)
    {
        return view('beritas.show',compact('berita'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     *
     *@param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit(Berita $berita)
    {
        $statuses = Status::get();
        return view('beritas.edit', compact('statuses','berita')); 
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Berita $berita)
    {
        $berita->update($request->all());
  
        return redirect()->route('beritas.index')
                        ->with('success','Berita updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     *@param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Berita $berita)
    {
        $berita->delete();
  
        return redirect()->route('beritas.index')
                        ->with('success','Berita deleted successfully');
    }

}
