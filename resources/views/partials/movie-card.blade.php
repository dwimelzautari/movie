<div class="col-lg-6">
    <div class="card mb-3 h-100" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ asset('storage/' . $movie['foto_sampul']) }}" class="img-fluid rounded-start h-100" style="object-fit: cover;" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{ $movie['judul'] }}</h5>
                    <p class="card-text text-truncate" style="max-height: 100px;">{{ $movie['sinopsis'] }}</p>
                    <a href="{{ url('/movie/' . $movie['id']) }}" class="btn btn-success">Lihat Selanjutnya</a>
                </div>
            </div>
        </div>
    </div>
</div>