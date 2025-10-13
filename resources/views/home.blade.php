@extends('layouts.app')

@section('title', 'Sahabat Warga')

@section('content')
<header>
    <div class="sidebar">
        <div class="sidebar-header">
            <div class="logo-container">
                <img src="{{ asset('assets/logo.jpg') }}" alt="Sahabat Warga Logo" class="logo">
                <h3 class="site-title">Sahabat Warga</h3>
            </div>
        </div>

        <div class="sidebar-content">
            <ul class="nav-menu">
                <li class="nav-item active">
                    <a href="{{ route('home') }}" class="nav-link">
                        <i class='bx bx-home-alt'></i>
                        <span>Home</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('buatlaporan') }}" class="nav-link">
                        <i class='bx bx-edit'></i>
                        <span>Buat Laporan</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('laporansaya') }}" class="nav-link">
                        <i class='bx bx-clipboard-detail'></i>
                        <span>Laporan Saya</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('notifikasi') }}" class="nav-link">
                        <i class='bx bx-bell'></i>
                        <span>Notifikasi</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('kotaktinjauan') }}" class="nav-link">
                        <i class='bx bx-contact-book'></i>
                        <span>Kotak Tinjauan</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="sidebar-footer">
            <p>© 2023 Sahabat Warga</p>
        </div>
    </div>
</header>

