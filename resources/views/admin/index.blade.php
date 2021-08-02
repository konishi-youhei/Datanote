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
                    <form action="{{ route('admin') }}" method="get" class="row ml-0 mr-0 mb-5">
                        <div class="w-100">
                            <label class="mt-2 text-lg ml-1 font-bold">検索</label>
                        </div>
                        <div class="form-group d-flex w-4/5">
                            <input type="date" name="date" class="form-control m-1 w-1/4">
{{--                            <label class="mt-2 text-lg">選手名</label>--}}
                            <input type="text" name="user" placeholder="選手名" class="form-control m-1 w-1/4">
                            <input type="submit" value="検索" class="form-control btn btn-secondary mt-1 ml-2 w-1/6">
                        </div>
                    </form>
                </div>
                <!-- 一覧表示エリア -->
                <div>
                    <table class="w-100" cellpadding="5">
                        <thead>
                        <tr>
                            <th class="w-1/5">日付</th>
                            <th class="w-1/5">対戦相手</th>
                            <th class="w-1/5">選手名</th>
                            <th class="w-1/5">コメント</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($notes as $note)
                            <tr>
                                <td>{{ $note->date }}</td>
                                <td>{{ $note->opponent }}</td>
                                <td>{{ $note->name }}</td>
                                @if($note->comment != null)
                                    <td>済</td>
                                @else
                                    <td>未</td>
                                @endif
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
