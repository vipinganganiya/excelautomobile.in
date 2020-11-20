<?php $__env->startSection('main'); ?>
        <div class="row">

          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>
  
              <div class="info-box-content">
                <span class="info-box-text"><?php echo e(trans('admin.total_order')); ?></span>
                <span class="info-box-number"><?php echo e(number_format($totalOrder)); ?></span>
                <?php if(sc_config_global('MultiStorePro')): ?>
                  <a href="<?php echo e(sc_route('admin_order_store.index')); ?>" class="small-box-footer">
                    <?php echo e(trans('admin.more')); ?>&nbsp;
                    <i class="fa fa-arrow-circle-right"></i>
                  </a>
                <?php else: ?>
                  <a href="<?php echo e(sc_route('admin_order.index')); ?>" class="small-box-footer">
                    <?php echo e(trans('admin.more')); ?>&nbsp;
                    <i class="fa fa-arrow-circle-right"></i>
                  </a>
                <?php endif; ?>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
  
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-aqua"><i class="fa fa-tags"></i></span>
  
              <div class="info-box-content">
                <span class="info-box-text"><?php echo e(trans('admin.total_product')); ?></span>
                <span class="info-box-number"><?php echo e(number_format($totalProduct)); ?></span>
                <a href="<?php echo e(sc_route('admin_product.index')); ?>" class="small-box-footer">
                    <?php echo e(trans('admin.more')); ?>&nbsp;
                    <i class="fa fa-arrow-circle-right"></i>
                </a>
  
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
  
  
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>
  
              <div class="info-box-content">
                <span class="info-box-text"><?php echo e(trans('admin.total_customer')); ?></span>
                <span class="info-box-number"><?php echo e(number_format($totalCustomer)); ?></span>
                <a href="<?php echo e(sc_route('admin_customer.index')); ?>" class="small-box-footer">
                    <?php echo e(trans('admin.more')); ?>&nbsp;
                    <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
  
  
  
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-red"><i class="fa fa-map-signs"></i></span>
  
              <div class="info-box-content">
                <span class="info-box-text"><?php echo e(trans('admin.total_blogs')); ?></span>
                <span class="info-box-number"><?php echo e(number_format($totalNews)); ?></span>
                <a href="<?php echo e(sc_route('admin_news.index')); ?>" class="small-box-footer">
                    <?php echo e(trans('admin.more')); ?>&nbsp;
                    <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->


        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title"><?php echo e(trans('admin.order_month')); ?></h5>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div id="chart-days" style="width:100%; height:auto;"></div>
                  </div>
                </div>
                <!-- /.row -->
              </div>
              <!-- ./card-body -->
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->


        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title"><?php echo e(trans('admin.order_year')); ?></h5>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-4">
                    <div id="chart-pie" style="width:100%; height:auto;"></div>
                  </div>
                  <div class="col-md-8">
                    <div id="chart-month" style="width:100%; height:auto;"></div>
                  </div>
                </div>
                <!-- /.row -->
              </div>
              <!-- ./card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->


        <!-- Main row -->
        <div class="row">

          <!-- Left col -->
          <div class="col-md-12">
            <!-- TABLE: LATEST ORDERS -->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title"><?php echo e(trans('admin.top_customer_new')); ?></h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <tr>
                      <th><?php echo e(trans('customer.id')); ?></th>
                      <th><?php echo e(trans('customer.email')); ?></th>
                      <th><?php echo e(trans('customer.name')); ?></th>
                      <th><?php echo e(trans('customer.created_at')); ?></th>
                    </tr>
                    <tbody>
                      <?php if(count($topCustomer)): ?>
                      <?php $__currentLoopData = $topCustomer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                          <td><a href="<?php echo e(sc_route('admin_customer.edit',['id'=>$customer->id])); ?>">ID#<?php echo e($customer->id); ?></a></td>
                          <td><?php echo e($customer->email); ?></td>
                          <td><?php echo e($customer->name); ?></td>
                          <td><?php echo e($customer->created_at); ?></td>
                        </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->


          </div>
          <!-- /.col -->


        </div>
        <!-- /.row -->
<?php $__env->stopSection(); ?>


