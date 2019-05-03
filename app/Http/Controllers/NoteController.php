<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;
use Illuminate\Support\Facades\Auth;
use Session;

class NoteController extends Controller
{
    function createPage(){
        return view('note.create');
    }

    function create(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'contents' => 'required'
        ]);

        $id = Auth::id();

        $note = new Note();
        $note->title = $request->title;
        $note->contents = $request->contents;
        $note->userID = $id;
        $note->save();

        Session::flash('success', 'The new note was created successfully');

        return redirect()->route('home');
    }

    function updatePage($id){
        $note = Note::find($id);
        $id = Auth::id();

        if($note->userID == $id){
            return view('note.update', compact('note'));
        }
        else{
            Session::flash('danger', 'Not your note');
            return redirect()->route('home');
        }
    }

    function update(Request $request){
        $this->validate($request,[
            'title' => 'required',
            'contents' => 'required'
        ]);

        $note = Note::find($request->noteID);
        $note->title = $request->title;
        $note->contents = $request->contents;
        $note->update();

        Session::flash('success', 'The note was updated successfully');

        return redirect()->route('home');
    }

    function delete($id){
        $note = Note:: find($id);

        $id = Auth::id();

        if($id == $note->userID){
            $note->delete();

            Session::flash('success', 'The note was deleted successfully');

            return redirect()->route('home');
        }

        else{
            Session::flash('danger', 'Not your note');

            return redirect()->route('home');
        }
    }
}
