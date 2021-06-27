@extends('layouts.app')

@section('content')
    <div class="container row h-full">
        <!-- Sidebar -->
        <sidebar class="sidebar col-lg-2 h-full">
            <ul class="text-xl">
                <li><a href="">サッカーノート作成</a></li>
                <li><a href="">サッカーノート一覧</a></li>
            </ul>
        </sidebar>

        <!-- 入力エリア -->
        <div class="col-lg-5 input-area h-screen overflow-y-auto">
            <!-- エリアタイトル -->
            <div class="area-title bg-gray-500">
                <div class="form-group text-white text-lg font-bold py-2 px-3">
                    <h2 class="p-2">サッカーノート作成</h2>
                </div>
            </div>

            <!-- 日付 -->
            <div class="date">
                <div class="form-group py-2 px-3">
                    <label class="text-lg">日付<span class="text-white text-sm px-3 py-1 bg-red-600 ml-3 rounded-sm">必須</span></label>
                    <input type="date" name="date" class="form-control">
                </div>
            </div>

            <!-- 場所 -->
            <div class="place">
                <div class="form-group py-2 px-3">
                    <label class="text-lg">場所<span class="text-white text-sm px-3 py-1 bg-red-600 ml-3 rounded-sm">必須</span></label>
                    <input type="text" name="place" class="form-control">
                </div>
            </div>

            <!-- 対戦相手 -->
            <div class="opponent">
                <div class="form-group py-2 px-3">
                    <label class="text-lg">対戦相手</label>
                    <input type="text" name="opponent" class="form-control">
                </div>
            </div>

            <!-- 試合結果 -->
            <div class="result">
                <div class="form-group py-2 px-3">
                    <label class="text-lg">試合結果</label>
                    <div class="flex text-center">
                        <input type="number" name="match-result-home" class="form-control w-1/5">
                        <span class="w-1/5 text-xl leading-loose">VS</span>
                        <input type="number" name="match-result-away" class="form-control w-1/5">
                    </div>
                </div>
            </div>

            <!-- 対戦相手 -->
            <div class="url">
                <div class="form-group py-2 px-3">
                    <label class="text-lg">試合動画URL</label>
                    <input type="url" name="url" class="form-control">
                </div>
            </div>

            <!-- 対戦相手 -->
            <div class="impressions">
                <div class="form-group py-2 px-3">
                    <label class="text-lg">試合について</label>
                    <textarea name="impressions" cols="20" rows="10" class="form-control"></textarea>
                </div>
            </div>

            <!-- 対戦相手 -->
            <div class="member">
                <div class="form-group py-2 px-3">
                    <label class="text-lg">出場選手</label>
                    <table class="w-100 table table-bordered">
                        <tr>
                            <th class="w-1/5">ポジション</th>
                            <th class="w-4/5">名前</th>
                        </tr>
                        <tr>
                            <td>GK</td>
                            <td class="p-0 align-middle"><input type="text" name="member1" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>DF</td>
                            <td class="p-0 align-middle"><input type="text" name="member2" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>DF</td>
                            <td class="p-0 align-middle"><input type="text" name="member3" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>DF</td>
                            <td class="p-0 align-middle"><input type="text" name="member4" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>DF</td>
                            <td class="p-0 align-middle"><input type="text" name="member5" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>MF</td>
                            <td class="p-0 align-middle"><input type="text" name="member6" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>MF</td>
                            <td class="p-0 align-middle"><input type="text" name="member7" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>MF</td>
                            <td class="p-0 align-middle"><input type="text" name="member8" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>MF</td>
                            <td class="p-0 align-middle"><input type="text" name="member9" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>FW</td>
                            <td class="p-0 align-middle"><input type="text" name="member10" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>FW</td>
                            <td class="p-0 align-middle"><input type="text" name="member11" class="form-control"></td>
                        </tr>
                    </table>
                </div>
            </div>

            <!-- サブメンバー -->
            <div class="py-2 px-3 mb-28">
                <div class="border bg-light py-2 text-base text-center cursor-pointer position-relative">
                    サブメンバーも入力する
                    <img src="{{ asset('images/plusmark.svg') }}" alt="" style="width: 15px;" class="position-absolute right-3 top-1/3">
                </div>
                <div>
                    <table class="w-100 table table-bordered">
                        <tr>
                            <td>GK</td>
                            <td class="p-0 align-middle"><input type="text" name="member12" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>DF</td>
                            <td class="p-0 align-middle"><input type="text" name="member13" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>DF</td>
                            <td class="p-0 align-middle"><input type="text" name="member14" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>MF</td>
                            <td class="p-0 align-middle"><input type="text" name="member15" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>MF</td>
                            <td class="p-0 align-middle"><input type="text" name="member16" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>FW</td>
                            <td class="p-0 align-middle"><input type="text" name="member17" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>FW</td>
                            <td class="p-0 align-middle"><input type="text" name="member18" class="form-control"></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
