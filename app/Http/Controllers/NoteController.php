<?php

namespace App\Http\Controllers;

use App\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function create()
    {
        return view('note');
    }

    public function store(Request $request)
    {

        Note::create([
            'note_title' => $request->noteTitle,
            'note_content' => $request->noteContent
        ]);

        return redirect()->route('note')->with('success', 'Note create successfully');

    }

    public function list()
    {
        $notes = Note::OrderBy('id', 'DESC')->get();
        return view('noteList', compact('notes'));
    }
}
