<?php

namespace App\Http\Controllers;
use App\Memo;
use Illuminate\Http\Request;

class MemoContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $memos = Memo::all();
        return view('memos.index',compact('memos'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    return view('memos.create');
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
           
            'judul'=>'required',
            'memo'=>'required',
        ]);
        Memo::create($request->all());
        return redirect()->route('memos.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Memo  $memo
     * @return \Illuminate\Http\Response
     */
    public function show(Memo $memo)
    {
        return view('memos.show',compact('memo'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     *
     *@param  \App\Memo  $memo
     * @return \Illuminate\Http\Response
     */
    public function edit(Memo $memo)
    {
        return view('memos.edit', compact('memo'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Memo  $memo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Memo $memo)
    {
        $memo->update($request->all());
  
        return redirect()->route('memos.index')
                        ->with('success','Notes updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     *@param  \App\Memo  $memo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Memo $memo)
    {
        $memo->delete();
  
        return redirect()->route('memos.index')
                        ->with('success','Notes deleted successfully');
    }

}
