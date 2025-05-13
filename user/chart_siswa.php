<script>
    var ctx = document.getElementById('chart_penghasilan').getContext('2d');
    Chart.defaults.font.size = 13;
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["Rp 0 - Rp 5000", "Rp 5001 - Rp 6500", "Rp 6501 - Rp 8000", "Lebih dari Rp 8000"],
            datasets: [{
                fill: true,
                label: 'Karyawan',
                data: [
                    <?php
                    $range1 = mysqli_query($konek, "SELECT * from data_siswa where gaji_bulanan <= 5000");
                    echo mysqli_num_rows($range1);
                    ?>,
                    <?php
                    $range2 = mysqli_query($konek, "SELECT * from data_siswa where gaji_bulanan > 5000 and gaji_bulanan <= 6500");
                    echo mysqli_num_rows($range2);
                    ?>,
                    <?php
                    $range3 = mysqli_query($konek, "SELECT * from data_siswa where gaji_bulanan > 6500 and gaji_bulanan <= 8000");
                    echo mysqli_num_rows($range3);
                    ?>,
                    <?php
                    $range4 = mysqli_query($konek, "SELECT * from data_siswa where gaji_bulanan > 8000");
                    echo mysqli_num_rows($range4);
                    ?>
                ],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)'
                ],
                borderWidth: 2
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>

<script>
    var ctx = document.getElementById("chart_hari_sakit").getContext('2d');
    Chart.defaults.font.size = 12;
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["<= 3 Hari", "4-7 Hari", "8-10 Hari", "> 10 Hari"],
            datasets: [{
                label: 'Karyawan',
                data: [
                    <?php
                    $range1 = mysqli_query($konek, "SELECT * from data_siswa where hari_sakit <= 3");
                    echo mysqli_num_rows($range1);
                    ?>,
                    <?php
                    $range2 = mysqli_query($konek, "SELECT * from data_siswa where hari_sakit between 4 and 7");
                    echo mysqli_num_rows($range2);
                    ?>,
                    <?php
                    $range3 = mysqli_query($konek, "SELECT * from data_siswa where hari_sakit between 8 and 10");
                    echo mysqli_num_rows($range3);
                    ?>,
                    <?php
                    $range4 = mysqli_query($konek, "SELECT * from data_siswa where hari_sakit > 10");
                    echo mysqli_num_rows($range4);
                    ?>
                ],
                backgroundColor: [
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(54, 162, 235, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 159, 64, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(54, 162, 235, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>

<script>
    var ctx = document.getElementById("diagramjarak").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [">= 40 Proyek", "32-39 Proyek", "20-31 Proyek", "< 20 Proyek"],
            datasets: [{
                fill: true,
                label: 'Karyawan',
                data: [
                    <?php
                    $range1 = mysqli_query($konek, "SELECT * from data_siswa where jumlah_proyek >= 40");
                    echo mysqli_num_rows($range1);
                    ?>,
                    <?php
                    $range2 = mysqli_query($konek, "SELECT * from data_siswa where jumlah_proyek between 32 and 39");
                    echo mysqli_num_rows($range2);
                    ?>,
                    <?php
                    $range3 = mysqli_query($konek, "SELECT * from data_siswa where jumlah_proyek between 20 and 31");
                    echo mysqli_num_rows($range3);
                    ?>,
                    <?php
                    $range4 = mysqli_query($konek, "SELECT * from data_siswa where jumlah_proyek < 20");
                    echo mysqli_num_rows($range4);
                    ?>
                ],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>

<script>
    var ctx = document.getElementById("chart_ratanilai").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [">= 60 Jam", "50-59 Jam", "40-49 Jam", "< 40 Jam"],
            datasets: [{
                label: 'Karyawan',
                data: [
                    <?php
                    $range1 = mysqli_query($konek, "SELECT * from data_siswa where jam_kerja >= 60");
                    echo mysqli_num_rows($range1);
                    ?>,
                    <?php
                    $range2 = mysqli_query($konek, "SELECT * from data_siswa where jam_kerja between 50 and 59");
                    echo mysqli_num_rows($range2);
                    ?>,
                    <?php
                    $range3 = mysqli_query($konek, "SELECT * from data_siswa where jam_kerja between 40 and 49");
                    echo mysqli_num_rows($range3);
                    ?>,
                    <?php
                    $range4 = mysqli_query($konek, "SELECT * from data_siswa where jam_kerja < 40");
                    echo mysqli_num_rows($range4);
                    ?>

                ],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>

<script>
    var ctx = document.getElementById("chart_kehadiran").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [">= 76 Jam", "51-75 Jam", "26-50 Jam", "< 26 Jam"],
            datasets: [{
                label: 'Karyawan',
                data: [
                    <?php
                    $range1 = mysqli_query($konek, "SELECT * from data_siswa where jam_training >= 76");
                    echo mysqli_num_rows($range1);
                    ?>,
                    <?php
                    $range2 = mysqli_query($konek, "SELECT * from data_siswa where jam_training between 51 and 75");
                    echo mysqli_num_rows($range2);
                    ?>,
                    <?php
                    $range3 = mysqli_query($konek, "SELECT * from data_siswa where jam_training between 26 and 50");
                    echo mysqli_num_rows($range3);
                    ?>,
                    <?php
                    $range4 = mysqli_query($konek, "SELECT * from data_siswa where jam_training < 26");
                    echo mysqli_num_rows($range4);
                    ?>

                ],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>
