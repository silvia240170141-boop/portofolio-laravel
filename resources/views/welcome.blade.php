<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio | Silvia Ramadhani</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8fafc;
            color: #1e293b;
            scroll-behavior: smooth;
            padding-top: 80px;
        }

        /* NAVBAR PREMIUM GLASSMORPHISM */
        .navbar-custom {
            background: rgba(255, 255, 255, 0.95) !important;
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.03);
        }
        .navbar-brand-custom {
            font-weight: 700;
            color: #1e3a8a !important;
            letter-spacing: -0.5px;
        }
        .nav-link-custom {
            color: #334155 !important;
            font-weight: 600;
            padding: 8px 12px !important;
            transition: all 0.3s ease;
            font-size: 0.95rem;
        }
        .nav-link-custom:hover {
            color: #ca8a04 !important;
        }
        
        /* SOCIAL MEDIA BUTTONS */
        .btn-nav-social {
            width: 35px;
            height: 35px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: #f1f5f9;
            color: #334155;
            transition: all 0.3s ease;
            text-decoration: none;
        }
        .btn-nav-social:hover {
            transform: translateY(-2px);
        }
        .btn-nav-wa:hover { background: #25d366; color: white; }
        .btn-nav-mail:hover { background: #ef4444; color: white; }
        .btn-nav-tiktok:hover { background: #000000; color: white; }

        /* HERO SECTION */
        .hero-section {
            background: linear-gradient(135deg, #0f172a 0%, #1e3a8a 50%, #172554 100%);
            color: white;
            padding: 100px 0 90px 0;
            border-bottom: 6px solid #eab308;
            position: relative;
            overflow: hidden;
            border-radius: 0 0 24px 24px;
        }

        /* PREMIUM CARDS */
        .card-profile {
            border: none;
            border-radius: 24px;
            box-shadow: 0 10px 15px -3px rgba(15, 23, 42, 0.05);
            background: #ffffff;
        }
        
        .card-project {
            border: 1px solid rgba(241, 245, 249, 0.8);
            border-radius: 22px;
            background-color: #ffffff;
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .card-project:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 40px rgba(30, 58, 138, 0.08);
            border-color: rgba(234, 179, 8, 0.3);
        }

        .btn-unimal-yellow {
            background-color: #eab308;
            color: #0f172a;
            font-weight: 600;
            border: none;
            box-shadow: 0 4px 14px rgba(234, 179, 8, 0.3);
        }
        .btn-unimal-yellow:hover {
            background-color: #ca8a04;
            color: #0f172a;
        }

        .avatar-wrapper {
            position: relative;
            display: inline-block;
            padding: 7px;
            background: linear-gradient(135deg, #1e3a8a, #eab308);
            border-radius: 50%;
        }

        /* MUSIC CARD AUDIO PLAYER */
        .music-card {
            background: linear-gradient(135deg, #0f172a, #1e3a8a);
            border-radius: 18px;
            padding: 20px;
            color: white;
            box-shadow: 0 8px 20px rgba(30, 58, 138, 0.15);
        }
        .btn-play-pause {
            width: 45px;
            height: 45px;
            background-color: #eab308;
            color: #0f172a;
            border: none;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.2s ease;
        }
        .btn-play-pause:hover {
            transform: scale(1.05);
        }

        /* ANIMASI GELOMBANG AUDIO */
        .music-waves span {
            display: inline-block;
            width: 3px;
            height: 10px;
            background-color: #eab308;
            border-radius: 2px;
            transition: transform 0.2s ease;
        }
        .music-card.playing .music-waves span {
            animation: bounce 1.2s infinite ease-in-out;
        }
        .music-card.playing .music-waves span:nth-child(2) { animation-delay: 0.2s; height: 16px; }
        .music-card.playing .music-waves span:nth-child(3) { animation-delay: 0.4s; height: 12px; }
        .music-card.playing .music-waves span:nth-child(4) { animation-delay: 0.6s; height: 18px; }
        
        @keyframes bounce {
            0%, 100% { transform: scaleY(1); }
            50% { transform: scaleY(0.4); }
        }

        /* TIMELINE PENDIDIKAN */
        .edu-item {
            border-left: 3px solid #eab308;
            padding-left: 22px;
            margin-bottom: 24px;
            position: relative;
        }
        .edu-item::before {
            content: '';
            position: absolute;
            left: -8px;
            top: 5px;
            width: 13px;
            height: 13px;
            background-color: #1e3a8a;
            border: 2px solid #eab308;
            border-radius: 50%;
        }
        .edu-item:last-child {
            border-left: 3px solid transparent;
        }

        /* KOTAK BADGE MINAT & KEAHLIAN */
        .interest-item {
            background-color: #f8fafc;
            border-radius: 12px;
            padding: 12px 16px;
            display: flex;
            align-items: center;
            font-size: 0.95rem;
            font-weight: 500;
            border: 1px solid #e2e8f0;
            color: #334155;
        }

        /* SEC TOOLS & SOFTWARE BADGES */
        .tool-badge {
            background-color: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 8px 14px;
            font-size: 0.85rem;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            color: #475569;
        }

        /* QUOTE BOX */
        .quote-box {
            background: #f8fafc;
            border-left: 4px solid #1e3a8a;
            border-radius: 4px 16px 16px 4px;
            padding: 16px;
            font-style: italic;
        }
        
        .badge-unimal-blue { background-color: #1e3a8a; color: white; }
        .badge-unimal-dark { background-color: #0f172a; color: white; }
        .text-unimal-blue { color: #1e3a8a; }
        .text-unimal-yellow { color: #ca8a04; }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-md navbar-light fixed-top navbar-custom py-3">
        <div class="container">
            <a class="navbar-brand navbar-brand-custom" href="#"><i class="fas fa-code text-unimal-blue me-2"></i>SR.</a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAlt">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAlt">
                <div class="navbar-nav gap-1 me-3 border-end pe-3 border-secondary-subtle">
                    <a class="nav-link nav-link-custom" href="#tentang"><i class="fas fa-user-circle me-1"></i> Profil</a>
                    <a class="nav-link nav-link-custom" href="#project"><i class="fas fa-folder me-1"></i> Project</a>
                    <a class="nav-link nav-link-custom" href="#pendidikan"><i class="fas fa-graduation-cap me-1"></i> Pendidikan</a>
                </div>
                <div class="d-flex gap-2">
                    <a href="mailto:silvia.240170141@mhs.unimal.ac.id" class="btn-nav-social btn-nav-mail"><i class="fas fa-envelope"></i></a>
                    <a href="https://wa.me/6282255984670" target="_blank" class="btn-nav-social btn-nav-wa"><i class="fab fa-whatsapp"></i></a>
                    <a href="https://www.tiktok.com/@silvia_rmdhn?_r=1&_t=ZS-96YK6SJasD4" target="_blank" class="btn-nav-social btn-nav-tiktok"><i class="fab fa-tiktok"></i></a>
                </div>
            </div>
        </div>
    </nav>

    <header class="hero-section text-center shadow-sm">
        <div class="container">
            <span class="badge bg-warning text-dark px-3 py-2 rounded-pill mb-3 fw-bold text-uppercase">Informatics Student</span>
            <h1 class="display-3 fw-bold text-white mb-2">Silvia Ramadhani</h1>
            <p class="lead text-white-50 fs-4 fw-light mb-4">Teknik Informatika • Universitas Malikussaleh</p>
        </div>
    </header>

    <main class="container my-5">
        <div class="row g-4">
            
            <div class="col-lg-4" id="tentang">
                <div class="card card-profile p-4 text-center bg-white">
                    <div class="my-4">
                        <div class="avatar-wrapper">
                            <img src="{{ asset('foto-profil.png') }}" alt="Foto Silvia" class="rounded-circle bg-white" style="width: 140px; height: 140px; object-fit: cover; display: block;">
                        </div>
                    </div>

                    <h3 class="fw-bold text-dark mb-1">Silvia Ramadhani</h3>
                    <p class="fw-semibold text-muted mb-3">NIM. 240170141</p>
                    <div class="d-flex justify-content-center gap-2 mb-3">
                        <span class="badge badge-unimal-blue rounded-pill px-3 py-2">Angkatan 2024</span>
                    </div>
                    <hr class="opacity-10">
                    
                    <p class="text-start text-secondary lh-lg mb-4" style="text-align: justify !important; font-size: 0.95rem;">
                        Hai, perkenalkan saya Silvia Ramadhani, mahasiswi Teknik Informatika Universitas Malikussaleh. Lewat web portofolio berbasis Laravel ini, saya ingin mendokumentasikan perjalanan dan proses belajar saya di dunia IT. Di samping mempelajari materi kuliah, saya memiliki keahlian praktis dalam menggunakan Microsoft Word dan Excel untuk mendukung manajemen dokumen. Oh ya, buat saya, belajar hal baru di dunia IT rasanya jadi jauh lebih seru kalau sambil mendengarkan musik!
                    </p>
                    
                    <hr class="opacity-10">
                    
                    <div class="text-start mb-2">
                        <h6 class="fw-bold text-dark mb-3"><i class="fas fa-headphones text-unimal-blue me-2"></i>Via's Coding Playlist</h6>
                        <div class="music-card d-flex align-items-center justify-content-between" id="musicCard">
                            <div class="d-flex align-items-center gap-3">
                                <button class="btn-play-pause" id="playBtn">
                                    <i class="fas fa-play" id="playIcon"></i>
                                </button>
                                <div>
                                    <p class="m-0 small fw-bold text-white mb-1">Sedia Aku Sebelum Hujan</p>
                                    <span class="text-white-50" id="musicStatus" style="font-size: 0.8rem;">Sedia Aku • Click to play</span>
                                </div>
                            </div>
                            <div class="music-waves d-flex gap-1 align-items-end pe-2" style="height: 18px;">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                        
                        <audio id="myAudio" loop>
                            <source src="{{ asset('Sedia Aku Sebelum Hujan.mp3') }}" type="audio/mpeg">
                        </audio>
                    </div>

                    <div class="text-start mt-4 pt-3 border-top">
                        <h6 class="fw-bold text-dark mb-3"><i class="fas fa-star text-unimal-blue me-2"></i>Keahlian & Fokus</h6>
                        <div class="d-flex gap-2 flex-wrap">
                            <span class="badge bg-primary px-2 py-2 rounded-3">Microsoft Word</span>
                            <span class="badge bg-primary px-2 py-2 rounded-3">Microsoft Excel</span>
                            <span class="badge bg-dark px-2 py-2 rounded-3">Manajemen Dokumen</span>
                            <span class="badge bg-warning text-dark px-2 py-2 rounded-3 fw-bold">Belajar Hal Baru</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-8" id="project">
                <div class="card card-profile p-4 bg-white h-100">
                    <div class="d-flex align-items-center justify-content-between mb-4 border-bottom pb-3">
                        <h3 class="fw-bold text-dark m-0"><i class="fas fa-folder-open text-unimal-yellow me-2"></i>Project Kuliah Terpilih</h3>
                    </div>
                    
                    <div class="row g-4 mb-5">
                        <div class="col-md-6">
                            <div class="card card-project h-100 p-4 d-flex flex-column">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="p-3 bg-light text-unimal-blue rounded-3 me-3"><i class="fas fa-code fa-2x"></i></div>
                                    <div>
                                        <h5 class="fw-bold m-0 text-dark" style="font-size: 1.05rem;">Data Mahasiswa Web</h5>
                                        <span class="text-muted small">Pemrograman Web</span>
                                    </div>
                                </div>
                                <p class="small text-secondary lh-lg mb-4">Sistem Informasi Data Mahasiswa dirancang untuk mempermudah proses administrasi data akademik secara digital menggunakan PHP dan MySQL. Desain dibuat elegan dengan CRUD manajemen data.</p>
                                <div class="mt-auto">
                                    <a href="{{ asset('laporan-web.pdf') }}" target="_blank" class="btn btn-unimal-yellow rounded-pill px-3 w-100 mb-3 text-center shadow-sm"><i class="fas fa-file-pdf me-1"></i> Buka Laporan PDF</a>
                                    <div class="d-flex gap-1 flex-wrap">
                                        <span class="badge badge-unimal-dark rounded-3">PHP</span>
                                        <span class="badge badge-unimal-dark rounded-3">MySQL</span>
                                        <span class="badge badge-unimal-dark rounded-3">CRUD</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card card-project h-100 p-4 d-flex flex-column">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="p-3 bg-light text-success rounded-3 me-3"><i class="fas fa-shield-halved fa-2x"></i></div>
                                    <div>
                                        <h5 class="fw-bold m-0 text-dark" style="font-size: 1.05rem;">Analisis Keamanan Absensi</h5>
                                        <span class="text-muted small">Keamanan Siskom</span>
                                    </div>
                                </div>
                                <p class="small text-secondary lh-lg mb-4">Laporan Analisis dan Implementasi Keamanan pada Sistem Absensi Mahasiswa Berbasis Web. Menganalisis celah keamanan sistem informasi absensi serta memberikan rekomendasi presensi.</p>
                                <div class="mt-auto">
                                    <a href="{{ asset('laporan-siskom.pdf') }}" target="_blank" class="btn btn-unimal-yellow rounded-pill px-3 w-100 mb-3 text-center shadow-sm"><i class="fas fa-file-pdf me-1"></i> Buka Laporan PDF</a>
                                    <div class="d-flex gap-1 flex-wrap">
                                        <span class="badge badge-unimal-dark rounded-3">Security Analysis</span>
                                        <span class="badge badge-unimal-dark rounded-3">Web Security</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row g-4 border-top pt-4" id="pendidikan">
                        <div class="col-md-7">
                            <h4 class="fw-bold text-dark mb-4"><i class="fas fa-graduation-cap text-unimal-blue me-2"></i>Riwayat Pendidikan</h4>
                            
                            <div class="edu-item">
                                <h6 class="fw-bold m-0 text-dark" style="font-size: 1rem;">Universitas Malikussaleh</h6>
                                <p class="text-unimal-blue small fw-semibold m-0">Jurusan Teknik Informatika</p>
                                <p class="text-muted small m-0">2024 – Sekarang (Perkiraan Lulus: 2028)</p>
                                <span class="badge bg-success-subtle text-success border border-success-subtle rounded-pill px-2 mt-1" style="font-size: 0.75rem;">Mahasiswa Aktif (Semester 4)</span>
                                <div class="text-secondary small mt-1"><i class="fas fa-users text-muted me-1"></i>Organisasi: Anggota UKM PTQ</div>
                            </div>
                            
                            <div class="edu-item">
                                <h6 class="fw-bold m-0 text-dark" style="font-size: 1rem;">SMK Negeri 1 Darul Aman</h6>
                                <p class="text-secondary small fw-semibold m-0">Jurusan: Teknik Komputer dan Jaringan</p>
                                <p class="text-muted small m-0">2021 – 2024</p>
                                <div class="text-secondary small mt-1"><i class="fas fa-briefcase text-muted me-1"></i>Kegiatan: Prakerin di AULIYA COMPUTER 3 Bulan</div>
                            </div>

                            <div class="edu-item">
                                <h6 class="fw-bold m-0 text-dark" style="font-size: 1rem;">SMP Negeri 1 Julok</h6>
                                <p class="text-muted small m-0">2018 – 2021</p>
                            </div>

                            <div class="edu-item">
                                <h6 class="fw-bold m-0 text-dark" style="font-size: 1rem;">SD Negeri Buket Siraja</h6>
                                <p class="text-muted small m-0">2012 – 2018</p>
                            </div>
                        </div>

                        <div class="col-md-5">
                            <h4 class="fw-bold text-dark mb-4"><i class="fas fa-heart text-danger me-2"></i>Minat & Kesukaan</h4>
                            <div class="d-flex flex-column gap-2 mb-4">
                                <div class="interest-item"><i class="fas fa-music text-primary me-2"></i>Mendengarkan Musik</div>
                                <div class="interest-item"><i class="fas fa-book-open text-success me-2"></i>Belajar IT</div>
                                <div class="interest-item"><i class="fas fa-book text-warning me-2"></i>Membaca</div>
                            </div>
                            
                            <div class="quote-box mt-3">
                                <p class="small text-muted mb-2">"The beautiful thing about learning is that no one can take it away from you."</p>
                                <span class="small fw-bold text-unimal-blue">— Silvia Ramadhani</span>
                            </div>
                        </div>
                    </div>

                    <div class="mt-5 pt-4 border-top" id="toolsSection">
                        <h5 class="fw-bold text-dark mb-3"><i class="fas fa-laptop-file text-unimal-yellow me-2"></i>Tools & Software yang Digunakan</h5>
                        <div class="d-flex gap-2 flex-wrap">
                            <div class="tool-badge"><i class="fab fa-laravel text-danger me-2"></i> Laravel 11</div>
                            <div class="tool-badge"><i class="fas fa-server text-primary me-2"></i> XAMPP Server</div>
                            <div class="tool-badge"><i class="fas fa-code text-info me-2"></i> Visual Studio Code</div>
                            <div class="tool-badge"><i class="fab fa-bootstrap text-purple me-2" style="color: #7952b3;"></i> Bootstrap 5</div>
                        </div>
                    </div>
                    
                </div>
            </div>

        </div>
    </main>

    <footer class="bg-dark text-white-50 text-center py-4 mt-5 border-top border-secondary">
        <div class="container">
            <p class="mb-1 text-white fw-semibold">&copy; 2026 Silvia Ramadhani. All Rights Reserved.</p>
            <p class="small mb-0">Teknik Informatika Universitas Malikussaleh</p>
        </div>
    </footer>

    <script>
        const myAudio = document.getElementById('myAudio');
        const playBtn = document.getElementById('playBtn');
        const playIcon = document.getElementById('playIcon');
        const musicCard = document.getElementById('musicCard');
        const musicStatus = document.getElementById('musicStatus');

        playBtn.addEventListener('click', function() {
            if (myAudio.paused) {
                myAudio.play();
                playIcon.className = 'fas fa-pause';
                musicCard.classList.add('playing');
                musicStatus.innerText = 'Now Playing...';
            } else {
                myAudio.pause();
                playIcon.className = 'fas fa-play';
                musicCard.classList.remove('playing');
                musicStatus.innerText = 'Music Paused';
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>