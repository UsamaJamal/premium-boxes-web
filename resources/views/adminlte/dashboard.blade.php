 @include('adminlte/header')
  @include('adminlte/sidebarlink')
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header pt-4 pb-4">
      <div class="container-fluid px-4">
        @if(Session::has('login_successfully'))
            <div class="alert alert-success alert-dismissible fade show" role="alert" style="border-radius: 8px;">
                {{ Session::get('login_successfully') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <div class="row align-items-center">
          <div class="col-sm-6">
            <h1 class="page-title">Welcome back, Admin 👋</h1>
            <p class="page-subtitle">Here's what's happening with your store today.</p>
          </div><!-- /.col -->
          <div class="col-sm-6 text-right">
            <button class="btn btn-light bg-white border shadow-sm" style="border-radius: 8px;"><i class="far fa-calendar-alt mr-2 text-muted"></i> Jul 1 - Jul 8, 2026 <i class="fas fa-chevron-down ml-2 text-muted" style="font-size: 10px;"></i></button>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid px-4">
        
        <!-- Info boxes -->
        <div class="row mb-4">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="stat-box purple">
              <div class="stat-top">
                <div class="stat-icon"><i class="fas fa-shopping-bag"></i></div>
                <div class="stat-info">
                  <h4>Total Orders</h4>
                  <h2>1,250</h2>
                </div>
              </div>
              <div class="stat-bottom">
                <div class="stat-trend up"><i class="fas fa-arrow-up mr-1"></i> 15.6%<span>vs last 7 days</span></div>
                <div class="stat-chart"><canvas id="sparkline-1" width="60" height="30"></canvas></div>
              </div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="stat-box green">
              <div class="stat-top">
                <div class="stat-icon"><i class="fas fa-dollar-sign"></i></div>
                <div class="stat-info">
                  <h4>Total Revenue</h4>
                  <h2>$18,450</h2>
                </div>
              </div>
              <div class="stat-bottom">
                <div class="stat-trend up"><i class="fas fa-arrow-up mr-1"></i> 18.2%<span>vs last 7 days</span></div>
                <div class="stat-chart"><canvas id="sparkline-2" width="60" height="30"></canvas></div>
              </div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="stat-box blue">
              <div class="stat-top">
                <div class="stat-icon"><i class="fas fa-box"></i></div>
                <div class="stat-info">
                  <h4>Total Products</h4>
                  <h2>320</h2>
                </div>
              </div>
              <div class="stat-bottom">
                <div class="stat-trend up"><i class="fas fa-arrow-up mr-1"></i> 8.4%<span>vs last 7 days</span></div>
                <div class="stat-chart"><canvas id="sparkline-3" width="60" height="30"></canvas></div>
              </div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="stat-box orange">
              <div class="stat-top">
                <div class="stat-icon"><i class="fas fa-users"></i></div>
                <div class="stat-info">
                  <h4>Total Customers</h4>
                  <h2>2,845</h2>
                </div>
              </div>
              <div class="stat-bottom">
                <div class="stat-trend up"><i class="fas fa-arrow-up mr-1"></i> 12.7%<span>vs last 7 days</span></div>
                <div class="stat-chart"><canvas id="sparkline-4" width="60" height="30"></canvas></div>
              </div>
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">
          <!-- Left col -->
          <div class="col-md-8">
            <!-- REVENUE CHART -->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title" style="margin: 0; padding-top: 4px; font-weight: 700; font-size: 16px;">Revenue Overview</h3>
                <div class="card-tools">
                    <div class="btn-group btn-group-sm rounded shadow-sm border">
                        <button type="button" class="btn btn-white text-muted bg-transparent border-0" style="font-weight: 500;">Day</button>
                        <button type="button" class="btn btn-white text-primary bg-light border-0" style="font-weight: 600; border-radius: 6px;">Week</button>
                        <button type="button" class="btn btn-white text-muted bg-transparent border-0" style="font-weight: 500;">Month</button>
                        <button type="button" class="btn btn-white text-muted bg-transparent border-0" style="font-weight: 500;">Year</button>
                    </div>
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="revenueChart" height="280" style="height: 280px;"></canvas>
                </div>
              </div>
            </div>
            
            <!-- RECENT ORDERS -->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title" style="margin: 0; padding-top: 4px; font-weight: 700; font-size: 16px;">Recent Orders</h3>
                <div class="card-tools">
                    <a href="#" class="btn btn-sm btn-light border bg-white shadow-sm" style="border-radius: 6px; font-weight: 500; font-size: 12px;">View all orders</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table table-modern m-0">
                    <thead>
                    <tr>
                      <th>Order ID</th>
                      <th>Customer</th>
                      <th>Amount</th>
                      <th>Status</th>
                      <th>Payment</th>
                      <th>Date</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td><a href="#" class="text-dark font-weight-bold">#PBX-1001</a></td>
                      <td>John Smith</td>
                      <td>$250.00</td>
                      <td><span class="badge badge-modern success">Completed</span></td>
                      <td><span class="text-success font-weight-bold" style="font-size: 12px;">Paid</span></td>
                      <td class="text-muted">Jul 8, 2026</td>
                      <td><a href="#" class="text-muted"><i class="fas fa-eye mr-2"></i><i class="fas fa-print"></i></a></td>
                    </tr>
                    <tr>
                      <td><a href="#" class="text-dark font-weight-bold">#PBX-1002</a></td>
                      <td>Sarah Johnson</td>
                      <td>$150.00</td>
                      <td><span class="badge badge-modern warning">Pending</span></td>
                      <td><span class="text-warning font-weight-bold" style="font-size: 12px;">Pending</span></td>
                      <td class="text-muted">Jul 8, 2026</td>
                      <td><a href="#" class="text-muted"><i class="fas fa-eye mr-2"></i><i class="fas fa-print"></i></a></td>
                    </tr>
                    <tr>
                      <td><a href="#" class="text-dark font-weight-bold">#PBX-1003</a></td>
                      <td>Michael Brown</td>
                      <td>$320.00</td>
                      <td><span class="badge badge-modern success">Completed</span></td>
                      <td><span class="text-success font-weight-bold" style="font-size: 12px;">Paid</span></td>
                      <td class="text-muted">Jul 7, 2026</td>
                      <td><a href="#" class="text-muted"><i class="fas fa-eye mr-2"></i><i class="fas fa-print"></i></a></td>
                    </tr>
                    <tr>
                      <td><a href="#" class="text-dark font-weight-bold">#PBX-1004</a></td>
                      <td>Emily Davis</td>
                      <td>$210.00</td>
                      <td><span class="badge badge-modern danger">Cancelled</span></td>
                      <td><span class="text-danger font-weight-bold" style="font-size: 12px;">Refunded</span></td>
                      <td class="text-muted">Jul 7, 2026</td>
                      <td><a href="#" class="text-muted"><i class="fas fa-eye mr-2"></i><i class="fas fa-print"></i></a></td>
                    </tr>
                    <tr>
                      <td><a href="#" class="text-dark font-weight-bold">#PBX-1005</a></td>
                      <td>David Wilson</td>
                      <td>$180.00</td>
                      <td><span class="badge badge-modern success">Completed</span></td>
                      <td><span class="text-success font-weight-bold" style="font-size: 12px;">Paid</span></td>
                      <td class="text-muted">Jul 6, 2026</td>
                      <td><a href="#" class="text-muted"><i class="fas fa-eye mr-2"></i><i class="fas fa-print"></i></a></td>
                    </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->

          <!-- Right col -->
          <div class="col-md-4">
            
            <!-- TOP SELLING PRODUCTS -->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title" style="margin: 0; padding-top: 4px; font-weight: 700; font-size: 16px;">Top Selling Products</h3>
                <div class="card-tools">
                    <a href="#" class="text-muted" style="font-size: 12px; font-weight: 500; line-height: 2;">View all</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-4">
                <ul class="products-list product-list-in-card pl-0 mb-0" style="list-style: none;">
                  <li class="item mb-4 d-flex align-items-center">
                    <div class="product-img bg-light p-2 rounded mr-3" style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                      <i class="fas fa-box-open text-muted" style="font-size: 24px;"></i>
                    </div>
                    <div class="product-info flex-grow-1">
                      <div class="d-flex justify-content-between mb-1">
                        <span class="product-title font-weight-bold text-dark" style="font-size: 14px;">Mailer Boxes</span>
                        <span class="text-muted" style="font-size: 12px;">1,250 sold</span>
                      </div>
                      <div class="d-flex align-items-center">
                          <div class="progress progress-modern flex-grow-1 mr-3">
                              <div class="progress-bar" style="width: 42%"></div>
                          </div>
                          <span class="font-weight-bold" style="font-size: 12px; color: #1e293b;">42%</span>
                      </div>
                    </div>
                  </li>
                  <li class="item mb-4 d-flex align-items-center">
                    <div class="product-img bg-light p-2 rounded mr-3" style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                      <i class="fas fa-cube text-muted" style="font-size: 24px;"></i>
                    </div>
                    <div class="product-info flex-grow-1">
                      <div class="d-flex justify-content-between mb-1">
                        <span class="product-title font-weight-bold text-dark" style="font-size: 14px;">Rigid Boxes</span>
                        <span class="text-muted" style="font-size: 12px;">980 sold</span>
                      </div>
                      <div class="d-flex align-items-center">
                          <div class="progress progress-modern flex-grow-1 mr-3">
                              <div class="progress-bar" style="width: 32%"></div>
                          </div>
                          <span class="font-weight-bold" style="font-size: 12px; color: #1e293b;">32%</span>
                      </div>
                    </div>
                  </li>
                  <li class="item mb-4 d-flex align-items-center">
                    <div class="product-img bg-light p-2 rounded mr-3" style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                      <i class="fas fa-box text-muted" style="font-size: 24px;"></i>
                    </div>
                    <div class="product-info flex-grow-1">
                      <div class="d-flex justify-content-between mb-1">
                        <span class="product-title font-weight-bold text-dark" style="font-size: 14px;">Kraft Packaging</span>
                        <span class="text-muted" style="font-size: 12px;">720 sold</span>
                      </div>
                      <div class="d-flex align-items-center">
                          <div class="progress progress-modern flex-grow-1 mr-3">
                              <div class="progress-bar" style="width: 24%"></div>
                          </div>
                          <span class="font-weight-bold" style="font-size: 12px; color: #1e293b;">24%</span>
                      </div>
                    </div>
                  </li>
                  <li class="item d-flex align-items-center">
                    <div class="product-img bg-light p-2 rounded mr-3" style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                      <i class="fas fa-gift text-muted" style="font-size: 24px;"></i>
                    </div>
                    <div class="product-info flex-grow-1">
                      <div class="d-flex justify-content-between mb-1">
                        <span class="product-title font-weight-bold text-dark" style="font-size: 14px;">Cosmetic Boxes</span>
                        <span class="text-muted" style="font-size: 12px;">540 sold</span>
                      </div>
                      <div class="d-flex align-items-center">
                          <div class="progress progress-modern flex-grow-1 mr-3">
                              <div class="progress-bar" style="width: 18%; background-color: #fca5a5;"></div>
                          </div>
                          <span class="font-weight-bold" style="font-size: 12px; color: #1e293b;">18%</span>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- QUICK ACTIONS -->
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Quick Actions</h5>
                </div>
                <div class="card-body p-4">
                    <a href="#" class="quick-action-btn qa-add-product"><i class="fas fa-plus"></i> Add Product</a>
                    <a href="#" class="quick-action-btn qa-create-cat"><i class="fas fa-folder-plus"></i> Create Category</a>
                    <a href="#" class="quick-action-btn qa-add-brand"><i class="fas fa-tag"></i> Add Brand</a>
                    <a href="#" class="quick-action-btn qa-create-coupon"><i class="fas fa-ticket-alt"></i> Create Coupon</a>
                    <a href="#" class="quick-action-btn qa-add-blog"><i class="fas fa-pen-nib"></i> Add Blog</a>
                </div>
            </div>

            <!-- LATEST ACTIVITY -->
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Latest Activity</h5>
                </div>
                <div class="card-body p-4 pt-4 pb-2">
                    <ul class="timeline-modern">
                        <li class="blue">
                            <p>New order #PBX-1006 received</p>
                            <span>10 minutes ago</span>
                        </li>
                        <li class="green">
                            <p>Product "Mailer Box" added</p>
                            <span>35 minutes ago</span>
                        </li>
                        <li class="purple">
                            <p>Blog "How to choose perfect box" published</p>
                            <span>1 hour ago</span>
                        </li>
                        <li class="yellow">
                            <p>Coupon "SUMMER20" created</p>
                            <span>2 hours ago</span>
                        </li>
                        <li class="green">
                            <p>Order #PBX-1001 completed</p>
                            <span>3 hours ago</span>
                        </li>
                    </ul>
                </div>
            </div>

          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @include('adminlte/footer')

<script>
document.addEventListener("DOMContentLoaded", function() {
    if(typeof Chart !== 'undefined') {
        
        // Setup gradient for the main revenue chart
        var ctx = document.getElementById('revenueChart').getContext('2d');
        var gradient = ctx.createLinearGradient(0, 0, 0, 400);
        gradient.addColorStop(0, 'rgba(139, 92, 246, 0.4)'); // Purple top
        gradient.addColorStop(1, 'rgba(139, 92, 246, 0.0)'); // Transparent bottom

        var revenueChartData = {
            labels: ['Jul 1', 'Jul 2', 'Jul 3', 'Jul 4', 'Jul 5', 'Jul 6', 'Jul 7', 'Jul 8'],
            datasets: [{
                label: 'Revenue',
                backgroundColor: gradient,
                borderColor: '#8b5cf6', // Solid purple line
                pointRadius: 4,
                pointBackgroundColor: '#8b5cf6',
                pointBorderColor: '#fff',
                pointHoverRadius: 6,
                pointHoverBackgroundColor: '#8b5cf6',
                pointHoverBorderColor: '#fff',
                data: [15000, 12000, 16000, 13000, 19000, 11000, 14000, 22000],
                fill: true,
                tension: 0.4 // Curved line
            }]
        };

        var revenueChartOptions = {
            maintainAspectRatio: false,
            responsive: true,
            legend: { display: false },
            scales: {
                xAxes: [{ 
                    gridLines: { display: false, drawBorder: false },
                    ticks: { fontColor: '#94a3b8', fontSize: 12 }
                }],
                yAxes: [{ 
                    gridLines: { color: '#f1f5f9', borderDash: [5, 5], drawBorder: false, zeroLineColor: '#f1f5f9' },
                    ticks: { 
                        fontColor: '#94a3b8', 
                        fontSize: 12,
                        stepSize: 5000,
                        callback: function(value) {
                            if(value === 0) return '$0';
                            return '$' + (value/1000) + 'K';
                        }
                    }
                }]
            },
            tooltips: {
                backgroundColor: '#1e293b',
                titleFontColor: '#fff',
                bodyFontColor: '#e2e8f0',
                padding: 10,
                cornerRadius: 8,
                displayColors: false,
                callbacks: {
                    label: function(tooltipItem, data) {
                        return "$" + tooltipItem.yLabel.toLocaleString();
                    }
                }
            }
        };

        new Chart(ctx, {
            type: 'line',
            data: revenueChartData,
            options: revenueChartOptions
        });

        // Simple sparkline charts for stat boxes (using Chart.js for ease)
        function createSparkline(id, color, data) {
            var sCtx = document.getElementById(id).getContext('2d');
            new Chart(sCtx, {
                type: 'line',
                data: {
                    labels: ['1','2','3','4','5','6','7'],
                    datasets: [{
                        borderColor: color,
                        borderWidth: 2,
                        pointRadius: 0,
                        data: data,
                        fill: false,
                        tension: 0.4
                    }]
                },
                options: {
                    maintainAspectRatio: false, responsive: true, legend: { display: false },
                    scales: { xAxes: [{ display: false }], yAxes: [{ display: false }] },
                    layout: { padding: 0 },
                    tooltips: { enabled: false }
                }
            });
        }

        createSparkline('sparkline-1', '#8b5cf6', [10, 15, 12, 18, 14, 20, 25]); // Purple
        createSparkline('sparkline-2', '#10b981', [20, 18, 25, 22, 28, 25, 30]); // Green
        createSparkline('sparkline-3', '#3b82f6', [5, 8, 12, 9, 15, 12, 18]); // Blue
        createSparkline('sparkline-4', '#f59e0b', [15, 12, 18, 15, 22, 18, 25]); // Orange
    }
});
</script>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @include('adminlte/footer')