 @include('adminlte/header')
  @include('adminlte/sidebarlink')
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @if(Session::has('login_successfully'))
                    
                    <center>
                    
                    <div  class='alert alert-success'> {{ Session::get('login_successfully') }}</div>
                    </center>
                    
                    @endif
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>New Orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Bounce Rate</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Unique Visitors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-8 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">
                  <i class="fas fa-chart-line mr-1"></i>
                  Sales & Traffic Overview
                </h5>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <!-- Morris chart - Sales -->
                  <div class="chart tab-pane active" id="revenue-chart"
                       style="position: relative; height: 300px;">
                      <canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>
                   </div>
                </div>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
            
            <!-- Recent Orders Table -->
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">
                  <i class="fas fa-shopping-cart mr-1"></i>
                  Recent Orders
                </h5>
              </div>
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0 table-hover">
                    <thead>
                    <tr>
                      <th>Order ID</th>
                      <th>Item</th>
                      <th>Status</th>
                      <th>Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td><a href="#">OR9842</a></td>
                      <td>Custom Rigid Boxes</td>
                      <td><span class="badge badge-success">Shipped</span></td>
                      <td>2026-07-08</td>
                    </tr>
                    <tr>
                      <td><a href="#">OR1848</a></td>
                      <td>Kraft Packaging</td>
                      <td><span class="badge badge-warning">Pending</span></td>
                      <td>2026-07-07</td>
                    </tr>
                    <tr>
                      <td><a href="#">OR7429</a></td>
                      <td>Mailer Boxes</td>
                      <td><span class="badge badge-danger">Cancelled</span></td>
                      <td>2026-07-06</td>
                    </tr>
                    <tr>
                      <td><a href="#">OR7429</a></td>
                      <td>Corrugated Boxes</td>
                      <td><span class="badge badge-info">Processing</span></td>
                      <td>2026-07-05</td>
                    </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-4 connectedSortable">

            <!-- Donut chart -->
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i>
                  Category Distribution
                </h5>
              </div>
              <div class="card-body">
                <canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas>
              </div>
            </div>
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  
  <script>
    document.addEventListener("DOMContentLoaded", function() {
        if(typeof Chart !== 'undefined') {
            // Sales chart
            var salesChartCanvas = document.getElementById('revenue-chart-canvas').getContext('2d');
            var salesChartData = {
                labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [
                    {
                        label               : 'Traffic',
                        backgroundColor     : 'rgba(243, 198, 35, 0.2)', /* Gold */
                        borderColor         : 'rgba(243, 198, 35, 1)',
                        pointRadius         : 4,
                        pointBackgroundColor: 'rgba(243, 198, 35, 1)',
                        pointBorderColor    : '#fff',
                        pointHoverRadius    : 6,
                        pointHoverBackgroundColor: '#fff',
                        pointHoverBorderColor    : 'rgba(243, 198, 35, 1)',
                        data                : [28, 48, 40, 19, 86, 27, 90]
                    },
                    {
                        label               : 'Sales',
                        backgroundColor     : 'rgba(17, 17, 17, 0.05)', /* Dark */
                        borderColor         : 'rgba(17, 17, 17, 1)',
                        pointRadius         : 4,
                        pointBackgroundColor: 'rgba(17, 17, 17, 1)',
                        pointBorderColor    : '#fff',
                        pointHoverRadius    : 6,
                        pointHoverBackgroundColor: '#fff',
                        pointHoverBorderColor    : 'rgba(17, 17, 17, 1)',
                        data                : [65, 59, 80, 81, 56, 55, 40]
                    }
                ]
            };
            var salesChartOptions = {
                maintainAspectRatio : false,
                responsive : true,
                legend: { display: true },
                scales: {
                    xAxes: [{ gridLines : { display : false } }],
                    yAxes: [{ gridLines : { display : false } }]
                }
            };
            var salesChart = new Chart(salesChartCanvas, {
                type: 'line',
                data: salesChartData,
                options: salesChartOptions
            });

            // Donut Chart
            var pieChartCanvas = document.getElementById('sales-chart-canvas').getContext('2d');
            var pieData        = {
                labels: ['Rigid Boxes', 'Mailer Boxes', 'Kraft Boxes', 'Corrugated'],
                datasets: [
                    {
                        data: [30,12,20,38],
                        backgroundColor : ['#111111', '#f3c623', '#2a2a2a', '#e5b80b'],
                    }
                ]
            };
            var pieOptions = {
                legend: { display: true },
                maintainAspectRatio : false,
                responsive : true,
            };
            var pieChart = new Chart(pieChartCanvas, {
                type: 'doughnut',
                data: pieData,
                options: pieOptions
            });
        }
    });
  </script>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @include('adminlte/footer')