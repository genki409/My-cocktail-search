<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemoController extends Controller
{
    public function index()
    {
        $records = Memo::all();
        return view('records.index', ['records' => $records]);
    }

    public function create()
    {
        return view('records.create');
    }

    public function store(Request $request)
    {
        // dd($request);
        $records = new Memo;
        $records->name = $request->name;
        $records->base = $request->base;
        $records->taste = $request->taste;
        $records->feature = $request->feature;
        $records->comment = $request->comment;
        $records->image = $request->image;
        $records->image2 = $request->image2;
        $records->image3 = $request->image3;
        $records->image4 = $request->image4;
        $records->user_id = Auth::id();
        $records->save();
        return redirect()->route('records.index');
    }

    function show($id)
    {
        $record = Memo::find($id);
        return view('records.show', ['record'=>$record]);
    }



    public function edit($id)
    {
        $record = Memo::find($id);
        // dd($record);
        return view('records.edit', compact('record'));
    }

    function update(Request $request, $id)
    {
        $records = Memo::find($id);
        $records->name = $request->name;
        $records->base = $request->base;
        $records->taste = $request->taste;
        $records->feature = $request->feature;
        $records->comment = $request->comment;
        $records->image = $request->image;
        $records->image2 = $request->image2;
        $records->image3 = $request->image3;
        $records->image4 = $request->image4;
        $records -> save();

        // return view('records.show', compact('record'));
    }

    function destroy($id)
    {
        $records = Memo::find($id);
        if(Auth::id() != $records->user_id) {
            return abort(404);
        }
        $records->delete();
        return redirect()->route('records.index');
    }
}