<?php $__env->startPush('styles'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('scripts'); ?>
  <script src="<?php echo e(asset('admin/plugin/chartjs/highcharts.js')); ?>"></script>
  <script src="<?php echo e(asset('admin/plugin/chartjs/highcharts-3d.js')); ?>"></script>
  <script type="text/javascript">
  document.addEventListener('DOMContentLoaded', function () {
      var myChart = Highcharts.chart('chart-days', {
          credits: {
              enabled: false
          },
          title: {
              text: '<?php echo e(trans('chart.static_30_day')); ?>'
          },
          xAxis: {
              categories: <?php echo json_encode(array_keys($orderInMonth)); ?>,
              crosshair: false

          },

          yAxis: [{
              min: 0,
              title: {
                  text: '<?php echo e(trans('chart.order')); ?>'
              },
          }, {
              title: {
                  text: '<?php echo e(trans('chart.amount')); ?>'
              },
              opposite: true
          },
          ],

          legend: {
                align: 'left',
                verticalAlign: 'top',
                borderWidth: 0
            },

          tooltip: {
              headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
              pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                  '<td style="padding:0"><b>{point.y:.0f} </b></td></tr>',
              footerFormat: '</table>',
              shared: true,
              useHTML: true
          },
          plotOptions: {
            column: {
                      pointPadding: 0.2,
                      borderWidth: 0
                  },
          },

          series: [
          {
              type: 'column',
              name: '<?php echo e(trans('chart.order')); ?>',
              data: <?php echo json_encode(array_values($orderInMonth)); ?>,
              dataLabels: {
                  enabled: true,
                  format: '{point.y:.0f}'
              }
          },
          {
              type: 'spline',
              name: '<?php echo e(trans('chart.amount')); ?>',
              color: '#32ca0c',
              yAxis: 1,
              data: <?php echo json_encode(array_values($amountInMonth)); ?>,
              borderWidth: 0,
              dataLabels: {
                  enabled: true,
                  borderRadius: 3,
                  backgroundColor: 'rgba(252, 255, 197, 0.7)',
                  borderWidth: 0.5,
                  borderColor: '#AAA',
                  y: -6
              }
          },
        ]
      });
  });



// Set up the chart
var chart = new Highcharts.Chart({
    chart: {
        renderTo: 'chart-month',
        type: 'column',
        options3d: {
            enabled: true,
            alpha: 0,
            beta: 10,
            depth: 50,
            viewDistance: 25
        }
    },
    title: {
        text: '<?php echo e(trans('chart.static_month')); ?>'
    },
    subtitle: {
        text: '<?php echo e(trans('chart.static_month_help')); ?>'
    },
    legend: {
            enabled: false,
      },
    credits: {
              enabled: false
          },
    xAxis: {
        categories: <?php echo json_encode(array_keys($dataInYear)); ?>,
        crosshair: false,
    },
    yAxis: [
            {
                min: 0,
                title: {
                    text: '<?php echo e(trans('chart.amount')); ?>'
                },
            }
          ],
    plotOptions: {
        column: {
            depth: 25
        },
        series: {
            dataLabels: {
                enabled: true,
                borderRadius: 3,
                backgroundColor: 'rgba(252, 255, 197, 0.7)',
                borderWidth: 0.5,
                borderColor: '#AAA',
                y: -6
            }
        }
    },
    series: [
      {
        name : '<?php echo e(trans('chart.amount')); ?>',
        data: <?php echo json_encode(array_values($dataInYear)); ?>,
      },
      {
          type : 'spline',
          color: '#d05135',
          name : '<?php echo e(trans('chart.amount')); ?>',
          data: <?php echo json_encode(array_values($dataInYear)); ?>

      }
  ]
});

function showValues() {
    $('#alpha-value').html(chart.options.chart.options3d.alpha);
    $('#beta-value').html(chart.options.chart.options3d.beta);
    $('#depth-value').html(chart.options.chart.options3d.depth);
}

// Activate the sliders
$('#sliders input').on('input change', function () {
    chart.options.chart.options3d[this.id] = parseFloat(this.value);
    showValues();
    chart.redraw(false);
});

showValues();
</script>

<script>
  Highcharts.chart('chart-pie', {
    chart: {
        type: 'pie',
        options3d: {
            enabled: true,
            alpha: 45,
            beta: 0
        }
    },
    credits: {
              enabled: false
          },
    title: {
        text: '<?php echo e(trans('chart.static_country')); ?>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            depth: 35,
            dataLabels: {
                enabled: true,
                format: '{point.name}:{point.y}'
            }
        }
    },
    series: [{
        type: 'pie',
        name: '<?php echo e(trans('chart.country')); ?>',
        data: <?php echo $dataPie; ?>,
    }]
});
</script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make($templatePathAdmin.'layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/automobile.in/vendor/s-cart/core/src/Admin/Views/dashboard.blade.php ENDPATH**/ ?>