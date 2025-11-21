<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Daftar Anggota • Mulia Prasama Danarta</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(160deg, #0D1B2A, #1B263B);
      color: #E6EEF8;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }
    .navbar {
      background-color: rgba(13, 27, 42, 0.9) !important;
      backdrop-filter: blur(6px);
    }
    .auth-wrapper {
      flex: 1;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 3rem 1rem;
      background: radial-gradient(circle at top, rgba(255,255,255,0.08), transparent 60%);
    }
    .auth-card {
      background-color: rgba(255,255,255,0.05);
      border: 1px solid rgba(255,255,255,0.12);
      border-radius: 1rem;
      color: #EAF2FF;
      max-width: 540px;
      width: 100%;
      padding: 2rem 1.75rem;
      box-shadow: 0 8px 30px rgba(0,0,0,0.35);
    }
    .auth-card h1 {
      font-weight: 700;
    }
    .btn-primary {
      background: linear-gradient(45deg, #0D47A1, #1E5ACB);
      border: none;
      box-shadow: 0 4px 18px rgba(29,91,203,0.4);
    }
    .btn-primary:hover {
      filter: brightness(1.07);
    }
    .form-control, .form-select {
      background-color: rgba(10, 20, 35, 0.9);
      border-color: rgba(255,255,255,0.15);
      color: #EAF2FF;
    }
    .form-control:focus, .form-select:focus {
      box-shadow: 0 0 0 0.2rem rgba(30,90,203,0.35);
      border-color: #1E5ACB;
    }
    .footer {
      border-top: 1px solid rgba(255,255,255,0.08);
      padding: 1rem;
      text-align: center;
      color: #AFC3E6;
      margin-top: auto;
    }
    a {
      color: #8FB4FF;
      text-decoration: none;
    }
    a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <div class="container">
      <a class="navbar-brand fw-bold d-flex align-items-center" href="index.php">
        <img src="img/logo.png" alt="Logo" width="32" height="32" class="me-2 rounded bg-white p-1">
        Mulia Prasama Danarta
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="mainNav">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link" href="index.php">Beranda</a></li>
          <li class="nav-item"><a class="nav-link" href="index.php#pinjaman">Pinjaman</a></li>
          <li class="nav-item"><a class="nav-link" href="index.php#simpanan">Simpanan</a></li>
          <li class="nav-item"><a class="nav-link" href="index.php#tentang">Tentang</a></li>
          <li class="nav-item"><a class="nav-link" href="index.php#kontak">Kontak</a></li>
        </ul>
        <div class="d-flex gap-2">
          <a class="btn btn-outline-light btn-sm" href="login.php">Masuk</a>
        </div>
      </div>
    </div>
  </nav>

  <!-- Register Content -->
  <div class="auth-wrapper">
    <div class="auth-card">
      <h1 class="h3 mb-2 text-center">Pendaftaran Anggota Baru</h1>
      <p className="mb-4 text-center" style="color:#AFC3E6 !important;">
        Isi data dengan lengkap sesuai identitas yang terdaftar di Koperasi Simpan Pinjam Mulia Prasama Danarta.
      </p>

      <!-- Form Daftar (sementara hanya tampilan, belum proses backend) -->
      <form method="post" action="#">
        <div class="row g-3">
          <div class="col-md-6">
            <label for="namaLengkap" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="namaLengkap" name="nama_lengkap" required>
          </div>
          <div class="col-md-6">
            <label for="nik" class="form-label">NIK</label>
            <input type="text" class="form-control" id="nik" name="nik" required>
          </div>
          <div class="col-md-6">
            <label for="email" class="form-label">Email Aktif</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <div class="col-md-6">
            <label for="telp" class="form-label">No. HP / WhatsApp</label>
            <input type="text" class="form-control" id="telp" name="telp" required>
          </div>
          <div class="col-12">
            <label for="alamat" class="form-label">Alamat Lengkap</label>
            <textarea class="form-control" id="alamat" name="alamat" rows="2" required></textarea>
          </div>
          <div class="col-md-6">
            <label for="jenisSimpanan" class="form-label">Jenis Simpanan Utama</label>
            <select class="form-select" id="jenisSimpanan" name="jenis_simpanan" required>
              <option value="">Pilih salah satu</option>
              <option value="BINA">BINA (Anggaran)</option>
              <option value="TARUNA">TARUNA</option>
              <option value="DEPORKITA">DEPORKITA</option>
              <option value="INTAN">INTAN</option>
            </select>
          </div>
          <div class="col-md-6">
            <label for="setoranAwal" class="form-label">Rencana Setoran Awal (Rp)</label>
            <input type="number" class="form-control" id="setoranAwal" name="setoran_awal" min="0" required>
          </div>
          <div class="col-md-6">
            <label for="password" class="form-label">Kata Sandi</label>
            <input type="password" class="form-control" id="password" name="password" required>
          </div>
          <div class="col-md-6">
            <label for="passwordKonfirmasi" class="form-label">Konfirmasi Kata Sandi</label>
            <input type="password" class="form-control" id="passwordKonfirmasi" name="password_konfirmasi" required>
          </div>
          <div class="col-12">
            <div class="form-check mb-2">
              <input class="form-check-input" type="checkbox" value="1" id="setuju" required>
              <label class="form-check-label" for="setuju">
                Saya menyetujui ketentuan keanggotaan koperasi dan kebijakan privasi.
              </label>
            </div>
          </div>
        </div>

        <div class="d-grid mt-3 mb-3">
          <button type="submit" class="btn btn-primary btn-lg">Daftar Sekarang</button>
        </div>

        <p class="mb-0 text-center">
          Sudah menjadi anggota? <a href="login.php">Masuk di sini</a>
        </p>
      </form>
    </div>
  </div>

  <!-- Footer -->
  <footer class="footer">
    © 2025 Mulia Prasama Danarta • Inovasi Digital Koperasi
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
