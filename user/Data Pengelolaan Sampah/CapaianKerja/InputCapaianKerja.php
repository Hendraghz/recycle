<?php

session_start();

if (!isset($_SESSION['username'])) {
  header('Location: ../auth-login.php');
  exit();
}

require_once ('../../../koneksi.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Recycle Power - Dashboard User</title>

  <link rel="shortcut icon" href="../../../assets/compiled/svg/favicon.svg" type="image/x-icon" />
  <link rel="shortcut icon"
    href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAiCAYAAADRcLDBAAAEs2lUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iWE1QIENvcmUgNS41LjAiPgogPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIgogICAgeG1sbnM6ZXhpZj0iaHR0cDovL25zLmFkb2JlLmNvbS9leGlmLzEuMC8iCiAgICB4bWxuczp0aWZmPSJodHRwOi8vbnMuYWRvYmUuY29tL3RpZmYvMS4wLyIKICAgIHhtbG5zOnBob3Rvc2hvcD0iaHR0cDovL25zLmFkb2JlLmNvbS9waG90b3Nob3AvMS4wLyIKICAgIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIKICAgIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIgogICAgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIKICAgZXhpZjpQaXhlbFhEaW1lbnNpb249IjMzIgogICBleGlmOlBpeGVsWURpbWVuc2lvbj0iMzQiCiAgIGV4aWY6Q29sb3JTcGFjZT0iMSIKICAgdGlmZjpJbWFnZVdpZHRoPSIzMyIKICAgdGlmZjpJbWFnZUxlbmd0aD0iMzQiCiAgIHRpZmY6UmVzb2x1dGlvblVuaXQ9IjIiCiAgIHRpZmY6WFJlc29sdXRpb249Ijk2LjAiCiAgIHRpZmY6WVJlc29sdXRpb249Ijk2LjAiCiAgIHBob3Rvc2hvcDpDb2xvck1vZGU9IjMiCiAgIHBob3Rvc2hvcDpJQ0NQcm9maWxlPSJzUkdCIElFQzYxOTY2LTIuMSIKICAgeG1wOk1vZGlmeURhdGU9IjIwMjItMDMtMzFUMTA6NTA6MjMrMDI6MDAiCiAgIHhtcDpNZXRhZGF0YURhdGU9IjIwMjItMDMtMzFUMTA6NTA6MjMrMDI6MDAiPgogICA8eG1wTU06SGlzdG9yeT4KICAgIDxyZGY6U2VxPgogICAgIDxyZGY6bGkKICAgICAgc3RFdnQ6YWN0aW9uPSJwcm9kdWNlZCIKICAgICAgc3RFdnQ6c29mdHdhcmVBZ2VudD0iQWZmaW5pdHkgRGVzaWduZXIgMS4xMC4xIgogICAgICBzdEV2dDp3aGVuPSIyMDIyLTAzLTMxVDEwOjUwOjIzKzAyOjAwIi8+CiAgICA8L3JkZjpTZXE+CiAgIDwveG1wTU06SGlzdG9yeT4KICA8L3JkZjpEZXNjcmlwdGlvbj4KIDwvcmRmOlJERj4KPC94OnhtcG1ldGE+Cjw/eHBhY2tldCBlbmQ9InIiPz5V57uAAAABgmlDQ1BzUkdCIElFQzYxOTY2LTIuMQAAKJF1kc8rRFEUxz9maORHo1hYKC9hISNGTWwsRn4VFmOUX5uZZ36oeTOv954kW2WrKLHxa8FfwFZZK0WkZClrYoOe87ypmWTO7dzzud97z+nec8ETzaiaWd4NWtYyIiNhZWZ2TvE946WZSjqoj6mmPjE1HKWkfdxR5sSbgFOr9Ll/rXoxYapQVik8oOqGJTwqPL5i6Q5vCzeo6dii8KlwpyEXFL519LjLLw6nXP5y2IhGBsFTJ6ykijhexGra0ITl5bRqmWU1fx/nJTWJ7PSUxBbxJkwijBBGYYwhBgnRQ7/MIQIE6ZIVJfK7f/MnyUmuKrPOKgZLpEhj0SnqslRPSEyKnpCRYdXp/9++msneoFu9JgwVT7b91ga+LfjetO3PQ9v+PgLvI1xkC/m5A+h7F32zoLXug38dzi4LWnwHzjeg8UGPGbFfySvuSSbh9QRqZ6H+Gqrm3Z7l9zm+h+iafNUV7O5Bu5z3L/wAdthn7QIme0YAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAJTSURBVFiF7Zi9axRBGIefEw2IdxFBRQsLWUTBaywSK4ubdSGVIY1Y6HZql8ZKCGIqwX/AYLmCgVQKfiDn7jZeEQMWfsSAHAiKqPiB5mIgELWYOW5vzc3O7niHhT/YZvY37/swM/vOzJbIqVq9uQ04CYwCI8AhYAlYAB4Dc7HnrOSJWcoJcBS4ARzQ2F4BZ2LPmTeNuykHwEWgkQGAet9QfiMZjUSt3hwD7psGTWgs9pwH1hC1enMYeA7sKwDxBqjGnvNdZzKZjqmCAKh+U1kmEwi3IEBbIsugnY5avTkEtIAtFhBrQCX2nLVehqyRqFoCAAwBh3WGLAhbgCRIYYinwLolwLqKUwwi9pxV4KUlxKKKUwxC6ZElRCPLYAJxGfhSEOCz6m8HEXvOB2CyIMSk6m8HoXQTmMkJcA2YNTHm3congOvATo3tE3A29pxbpnFzQSiQPcB55IFmFNgFfEQeahaAGZMpsIJIAZWAHcDX2HN+2cT6r39GxmvC9aPNwH5gO1BOPFuBVWAZue0vA9+A12EgjPadnhCuH1WAE8ivYAQ4ohKaagV4gvxi5oG7YSA2vApsCOH60WngKrA3R9IsvQUuhIGY00K4flQG7gHH/mLytB4C42EgfrQb0mV7us8AAMeBS8mGNMR4nwHamtBB7B4QRNdaS0M8GxDEog7iyoAguvJ0QYSBuAOcAt71Kfl7wA8DcTvZ2KtOlJEr+ByyQtqqhTyHTIeB+ONeqi3brh+VgIN0fohUgWGggizZFTplu12yW8iy/YLOGWMpDMTPXnl+Az9vj2HERYqPAAAAAElFTkSuQmCC"
    type="image/png" />

  <link rel="stylesheet" href="../../../assets/compiled/css/app.css" />
  <link rel="stylesheet" href="../../../assets/compiled/css/app-dark.css" />
  <link rel="stylesheet" href="../../../assets/compiled/css/iconly.css" />
</head>

<body>
  <script src="../../../assets/static/js/initTheme.js"></script>
  <div id="app">
  <div id="sidebar">
      <div class="sidebar-wrapper active">
        <div class="sidebar-header position-relative">
          <div class="d-flex justify-content-between align-items-center">
            <div class="logo">
              <h4>Hallo <br> <?= $_SESSION['username'] ?></h4>
            </div>
            <div class="theme-toggle d-flex gap-2 align-items-center mt-2">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                role="img" class="iconify iconify--system-uicons" width="20" height="20"
                preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21">
                <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                  <path
                    d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2"
                    opacity=".3"></path>
                  <g transform="translate(-210 -1)">
                    <path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path>
                    <circle cx="220.5" cy="11.5" r="4"></circle>
                    <path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2"></path>
                  </g>
                </g>
              </svg>
              <div class="form-check form-switch fs-6">
                <input class="form-check-input me-0" type="checkbox" id="toggle-dark" style="cursor: pointer" />
                <label class="form-check-label"></label>
              </div>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                role="img" class="iconify iconify--mdi" width="20" height="20" preserveAspectRatio="xMidYMid meet"
                viewBox="0 0 24 24">
                <path fill="currentColor"
                  d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z">
                </path>
              </svg>
            </div>
            <div class="sidebar-toggler x">
              <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
            </div>
          </div>
        </div>
        <div class="sidebar-menu">
          <ul class="menu">
            <li class="sidebar-title">Menu</li>

            <li class="sidebar-item ">
              <a href="../../index.php" class="sidebar-link">
                <i class="bi bi-grid-fill"></i>
                <span>Dashboard</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a href="../../input-data.php" class="sidebar-link">
                <i class="bi bi-stack"></i>
                <span>Input Data</span>
              </a>
            </li>
            <li class="sidebar-item  active has-sub">
              <a href="#" class='sidebar-link'>
                <i class="bi bi-stack"></i>
                <span>Sampah & RTH</span>
              </a>

              <ul class="submenu ">

                <li class="submenu-item ">
                  <a href="../TimbulanSampah/InputTImbulanSampah.php" class="submenu-link">Timbulan
                    Sampah</a>

                </li>

                <li class="submenu-item  ">
                  <a href="../KomposisiSampah/InputKomposisiSampah.php" class="submenu-link">Komposisi Sampah</a>

                </li>

                <li class="submenu-item ">
                  <a href="../SumberSampah/inputSumberSampah.php" class="submenu-link">Sumber
                    Sampah</a>

                </li>

                <li class="submenu-item active ">
                  <a href="../CapaianKerja/InputCapaianKerja.php" class=" submenu-link">Capaian
                    Kerja</a>

                </li>

                <li class="submenu-item  ">
                  <a href="../RTH/inputRTH.php" class="submenu-link">RTH</a>

                </li>
              </ul>
            </li>
            <li class="sidebar-item">
              <a href="../../Fasilitas Pengelolaan Sampah/InputFasilitas.php" class="sidebar-link">
                <i class="bi bi-stack"></i>
                <span>Fasilitas Sampah</span>
              </a>
            </li>
            <br />
            <br />
            <hr />
            <li class="sidebar-item">
              <a href="../../../logout.php" class="sidebar-link">
                <i class="bi bi-stack"></i>
                <span>Log-out</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div id="main">
      <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
          <i class="bi bi-justify fs-3"></i>
        </a>
      </header>

      <div class="page-heading">
        <h3>Capaian Kerja</h3>
      </div>
      <div class="page-content">
        <section class="row">
          <div class="col-12 col-lg-9">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Input Data Capaian Kerja</h4>
              </div>

              <div class="card-body">
                <div class="row">
                  <form action="input.php" method="post" enctype="multipart/form-data">
                    <div class="col">
                      <div class="form-group">
                        <input type="hidden" name="username" value="<?= $_SESSION['username'] ?>" class="form-control"
                          id="basicInput" placeholder="Nama Panggilan" />
                      </div>
                    </div>
                    <div class="col">
                      <div class="form-group">
                        <label for="basicInput">Tahun</label>
                        <input type="number" name="tahun" class="form-control" id="basicInput"
                          placeholder="Contoh : 2023" />
                      </div>
                      <div class="form-group">
                        <label for="basicInput">Kabupaten Kota</label>
                        <select class="form-select" id="kab" name="kab">
                          <option value="">Kab/Kota</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="basicInput">Timbulan Sampah Tahunan (ton/tahun) (A)</label>
                        <input type="number" name="timbulana" class="form-control" id="basicInput"
                          placeholder="Contoh : 89" />
                      </div>
                      <div class="form-group">
                        <label for="basicInput">Pengurangan Sampah (ton/tahunan)(B)</label>
                        <input type="number" name="pengurangansampahb" class="form-control" id="basicInput"
                          placeholder="Contoh : 89" />
                      </div>
                      <div class="form-group">
                        <label for="basicInput">Pengurangan Sampah (B/A)</label>
                        <input type="number" name="pengurangansampahb/a" class="form-control" id="basicInput"
                          placeholder="Contoh : 89" />
                      </div>
                      <div class="form-group">
                        <label for="basicInput">Penanganan Sampah (ton/tahunan)(C)</label>
                        <input type="number" name="pengangansampahc" class="form-control" id="basicInput"
                          placeholder="Contoh : 89" />
                      </div>
                      <div class="form-group">
                        <label for="basicInput">Penanganann Sampah (C/A)</label>
                        <input type="number" name="pengangansampahc/a" class="form-control" id="basicInput"
                          placeholder="Contoh : 89" />
                      </div>
                      <div class="form-group">
                        <label for="basicInput">Sampah Terkelola Tahunan (B+C)</label>
                        <input type="number" name="sampahterkelolab+c" class="form-control" id="basicInput"
                          placeholder="Contoh : 89" />
                      </div>
                      <div class="form-group">
                        <label for="basicInput">Sampah Terkelola (B+C)/A</label>
                        <input type="number" name="sampahterkelolab+c/a" class="form-control" id="basicInput"
                          placeholder="Contoh : 89" />
                      </div>
                      <div class="form-group">
                        <label for="basicInput">Daur Ulang Sampah Tahunan (ton/tahun)(D)</label>
                        <input type="number" name="daurulang" class="form-control" id="basicInput"
                          placeholder="Contoh : 89" />
                      </div>
                      <div class="form-group">
                        <label for="basicInput">Bahan Baku sampah Tahunan (ton/tahun) (E)</label>
                        <input type="number" name="bahanbaku" class="form-control" id="basicInput"
                          placeholder="Contoh : 89" />
                      </div>
                      <div class="form-group">
                        <label for="basicInput">Recycling Rate(D+E)/A</label>
                        <input type="number" name="recycling" class="form-control" id="basicInput"
                          placeholder="Contoh : 89" />
                      </div>
                      <div class="form-group">
                        <label for="basicInput">P1/P2</label>
                        <input type="text" name="p1p2" class="form-control" id="basicInput"
                          placeholder="Contoh : P1" />
                      </div>
                      <div class="d-flex align-items-center justify-content-end mt-5">
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="section">
          <div class="row" id="basic-table">
            <div class="col-12 col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Data Timbulan Sampah Yang Masuk</h4>
                </div>
                <div class="card-content">
                  <div class="card-body">
                    <!-- Table with outer spacing -->
                    <div class="table-responsive">
                      <table class="table table-lg">
                        <thead>
                          <tr>
                            <th>Tahun</th>
                            <th>Kabupaten/Kota</th>
                            <th>Timbulan Sampah Tahunan (ton/tahun) (A)</th>
                            <th>Pengurangan Sampah (ton/tahunan)(B)</th>
                            <th>Pengurangan Sampah (B/A)</th>
                            <th>Penanganan Sampah (ton/tahunan)(C)</th>
                            <th>Penanganann Sampah (C/A)</th>
                            <th>Sampah Terkelola Tahunan (B+C)</th>
                            <th>Sampah Terkelola (B+C)/A</th>
                            <th>Daur Ulang Sampah Tahunan (ton/tahun)(D)</th>
                            <th>Bahan Baku sampah Tahunan (ton/tahun) (E)</th>
                            <th>Recycling Rate(D+E)/A</th>
                            <th>P1/P2</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          include '../../../koneksi.php';
                          $batas = 10;
                          $halaman = isset($_GET['halaman']) ? (int) $_GET['halaman'] : 1;
                          $halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

                          $previous = $halaman - 1;
                          $next = $halaman + 1;
                          $data = mysqli_query($koneksi, "select * from input ");
                          $jumlah_data = mysqli_num_rows($data);
                          $total_halaman = ceil($jumlah_data / $batas);

                          $no = 1;
                          $data = mysqli_query($koneksi, "select * from input WHERE username = '" . $_SESSION['username'] . "' limit $halaman_awal, $batas ");
                          while ($d = mysqli_fetch_array($data)) {
                            ?>
                            <tr>
                              <td>2023</td>
                              <td>Kab Bandung</td>
                              <td>98.2</td>
                              <td>35.2</td>
                              <td>0.36</td>
                              <td>63.0</td>
                              <td>0.64</td>
                              <td>98.2</td>
                              <td>1.0</td>
                              <td>35.2</td>
                              <td>0.0</td>
                              <td>0.36</td>
                              <td>P1</td>
                              <td><a href="edit-data.php?id=<?= $d['id'] ?>"><button
                                    class="btn btn-primary">Edit</button></a>
                                <a href="hapus.php?id=<?= $d['id'] ?>"><button class="btn btn-danger">Hapus</button></a>
                              </td>
                            </tr>
                            <?php
                          }
                          ?>
                        </tbody>
                      </table>
                      <nav aria-label="Page navigation example">
                        <ul class="pagination pagination-primary">
                          <li class="page-item"><a class="page-link" <?php if ($halaman > 1) {
                            echo "href='?halaman=$previous'";
                          } ?>>Prev</a></li>
                          <?php
                          for ($x = 1; $x <= $total_halaman; $x++) {
                            ?>
                            <li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>">
                                <?php echo $x; ?>
                              </a></li>
                            <?php
                          }
                          ?>
                          <li class="page-item"><a class="page-link" <?php if ($halaman < $total_halaman) {
                            echo "href='?halaman=$next'";
                          } ?>>Next</a></li>
                        </ul>
                      </nav>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>

      <footer>
        <div class="footer clearfix mb-0 text-muted">
          <div class="float-start">
            <p>2023 &copy; AHA</p>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <script src="../../../assets/static/js/components/dark.js"></script>
  <script src="../../../assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>

  <script src="../../../assets/compiled/js/app.js"></script>

  <script>
    fetch(`https://kanglerian.github.io/api-wilayah-indonesia/api/regencies/32.json`)
      .then(response => response.json())
      .then(districts => {
        let data = districts;
        let tampung = '<option>Kab/kota</option>';
        data.forEach(element => {
          tampung += `<option data-reg=${element.id} value=${element.name}>${element.name}</option>`;
        });
        document.getElementById('kab').innerHTML = tampung;
      });


  </script>
</body>

</html>