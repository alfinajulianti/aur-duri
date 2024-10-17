<main id="main" class="main">

    <div class="pagetitle">
      <h1>Tabulasi Data dan Infografis</h1>
    </div><!-- End Page Title -->


    <section class="section">
      <div class="row">

        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">PENDAPATAN MENURUT PENDIDIKAN</h5>
              <!-- Column Chart -->
              <div id="columnChart"></div>
              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#columnChart"), {
                    series: [{
                      name: 'Tidak tamat SD',
                      data: <?php echo '['.$pp1_1.','.$pp1_2.','.$pp1_3.','.$pp1_4.','.$pp1_5.']'; ?>
                    }, {
                      name: 'SD s.d. SMA',
                      data: <?php echo '['.$pp2_1.','.$pp2_2.','.$pp2_3.','.$pp2_4.','.$pp2_5.']'; ?>
                    }, {
                      name: 'D1 s.d. S3',
                      data: <?php echo '['.$pp3_1.','.$pp3_2.','.$pp3_3.','.$pp3_4.','.$pp3_5.']'; ?>
                    }],
                    chart: {
                      type: 'bar',
                      height: 350
                    },
                    plotOptions: {
                      bar: {
                        horizontal: false,
                        columnWidth: '65%',
                        endingShape: 'rounded'
                      },
                    },
                    dataLabels: {
                      enabled: false
                    },
                    stroke: {
                      show: true,
                      width: 2,
                      colors: ['transparent']
                    },
                    xaxis: {
                      title: {
                        text: 'Juta Rupiah'
                      },
                      categories: ['< 1.000', '1.000 s.d. 2.999', '3.000 s.d. 4.999', '5.000 s.d. 6.999', '7.000 keatas'],
                    },
                    yaxis: {
                      title: {
                        text: 'Orang'
                      }
                    },
                    fill: {
                      opacity: 1
                    },
                    tooltip: {
                      y: {
                        formatter: function(val) {
                          return val + " Orang"
                        }
                      }
                    }
                  }).render();
                });
              </script>
              <!-- End Column Chart -->

            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h4 style="font-family: Poppins, sans-serif;padding: 20px 0 15px 0;font-size: 15px; font-weight: 500; color: #012970;text-align: justify;">BAGAIMANA KONDISI KEMAKMURAN MASYARAKAT KITA?</h4>
              <p style="font-family: Poppins, sans-serif;font-size: 13px; font-weight: 500; color: slategrey;text-align: justify;">
                Jumlah penduduk bekerja di <?= $nama_rt;?> Desa Koto Lebu adalah sebanyak <?= $penduduk_bekerja;?> orang, <?= $penduduk_bekerja1;?> diataranya tidak tamat SD. Penduduk yang tidak tamat SD sebagian besar memilik penghasilan 
                
                <?php
                  $maxp1 = max($pp1_1,$pp1_2,$pp1_3,$pp1_4,$pp1_5);
                  
                  if ($maxp1 == $pp1_1) {
                    echo 'kurang dari Rp. 1.000.000';
                  } elseif ($maxp1 == $pp1_2) {
                    echo 'Rp. 1.000.000 s.d. 2.999.999';
                  } elseif ($maxp1 == $pp1_3) {
                    echo 'Rp. 3.000.000 s.d. 4.999.999';
                  } elseif ($maxp1 == $pp1_4) {
                    echo 'Rp. 5.000.000 s.d. 6.999.999';
                  } elseif ($maxp1 == $pp1_5) {
                    echo 'diatas Rp. 7.000.000';
                  }
                ?>
                
                per bulan.
                
              </p>
              <table style="font-family: Poppins, sans-serif;font-size: 13px; font-weight: 500; color: slategrey;text-align: justify;">
                <tr>
                  <td>
                    Penduduk bekerja yang tamat SD sampai SMA tediri dari <?= $penduduk_bekerja2;?> orang dan secara umum memilik penghasilan 

                    <?php
                      $maxp2 = max($pp2_1,$pp2_2,$pp2_3,$pp2_4,$pp2_5);
                      
                      if ($maxp2 == $pp2_1) {
                        echo 'kurang dari Rp. 1.000.000';
                      } elseif ($maxp2 == $pp2_2) {
                        echo 'Rp. 1.000.000 s.d. 2.999.999';
                      } elseif ($maxp2 == $pp2_3) {
                        echo 'Rp. 3.000.000 s.d. 4.999.999';
                      } elseif ($maxp2 == $pp2_4) {
                        echo 'Rp. 5.000.000 s.d. 6.999.999';
                      } elseif ($maxp2 == $pp2_5) {
                        echo 'diatas Rp. 7.000.000';
                      }
                    ?>

                    sedangkan kelompok pekerja yang menempuh pendidikan tinggi adalah sebanyak <?= $penduduk_bekerja3;?> orang, pada kelompok ini sebagian besar memiliki pendapatan 

                    <?php
                      $maxp3 = max($pp3_1,$pp3_2,$pp3_3,$pp3_4,$pp3_5);

                      if ($maxp3 == $pp3_1) {
                        echo 'kurang dari Rp. 1.000.000';
                      } elseif ($maxp3 == $pp3_2) {
                        echo 'Rp. 1.000.000 s.d. 2.999.999';
                      } elseif ($maxp3 == $pp3_3) {
                        echo 'Rp. 3.000.000 s.d. 4.999.999';
                      } elseif ($maxp3 == $pp3_4) {
                        echo 'Rp. 5.000.000 s.d. 6.999.999';
                      } elseif ($maxp3 == $pp3_5) {
                        echo 'diatas Rp. 7.000.000';
                      }
                    ?>

                  </td>
                  <td>
                    <img src="<?php echo base_url('infografis'); ?>/assets/freepik/helping.jpg" alt="Profile" style="height: 200px;">
                  </td> 
                </tr>
              </table>

              <!-- Column Chart -->
              
            </div>
          </div>
        </div>

        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">PIRAMIDA PENDUDUK</h5>          

              <!-- Bar Chart -->
              <div id="barChart"></div>
              <?php
                $p_0_4 = 0;
                $p_5_9 = 0;
                $p_10_14 = 0;
                $p_15_19 = 0;
                $p_20_24 = 0;
                $p_25_29 = 0;
                $p_30_34 = 0;
                $p_35_39 = 0;
                $p_40_44 = 0;
                $p_45_49 = 0;
                $p_50_54 = 0;
                $p_55_59 = 0;
                $p_60_64 = 0;
                $p_65_plus = 0;

                foreach ($tanggal_lahir_p->result() as $tl_p ) {
                  $today = date("Y-m-d");

                  if (date_diff(date_create($tl_p->tanggal_lahir), date_create($today))->format('%y') >= 0 AND date_diff(date_create($tl_p->tanggal_lahir), date_create($today))->format('%y') < 5) {
                    $p_0_4 = $p_0_4 + 1;
                  } elseif (date_diff(date_create($tl_p->tanggal_lahir), date_create($today))->format('%y') >= 5 AND date_diff(date_create($tl_p->tanggal_lahir), date_create($today))->format('%y') < 10) {
                    $p_5_9 = $p_5_9 + 1;
                  } elseif (date_diff(date_create($tl_p->tanggal_lahir), date_create($today))->format('%y') >= 10 AND date_diff(date_create($tl_p->tanggal_lahir), date_create($today))->format('%y') < 15) {
                    $p_10_14 = $p_10_14 + 1;
                  } elseif (date_diff(date_create($tl_p->tanggal_lahir), date_create($today))->format('%y') >= 15 AND date_diff(date_create($tl_p->tanggal_lahir), date_create($today))->format('%y') < 20) {
                    $p_15_19 = $p_15_19 + 1;
                  } elseif (date_diff(date_create($tl_p->tanggal_lahir), date_create($today))->format('%y') >= 20 AND date_diff(date_create($tl_p->tanggal_lahir), date_create($today))->format('%y') < 25) {
                    $p_20_24 = $p_20_24 + 1;
                  } elseif (date_diff(date_create($tl_p->tanggal_lahir), date_create($today))->format('%y') >= 25 AND date_diff(date_create($tl_p->tanggal_lahir), date_create($today))->format('%y') < 30) {
                    $p_25_29 = $p_25_29 + 1;
                  } elseif (date_diff(date_create($tl_p->tanggal_lahir), date_create($today))->format('%y') >= 30 AND date_diff(date_create($tl_p->tanggal_lahir), date_create($today))->format('%y') < 35) {
                    $p_30_34 = $p_30_34 + 1;
                  } elseif (date_diff(date_create($tl_p->tanggal_lahir), date_create($today))->format('%y') >= 35 AND date_diff(date_create($tl_p->tanggal_lahir), date_create($today))->format('%y') < 40) {
                    $p_35_39 = $p_35_39 + 1;
                  } elseif (date_diff(date_create($tl_p->tanggal_lahir), date_create($today))->format('%y') >= 40 AND date_diff(date_create($tl_p->tanggal_lahir), date_create($today))->format('%y') < 45) {
                    $p_40_44 = $p_40_44 + 1;
                  } elseif (date_diff(date_create($tl_p->tanggal_lahir), date_create($today))->format('%y') >= 45 AND date_diff(date_create($tl_p->tanggal_lahir), date_create($today))->format('%y') < 50) {
                    $p_45_49 = $p_45_49 + 1;
                  } elseif (date_diff(date_create($tl_p->tanggal_lahir), date_create($today))->format('%y') >= 50 AND date_diff(date_create($tl_p->tanggal_lahir), date_create($today))->format('%y') < 55) {
                    $p_50_54 = $p_50_54 + 1;
                  } elseif (date_diff(date_create($tl_p->tanggal_lahir), date_create($today))->format('%y') >= 55 AND date_diff(date_create($tl_p->tanggal_lahir), date_create($today))->format('%y') < 60) {
                    $p_55_59 = $p_55_59 + 1;
                  } elseif (date_diff(date_create($tl_p->tanggal_lahir), date_create($today))->format('%y') >= 60 AND date_diff(date_create($tl_p->tanggal_lahir), date_create($today))->format('%y') < 65) {
                    $p_60_64 = $p_60_64 + 1;
                  } elseif (date_diff(date_create($tl_p->tanggal_lahir), date_create($today))->format('%y') >= 65) {
                    $p_65_plus = $p_65_plus + 1;
                  }
                }

                $l_0_4 = 0;
                $l_5_9 = 0;
                $l_10_14 = 0;
                $l_15_19 = 0;
                $l_20_24 = 0;
                $l_25_29 = 0;
                $l_30_34 = 0;
                $l_35_39 = 0;
                $l_40_44 = 0;
                $l_45_49 = 0;
                $l_50_54 = 0;
                $l_55_59 = 0;
                $l_60_64 = 0;
                $l_65_plus = 0;

                foreach ($tanggal_lahir_l->result() as $tl_l ) {
                  $today = date("Y-m-d");

                  if (date_diff(date_create($tl_l->tanggal_lahir), date_create($today))->format('%y') >= 0 AND date_diff(date_create($tl_l->tanggal_lahir), date_create($today))->format('%y') < 5) {
                    $l_0_4 = $l_0_4 + 1;
                  } elseif (date_diff(date_create($tl_l->tanggal_lahir), date_create($today))->format('%y') >= 5 AND date_diff(date_create($tl_l->tanggal_lahir), date_create($today))->format('%y') < 10) {
                    $l_5_9 = $l_5_9 + 1;
                  } elseif (date_diff(date_create($tl_l->tanggal_lahir), date_create($today))->format('%y') >= 10 AND date_diff(date_create($tl_l->tanggal_lahir), date_create($today))->format('%y') < 15) {
                    $l_10_14 = $l_10_14 + 1;
                  } elseif (date_diff(date_create($tl_l->tanggal_lahir), date_create($today))->format('%y') >= 15 AND date_diff(date_create($tl_l->tanggal_lahir), date_create($today))->format('%y') < 20) {
                    $l_15_19 = $l_15_19 + 1;
                  } elseif (date_diff(date_create($tl_l->tanggal_lahir), date_create($today))->format('%y') >= 20 AND date_diff(date_create($tl_l->tanggal_lahir), date_create($today))->format('%y') < 25) {
                    $l_20_24 = $l_20_24 + 1;
                  } elseif (date_diff(date_create($tl_l->tanggal_lahir), date_create($today))->format('%y') >= 25 AND date_diff(date_create($tl_l->tanggal_lahir), date_create($today))->format('%y') < 30) {
                    $l_25_29 = $l_25_29 + 1;
                  } elseif (date_diff(date_create($tl_l->tanggal_lahir), date_create($today))->format('%y') >= 30 AND date_diff(date_create($tl_l->tanggal_lahir), date_create($today))->format('%y') < 35) {
                    $l_30_34 = $l_30_34 + 1;
                  } elseif (date_diff(date_create($tl_l->tanggal_lahir), date_create($today))->format('%y') >= 35 AND date_diff(date_create($tl_l->tanggal_lahir), date_create($today))->format('%y') < 40) {
                    $l_35_39 = $l_35_39 + 1;
                  } elseif (date_diff(date_create($tl_l->tanggal_lahir), date_create($today))->format('%y') >= 40 AND date_diff(date_create($tl_l->tanggal_lahir), date_create($today))->format('%y') < 45) {
                    $l_40_44 = $l_40_44 + 1;
                  } elseif (date_diff(date_create($tl_l->tanggal_lahir), date_create($today))->format('%y') >= 45 AND date_diff(date_create($tl_l->tanggal_lahir), date_create($today))->format('%y') < 50) {
                    $l_45_49 = $l_45_49 + 1;
                  } elseif (date_diff(date_create($tl_l->tanggal_lahir), date_create($today))->format('%y') >= 50 AND date_diff(date_create($tl_l->tanggal_lahir), date_create($today))->format('%y') < 55) {
                    $l_50_54 = $l_50_54 + 1;
                  } elseif (date_diff(date_create($tl_l->tanggal_lahir), date_create($today))->format('%y') >= 55 AND date_diff(date_create($tl_l->tanggal_lahir), date_create($today))->format('%y') < 60) {
                    $l_55_59 = $l_55_59 + 1;
                  } elseif (date_diff(date_create($tl_l->tanggal_lahir), date_create($today))->format('%y') >= 60 AND date_diff(date_create($tl_l->tanggal_lahir), date_create($today))->format('%y') < 65) {
                    $l_60_64 = $l_60_64 + 1;
                  } elseif (date_diff(date_create($tl_l->tanggal_lahir), date_create($today))->format('%y') >= 65) {
                    $l_65_plus = $l_65_plus + 1;
                  }
                }
                $p_jumlah = $p_0_4 + $p_5_9 + $p_10_14 + $p_15_19 + $p_20_24 + $p_25_29 + $p_30_34 + $p_35_39 + $p_40_44 + $p_45_49 + $p_50_54 + $p_55_59 + $p_60_64 + $p_65_plus;
                $l_jumlah = $l_0_4 + $l_5_9 + $l_10_14 + $l_15_19 + $l_20_24 + $l_25_29 + $l_30_34 + $l_35_39 + $l_40_44 + $l_45_49 + $l_50_54 + $l_55_59 + $l_60_64 + $l_65_plus;
              ?>



              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  var options = {
                    series: [{
                    name: 'Laki-laki',
                    data: [<?php echo $l_65_plus.','.$l_60_64.','.$l_55_59.','.$l_50_54.','.$l_45_49.','.$l_40_44.','.$l_35_39.','.$l_30_34.','.$l_25_29.','.$l_20_24.','.$l_15_19.','.$l_10_14.','.$l_5_9.','.$l_0_4 ;?>]
                  },
                  {
                    name: 'Perempuan',
                    data: [<?php echo '-'.$p_65_plus.',-'.$p_60_64.',-'.$p_55_59.',-'.$p_50_54.',-'.$p_45_49.',-'.$p_40_44.',-'.$p_35_39.',-'.$p_30_34.',-'.$p_25_29.',-'.$p_20_24.',-'.$p_15_19.',-'.$p_10_14.',-'.$p_5_9.',-'.$p_0_4 ;?>]
                  } 
                  ],
                    chart: {
                    type: 'bar',
                    height: 440,
                    stacked: true
                  },
                  colors: ['#008FFB', '#FF4560'],
                  plotOptions: {
                    bar: {
                      borderRadius: 4,
                      borderRadiusApplication: 'end', // 'around', 'end'
                      borderRadiusWhenStacked: 'all', // 'all', 'last'
                      horizontal: true,
                      barHeight: '80%',
                    },
                  },
                  dataLabels: {
                    enabled: false
                  },
                  stroke: {
                    width: 1,
                    colors: ["#fff"]
                  },
                  
                  grid: {
                    xaxis: {
                      lines: {
                        show: false
                      }
                    }
                  },
                  yaxis: {
                    title: {
                      text: 'Umur'
                    },
                    stepSize: 1
                  },
                  tooltip: {
                    shared: false,
                    x: {
                      formatter: function (val) {
                        return val
                      }
                    },
                    y: {
                      formatter: function (val) {
                        return Math.abs(val) + " Orang"
                      }
                    }
                  },
                  
                  xaxis: {
                    categories: ['65+', '60-64', '55-59', '50-54',
                      '45-49', '40-44', '35-39', '30-34', '25-29', '20-24', '15-19', '10-14', '5-9',
                      '0-4'
                    ],
                    title: {
                      text: 'Jiwa'
                    },
                    labels: {
                      formatter: function (val) {
                        return Math.abs(Math.round(val))
                      }
                    }
                  },
                  };

                  var chart = new ApexCharts(document.querySelector("#barChart"), options);
                  chart.render();
                });
              </script>

              <!-- End Bar Chart -->

            </div>
          </div>
        </div>

        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h4 style="font-family: Poppins, sans-serif;padding: 20px 0 15px 0;font-size: 15px; font-weight: 500; color: #012970;text-align: justify;">YUK LIHAT PERSEBARAN PENDUDUK KITA DARI PIRAMIDA PENDUDUK!</h4>
              <p style="font-family: Poppins, sans-serif;font-size: 13px; font-weight: 500; color: slategrey;text-align: justify;">
                Jika dilihat berdasarkan jenis kelamin, ternyata penduduk di <?= $nama_rt;?> Desa Koto Lebu <?php if ($p_jumlah > $l_jumlah) {
                  echo 'lebih banyak berjenis kelamin perempuan dibandingkan laki-laki.';} elseif($l_jumlah > $p_jumlah){echo 'lebih banyak berjenis kelamin laki-laki dibandingkan perempuan.';} elseif($l_jumlah = $p_jumlah){echo 'sama banyak antara perempuan dan laki-laki yaitu sebanyak '.$l_jumlah.' orang.';};?>
              </p>

              <table style="font-family: Poppins, sans-serif;font-size: 13px; font-weight: 500; color: slategrey;text-align: justify;">
                <tr>
                  <td>
                    Untuk penduduk berjenis kelamin perempuan terdiri dari <?= $p_jumlah;?> orang. Jika dilihat dari kelompok umurnya, kelompok balita terdiri dari <?= $p_0_4;?> orang. Dan dapat dilihat juga bahwa perempuan di <?= $nama_rt;?> Desa Koto Lebu didominasi oleh kelompok umur 

                    <?php
                      $maxp = max($p_0_4,$p_5_9,$p_10_14,$p_15_19,$p_20_24,$p_25_29,$p_30_34,$p_35_39,$p_40_44,$p_45_49,$p_50_54,$p_55_59,$p_60_64,$p_65_plus);
                      
                      if ($maxp == $p_0_4) {
                        echo 'dibawah 5';
                      } elseif ($maxp == $p_5_9) {
                        echo '5 s.d. 9';
                      } elseif ($maxp == $p_10_14) {
                        echo '10 s.d. 14';
                      } elseif ($maxp == $p_15_19) {
                        echo '15 s.d. 19';
                      } elseif ($maxp == $p_20_24) {
                        echo '20 s.d. 24';
                      } elseif ($maxp == $p_25_29) {
                        echo '25 s.d. 29';
                      } elseif ($maxp == $p_30_34) {
                        echo '30 s.d. 34';
                      } elseif ($maxp == $p_35_39) {
                        echo '35 s.d. 39';
                      } elseif ($maxp == $p_40_44) {
                        echo '40 s.d. 44';
                      } elseif ($maxp == $p_45_49) {
                        echo '45 s.d. 49';
                      } elseif ($maxp == $p_50_54) {
                        echo '50 s.d. 54';
                      } elseif ($maxp == $p_55_59) {
                        echo '55 s.d. 59';
                      } elseif ($maxp == $p_60_64) {
                        echo '60 s.d. 64';
                      } elseif ($maxp == $p_65_plus) {
                        echo 'diatas 64';
                      }
                    ?>

                    tahun.

                  </td>
                  <td>
                    <img src="<?php echo base_url('infografis'); ?>/assets/freepik/gender.jpg" alt="Profile" style="height: 200px;">
                  </td> 
                  <td>
                    Untuk penduduk berjenis kelamin laki-laki terdiri dari <?= $l_jumlah;?> orang. Jika dilihat dari kelompok umurnya, kelompok balita terdiri dari <?= $l_0_4;?> orang. Dan dapat dilihat juga bahwa laki-laki di <?= $nama_rt;?> Desa Koto Lebu didominasi oleh kelompok umur 

                    <?php
                      $maxp = max($l_0_4,$l_5_9,$l_10_14,$l_15_19,$l_20_24,$l_25_29,$l_30_34,$l_35_39,$l_40_44,$l_45_49,$l_50_54,$l_55_59,$l_60_64,$l_65_plus);
                      
                      if ($maxp == $l_0_4) {
                        echo 'dibawah 5';
                      } elseif ($maxp == $l_5_9) {
                        echo '5 s.d. 9';
                      } elseif ($maxp == $l_10_14) {
                        echo '10 s.d. 14';
                      } elseif ($maxp == $l_15_19) {
                        echo '15 s.d. 19';
                      } elseif ($maxp == $l_20_24) {
                        echo '20 s.d. 24';
                      } elseif ($maxp == $l_25_29) {
                        echo '25 s.d. 29';
                      } elseif ($maxp == $l_30_34) {
                        echo '30 s.d. 34';
                      } elseif ($maxp == $l_35_39) {
                        echo '35 s.d. 39';
                      } elseif ($maxp == $l_40_44) {
                        echo '40 s.d. 44';
                      } elseif ($maxp == $l_45_49) {
                        echo '45 s.d. 49';
                      } elseif ($maxp == $l_50_54) {
                        echo '50 s.d. 54';
                      } elseif ($maxp == $l_55_59) {
                        echo '55 s.d. 59';
                      } elseif ($maxp == $l_60_64) {
                        echo '60 s.d. 64';
                      } elseif ($maxp == $l_65_plus) {
                        echo 'diatas 64';
                      }
                    ?>

                    tahun.

                  </td>
                  
                </tr>
              </table>

              <!-- Column Chart -->
              
            </div>
          </div>
        </div>

        <div class="col-lg-8">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">PERSENTASE PENDUDUK BEKERJA MENURUT PENDIDIKAN</h5>

              <!-- Radial Bar Chart -->
              <div id="radialBarChart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#radialBarChart"), {
                    series: [50, 70, 90],
                    chart: {
                      height: 350,
                      type: 'radialBar',
                      toolbar: {
                        show: true
                      }
                    },
                    plotOptions: {
                      radialBar: {
                        dataLabels: {
                          name: {
                            fontSize: '22px',
                          },
                          value: {
                            fontSize: '16px',
                          },
                          total: {
                            show: true,
                            label: 'Jumlah Pekerja',
                            formatter: function(w) {
                              // By default this function returns the average of all series. The below is just an example to show the use of custom formatter function
                              return 249
                            }
                          }
                        }
                      }
                    },
                    labels: ['Tidak Tamat SD', 'SD s.d. SMA', 'D1 s.d. S3'],
                  }).render();
                });
              </script>
              <!-- End Radial Bar Chart -->

            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="card">
            <div class="card-body">
              <h4 style="font-family: Poppins, sans-serif;padding: 20px 0 15px 0;font-size: 15px; font-weight: 500; color: #012970;text-align: justify;">NARASI!</h4>
              <p style="font-family: Poppins, sans-serif;font-size: 13px; font-weight: 500; color: slategrey;text-align: justify;">
                Penjelasan grafik.</p>              
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="card">
            <div class="card-body">
              <h4 style="font-family: Poppins, sans-serif;padding: 20px 0 15px 0;font-size: 15px; font-weight: 500; color: #012970;text-align: justify;">NARASI!</h4>
              <p style="font-family: Poppins, sans-serif;font-size: 13px; font-weight: 500; color: slategrey;text-align: justify;">
                Penjelasan grafik.</p>              
            </div>
          </div>
        </div>

        <div class="col-lg-8">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">STATUS KEPEMILIKAN BANGUNAN TEMPAT TINGGAL</h5>

              <!-- Donut Chart -->
              <div id="donutChart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#donutChart"), {
                    series: [44, 55, 13, 43, 22],
                    chart: {
                      height: 350,
                      type: 'donut',
                      toolbar: {
                        show: true
                      }
                    },
                    labels: ['Milik Sendiri', 'Kontrak/Sewa', 'Dinas', 'Bebas Sewa', 'Lainnya'],
                  }).render();
                });
              </script>
              <!-- End Donut Chart -->

            </div>
          </div>
        </div>

      </div>
    </section>

  </main><!-- End #main -->