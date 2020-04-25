<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SystemCalendarController extends Controller
{
    public function index()
    {
        $events = [];

        foreach (\App\Job::all() as $job) {
            $crudFieldValue = $job->getOriginal('job_time');

            if (! $crudFieldValue) {
                continue;
            }

            $eventLabel     = $job->title;
            $prefix         = '';
            $suffix         = '';
            $dataFieldValue = trim($prefix . " " . $eventLabel . " " . $suffix);
            $events[]       = [
                'title' => $dataFieldValue,
                'start' => $crudFieldValue,
                'url'   => route('admin.jobs.edit', $job->id)
            ];
        }

        return view('admin.calendar' , compact('events'));
    }

}
