<template>
    <div class="container row h-full w-screen">
        <!-- Sidebar -->
        <sidebar class="sidebar col-lg-2 h-full">
            <ul class="text-xl">
                <li><a href="">サッカーノート作成</a></li>
                <li><a href="">サッカーノート一覧</a></li>
            </ul>
        </sidebar>

        <div class="flex col-lg-10 create-area">
            <!-- 入力エリア -->
            <note-new></note-new>
            <!-- プレビューエリア -->
            <note-preview></note-preview>
        </div>
    </div>
</template>
