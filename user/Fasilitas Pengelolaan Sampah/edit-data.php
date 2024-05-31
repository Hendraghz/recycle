<?php
session_start();
include '../../koneksi.php';

$id = $_GET['id'];

// Fetch the existing data
$query = "SELECT * FROM fasilitas WHERE id = ?";
$stmt = $koneksi->prepare($query);
$stmt->bind_param('i', $id);
$stmt->execute();
$result = $stmt->get_result();
$data = $result->fetch_assoc();

if (!$data) {
  echo "Data not found!";
  exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Recycle Power - Dashboard User</title>

  <link rel="shortcut icon" href="../../assets/compiled/svg/favicon.svg" type="image/x-icon" />
  <link rel="shortcut icon"
    href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAiCAYAAADRcLDBAAAEs2lUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iWE1QIENvcmUgNS41LjAiPgogPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIgogICAgeG1sbnM6ZXhpZj0iaHR0cDovL25zLmFkb2JlLmNvbS9leGlmLzEuMC8iCiAgICB4bWxuczp0aWZmPSJodHRwOi8vbnMuYWRvYmUuY29tL3RpZmYvMS4wLyIKICAgIHhtbG5zOnBob3Rvc2hvcD0iaHR0cDovL25zLmFkb2JlLmNvbS9waG90b3Nob3AvMS4wLyIKICAgIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIKICAgIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIgogICAgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIKICAgZXhpZjpQaXhlbFhEaW1lbnNpb249IjMzIgogICBleGlmOlBpeGVsWURpbWVuc2lvbj0iMzQiCiAgIGV4aWY6Q29sb3JTcGFjZT0iMSIKICAgdGlmZjpJbWFnZVdpZHRoPSIzMyIKICAgdGlmZjpJbWFnZUxlbmd0aD0iMzQiCiAgIHRpZmY6UmVzb2x1dGlvblVuaXQ9IjIiCiAgIHRpZmY6WFJlc29sdXRpb249Ijk2LjAiCiAgIHRpZmY6WVJlc29sdXRpb249Ijk2LjAiCiAgIHBob3Rvc2hvcDpDb2xvck1vZGU9IjMiCiAgIHBob3Rvc2hvcDpJQ0NQcm9maWxlPSJzUkdCIElFQzYxOTY2LTIuMSIKICAgeG1wOk1vZGlmeURhdGU9IjIwMjItMDMtMzFUMTA6NTA6MjMrMDI6MDAiCiAgIHhtcDpNZXRhZGF0YURhdGU9IjIwMjItMDMtMzFUMTA6NTA6MjMrMDI6MDAiPgogICA8eG1wTU06SGlzdG9yeT4KICAgIDxyZGY6U2VxPgogICAgIDxyZGY6bGkKICAgICAgc3RFdnQ6YWN0aW9uPSJwcm9kdWNlZCIKICAgICAgc3RFdnQ6c29mdHdhcmVBZ2VudD0iQWZmaW5pdHkgRGVzaWduZXIgMS4xMC4xIgogICAgICBzdEV2dDp3aGVuPSIyMDIyLTAzLTMxVDEwOjUwOjIzKzAyOjAwIi8+CiAgICA8L3JkZjpTZXE+CiAgIDwveG1wTU06SGlzdG9yeT4KICA8L3JkZjpEZXNjcmlwdGlvbj4KIDwvcmRmOlJERj4KPC94OnhtcG1ldGE+Cjw/eHBhY2tldCBlbmQ9InIiPz5V57uAAAABgmlDQ1BzUkdCIElFQzYxOTY2LTIuMQAAKJF1kc8rRFEUxz9maORHo1hYKC9hISNGTWwsRn4VFmOUX5uZZ36oeTOv954kW2WrKLHxa8FfwFZZK0WkZClrYoOe87ypmWTO7dzzud97z+nec8ETzaiaWd4NWtYyIiNhZWZ2TvE946WZSjqoj6mmPjE1HKWkfdxR5sSbgFOr9Ll/rXoxYapQVik8oOqGJTwqPL5i6Q5vCzeo6dii8KlwpyEXFL519LjLLw6nXP5y2IhGBsFTJ6ykijhexGra0ITl5bRqmWU1fx/nJTWJ7PSUxBbxJkwijBBGYYwhBgnRQ7/MIQIE6ZIVJfK7f/MnyUmuKrPOKgZLpEhj0SnqslRPSEyKnpCRYdXp/9++msneoFu9JgwVT7b91ga+LfjetO3PQ9v+PgLvI1xkC/m5A+h7F32zoLXug38dzi4LWnwHzjeg8UGPGbFfySvuSSbh9QRqZ6H+Gqrm3Z7l9zm+h+iafNUV7O5Bu5z3L/wAdthn7QIme0YAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAJTSURBVFiF7Zi9axRBGIefEw2IdxFBRQsLWUTBaywSK4ubdSGVIY1Y6HZql8ZKCGIqwX/AYLmCgVQKfiDn7jZeEQMWfsSAHAiKqPiB5mIgELWYOW5vzc3O7niHhT/YZvY37/swM/vOzJbIqVq9uQ04CYwCI8AhYAlYAB4Dc7HnrOSJWcoJcBS4ARzQ2F4BZ2LPmTeNuykHwEWgkQGAet9QfiMZjUSt3hwD7psGTWgs9pwH1hC1enMYeA7sKwDxBqjGnvNdZzKZjqmCAKh+U1kmEwi3IEBbIsugnY5avTkEtIAtFhBrQCX2nLVehqyRqFoCAAwBh3WGLAhbgCRIYYinwLolwLqKUwwi9pxV4KUlxKKKUwxC6ZElRCPLYAJxGfhSEOCz6m8HEXvOB2CyIMSk6m8HoXQTmMkJcA2YNTHm3congOvATo3tE3A29pxbpnFzQSiQPcB55IFmFNgFfEQeahaAGZMpsIJIAZWAHcDX2HN+2cT6r39GxmvC9aPNwH5gO1BOPFuBVWAZue0vA9+A12EgjPadnhCuH1WAE8ivYAQ4ohKaagV4gvxi5oG7YSA2vApsCOH60WngKrA3R9IsvQUuhIGY00K4flQG7gHH/mLytB4C42EgfrQb0mV7us8AAMeBS8mGNMR4nwHamtBB7B4QRNdaS0M8GxDEog7iyoAguvJ0QYSBuAOcAt71Kfl7wA8DcTvZ2KtOlJEr+ByyQtqqhTyHTIeB+ONeqi3brh+VgIN0fohUgWGggizZFTplu12yW8iy/YLOGWMpDMTPXnl+Az9vj2HERYqPAAAAAElFTkSuQmCC"
    type="image/png" />

  <link rel="stylesheet" href="../../assets/compiled/css/app.css" />
  <link rel="stylesheet" href="../../assets/compiled/css/app-dark.css" />
  <link rel="stylesheet" href="../../assets/compiled/css/iconly.css" />
</head>

<body>
  <script src="../../assets/static/js/initTheme.js"></script>
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
              <a href="index.php" class="sidebar-link">
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
            <li class="sidebar-item  has-sub">
              <a href="#" class='sidebar-link'>
                <i class="bi bi-stack"></i>
                <span>Sampah & RTH</span>
              </a>

              <ul class="submenu ">

                <li class="submenu-item ">
                  <a href="../Data Pengelolaan Sampah/TimbulanSampah/InputTImbulanSampah.php"
                    class="submenu-link">Timbulan
                    Sampah</a>

                </li>

                <li class="submenu-item  ">
                  <a href="../Data Pengelolaan Sampah/KomposisiSampah/InputKomposisiSampah.php"
                    class="submenu-link">Komposisi Sampah</a>

                </li>

                <li class="submenu-item ">
                  <a href="../Data Pengelolaan Sampah/SumberSampah/inputSumberSampah.php" class="submenu-link">Sumber
                    Sampah</a>

                </li>

                <li class="submenu-item  ">
                  <a href="../Data Pengelolaan Sampah/CapaianKerja/InputCapaianKerja.php" class=" submenu-link">Capaian
                    Kerja</a>

                </li>

                <li class="submenu-item ">
                  <a href="../Data Pengelolaan Sampah/RTH/inputRTH.php" class="submenu-link">RTH</a>

                </li>
              </ul>
            </li>
            <li class="sidebar-item active">
              <a href="InputFasilitas.php" class="sidebar-link">
                <i class="bi bi-stack"></i>
                <span>Fasilitas Sampah</span>
              </a>
            </li>
            <br />
            <br />
            <hr />
            <li class="sidebar-item">
              <a href="../../logout.php" class="sidebar-link">
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
        <h3>Fasilitas Pengelolaan Sampah</h3>
      </div>
      <div class="page-content">
        <section class="row">
          <div class="col-12 col-lg-9">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Input Data Fasilitas Pengelolaan Sampah</h4>
              </div>

              <div class="card-body">
                <div class="row">
                  <form action="update.php?id=<?= $id ?>" method="post" enctype="multipart/form-data">
                    <div class="col">
                      <div class="form-group">
                        <input type="hidden" name="username" value="<?= $_SESSION['username'] ?>"
                          class="form-control" />
                      </div>
                    </div>
                    <div class="col">
                      <label for="basicInput">Tipe Fasilitas</label>
                      <fieldset class="form-group">
                        <select class="form-select" id="basicSelect" name="tipe_fasilitas">
                          <option value="Bank Induk" <?= $data['tipe_fasilitas'] == 'Bank Induk' ? 'selected' : '' ?>>Bank
                            Induk</option>
                          <option value="Bank Unit" <?= $data['tipe_fasilitas'] == 'Bank Unit' ? 'selected' : '' ?>>Bank
                            Unit</option>
                          <option value="Komposting Skala RT/RW" <?= $data['tipe_fasilitas'] == 'Komposting Skala RT/RW' ? 'selected' : '' ?>>Komposting Skala RT/RW</option>
                          <option value="Rumah Kompos" <?= $data['tipe_fasilitas'] == 'Rumah Kompos' ? 'selected' : '' ?>>
                            Rumah Kompos</option>
                          <option value="Pusat Olah Organik (POO)" <?= $data['tipe_fasilitas'] == 'Pusat Olah Organik (POO)' ? 'selected' : '' ?>>Pusat Olah Organik (POO)</option>
                          <option value="TPS3R" <?= $data['tipe_fasilitas'] == 'TPS3R' ? 'selected' : '' ?>>TPS3R</option>
                          <option value="Pusat Daur Ulang (PDU)" <?= $data['tipe_fasilitas'] == 'Pusat Daur Ulang (PDU)' ? 'selected' : '' ?>>Pusat Daur Ulang (PDU)</option>
                          <option value="TPST di luar TPA" <?= $data['tipe_fasilitas'] == 'TPST di luar TPA' ? 'selected' : '' ?>>TPST di luar TPA</option>
                          <option value="ITF" <?= $data['tipe_fasilitas'] == 'ITF' ? 'selected' : '' ?>>ITF</option>
                          <option value="Biodigester" <?= $data['tipe_fasilitas'] == 'Biodigester' ? 'selected' : '' ?>>
                            Biodigester</option>
                          <option value="Insinerator" <?= $data['tipe_fasilitas'] == 'Insinerator' ? 'selected' : '' ?>>
                            Insinerator</option>
                          <option value="Pirolisis" <?= $data['tipe_fasilitas'] == 'Pirolisis' ? 'selected' : '' ?>>
                            Pirolisis</option>
                          <option value="Gasifikasi" <?= $data['tipe_fasilitas'] == 'Gasifikasi' ? 'selected' : '' ?>>
                            Gasifikasi</option>
                          <option value="RDF" <?= $data['tipe_fasilitas'] == 'RDF' ? 'selected' : '' ?>>RDF</option>
                          <option value="TPA/TPST" <?= $data['tipe_fasilitas'] == 'TPA/TPST' ? 'selected' : '' ?>>TPA/TPST
                          </option>
                          <option value="Sektor Informal" <?= $data['tipe_fasilitas'] == 'Sektor Informal' ? 'selected' : '' ?>>Sektor Informal</option>
                        </select>
                      </fieldset>
                    </div>
                    <div class="col">
                      <div class="form-group">
                        <label for="basicInput">Tahun</label>
                        <input type="number" name="tahun" class="form-control" value="<?= $data['tahun'] ?>"
                          placeholder="Contoh : 2023" />
                      </div>
                      <div class="form-group">
                        <label for="basicInput">Kabupaten Kota</label>
                        <select class="form-select" id="kab" name="kab">
                          <option value="">Kab/Kota</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="basicInput">Nama Fasilitas</label>
                        <input type="text" name="nama_fasilitas" class="form-control"
                          value="<?= $data['nama_fasilitas'] ?>" placeholder="Contoh : Bank Bandung" />
                      </div>
                      <div class="form-group">
                        <label for="basicInput">Jenis</label>
                        <input type="text" name="jenis" class="form-control" value="<?= $data['jenis'] ?>"
                          placeholder="Contoh : BSU" />
                      </div>
                      <div class="form-group">
                        <label for="basicInput">Status</label>
                        <input type="text" name="status" class="form-control" value="<?= $data['status'] ?>"
                          placeholder="Contoh : A" />
                      </div>
                      <div class="form-group">
                        <label for="basicInput">Sampah Masuk (kg/tahun)</label>
                        <input type="number" step="0.01" name="sampah_masuk" class="form-control"
                          value="<?= $data['sampah_masuk'] ?>" placeholder="Contoh : 89" />
                      </div>
                      <div class="form-group">
                        <label for="basicInput">Sampah Terkelola (kg/tahun)</label>
                        <input type="number" step="0.01" name="sampah_terkelola" class="form-control"
                          value="<?= $data['sampah_terkelola'] ?>" placeholder="Contoh : 12" />
                      </div>
                      <div class="d-flex align-items-center justify-content-end mt-5">
                        <button type="submit" class="btn btn-primary">Update Data</button>
                      </div>
                    </div>
                  </form>

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
  <script src="../../assets/static/js/components/dark.js"></script>
  <script src="../../assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>

  <script src="../../assets/compiled/js/app.js"></script>

  <script>
    fetch(`https://kanglerian.github.io/api-wilayah-indonesia/api/regencies/32.json`)
      .then(response => response.json())
      .then(districts => {
        let data = districts;
        let tampung = '<option>Kab/Kota</option>';
        data.forEach(element => {
          tampung += `<option data-reg="${element.id}" value="${element.name}">${element.name}</option>`;
        });
        document.getElementById('kab').innerHTML = tampung;
      });
  </script>
</body>

</html>