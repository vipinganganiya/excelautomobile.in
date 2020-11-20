<?php if(!empty($dataNotFound)): ?>
  <?php $__env->startSection('main'); ?>
      <div class="card">
        <div class="card-tools">
            <div class="btn-group float-right">
                <a href="<?php echo e(sc_route('admin_store.index')); ?>" class="btn  btn-flat btn-default" title="List">
                    <i class="fa fa-list"></i><span class="hidden-xs"> <?php echo e(trans('admin.back_list')); ?></span>
                </a>
            </div>
        </div>
        <div class="card-header with-border">
          <h2 class="card-title"><?php echo e($title_description??''); ?></h2>
          <div class="card-tools">
              <div class="btn-group float-right mr-5">
                  <a href="<?php echo e(sc_route('admin_store.index')); ?>" class="btn  btn-flat btn-default" title="List">
                      <i class="fa fa-list"></i><span class="hidden-xs"> <?php echo e(trans('admin.back_list')); ?></span>
                  </a>
              </div>
          </div>
      </div>
        <div class="card-body table-responsivep-0">
          <?php echo e(trans('admin.data_notfound')); ?>

        </div>
      </div>
  <?php $__env->stopSection(); ?>
<?php else: ?>
<?php $__env->startSection('main'); ?>
      <div class="card card-primary card-outline card-outline-tabs">
        <div class="card-tools">
            <div class="btn-group">
              <input class="switch-data-store" data-store="<?php echo e($store->id); ?>" name="active" data-on-text="<?php echo e(trans('admin.maintain_enable')); ?>" data-off-text="<?php echo e(trans('admin.maintain_disable')); ?>" type="checkbox"  <?php echo e(($store->active == '1'?'checked':'')); ?>>
            </div>
        </div>
        <div class="card-body">
          <div class="tab-content" id="custom-tabs-four-tabContent">
            
              <div class="row">
                <div class="col-md-5">
                  <table class="table table-hover table-bordered">
                  <tbody>
                    <tr>
                      <td><?php echo e(trans('store.logo')); ?></td>
                      <td>
                          <div class="input-group">
                              <input type="hidden" id="logo" name="logo" value="<?php echo e($store->logo); ?>" class="form-control input-sm logo" placeholder=""  />
                          </div>
                          <div id="preview_image" class="img_holder"><?php echo sc_image_render($store->logo,'100px', '', 'Logo'); ?></div>
                            <a data-input="logo" data-preview="preview_image" data-type="logo" class="lfm pointer">
                              <i class="fa fa-image"></i> <?php echo e(trans('product.admin.choose_image')); ?>

                            </a>
                      </td>
                    </tr>
              
                    <tr>
                      <td><i class="fas fa-phone-alt"></i> <?php echo e(trans('store.phone')); ?></td>
                      <td><a href="#" class="editable-required editable editable-click" data-name="phone" data-type="number" data-pk="" data-source="" data-url="<?php echo e(sc_route('admin_store.update')); ?>" data-title="<?php echo e(trans('store.phone')); ?>" data-value="<?php echo e($store->phone); ?>" data-original-title="" title=""><?php echo e($store->phone); ?></a></td>
                    </tr>
              
                    <tr>
                      <td><i class="fas fa-phone-square"></i> <?php echo e(trans('store.long_phone')); ?></td>
                      <td><a href="#" class="editable-required editable editable-click" data-name="long_phone" data-type="text" data-pk="" data-source="" data-url="<?php echo e(sc_route('admin_store.update')); ?>" data-title="<?php echo e(trans('store.long_phone')); ?>" data-value="<?php echo e($store->long_phone); ?>" data-original-title="" title=""><?php echo e($store->long_phone); ?></a></td>
                    </tr>
              
                    <tr>
                      <td><i class="far fa-calendar-alt"></i> <?php echo e(trans('store.time_active')); ?></td>
                      <td><a href="#" class="editable-required editable editable-click" data-name="time_active" data-type="textarea" data-pk="" data-source="" data-url="<?php echo e(sc_route('admin_store.update')); ?>" data-title="<?php echo e(trans('store.time_active')); ?>" data-value="<?php echo e($store->time_active); ?>" data-original-title="" title=""><?php echo e($store->time_active); ?></a></td>
                    </tr>
              
                    <tr>
                      <td><i class="fas fa-map-marked"></i> <?php echo e(trans('store.address')); ?></td>
                      <td><a href="#" class="editable-required editable editable-click" data-name="address" data-type="text" data-pk="" data-source="" data-url="<?php echo e(sc_route('admin_store.update')); ?>" data-title="<?php echo e(trans('store.address')); ?>" data-value="<?php echo e($store->address); ?>" data-original-title="" title=""><?php echo e($store->address); ?></a></td>
                    </tr>
                    <tr>
                      <td><i class="fas fa-location-arrow"></i></span> <?php echo e(trans('store.office')); ?></td>
                      <td><a href="#" class="editable-required editable editable-click" data-name="office" data-type="text" data-pk="" data-source="" data-url="<?php echo e(sc_route('admin_store.update')); ?>" data-title="<?php echo e(trans('store.office')); ?>" data-value="<?php echo e($store->office); ?>" data-original-title="" title=""><?php echo e($store->office); ?></a></td>
                    </tr>
                    <tr>
                      <td><i class="fas fa-warehouse"></i> <?php echo e(trans('store.warehouse')); ?></td>
                      <td><a href="#" class="editable-required editable editable-click" data-name="warehouse" data-type="text" data-pk="" data-source="" data-url="<?php echo e(sc_route('admin_store.update')); ?>" data-title="<?php echo e(trans('store.warehouse')); ?>" data-value="<?php echo e($store->warehouse); ?>" data-original-title="" title=""><?php echo e($store->warehouse); ?></a></td>
                    </tr>
              
                    <tr>
                      <td><i class="fas fa-envelope"></i> <?php echo e(trans('store.email')); ?></td>
                      <td><a href="#" class="editable-required editable editable-click" data-name="email" data-type="text" data-pk="" data-source="" data-url="<?php echo e(sc_route('admin_store.update')); ?>" data-title="<?php echo e(trans('store.email')); ?>" data-value="<?php echo e($store->email); ?>" data-original-title="" title=""><?php echo e($store->email); ?></a></td>
                    </tr>
              
                    <tr>
                      <td><i class="fab fa-chrome"></i> <?php echo e(trans('store.domain')); ?></td>
                      <td><a href="#" class="editable-required editable editable-click" data-name="domain" data-type="text" data-pk="" data-source="" data-url="<?php echo e(sc_route('admin_store.update')); ?>" data-title="<?php echo e(trans('store.domain')); ?>" data-value="<?php echo e($store->domain); ?>" data-original-title="" title=""><?php echo e($store->domain); ?></a></td>
                    </tr>
          
                    <tr>
                      <td><i class="far fa-money-bill-alt nav-icon"></i> <?php echo e(trans('store.currency')); ?></td>
                      <td>
                        <a href="#" class="editable-required editable editable-click" data-name="currency" data-type="select" data-pk="" data-source="<?php echo e(json_encode($currencies)); ?>" data-url="<?php echo e(sc_route('admin_store.update')); ?>" data-title="<?php echo e(trans('store.currency')); ?>" data-value="<?php echo e($store->currency); ?>" data-original-title="" title=""></a>
                       </td>
                    </tr>
          
          
                    <tr>
                      <td><i class="fas fa-language nav-icon"></i> <?php echo e(trans('store.language')); ?></td>
                      <td>
                        <a href="#" class="editable-required editable editable-click" data-name="language" data-type="select" data-pk="" data-source="<?php echo e(json_encode($languages->pluck('name','code')->toArray())); ?>" data-url="<?php echo e(sc_route('admin_store.update')); ?>" data-title="<?php echo e(trans('store.language')); ?>" data-value="<?php echo e($store->language); ?>" data-original-title="" title=""></a>
                       </td>
                    </tr>
          
                    <tr>
                      <td><i class="fas fa-clock"></i> <?php echo e(trans('store.timezone')); ?></td>
                      <td>
                        <a href="#" class="editable-required editable editable-click" data-name="timezone" data-type="select" data-pk="" data-source="<?php echo e(json_encode($timezones)); ?>" data-url="<?php echo e(sc_route('admin_store.update')); ?>" data-title="<?php echo e(trans('store.timezone')); ?>" data-value="<?php echo e($store->timezone); ?>" data-original-title="" title=""></a>
                       </td>
                    </tr>
          
                    <tr>
                      <td><i class="nav-icon  fas fa-object-ungroup "></i><?php echo e(trans('store.template')); ?></td>
                      <td>
                        <a href="#" class="editable-required editable editable-click" data-name="template" data-type="select" data-pk="" data-source="<?php echo e(json_encode($templates)); ?>" data-url="<?php echo e(sc_route('admin_store.update')); ?>" data-title="<?php echo e(trans('store.template')); ?>" data-value="<?php echo e($store->template); ?>" data-original-title="" title=""></a>
                       </td>
                    </tr>
          
                  </td>
                </tr>
              
                  </tbody>
                     </table>
                </div>
              <?php
                  $descriptions = $store->descriptions->keyBy('lang');
              ?>
                <div class="col-md-7">
                  <table class="table table-hover table-bordered">
                    <tbody>
                      <tr>
                        <td><?php echo e(trans('store.title')); ?></td>
                        <td>
                          <?php $__currentLoopData = $languages->toArray(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $codeLang => $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo e($languages[$codeLang]->name); ?> <img src="<?php echo e(asset($languages[$codeLang]->icon )); ?>" style="width:20px">:<br>
                          <i><a href="#" class="editable-required editable editable-click" data-name="<?php echo e('title__'.$codeLang); ?>" data-type="text" data-pk="" data-source="" data-url="<?php echo e(sc_route('admin_store.update')); ?>" data-title="<?php echo e(trans('store.title')); ?>" data-value="<?php echo e($descriptions[$codeLang]['title'] ?? ''); ?>" data-original-title="" title=""><?php echo e($descriptions[$codeLang]['title'] ?? ''); ?></a></i><br>
                          <br>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </td>
                      </tr>
          
                      <tr>
                        <td><?php echo e(trans('store.keyword')); ?></td>
                        <td>
                          <?php $__currentLoopData = $languages->toArray(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $codeLang => $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo e($languages[$codeLang]->name); ?> <img src="<?php echo e(asset($languages[$codeLang]->icon )); ?>" style="width:20px">:<br>
                          <i><a href="#" class="editable-required editable editable-click" data-name="<?php echo e('keyword__'.$codeLang); ?>" data-type="text" data-pk="" data-source="" data-url="<?php echo e(sc_route('admin_store.update')); ?>" data-title="<?php echo e(trans('store.keyword')); ?>" data-value="<?php echo e($descriptions[$codeLang]['keyword'] ?? ''); ?>" data-original-title="" title=""><?php echo e($descriptions[$codeLang]['keyword'] ?? ''); ?></a></i><br>
                          <br>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </td>
                      </tr>
          
                      <tr>
                        <td><?php echo e(trans('store.description')); ?></td>
                        <td>
                          <?php $__currentLoopData = $languages->toArray(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $codeLang => $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo e($languages[$codeLang]->name); ?> <img src="<?php echo e(asset($languages[$codeLang]->icon )); ?>" style="width:20px">:<br>
                          <i><a href="#" class="editable-required editable editable-click" data-name="<?php echo e('description__'.$codeLang); ?>" data-type="text" data-pk="" data-source="" data-url="<?php echo e(sc_route('admin_store.update')); ?>" data-title="<?php echo e(trans('store.description')); ?>" data-value="<?php echo e($descriptions[$codeLang]['description'] ?? ''); ?>" data-original-title="" title=""><?php echo e($descriptions[$codeLang]['description'] ?? ''); ?></a></i><br>
                          <br>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </td>
                      </tr>
          
                  </tbody>
                  </table>
                </div>
              
              </div>
            
          </div>
        </div>
        <!-- /.card -->
</div>

<?php $__env->stopSection(); ?>
<?php endif; ?>

<?php $__env->startPush('styles'); ?>
<!-- Ediable -->
<link rel="stylesheet" href="<?php echo e(asset('admin/plugin/bootstrap-editable.css')); ?>">
<style type="text/css">
  #maintain_content img{
    max-width: 100%;
  }
</style>
<?php $__env->stopPush(); ?>

<?php if(empty($dataNotFound)): ?>
<?php $__env->startPush('scripts'); ?>
<!-- Ediable -->
<script src="<?php echo e(asset('admin/plugin/bootstrap-editable.min.js')); ?>"></script>

<script type="text/javascript">

  // Editable
$(document).ready(function() {

      //  $.fn.editable.defaults.mode = 'inline';
      $.fn.editable.defaults.params = function (params) {
        params._token = "<?php echo e(csrf_token()); ?>";
        params.storeId = "<?php echo e($storeId); ?>";
        return params;
      };

      $('.editable-required').editable({
        validate: function(value) {
            if (value == '') {
                return '<?php echo e(trans('admin.not_empty')); ?>';
            }
        },
        success: function(data) {
          if(data.error == 0){
            alertJs('success', '<?php echo e(trans('admin.msg_change_success')); ?>');
          } else {
            alertJs('error', data.msg);
          }
      }
    });

    $('.editable').editable({
        validate: function(value) {
        },
        success: function(data) {
          if(data.error == 0){
            alertJs('success', '<?php echo e(trans('admin.msg_change_success')); ?>');
          } else {
            alertMsg('error', data.msg);
          }
      }
    });

});
</script>


  <script type="text/javascript">

    <?php echo $script_sort??''; ?>


  </script>


<script src="<?php echo e(asset('admin/plugin/jquery.pjax.js')); ?>"></script>

<script>
//Logo
  $('.logo').change(function() {
        $.ajax({
        url: '<?php echo e(sc_route('admin_store.update')); ?>',
        type: 'POST',
        dataType: 'JSON',
        data: {"name": $(this).attr('name'),"value":$(this).val(),"_token": "<?php echo e(csrf_token()); ?>", "storeId": "<?php echo e($storeId); ?>" },
      })
      .done(function(data) {
        if(data.error == 0){
          alertJs('success', '<?php echo e(trans('admin.msg_change_success')); ?>');
        } else {
          alertJs('error', data.msg);
        }
      });
  });
//End logo
</script>

<?php $__env->stopPush(); ?>
<?php endif; ?>
<?php echo $__env->make($templatePathAdmin.'layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/automobile.in/vendor/s-cart/core/src/Admin/Views/screen/store_info.blade.php ENDPATH**/ ?>