<?php

namespace App\Http\Controllers;
use App\Schedule;
use App\Day;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schedules = Schedule::all();
        return view('schedules.index',compact('schedules'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $days=Day::all(); 
        return view('schedules.create',compact('days',$days));
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
            'jadwal'=>'required',
            'hari'=>'required',
           
            'ket'=>'required',
        ]);
        Schedule::create($request->all());
        return redirect()->route('schedules.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function show(Schedule $schedule)
    {
        return view('schedules.show',compact('schedule'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     *
     *@param  \App\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function edit(Schedule $schedule)
    {
        $days = Day::get();
        return view('schedules.edit', compact('days','schedule'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Schedule $schedule)
    {
        $schedule->update($request->all());
  
        return redirect()->route('schedules.index')
                        ->with('success','Schedule updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     *@param  \App\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(Schedule $schedule)
    {
        $schedule->delete();
  
        return redirect()->route('schedules.index')
                        ->with('success','schedule deleted successfully');
    }

}
