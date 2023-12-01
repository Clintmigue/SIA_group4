<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;

class RoomsController extends Controller
{
    public function default()
    {
        $rooms = Room::orderBy('id', 'ASC')->paginate(2);

        return view('admin.rooms.default', [
            'pagetitle' => 'Boarding House Room',
            'title' => 'Boarding House Room| Admin',
            'rooms' => $rooms
        ]);
    }

    public function create()
    {
        return view('admin.rooms.create', [
            'pagetitle' => 'Rooms',
            'title' => 'Rooms | Admin'
        ]);
    }
    public function save(Request $request)
    {
        $saveRooms = new Room;
        $saveRooms->single = $request->single;
        $saveRooms->family = $request->family;
        $saveRooms->couple = $request->couple;
        $saveRooms->employees = $request->employees;
        $saveRooms->students = $request->students;

        
        if ($saveRooms->save()) {
            return redirect()->back()->with('success', 'Room saved successfully');
        } else {
            return redirect()->back()->with('error', 'Failed to save room');
        }
    }

    public function searchtitle(Request $request)
    {
        $room = Room::where('title', $request->title)->first();
        return json_encode($room);
    }
}


