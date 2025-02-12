<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class EventsController extends Controller
{
    public function addEvent(Request $request)
    {
        $request->validate([
            'event_code' => 'required|string|unique:events,event_code',
            'event_title' => 'required|string|max:255',
            'event_date' => 'required|date',
            'event_description' => 'required|string',
            'event_banner' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'time_in_open_am' => 'nullable|date_format:H:i',
            'time_in_close_am' => 'nullable|date_format:H:i',
            'time_out_open_am' => 'nullable|date_format:H:i',
            'time_out_close_am' => 'nullable|date_format:H:i',
            'time_in_open_pm' => 'nullable|date_format:H:i',
            'time_in_close_pm' => 'nullable|date_format:H:i',
            'time_out_open_pm' => 'nullable|date_format:H:i',
            'time_out_close_pm' => 'nullable|date_format:H:i',
        ]);

        if ($request->hasFile('event_banner')) {
            $file = $request->file('event_banner');
            $filename = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads/photos', $filename, 'public');


            Events::create([
                'event_code' => $request->event_code,
                'event_title' => $request->event_title,
                'event_date' => $request->event_date,
                'event_description' => $request->event_description,
                'event_banner' => $filePath,
                'time_in_open_am' => $request->time_in_open_am,
                'time_in_close_am' => $request->time_in_close_am,
                'time_out_open_am' => $request->time_out_open_am,
                'time_out_close_am' => $request->time_out_close_am,
                'time_in_open_pm' => $request->time_in_open_pm,
                'time_in_close_pm' => $request->time_in_close_pm,
                'time_out_open_pm' => $request->time_out_open_pm,
                'time_out_close_pm' => $request->time_out_close_pm,
            ]);
        } else {
            return back()->withErrors(['event_banner' => 'Banner image upload failed.']);
        }

        return redirect()->route('admin.secretary.eventCreator')->with('success', 'Event created successfully!');
    }

    public function showEvents()
    {
        $events = Events::all();

        return view('admin.secretary.eventCreator', compact('events'));
    }

    public function updateEvent(Request $request, $id)
    {
        $request->merge([
            'time_in_open_am' => $request->time_in_open_am ? substr($request->time_in_open_am, 0, 5) : null,
            'time_in_close_am' => $request->time_in_close_am ? substr($request->time_in_close_am, 0, 5) : null,
            'time_out_open_am' => $request->time_out_open_am ? substr($request->time_out_open_am, 0, 5) : null,
            'time_out_close_am' => $request->time_out_close_am ? substr($request->time_out_close_am, 0, 5) : null,
            'time_in_open_pm' => $request->time_in_open_pm ? substr($request->time_in_open_pm, 0, 5) : null,
            'time_in_close_pm' => $request->time_in_close_pm ? substr($request->time_in_close_pm, 0, 5) : null,
            'time_out_open_pm' => $request->time_out_open_pm ? substr($request->time_out_open_pm, 0, 5) : null,
            'time_out_close_pm' => $request->time_out_close_pm ? substr($request->time_out_close_pm, 0, 5) : null,
        ]);

        $request->validate([
            'event_code' => 'required|string|unique:events,event_code,' . $id,
            'event_title' => 'required|string|max:255',
            'event_date' => 'required|date',
            'event_description' => 'required|string',
            'event_banner' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'time_in_open_am' => 'nullable|date_format:H:i',
            'time_in_close_am' => 'nullable|date_format:H:i',
            'time_out_open_am' => 'nullable|date_format:H:i',
            'time_out_close_am' => 'nullable|date_format:H:i',
            'time_in_open_pm' => 'nullable|date_format:H:i',
            'time_in_close_pm' => 'nullable|date_format:H:i',
            'time_out_open_pm' => 'nullable|date_format:H:i',
            'time_out_close_pm' => 'nullable|date_format:H:i',
        ]);

        $event = Events::findOrFail($id);

        if ($request->hasFile('event_banner')) {
            $file = $request->file('event_banner');
            $filename = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads/photos', $filename, 'public');

            if ($event->event_banner) {
                \Storage::delete('public/' . $event->event_banner);
            }

            $event->event_banner = $filePath;
        }

        $event->update([
            'event_code' => $request->event_code,
            'event_title' => $request->event_title,
            'event_date' => $request->event_date,
            'event_description' => $request->event_description,
            'event_banner' => $event->event_banner,
            'time_in_open_am' => $request->time_in_open_am,
            'time_in_close_am' => $request->time_in_close_am,
            'time_out_open_am' => $request->time_out_open_am,
            'time_out_close_am' => $request->time_out_close_am,
            'time_in_open_pm' => $request->time_in_open_pm,
            'time_in_close_pm' => $request->time_in_close_pm,
            'time_out_open_pm' => $request->time_out_open_pm,
            'time_out_close_pm' => $request->time_out_close_pm,
        ]);

        return redirect()->route('admin.secretary.eventCreator')->with('success', 'Event updated successfully!');
    }

    public function destroy($id)
    {
        $event = Events::findOrFail($id);

        if ($event->event_banner) {
            \Storage::delete('public/' . $event->event_banner);
        }

        $event->delete();

        return redirect()->route('admin.secretary.eventCreator')->with('success', 'Event deleted successfully.');
    }


}

