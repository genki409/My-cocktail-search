<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Memo;


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
        if ($file = $request->image) {
            $fileName = time() . $file->getClientOriginalName();
            $target_path = public_path('img/');
            $file->move($target_path, $fileName);
        } else {
            $fileName = "";
        }

        $records = new Memo;
        $records->name = $request->name;
        $records->base = $request->base;
        $records->taste = $request->taste;
        $records->feature = $request->feature;
        $records->comment = $request->comment;
        $records->ingredient = $request->ingredient;
        // $records->image = $request->image;
        $records->image = $fileName;
        $records->user_id = Auth::id();
        $records->save();
        return redirect()->route('records.index');
    }

    function show($id)
    {
        $record = Memo::find($id);
        return view('records.show', ['record' => $record]);
    }



    public function edit($id)
    {
        $record = Memo::find($id);
        // dd($record);
        return view('records.edit', compact('record'));
    }

    // function update(Request $request, $id)
    function update(Request $request, $id)
    {

        if ($file = $request->image) {
            $fileName = time() . $file->getClientOriginalName();
            $target_path = public_path('img/');
            $file->move($target_path, $fileName);
        } else {
            $fileName = "";
        }

        $records = Memo::find($id);
        $records->name = $request->name;
        $records->base = $request->base;
        $records->taste = $request->taste;
        $records->feature = $request->feature;
        $records->comment = $request->comment;
        $records->ingredient = $request->ingredient;
        // $records->image = $fileName;
        $records->save();

        // $records->fill($request->all());
        // if ($file = $request->image) {
        //     $fileName = time() . $file->getClientOriginalName();
        //     $target_path = public_path('img/');
        //     $file->move($target_path, $fileName);
        // } else {
        //     $records->image;
        // }
        // $records->save();

        return view('records.show', compact('record'));
    }

    function destroy($id)
    {
        $records = Memo::find($id);
        if (Auth::id() != $records->user_id) {
            return abort(404);
        }
        $records->delete();
        return redirect()->route('records.index');
    }
}
