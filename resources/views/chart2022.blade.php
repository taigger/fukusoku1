@extends('layouts.fukusoku')

@section('content')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">２０２２年実績</h1>
                    <p class="mb-4">月ごとの実績を表示しています</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                              <div style="width:70%">
                                 <button type="url" class="btn btn-success" style="float:left;"><a href="/showchart" class="text-decoration-none text-white">2021年←</a></button>
                                 <button type="url" class="btn btn-success" style="float:right;"><a href="/showchart2023" class="text-decoration-none text-white">→2023年</a></button>
                                <canvas id="myChart" width="400" height="300"></canvas>
                              </div>
                             
                            
                              <script src=https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js></script>
                              <!-- もしくは<script src="Chart.min.js"></script> -->
                              <script>
                              var ctx = document.getElementById('myChart').getContext('2d');
                              var myChart = new Chart(ctx, {
                                  type: 'bar',
                                  data: {
                                      labels: ['1月', '2月', '3月', '4月', '5月', '6月','7月','8月','9月','10月','11月','12月'],
                                      datasets: [{
                                          label: '月間勤務時間合計（単位:時間)',
                                          data: [{{$january}},{{$february}},{{$march}},{{$april}},{{$may}},{{$june}},{{$july}},{{$august}},{{$september}},{{$october}},{{$nobember}},{{$december
                                          }}],
                                          backgroundColor: [
                                              'rgba(255, 99, 132, 0.2)',
                                              'rgba(54, 162, 235, 0.2)',
                                              'rgba(255, 206, 86, 0.2)',
                                              'rgba(75, 192, 192, 0.2)',
                                              'rgba(153, 102, 255, 0.2)',
                                              'rgba(255, 159, 64, 0.2)'
                                          ],
                                          borderColor: [
                                              'rgba(255, 99, 132, 1)',
                                              'rgba(54, 162, 235, 1)',
                                              'rgba(255, 206, 86, 1)',
                                              'rgba(75, 192, 192, 1)',
                                              'rgba(153, 102, 255, 1)',
                                              'rgba(255, 159, 64, 1)'
                                          ],
                                          borderWidth: 1
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
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

@endsection