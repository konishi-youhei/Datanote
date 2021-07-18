@extends('layouts.app')

@section('content')
    <!-- フラッシュメッセージ -->
    @if (session('flash_message'))
        <div class="alert alert-primary text-center" role="alert">
            {{ session('flash_message') }}
        </div>
    @endif
    <div class="container row h-full w-screen">
        <!-- Sidebar -->
        <side-bar></side-bar>

        <div class="flex col-lg-10 create-area">

            <div class="col-lg-5 input-area h-screen overflow-y-auto">
                <!-- エリアタイトル -->
                <div class="area-title bg-gray-500">
                    <div class="form-group text-white text-lg font-bold py-2 px-3">
                        <h2 class="p-2">サッカーノート作成</h2>
                    </div>
                </div>
                <form action="{{ route('note.update', $note->id) }}" method="POST" name="newNote">

                <!-- 入力エリア -->
                <note-edit :csrf="{{json_encode(csrf_token())}}" :errors= "{{ $errors }}" :notes="{{ $note }}" :members="{{ $member }}"></note-edit>
                </form>
            </div>
            <!-- プレビューエリア -->
            <note-preview></note-preview>
        </div>
    </div>
@endsection
<script>

</script>
