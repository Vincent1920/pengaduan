@extends('home')
@section('container')
{{-- @dd($user) --}}

<div class="pengaduan-home"></div>
<div class="post_mskt">
    <p class="nama_user_post">
        @auth
        <a>{{auth()->user()->username}} </a>

        {{-- <a class="logout" href="{{route('logout')}}">logout</a> --}}
        {{-- <img src="img/add.png" alt="">tambah post<p> --}}
        @else
        {{-- <a class="logout" href="/login">login</a> --}}

        @endauth
    </p>
    <p class="post_mskt_p">𝐀𝐩𝐚 𝐀𝐣𝐚 𝐲𝐚𝐧𝐠 𝐤𝐚𝐮 𝐩𝐨𝐬𝐭 !!</p>
    <div class="post_to_dashboard">
        <a href="/dashboard">
            <p>
                @auth
                {{-- <a>{{auth()->user()->name}} </a> --}}

                {{-- <a class="logout" href="{{route('logout')}}">logout</a> --}}
                <img src="img/add.png" alt="">tambah post<p>
                @else
                <a class="logout" href="/login">login</a>

                @endauth
        </a>
    </div>
</div>
<div class="post_card">
    <div class="post_card_display">
        <div class="post_card11"></div>
        <div class="post_card2">
            <div class="post_card_mskt">
                <div class="post_card_mskt_img">
                    <img src="img/home1.png" alt="">
                </div>
                <div class="post_card_msk_text">

                </div>
            </div>
        </div>
        <div class="post_card11"></div>

    </div>
</div>
@endsection