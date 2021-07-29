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
        $search2 = $request->input('place');

        //adminが所属するチームに所属するuserが持つノート一覧
        //クエリ作成
        $query = Notes::query();
        $user = User::query();
        // adminが所属するteam_id
        $team_id = Auth::guard('admin')->user()->team_id;
        // $tead_idを持つユーザーの一覧
        $user_id = $user->where('team_id', $team_id)->first();

        //$user_idのノート一覧取得
        $query->where('user_id', $user_id['id']);

        //キーワードが入力されている場合
        if(!empty($search1)){
            $query->where('date', 'like', '%'.$search1.'%');
        }
        if (!empty($search2)) {
            $query->where('place', 'like', '%'.$search2.'%');
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
