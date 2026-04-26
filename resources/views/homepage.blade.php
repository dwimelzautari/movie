@extends('layout.template')

@section('title', 'Homepage')

@section('content')

    {{-- Notifikasi Sukses --}}
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>    
    @endif

    <div class="container mt-4">
        <h1 class="mb-4">Popular Movie</h1>

        {{-- Baris kartu movie --}}
        <div class="row g-4">
            @forelse ($movies as $movie)
                {{-- Memanggil partial card. Pastikan di dalam partial ini 
                     tidak ada pembungkus 'row' lagi agar col-lg-6 bekerja --}}
                @include('partials.movie-card', ['movie' => $movie])
            @empty
                <div class="col-12">
                    <div class="alert alert-info">
                        Belum ada data film yang tersedia.
                    </div>
                </div>
            @endforelse
        </div>

        {{-- Bagian Paginasi (Nomor Halaman) --}}
        <div class="d-flex justify-content-center mt-5">
            {{ $movies->links() }}
        </div>
    </div>

@endsection