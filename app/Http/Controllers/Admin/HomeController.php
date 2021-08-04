<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use App\Notes;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        // 検索部分
        $search1 = $request->input('date');
        $search2 = $request->input('user');
        $search3 = $request->input('comment');

        //adminが所属するチームに所属するuserが持つノート一覧
        //クエリ作成
        $query = Notes::query();
        $user = User::query();
        // adminが所属するteam_id
        $team_id = Auth::guard('admin')->user()->team_id;
        // $tead_idを持つユーザーの一覧
        $user_id = $user->where('team_id', $team_id)->get('id');

        //$user_idを持つチーム全員のノート一覧取得
        $query->whereIn('user_id', $user_id)->orderBy('date', 'desc');
        $query
            ->leftJoin('users', 'notes.user_id', '=', 'users.id')
            ->select('notes.id', 'notes.date', 'notes.opponent', 'users.name', 'notes.comment');

        //検索キーワードが入力されている場合
        if(!empty($search1)){
            $query->where('date', 'like', '%'.$search1.'%');
        }
        if (!empty($search2)) {
            $query->where('users.name', 'like', '%'.$search2.'%');
        }
        if (!empty($search3) && $search3 == "close") {
            $query->whereNotNull('comment');
        }
        if (!empty($search3) && $search3 == "outstanding") {
            $query->whereNull('comment');
        }

        $notes = $query->paginate(10);

        return view('admin.index', compact('notes'));
    }

    public function edit($id)
    {

        if (!ctype_digit($id)) {
            return redirect('/admin/')->with('flash_message', __('Invalid operation was performed.'));
        }

        $query = Notes::query();
        $note = $query->find($id);
        $member = $note->members()->first();

        return view('admin.edit', ['note' => $note, 'member' => $member]);
    }

    public function update(Request $request, $id) {
        if ($request->has('save')) {
            $request->validate([
                'comment' => 'nullable|string',
            ]);
            $query = Notes::query();
            $note = $query->find($id);
            $note->fill($request->all())->save();
        } elseif ($request->has('pdf')) {
            var_dump('pdf');
        }
        return redirect('/admin/')->with('flash_message', __('ノートを更新しました。'));
    }
}