<main>
    <div class="search-bar">
        <input type="search" placeholder="Search...">
    </div>

    <div class="gambar-container">
        {{-- Postingan 1 --}}
        <div class="gambar">
            <img src="{{ asset('assets/Tawuran.jpeg.jpg') }}" alt="Tawuran">
            <h5>Aksi pemuda yang melakukan tawuran di Jalan Radial, Kecamatan Ilir Barat (IB) I, Palembang pada Senin (21/10/2024) malam, Harap hati-hati</h5>
            <div class="komen">
                <form>
                    <textarea class="comment-input" placeholder="Tulis komentar.."></textarea>
                    <div class="comments-list">
                        <h3>Komentar: </h3>
                        <p><strong>Ali:</strong> Bawww ngeri nn jokk</p>
                        <p><strong>Budi:</strong> Tiati la lur men malam malam dewekan</p>
                        <p><strong>Siti:</strong> Harus ditindak oleh pihak berwenang ini</p>
                    </div>
                    <button type="submit" class="comment-submit">Kirim</button>
                    <button type="submit" class="comment-submit1">Like</button>
                    <button type="submit" class="comment-submit2">Share</button>
                </form>
            </div>
        </div>

        {{-- Postingan 2 --}}
        <div class="gambar">
            <img src="{{ asset('assets/palak.jpeg.jpg') }}" alt="Pemalakan">
            <h5>Tiati la buat kamu ado aksi pemalakan lagi nah di simpang lampu merah Macan Lindungan, Kecamatan Ilir Barat 1</h5>
            <div class="komen">
                <form>
                    <textarea class="comment-input" placeholder="Tulis komentar.."></textarea>
                    <div class="comments-list">
                        <h3>Komentar: </h3>
                        <p><strong>DimaSans:</strong> Nah sudah nn</p>
                        <p><strong>Ecabdg:</strong> Bahayo nn Palembang cak ni</p>
                        <p><strong>Nabil134:</strong> Viralke la oi</p>
                    </div>
                    <button type="submit" class="comment-submit">Kirim</button>
                    <button type="submit" class="comment-submit1">Like</button>
                    <button type="submit" class="comment-submit2">Share</button>
                </form>
            </div>
        </div>

        {{-- Postingan 3 --}}
        <div class="gambar">
            <img src="{{ asset('assets/curanmor.jpeg.jpg') }}" alt="Curanmor">
            <h5>Dem tetangkap maling motor Siang tadi di Kebun Bungo. Sellau jago-jago ee buat kamuu bia dk keno jugo kejadian serupo.</h5>
            <div class="komen">
                <form>
                    <textarea class="comment-input" placeholder="Tulis komentar.."></textarea>
                    <div class="comments-list">
                        <h3>Komentar: </h3>
                        <p><strong>Ali:</strong> Bawww ngeri nn jokk</p>
                        <p><strong>Budi:</strong> Tiati la lur men malam malam dewekan</p>
                        <p><strong>Siti:</strong> Harus ditindak oleh pihak berwenang ini</p>
                    </div>
                    <button type="submit" class="comment-submit">Kirim</button>
                    <button type="submit" class="comment-submit1">Like</button>
                    <button type="submit" class="comment-submit2">Share</button>
                </form>
            </div>
        </div>

        {{-- Postingan 4 --}}
        <div class="gambar">
            <img src="{{ asset('assets/pelaku.jpeg.jpg') }}" alt="Pelaku maling">
            <h5>Pelaku maling di Mini Market di Pasar 16 telah tertangkap oleh warga dan polisi. Pelaku ini mengaku telah maling di pasar 16 sebelumnya.</h5>
            <div class="komen">
                <form>
                    <textarea class="comment-input" placeholder="Tulis komentar.."></textarea>
                    <div class="comments-list">
                        <h3>Komentar: </h3>
                        <p><strong>Ali:</strong> Bawww ngeri nn jokk</p>
                        <p><strong>Budi:</strong> Tiati la lur men malam malam dewekan</p>
                        <p><strong>Siti:</strong> Harus ditindak oleh pihak berwenang ini</p>
                    </div>
                    <button type="submit" class="comment-submit">Kirim</button>
                    <button type="submit" class="comment-submit1">Like</button>
                    <button type="submit" class="comment-submit2">Share</button>
                </form>
            </div>
        </div>

        {{-- Postingan 5 --}}
        <div class="gambar">
            <video class="play" controls>
                <source src="{{ asset('assets/WhatsApp Video 2024-12-23 at 15.01.59_3cd57a14.mp4') }}" type="video/mp4">
            </video>
            <h5>Tiati jok men pegi malam malam apolagi kamu daei luar Palembang, bibik ini la keno samoo preman BKB. Lebih hati-hati atau lebih waspada.</h5>
            <div class="komen">
                <form>
                    <textarea class="comment-input" placeholder="Tulis komentar.."></textarea>
                    <div class="comments-list">
                        <h3>Komentar: </h3>
                        <p><strong>Ali:</strong> Bawww ngeri nn jokk</p>
                        <p><strong>Budi:</strong> Tiati la lur men malam malam dewekan</p>
                        <p><strong>Siti:</strong> Harus ditindak oleh pihak berwenang ini</p>
                    </div>
                    <button type="submit" class="comment-submit">Kirim</button>
                    <button type="submit" class="comment-submit1">Like</button>
                    <button type="submit" class="comment-submit2">Share</button>
                </form>
            </div>
        </div>

        {{-- Postingan 6 --}}
        <div class="gambar">
            <video class="play" controls>
                <source src="{{ asset('assets/bocil.mp4') }}" type="video/mp4">
            </video>
            <h5>Aksi pemuda kecil yang melakukan pungli di Jalan KM12, Palembang pada Selasa (22/10/2024) malam. Harap hati-hati Lur.</h5>
            <div class="komen">
                <form>
                    <textarea class="comment-input" placeholder="Tulis komentar.."></textarea>
                    <div class="comments-list">
                        <h3>Komentar: </h3>
                        <p><strong>Ali:</strong> Gemoy nn</p>
                        <p><strong>Budi:</strong> Kasih bae permen oo</p>
                        <p><strong>Siti:</strong> Telpon polisi anak-anak</p>
                    </div>
                    <button type="submit" class="comment-submit">Kirim</button>
                    <button type="submit" class="comment-submit1">Like</button>
                    <button type="submit" class="comment-submit2">Share</button>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection
