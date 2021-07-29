@extends('layouts.admin')

@section('content')
    <!-- フラッシュメッセージ -->
    @if (session('flash_message'))
        <div class="alert alert-primary text-center" role="alert">
            {{ session('flash_message') }}
        </div>
    @endif
    <div class="container row h-full w-screen">
        <!-- Sidebar -->
        <admin-side-bar></admin-side-bar>

        <div class="col-lg-10 create-area">
            <div class="bg-gray-600 p-3">
                <h2 class="text-white text-xl">サッカーノート一覧</h2>
            </div>
            <div class="p-5">
                <!-- 検索エリア -->
                <div>
                    <form action="{{ route('notes') }}" method="get" class="row">
                        <div class="form-group col-xl-3">
                            <label class="mt-2 text-lg">日付</label>
                            <input type="date" name="date" class="form-control m-1">
                            <label class="mt-2 text-lg">場所</label>
                            <input type="text" name="place" class="form-control m-1">
                            <input type="submit" value="検索" class="form-control btn btn-secondary mt-3">
                        </div>
                    </form>
                </div>
                <!-- 一覧表示エリア -->
                <div>
                    <table class="w-100" cellpadding="5">
                        <thead>
                        <tr>
                            <th class="w-1/5">日付</th>
                            <th class="w-1/5">場所</th>
                            <th class="w-1/5">対戦相手</th>
                            <th class="w-1/5">試合結果</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($notes as $note)
                            <tr>
                                <td>{{ $note->date }}</td>
                                <td>{{ $note->place }}</td>
                                <td>{{ $note->opponent }}</td>
                                <td>{{ $note->match_result_home }}-{{$note->match_result_away}}</td>
                                <td>
                                    <a href="{{ route('admin.edit', $note->id) }}" class="btn btn-primary">編集</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center mt-5">
                        {{$notes->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<script>

</script>
