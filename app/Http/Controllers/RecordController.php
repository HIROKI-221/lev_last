<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Record;
use App\Http\Requests\RecordRequest;

class RecordController extends Controller
{
    public function index(Record $record)
    {
        return view('records.top')->with(['records' => $record->get()]);
    }
    
    public function show(Record $record)
    {
        return view('records.each')->with(['record' => $record]);
    }
    
    public function create()
    {
        return view('records.create');
    }
    
    public function store(RecordRequest $request, Record $record)
    {
        $input = $request['record'];
        $record->fill($input)->save();
        return redirect('/records/' . $record->id);
    }
    
    public function edit(Record $record)
    {
        return view('records.edit')->with(['record' => $record]);
    }
    
    public function update(RecordRequest $request, Record $record)
    {
        $input_record = $request['record'];
        $task->fill($input_record)->save();
        
        return redirect('/records/' . $record->id);
    }
    
    public function delete(Record $record)
    {
        $record->delete();
        return redirect('/');
    }
}
