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
        $saveRooms->categories = $request->categories;    
        if ($saveRooms->save()) {
            return redirect()->route('rooms.default');
    }
}
public function view(Request $request)
    {
        $room = Room::find($request->id);

        return view('admin.rooms.view', [
            'pagetitle' => 'View',
            'title' => 'View | Admin',
            'room' => $room
        ]);
    }
    
    public function delete($id)
    {
        $room = Room::find($id);

        if ($room) {
            $room->delete();
            return redirect()->route('rooms.default')->with('success', ' deleted successfully');
        } else {
            return redirect()->route('rooms.default')->with('error', ' not found');
        }
    }

    public function edit(Request $request)
    {
        $room = Room::find($request->id);

        return view('admin.rooms.edit', [
            'pagetitle' => 'Edit',
            'title' => 'Edit | Admin',
            'room' => $room
        ]);
    }

    public function update(Request $request)
    {
        $storeRooms = Room::find($request->id);
        $storeRooms->categories = $request->categories;
        
       

        if ($storeRooms->save()) {
            return redirect()->back()->with('success', ' updated successfully');
        } else {
            return redirect()->back()->with('error', 'Failed to update ');
        }
    }


    public function searchtitle(Request $request)
    {
        $room = Room::where('title', $request->title)->first();
        return json_encode($room);
    }
}


