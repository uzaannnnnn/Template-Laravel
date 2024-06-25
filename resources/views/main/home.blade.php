@extends('layouts.layout')

@section('main')
    <div class="container mx-auto w-75 text-center" style="margin-top: 100px">
        <img src="https://storage.googleapis.com/s.mysch.id/picture/96654442img-20200917-wa0037.jpg" alt="Logo Perpustakaan" width="400px">
        <h3 class="mt-5">SISTEM MANAJEMEN PERPUSTAKAAN</h3>

        {{-- Tombol Keluar --}}
        @auth
            <div class="mt-5">
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary">Keluar</button>
                </form>
            </div>
        @endauth
    </div>
@endsection
