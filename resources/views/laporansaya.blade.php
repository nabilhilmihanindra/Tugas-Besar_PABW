@extends('layouts.app')

@section('title', 'Laporan Saya')

@section('content')
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sahabat Warga</title>
    <link rel="stylesheet" href="css/styles2.css">
    <link href='https://cdn.boxicons.com/fonts/basic/boxicons.min.css' rel='stylesheet'>
    <link href='https://cdn.boxicons.com/fonts/brands/boxicons-brands.min.css' rel='stylesheet'>
</head>

<body>
    <div class="container">

        <div class="sidebar">
            <div class="sidebar-header">
                <div class="logo-container">
                    <img src="assets/logo.jpg" alt="Sahabat Warga Logo" class="logo">
                    <h3 class="site-title">Sahabat Warga</h3>
                </div>
                <label for="sidebar-toggle" class="sidebar-toggle-label">
                    <!-- < i class='bx  bx-home-alt'  ></i>  -->
                </label>
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

        <div class="content">
            <div class="table-container">
                <h2>Status Laporan :</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Tanggal Kejadian</th>
                            <th>Waktu Kejadian</th>
                            <th>Jenis Permasalahan</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
    <script> // ini ambil dan tampilkan data dari laporan read.php
// document.addEventListener("DOMContentLoaded", function () {
//     const user = JSON.parse(localStorage.getItem("user"));

//     const user_id = user.User_ID;

//     fetch(backend/laporan/read.php?user_id=${user_id})
//     .then(response => response.json())
//     .then(data => {
//         const tbody = document.querySelector("tbody");
//         tbody.innerHTML = "";

//         if (!data || data.length === 0) {
//             tbody.innerHTML = "<tr><td colspan='6'>Belum ada laporan</td></tr>";
//             return;
//         }

//         data.forEach(laporan => {
//             const tr = document.createElement("tr");
//             tr.innerHTML = `
//                 <td>${laporan.Nama}</td>
//                 <td>${laporan.Email}</td>
//                 <td>${laporan.Tanggal_kejadian}</td>
//                 <td>${laporan.Waktu_kejadian}</td>
//                 <td>${laporan.Jenis_masalah}</td>
//                 <td>${laporan.Status_laporan}</td>
//             `;
//             tbody.appendChild(tr);
//         });
//     })
//     .catch(err => {
//         console.error("Gagal memuat laporan:", err);
//         const tbody = document.querySelector("tbody");
//         tbody.innerHTML = "<tr><td colspan='6'>Terjadi kesalahan saat mengambil data.</td></tr>";
//     });
// });

// document.addEventListener("DOMContentLoaded", () => { // ini untuk cek session login
//   if (!localStorage.getItem("user")) {
//     fetch("backend/session_user.php")
//       .then(res => res.json())
//       .then(data => {
//         if (data.logged_in) {
//           localStorage.setItem("user", JSON.stringify(data.user)); //simpen ke localstorage
//         } else {
//           window.location.href = "login.php";
//         }
//       });
//   }
// });
document.addEventListener("DOMContentLoaded", () => {
  fetch("backend/session_user.php")
    .then(res => res.json())
    .then(data => {
      if (data.logged_in) {
        localStorage.setItem("user", JSON.stringify(data.user));
        loadLaporan(data.user.User_ID); // Panggil fungsi loadLaporan
      } else {
        window.location.href = "login.php";
      }
    });
});

function loadLaporan(user_id) {
  fetch(`backend/laporan/read.php?user_id=${user_id}`)
    .then(response => response.json())
    .then(data => {
      const tbody = document.querySelector("tbody");
      tbody.innerHTML = "";

      if (!data || data.length === 0) {
        tbody.innerHTML = "<tr><td colspan='6'>Belum ada laporan</td></tr>";
        return;
      }

      data.forEach(laporan => {
        const tr = document.createElement("tr");
        tr.innerHTML = `
          <td>${laporan.Nama}</td>
          <td>${laporan.Email}</td>
          <td>${laporan.Tanggal_kejadian}</td>
          <td>${laporan.Waktu_kejadian}</td>
          <td>${laporan.Jenis_masalah}</td>
          <td>${laporan.Status_laporan}</td>
        `;
        tbody.appendChild(tr);
      });
    })
    .catch(err => {
      console.error("Gagal memuat laporan:", err);
      const tbody = document.querySelector("tbody");
      tbody.innerHTML = "<tr><td colspan='6'>Terjadi kesalahan saat mengambil data.</td></tr>";
    });
}

</script>
</body>
</html>
@endsection
