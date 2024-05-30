<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Recycle Power</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="../assets/static/images/favicon.ico" />
  <!-- Custom Google font-->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
    rel="stylesheet" />
  <!-- Bootstrap icons-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- DataTables CSS -->
  <link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/buttons/2.1.0/css/buttons.bootstrap5.min.css" rel="stylesheet">
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="../assets/css/styles.css" rel="stylesheet" />
  <link href="../assets/css/main.css" rel="stylesheet" />
  <style>
    .custom-excel-button {
      margin-bottom: 2rem;
      background-color: #07ab1a;
      color: white;
      border: none;
      box-shadow: inset;
    }

    .custom-select {
      height: 30px;
      width: 100%;
      font-size: 0.8rem;
    }

    .chart {
      height: 20rem;
    }

    .navbar-nav .nav-link {
      color: #000;
    }

    .navbar-nav .dropdown-menu .dropdown-item {
      color: #000;
      font-size: 0.9rem;
    }

    .navbar-nav .dropdown-menu .dropdown-item:hover {
      background-color: #f8f9fa;
    }

    .navbar-nav .nav-item .btn {
      padding: 0.375rem 0.75rem;
    }

    .dropdown-submenu {
      position: relative;
    }

    .dropdown-submenu>.dropdown-menu {
      top: 0;
      left: 100%;
      margin-top: 0;
      margin-left: 0;
    }

    .dropdown-submenu:hover>.dropdown-menu {
      display: block;
    }

    .dropdown-menu .dropdown-item {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .dropdown-submenu {
      position: relative;
    }

    .dropdown-submenu>.dropdown-menu {
      top: 0;
      left: 100%;
      margin-top: -1px;
      margin-left: 0;
    }

    .dropdown-submenu:hover>.dropdown-menu {
      display: block;
    }

    .dropdown-menu .dropdown-item {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    @media (max-width: 992px) {
      .navbar-nav {
        text-align: center;
      }

      .navbar-nav.ms-auto {
        margin-top: 10px;
      }

      .navbar-nav.ms-auto .nav-item {
        margin-left: 0 !important;
      }

      .navbar-nav.ms-auto .nav-item .btn {
        margin-bottom: 10px;
      }

      .tahun,
      .kab {
        width: 100%;
        margin-bottom: 1rem;
      }

      .chart {
        height: 15rem;
      }

      .custom-select {
        font-size: 1rem;
      }
    }

    @media (max-width: 576px) {
      .chart {
        height: 12rem;
      }

      .custom-select {
        font-size: 0.9rem;
      }
    }

    .table-responsive {
      overflow-x: auto;
      margin-top: 1.5rem;
    }

    .dataTables_wrapper .dataTables_length,
    .dataTables_wrapper .dataTables_filter,
    .dataTables_wrapper .dataTables_info,
    .dataTables_wrapper .dataTables_paginate {
      margin-bottom: 1rem;
    }

    .dataTables_wrapper .dataTables_length label,
    .dataTables_wrapper .dataTables_filter label {
      font-size: 0.875rem;
    }

    .dataTables_wrapper .dataTables_length select,
    .dataTables_wrapper .dataTables_filter input {
      width: 100%;
      max-width: 200px;
      margin-top: 0.5rem;
    }

    .dataTables_wrapper .dataTables_filter {
      text-align: left;
    }

    .dataTables_wrapper .dataTables_paginate {
      display: flex;
      justify-content: center;
    }

    .custom-excel-button {
      background-color: #07ab1a;
      color: white;
      border: none;
      box-shadow: inset;
      margin-bottom: 1rem;
    }

    th,
    td {
      font-size: 0.875rem;
    }

    @media (max-width: 768px) {

      .dataTables_wrapper .dataTables_length,
      .dataTables_wrapper .dataTables_filter,
      .dataTables_wrapper .dataTables_info,
      .dataTables_wrapper .dataTables_paginate {
        text-align: center;
      }

      .dataTables_wrapper .dataTables_length select,
      .dataTables_wrapper .dataTables_filter input {
        max-width: 100%;
      }

      .dataTables_wrapper .dataTables_paginate {
        flex-wrap: wrap;
      }

      .custom-excel-button {
        display: block;
        width: 100%;
        margin-bottom: 1rem;
      }
    }
  </style>
</head>

<body class="d-flex flex-column h-100">
  <main class="flex-shrink-0">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
      <div class="container px-5">
        <a class="navbar-brand" href="index.html"><span class="fw-bolder text-primary">Recycle Power</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0 small fw-bolder">
            <li class="nav-item"><a class="nav-link" href="../index.php">Home</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Data Pengelolaan Sampah & RTH
              </a>
              <ul class="dropdown-menu border-0 shadow-sm ">
                <li><a class="dropdown-item" href="../Data Pengelolaan Sampah/TimbulanSampah.php">Timbulan Sampah</a>
                </li>
                <li><a class="dropdown-item" href="../Data Pengelolaan Sampah/KomposisiSampah.php">Komposisi Sampah</a>
                </li>
                <li><a class="dropdown-item" href="../Data Pengelolaan Sampah/SumberSampah.php">Sumber Sampah</a></li>
                <li><a class="dropdown-item" href="../Data Pengelolaan Sampah/CapaianKinerja.php">Capaian Kinerja</a>
                </li>
                <li><a class="dropdown-item" href="../Data Pengelolaan Sampah/RTH.php">Capaian Kinerja</a>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Fasilitas Pengelolaan Sampah
              </a>
              <ul class="dropdown-menu border-0 shadow-sm">
                <li class="dropdown-submenu">
                  <a class="dropdown-item d-flex align-items-center" href="#">Bank Sampah <i
                      class="bi bi-chevron-right ms-auto"></i></a>
                  <ul class="dropdown-menu border-0 shadow-sm">
                    <li><a class="dropdown-item" href="../Fasilitas Pengelolaan Sampah/BankSampahUnit.php">Bank Sampah
                        Unit</a></li>
                    <li><a class="dropdown-item" href="../Fasilitas Pengelolaan Sampah/BankInduk.php">Bank Sampah
                        Induk</a></li>
                  </ul>
                </li>
                <li class="dropdown-submenu">
                  <a class="dropdown-item d-flex align-items-center" href="#">Komposing RK/POO <i
                      class="bi bi-chevron-right ms-auto"></i></a>
                  <ul class="dropdown-menu border-0 shadow-sm">
                    <li><a class="dropdown-item" href="../Fasilitas Pengelolaan Sampah/KompostingRTRW.php">Komposing
                        Skala RTRW</a></li>
                    <li><a class="dropdown-item" href="../Fasilitas Pengelolaan Sampah/RumahKompos.php">Rumah Kompos</a>
                    </li>
                    <li><a class="dropdown-item" href="../Fasilitas Pengelolaan Sampah/POO.php">Pusat Olah Organik
                        (POO)</a></li>
                  </ul>
                </li>
                <li class="dropdown-submenu">
                  <a class="dropdown-item d-flex align-items-center" href="#">TPS3R/PDU/ITF <i
                      class="bi bi-chevron-right ms-auto"></i></a>
                  <ul class="dropdown-menu border-0 shadow-sm">
                    <li><a class="dropdown-item" href="../Fasilitas Pengelolaan Sampah/TPS3R.php">TPS3R</a></li>
                    <li><a class="dropdown-item" href="../Fasilitas Pengelolaan Sampah/PusatDaurUlang.php">Pusat Daur
                        Ulang</a></li>
                    <li><a class="dropdown-item" href="../Fasilitas Pengelolaan Sampah/TPST.php">TPST diluar TPA</a>
                    </li>
                    <li><a class="dropdown-item" href="../Fasilitas Pengelolaan Sampah/ITF.php">ITF</a></li>
                  </ul>
                </li>
                <li class="dropdown-submenu">
                  <a class="dropdown-item d-flex align-items-center" href="#">Sumber Energi <i
                      class="bi bi-chevron-right ms-auto"></i></a>
                  <ul class="dropdown-menu border-0 shadow-sm">
                    <li><a class="dropdown-item" href="../Fasilitas Pengelolaan Sampah/BioDigester.php">Biodigester</a>
                    </li>
                    <li class="dropdown-submenu">
                      <a class="dropdown-item d-flex align-items-center" href="#">Proses Thermal
                        <i class="bi bi-chevron-right ms-auto"></i></a>
                      <ul class="dropdown-menu border-0 shadow-sm">
                        <li><a class="dropdown-item"
                            href="../Fasilitas Pengelolaan Sampah/Insinerator.php">Insinerator</a></li>
                        <li><a class="dropdown-item" href="../Fasilitas Pengelolaan Sampah/Pirolisis.php">Pirolisis</a>
                        </li>
                        <li><a class="dropdown-item"
                            href="../Fasilitas Pengelolaan Sampah/Gasifikasi.php">Gasifikasi</a></li>
                      </ul>
                    </li>
                    <li><a class="dropdown-item" href="../Fasilitas Pengelolaan Sampah/Gasifikasi.php">RDF</a></li>
                  </ul>
                </li>
                <li><a class="dropdown-item" href="../Fasilitas Pengelolaan Sampah/TPA-TPST.php">TPA/TPST</a></li>
                <li><a class="dropdown-item" href="../Fasilitas Pengelolaan Sampah/SektorInformal.php">Sektor
                    Informal</a></li>
              </ul>
            </li>
          </ul>
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder d-flex align-items-lg-center">
            <li class="nav-item"><a class="btn btn-primary" href="../auth-login.php">Masuk</a></li>
            <li class="nav-item ms-2"><a class="btn btn-danger" href="../auth-register.php">Daftar</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <section class="py-5">
      <div class="container px-5">
        <div class="row gx-5 justify-content-center">
          <div class="col-xxl-12 col-12">
            <h4 class="text-center">Data Timbulan Sampah</h4>
            <div class="category py-3 px-4">
              <div class="card border-0 shadow-lg">
                <div class="card-body d-flex align-items-center gap-3">
                  <div class="tahun">
                    <h6 class="mb-2 text-body-secondary">Tahun</h6>
                    <select id="yearSelect" class="custom-select rounded-2">
                      <option value="2022">2022</option>
                      <option value="2023" selected>2023</option>
                      <option value="2024">2024</option>
                      <option value="2025">2025</option>
                    </select>
                  </div>
                  <div class="kab">
                    <h6 class="mb-2 text-body-secondary">Kabupaten/Kota</h6>
                    <select id="kabSelect" class="custom-select rounded-2">
                      <option value="" selected>Pilih Kab/Kota</option>
                      <option value="Kab Bandung">Kab Bandung</option>
                      <option value="Kota Bandung">Kota Bandung</option>
                      <option value="Kota Garut">Kota Garut</option>
                      <option value="Kota Cimahi">Kota Cimahi</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="card border-0 shadow-lg">
              <div class="card-body">
                <div class="chart  d-flex justify-content-center">
                  <canvas id="chart"></canvas>
                </div>
              </div>
            </div>
            <div class="card border-0 shadow-lg mt-5">
              <div class="card-body">
                <div class="dataTables_wrapper">
                  <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
                      <thead>
                        <tr>
                          <th>Tahun</th>
                          <th>Kabupaten/Kota</th>
                          <th>Timbulan Harian (ton)</th>
                          <th>Timbulan Sampah (tahunan)</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        include '../koneksi.php';
                        $result = $koneksi->query("SELECT tahun, kab, timbulan_harian, timbulan_tahunan FROM timbulsampah");

                        if ($result->num_rows > 0) {
                          while ($row = $result->fetch_assoc()) {
                            echo "<tr>
                            <td>{$row['tahun']}</td>
                            <td>{$row['kab']}</td>
                            <td>{$row['timbulan_harian']}</td>
                            <td>{$row['timbulan_tahunan']}</td>
                          </tr>";
                          }
                        } else {
                          echo "<tr><td colspan='4'>No data found</td></tr>";
                        }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!-- Footer-->
  <footer class="bg-white py-4 mt-auto">
    <div class="container px-5">
      <div class="row align-items-center justify-content-between flex-column flex-sm-row">
        <div class="col-auto">
          <div class="small m-0">Copyright &copy; Recycle Power 2023</div>
        </div>
        <div class="col-auto">
          <a class="small" href="#!">Privacy</a>
          <span class="mx-1">&middot;</span>
          <a class="small" href="#!">Terms</a>
          <span class="mx-1">&middot;</span>
          <a class="small" href="#!">Contact</a>
        </div>
      </div>
    </div>
  </footer>
  <!-- Bootstrap core JS-->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Bootstrap Bundle JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <!-- DataTables JS -->
  <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.1.0/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.bootstrap5.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.html5.min.js"></script>
  <!-- Initialize DataTables -->
  <script>
    $(document).ready(function () {
      $('#example').DataTable({
        dom: 'Blfrtip', // Adding 'l' for length menu
        buttons: [
          {
            extend: 'excel',
            className: 'custom-excel-button'  // Adding custom class
          }
        ],
        lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
        responsive: true,
        scrollX: true,
      });
    });
  </script>
  <!-- Core theme JS-->
  <script src="js/scripts.js"></script>
  <script src="./assets/js/main.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      // Extract data from the table
      const table = document.getElementById('example');
      const rows = table.querySelectorAll('tbody tr');

      // Function to update the chart
      function updateChart() {
        // Get selected year and Kabupaten/Kota
        const selectedYear = document.getElementById('yearSelect').value;
        const selectedKab = document.getElementById('kabSelect').value;

        // Initialize arrays to store data
        const kabupaten = [];
        const dailyData = [];
        const annualData = [];

        // Iterate through table rows and extract data based on selections
        rows.forEach(row => {
          const cells = row.querySelectorAll('td');
          const year = cells[0].textContent;
          const kab = cells[1].textContent;

          if (year === selectedYear && (selectedKab === "" || kab === selectedKab)) {
            kabupaten.push(kab);
            dailyData.push(parseFloat(cells[2].textContent));
            annualData.push(parseFloat(cells[3].textContent));
          }
        });

        // Update the chart
        chart.data.labels = kabupaten;
        chart.data.datasets[0].data = dailyData;
        chart.data.datasets[1].data = annualData;
        chart.update();
      }

      // Create the initial chart
      const ctx = document.getElementById('chart').getContext('2d');
      const chart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: [],
          datasets: [
            {
              label: 'Timbulan Harian (ton)',
              data: [],
              backgroundColor: 'rgba(75, 192, 192, 0.2)',
              borderColor: 'rgba(75, 192, 192, 1)',
              borderWidth: 1
            },
            {
              label: 'Timbulan Tahunan (ton)',
              data: [],
              backgroundColor: 'rgba(153, 102, 255, 0.2)',
              borderColor: 'rgba(153, 102, 255, 1)',
              borderWidth: 1
            }
          ]
        },
        options: {
          scales: {
            y: {
              beginAtZero: true
            }
          },
          font: {
            size: 14
          }
        }
      });

      // Add event listeners for the dropdown menus
      document.getElementById('yearSelect').addEventListener('change', updateChart);
      document.getElementById('kabSelect').addEventListener('change', updateChart);

      // Initial chart update
      updateChart();
    });
  </script>
</body>

</html>