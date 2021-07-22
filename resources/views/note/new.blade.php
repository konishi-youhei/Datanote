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
            <!-- 入力エリア -->
            <note-new :csrf="{{json_encode(csrf_token())}}" :errors= "{{ $errors }}" :old="{{ json_encode(Session::getOldInput()) }}"></note-new>
            <!-- プレビューエリア -->
            <note-preview></note-preview>
        </div>
    </div>
@endsection
<script>

</script>
