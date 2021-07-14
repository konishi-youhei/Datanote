<?php


namespace App\Http\Controllers\Note;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Notes;
use App\Members;

class NoteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:user');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function new() {
        return view('note.new');
    }

    public function create(Request $request) {
        if ($request->has('save')) {
            $request->validate([
                'date' => 'required|date',
                'place' => 'required|string|max:255',
                'opponent' => 'nullable|string|max:255',
                'match_result_home' => 'nullable|integer',
                'match_result_away' => 'nullable|integer',
                'url' => 'nullable|url',
                'impressions' => 'nullable|string',
                'comment' => 'nullable|string',
            ]);
            //notesとmembersの登録
            $notes = new Notes;
//            $members = new Members;
            $notes->fill($request->all())->save();
//            $notes->members()->save($members->fill($request->all()));
        } elseif ($request->has('pdf')) {
            var_dump('pdf');
        }
        return redirect('/notes/new')->with('flash_message', __('ノートを保存しました。'));
    }
}
