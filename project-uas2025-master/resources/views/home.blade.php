<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Studio Foto</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        h1, h2 { color: #333; }
        .section { margin-bottom: 40px; }
        .gallery img { width: 200px; height: auto; margin: 10px; border-radius: 10px; }
        .paket { border: 1px solid #ccc; padding: 10px; margin: 10px 0; border-radius: 10px; }
    </style>
</head>
<body>

    <h1>Selamat Datang di Studio Kami</h1>

    <!-- Section About Us -->
    <div class="section">
        <h2>Tentang Kami</h2>
        <p>{{ $about->content ?? 'Belum ada data tentang kami.' }}</p>
    </div>

    <!-- Section Galeri -->
<div class="section">
    <h2>Galeri Foto</h2>
    <div class="gallery">
       @forelse ($galleries as $item)
    <img src="{{ asset('storage/' . $item->image) }}" alt="Foto Galeri" style="width: 200px">
@empty
    <p>Belum ada foto di galeri.</p>
@endforelse

    </div>
</div>

    <!-- Section Paket -->
    <div class="section">
        <h2>Daftar Paket</h2>
        @forelse ($pakets as $paket)
            <div class="paket">
                <h3>{{ $paket->nama }}</h3>
                <p>Harga: Rp{{ number_format($paket->harga, 0, ',', '.') }}</p>
                <p>{{ $paket->deskripsi }}</p>
            </div>
        @empty
            <p>Belum ada paket tersedia.</p>
        @endforelse
    </div>

</body>
</html>
