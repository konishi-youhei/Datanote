<?php


namespace App\Http\Controllers\Note;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Notes;
use App\Members;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\PDF;
use PhpParser\Node\Expr\New_;

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

    public function index(Request $request) {
        $search1 = $request->input('date');
        $search2 = $request->input('place');

        //クエリ作成
//        $query = Notes::query();

        $query = Auth::user()->notes()->orderBy('date', 'desc');;
        //キーワードが入力されている場合
        if(!empty($search1)){
            $query->where('date', 'like', '%'.$search1.'%');
        }
        if (!empty($search2)) {
            $query->where('place', 'like', '%'.$search2.'%');
        }
        $notes = $query->paginate(10);

        return view('note.index', compact('notes'));
    }

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
                'formation' => 'nullable|string'
            ]);
            //notesとmembersの登録
            $notes = new Notes;
            $members = new Members;
            $notes = Auth::user()->notes()->save($notes->fill($request->all()));
            $notes->members()->save($members->fill($request->all()));
        } elseif ($request->has('pdf')) {
//            $pdf = app('dompdf.wrapper');
//            $pdf->loadView('home');
//            return $pdf->download('sample.pdf');
        }
        return redirect('/notes')->with('flash_message', __('ノートを保存しました。'));
    }

    public function edit($id) {

        if(!ctype_digit($id)){
            return redirect('/notes')->with('flash_message', __('Invalid operation was performed.'));
        }

        $note = Auth::user()->notes()->find($id);
        $member = $note->members()->first();

        return view('note.edit',['note' => $note, 'member' => $member]);
    }

    public function update(Request $request, $id) {
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
                'formation' => 'nullable|string'
            ]);
            $note = Auth::user()->notes()->find($id);
            $member = $note->members()->first();
            $note->fill($request->all())->save();
            $member->fill($request->all())->save();
        } elseif ($request->has('pdf')) {
            var_dump('pdf');
        }
        return redirect('/notes')->with('flash_message', __('ノートを更新しました。'));
    }

    public function destroy($id) {
        if(!ctype_digit($id)) {
            return redirect('/notes')->with('flash_message', __('Invalid operation was performed.'));
        }

        Auth::user()->notes()->find($id)->members()->delete();
        Auth::user()->notes()->find($id)->delete();

        return redirect('/notes')->with('flash_message', __('削除しました'));
    }
}
