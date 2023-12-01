<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Boarding;

class BoardingsController extends Controller
{
    public function default()
    {
        $boardings = Boarding::orderBy('id', 'ASC')->paginate(2);

        return view('admin.boardings.default', [
            'pagetitle' => 'Boarding House Registration',
            'title' => 'Boarding House Registration | Admin',
            'boardings' => $boardings
        ]);
    }

    public function create()
    {
        return view('admin.boardings.create', [
            'pagetitle' => 'Boarding House Registration',
            'title' => 'Boarding House Registration | Admin'
        ]);
    }

    public function view(Request $request)
    {
        $boarding = Boarding::find($request->id);

        return view('admin.boardings.view', [
            'pagetitle' => 'View',
            'title' => 'View | Admin',
            'boarding' => $boarding
        ]);
    }
    public function search(Request $request)
   {
    $searchTerm = $request->input('term');

    $boardings = Boarding::where('name_of_bh', 'LIKE', '%' . $searchTerm . '%')
        ->orWhere('owner', 'LIKE', '%' . $searchTerm . '%')
        ->get();

    return response()->json($boardings);
}

    public function delete($id)
    {
        $boarding = Boarding::find($id);

        if ($boarding) {
            $boarding->delete();
            return redirect()->route('boardings.default')->with('success', 'Boarding deleted successfully');
        } else {
            return redirect()->route('boardings.default')->with('error', 'Boarding not found');
        }
    }

    public function edit(Request $request)
    {
        $boarding = Boarding::find($request->id);

        return view('admin.boardings.edit', [
            'pagetitle' => 'Edit',
            'title' => 'Edit | Admin',
            'boarding' => $boarding
        ]);
    }

    public function update(Request $request)
    {
        $storeBoardings = Boarding::find($request->id);
        $storeBoardings->name_of_bh = $request->name_of_bh;
        $storeBoardings->owner = $request->owner;
        $storeBoardings->description = $request->description;
        $storeBoardings->address = $request->address;
        $storeBoardings->contact_number = $request->contact_number;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $target_dir = "images/boardings/";
            $target_file = $target_dir . uniqid() . '_' . basename($image->getClientOriginalName());
            $image->move($target_dir, $target_file);
            $storeBoardings->img = $target_file;
        }

        if ($storeBoardings->save()) {
            return redirect()->back()->with('success', 'Boarding updated successfully');
        } else {
            return redirect()->back()->with('error', 'Failed to update boarding');
        }
    }

    public function save(Request $request)
    {
        $saveBoardings = new Boarding;
        $saveBoardings->name_of_bh = $request->name_of_bh;
        $saveBoardings->owner = $request->owner;
        $saveBoardings->description = $request->description;
        $saveBoardings->address = $request->address;
        $saveBoardings->contact_number = $request->contact_number;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $target_dir = "images/boardings/";
            $target_file = $target_dir . uniqid() . '_' . basename($image->getClientOriginalName());
            $image->move($target_dir, $target_file);
            $saveBoardings->img = $target_file;
        }

        if ($saveBoardings->save()) {
            return redirect()->back()->with('success', 'Boarding saved successfully');
        } else {
            return redirect()->back()->with('error', 'Failed to save boarding');
        }
    }

    public function searchtitle(Request $request)
    {
        $boarding = Boarding::where('title', $request->title)->first();
        return json_encode($boarding);
    }
}
