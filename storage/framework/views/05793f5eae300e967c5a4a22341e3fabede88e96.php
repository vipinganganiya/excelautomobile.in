<?php $__env->startSection('title', 'View Orders'); ?>

<?php $__env->startPush('css'); ?>
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/backend/plugins/datatables/dataTables.bootstrap4.css')); ?>">
<?php $__env->stopPush(); ?>
<?php $__env->startSection('main'); ?>
    <div class="row">
        <div class="col-12">
            <!-- Main content -->
            <div class="invoice p-3 mb-3">
                <!-- title row -->
                <div class="row">
                    <div class="col-12">
                        <h4>
                            <i class="fa"></i><img src="<?php echo e(asset(sc_store('logo'))); ?>" alt="<?php echo e(sc_store('title')); ?>" width="150" height="75" /> 
                            <small class="float-right">Date: <?php echo e(date('l, d-M-Y h:i:s A')); ?></small>
                        </h4>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- info row -->
                <div class="row invoice-info">
                    <div class="col-sm-4 invoice-col">
                        From
                        <address>
                            <strong><?php echo e(sc_store('title')); ?></strong><br />
                            <?php echo e(sc_store('address')); ?><br>
                            Phone: <?php echo e(sc_store('phone')); ?> <?php echo e(sc_store('long_phone')); ?><br>
                            Email: <?php echo e(sc_store('email')); ?>

                        </address>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4 invoice-col">
                        To
                       <address>
                            <strong><?php echo $order->first_name; ?> <?php echo $order->last_name; ?></strong><br>
                            <?php echo $order->address1; ?>

                            <?php echo $order->address2; ?><br>
                            Phone: <?php echo $order->phone; ?><br>
                            Email: <?php echo empty($order->email)?'N/A':$order->email; ?>

                        </address>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4 invoice-col">
                        <b>Invoice #IMS-<?php echo e($order->created_at->format('Ymd')); ?><?php echo e($order->id); ?></b><br><br>
                        <b>Order ID:</b><?php echo e($order->created_at->format('Ymd')); ?><?php echo e($order->id); ?><br>
                        <b>Order Status:</b>
                        
                            <a href="#" class="edit-order-status" data-value="<?php echo e($statusOrder[$order->status]); ?>" data-name="status" data-type="select" data-url="<?php echo e(route('admin_order.order_status')); ?>" data-title="Choose Order Status" data-pk="<?php echo e($order->id); ?>" data-source="{'New': 'New', 'Processing': 'Processing', 'Hold': 'Hold', 'Canceled': 'Canceled', 'Done': 'Done', 'Failed': 'Failed'}" data-placement="top">
                                            <?php echo e($statusOrder[$order->status]); ?>

                            </a> 
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

                <!-- Table row -->
                <form id="form-add-item" action="" method="">
                  <?php echo csrf_field(); ?>
                  <input type="hidden" name="order_id"  value="<?php echo e($order->id); ?>">
                <div class="row">
                    <div class="col-12 table-responsive">
                        <table class="table table-bordered text-center">
                          <thead>
                            <tr>
                            	<th>S.N</th>
			                        <th><?php echo e(trans('product.name')); ?></th>
    			                    <th><?php echo e(trans('product.sku')); ?></th>
    			                    <th class="product_price"><?php echo e(trans('product.price')); ?></th>
    			                    <th class="product_qty"><?php echo e(trans('product.quantity')); ?></th>
                                    <!-- <th class="product_total"><?php echo e(trans('product.total_price')); ?></th> -->
    			                    <!-- <th class="product_tax"><?php echo e(trans('product.tax')); ?></th> -->
    			                    <th><?php echo e(trans('admin.action')); ?></th>
			                      </tr>
                          </thead>
                          <tbody>
                            <?php $__currentLoopData = $order->details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($loop->iteration); ?></td>
                                        <td><?php echo e($item->name); ?></td>
                                        <td><?php echo e($item->sku); ?></td>
                                         <td class="product_price"><?php echo e(sc_currency_render_symbol( $item->price, $order->currency )); ?></td>
                                        <td class="product_qty">x <?php echo e($item->qty); ?></td>
                                       <!--  <td class="product_price"><a href="#" class="edit-item-detail" data-value="<?php echo e($item->price); ?>" data-name="price" data-type="number" min=0 data-pk="<?php echo e($item->id); ?>" data-url="<?php echo e(route("admin_order.edit_item")); ?>" data-title="<?php echo e(trans('product.price')); ?>"><?php echo e(sc_currency_render_symbol( $item->price, $order->currency )); ?></a></td>
                                        <td class="product_qty">x <a href="#" class="edit-item-detail" data-value="<?php echo e($item->qty); ?>" data-name="qty" data-type="number" min=0 data-pk="<?php echo e($item->id); ?>" data-url="<?php echo e(route("admin_order.edit_item")); ?>" data-title="<?php echo e(trans('order.qty')); ?>"> <?php echo e($item->qty); ?></a></td> -->
                                      <!--   <td class="product_total item_id_<?php echo e($item->id); ?>"><?php echo e(sc_currency_render_symbol( $item->price * $item->qty, $order->currency)); ?></td> -->
                                        <!-- <td class="product_tax"><a href="#" class="edit-item-detail" data-value="<?php echo e($item->tax); ?>" data-name="tax" data-type="number" min=0 data-pk="<?php echo e($item->id); ?>" data-url="<?php echo e(route("admin_order.edit_item")); ?>" data-title="<?php echo e(trans('order.tax')); ?>"><?php echo e($item->tax); ?>%</a></td> -->
			                            <td><span  onclick="deleteItem(<?php echo e($item->id); ?>);" class="btn btn-danger btn-xs" data-title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></span>
			                               </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php
									  $htmlSelectProduct = '<tr><td></td>
									              <td>
									                <select onChange="selectProduct($(this));"  class="add_id form-control select2" name="add_id[]" style="width:100% !important;">
									                <option value="0">'.trans('order.select_product').'</option>';
									                if(count($products)){
									                  foreach ($products as $pId => $product){
									                    $htmlSelectProduct .='<option  value="'.$pId.'" >'.$product['name'].'('.$product['sku'].')</option>';
									                   }
									                }
									  $htmlSelectProduct .='
									              </select>
									              <span class="add_attr"></span>
									            </td>
									              <td><input type="text" disabled class="add_sku form-control"  value=""></td>
									              <td><input onChange="update_total($(this));" type="number" min="0" class="add_price form-control" name="add_price[]" value="0"></td>
									              <td><input onChange="update_total($(this));" type="number" min="0" class="add_qty form-control" name="add_qty[]" value="0"></td>
                                                    <td><input type="number" disabled class="add_total form-control" value="0" style="display: none"></td><td><input  type="number" min="0" class="add_tax form-control" name="add_tax[]" value="0" style="display: none"></td>
									              <td><button onClick="$(this).parent().parent().remove();" class="btn btn-danger btn-md btn-flat" data-title="Delete"><i class="fa fa-times" aria-hidden="true"></i></button></td>
									            </tr>
									          <tr>
									          </tr>';
									        $htmlSelectProduct = str_replace("\n", '', $htmlSelectProduct);
									        $htmlSelectProduct = str_replace("\t", '', $htmlSelectProduct);
									        $htmlSelectProduct = str_replace("\r", '', $htmlSelectProduct);
									?>
                                
                            </tbody>
                        </table>
                        <table class="table">
                            <tbody>
                                <tr  id="add-item" class="not-print">
                                    <td colspan="6">
                                         <button  type="button" class="btn btn-flat btn-success" id="add-item-button"  title="<?php echo e(trans('product.add_product')); ?>"><i class="fa fa-plus"></i> <?php echo e(trans('product.add_product')); ?></button>
                                          <button style="display: none; margin-right: 50px" type="button" class="btn btn-flat btn-warning" id="add-item-button-save"  title="Save"><i class="fa fa-save"></i> <?php echo e(trans('admin.save')); ?></button> 

                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
              </form>

                <div class="row">
                    <!-- accepted payments column -->
                    <div class="col-4">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tr>
                                    <th style="width:50%">Payment Method:</th>
                                    <td class="text-right">
                                        <a href="#" class="edit-payment-method" data-value="<?php echo e($order->payment_method); ?>" data-name="payment_method" data-type="select" data-url="<?php echo e(route("admin_order.payment_method")); ?>" data-title="Choose payment method" data-pk="<?php echo e($order->id); ?>" data-source="{'Cash': 'Cash', 'Card': 'Card'}" data-placement="left">
                                            <?php echo e($order->payment_method); ?>

                                        </a>
                                    </td>
                                </tr> 
                            </table>
                            <a class="btn btn-flat" title="Export" onclick="order_print()"><i class="fa fa-print"></i><span class="hidden-xs"> Print</span></a>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4 offset-4">
                        <div class="table-responsive">
                            <table class="table">
                            	<?php $__currentLoopData = $dataTotal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            		<?php if($element['code'] =='subtotal'): ?>
	                            		<tr>
		                                    <th style="width:50%"><?php echo $element['title']; ?>:</th>
		                                    <td class="text-right data-<?php echo e($element['code']); ?>"><?php echo e(sc_currency_render_symbol($element['value'], $order->currency)); ?></td>
		                                </tr>
		                            <?php endif; ?>

		                             <?php if($element['code'] =='tax'): ?>
			                            <tr>
		                                    <!-- <th><?php echo $element['title']; ?>:</th> -->
                                            <th class=" data-<?php echo e($element['code']); ?>">
                                                <a href="#" class="edit-order-tax-title" data-value="<?php echo $element['title']; ?>" data-name="tax_title" data-type="text" data-url="<?php echo e(route('admin_order.update_tax_title')); ?>" data-title="Change Tax Title" data-pk="<?php echo e($order->id); ?>" data-placement="top">
                                                <?php echo $element['title']; ?>

                                                </a>
                                            </th>
		                                    <td class="text-right data-<?php echo e($element['code']); ?>">
                                                <a href="#" class="edit-order-tax" data-value="<?php echo e($element['value']); ?>" data-name="tax" data-type="text" data-url="<?php echo e(route('admin_order.update_tax')); ?>" data-title="Change Tax Amount" data-pk="<?php echo e($order->id); ?>" data-placement="top">
                                                <?php echo e(sc_currency_render_symbol($element['value'], $order->currency)); ?>

                                                </a>
                                            </td>
		                                </tr>

		                            <?php endif; ?> 
		                            <?php if($element['code'] =='total'): ?>
		                             	<tr>
		                                    <th><?php echo $element['title']; ?>:</th>
		                                    <td class="text-right data-<?php echo e($element['code']); ?>"><?php echo e(sc_currency_render_symbol($element['value'], $order->currency)); ?></td>
		                                </tr>
		                            <?php endif; ?>
                            	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </table>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row --> 
            </div>
            <!-- /.invoice -->
        </div><!-- /.col -->
    </div><!-- /.row -->
	            
<?php $__env->stopSection(); ?>



<?php $__env->startPush('styles'); ?>
<style type="text/css">
.history{
  max-height: 50px;
  max-width: 300px;
  overflow-y: auto;
}
.td-title{
  width: 35%;
  font-weight: bold;
}
.td-title-normal{
  width: 35%;
}
.product_qty{
  width: 80px;
  text-align: right;
}
.product_price,.product_total{
  width: 120px;
  text-align: right;
}

</style>
<!-- Ediable -->
<link rel="stylesheet" href="<?php echo e(asset('admin/plugin/bootstrap-editable.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startPush('scripts'); ?>

<script src="<?php echo e(asset('admin/plugin/jquery.pjax.js')); ?>"></script>

<!-- Ediable -->
<script src="<?php echo e(asset('admin/plugin/bootstrap-editable.min.js')); ?>"></script>



<script type="text/javascript">

function update_total(e){
    node = e.closest('tr');
    var qty = node.find('.add_qty').eq(0).val();
    var price = node.find('.add_price').eq(0).val();
    node.find('.add_total').eq(0).val(qty*price);
}

//Add item
    function selectProduct(element){
        node = element.closest('tr');
        var id = parseInt(node.find('option:selected').eq(0).val());
        if(id == 0){
            node.find('.add_sku').val('');
            node.find('.add_qty').eq(0).val('');
            node.find('.add_price').eq(0).val('');
            node.find('.add_attr').html('');
           // node.find('.add_tax').html('');
        }else{
            $.ajax({
                url : '<?php echo e(sc_route('admin_order.product_info')); ?>',
                type : "get",
                dateType:"application/json; charset=utf-8",
                data : {
                     id : id,
                     order_id : <?php echo e($order->id); ?>,
                },
            beforeSend: function(){
                $('#loading').show();
            },
            success: function(returnedData){
                node.find('.add_sku').val(returnedData.sku);
                node.find('.add_qty').eq(0).val(1);
                node.find('.add_price').eq(0).val(returnedData.price_final * <?php echo ($order->exchange_rate)??1; ?>);
                node.find('.add_total').eq(0).val(returnedData.price_final * <?php echo ($order->exchange_rate)??1; ?>);
                node.find('.add_attr').eq(0).html(returnedData.renderAttDetails);
                node.find('.add_tax').eq(0).html(returnedData.tax);
                $('#loading').hide();
                }
            });
        }

    }
$('#add-item-button').click(function() {
  var html = '<?php echo $htmlSelectProduct; ?>';
  $('#add-item').before(html);
  $('.select2').select2();
  $('#add-item-button-save').show();
  $('#tax-input').show();
});

$('#add-item-button-save').click(function(event) {
    $('#add-item-button').prop('disabled', true);
    $('#add-item-button-save').button('loading');
    $.ajax({
        url:'<?php echo e(route("admin_order.add_item")); ?>',
        type:'post',
        dataType:'json',
        data:$('form#form-add-item').serialize(),
        beforeSend: function(){
            $('#loading').show();
        },
        success: function(result){
          $('#loading').hide();
            if(parseInt(result.error) ==0){
                location.reload();
            }else{
              alertJs('error', result.msg);
            }
        }
    });
});

//End add item
//

$(document).ready(function() {
  all_editable();
});

function all_editable(){
    $.fn.editable.defaults.params = function (params) {
        params._token = "<?php echo e(csrf_token()); ?>";
        return params;
    };

    $('.updateInfo').editable({
      success: function(response) {
        if(response.error ==0){
          alertJs('success', response.msg);
        } else {
          alertJs('error', response.msg);
        }
    }
    });

    $('.edit-order-status').editable({
        ajaxOptions: {
        type: 'post',
        dataType: 'json'
        },
        validate: function(value) {
          if (value == '') {
              return '<?php echo e(trans('admin.not_empty')); ?>';
          }
        },
        success: function(response) {
            if(response.error ==0){
                location.reload();
                alertJs('success', response.msg);
            } else {
              alertJs('error', response.msg);
            }
        }

    });

    $('.edit-order-tax').editable({
        ajaxOptions: {
        type: 'post',
        dataType: 'json'
        },
        validate: function(value) {
          if (value == '') {
              return '<?php echo e(trans('admin.not_empty')); ?>';
          }
        },
        success: function(response) {
            if(response.error ==0){
                location.reload();
                alertJs('success', response.msg);
            } else {
              alertJs('error', response.msg);
            }
        }

    });

    $('.edit-order-tax-title').editable({
        ajaxOptions: {
        type: 'post',
        dataType: 'json'
        },
        validate: function(value) {
          if (value == '') {
              return '<?php echo e(trans('admin.not_empty')); ?>';
          }
        },
        success: function(response) {
            if(response.error ==0){
                location.reload();
                alertJs('success', response.msg);
            } else {
              alertJs('error', response.msg);
            }
        }

    });
    
    $('.edit-payment-method').editable({
        ajaxOptions: {
        type: 'post',
        dataType: 'json'
        },
        validate: function(value) {
          if (value == '') {
              return '<?php echo e(trans('admin.not_empty')); ?>';
          }
        },
        success: function(response) {
            if(response.error ==0){
                location.reload();
                alertJs('success', response.msg);
            } else {
              alertJs('error', response.msg);
            }
        }

    });


    $('.edit-item-detail').editable({
        ajaxOptions: {
        type: 'post',
        dataType: 'json'
        },
        validate: function(value) {
          if (value == '') {
              return '<?php echo e(trans('admin.not_empty')); ?>';
          }
          if (!$.isNumeric(value)) {
              return '<?php echo e(trans('admin.only_numeric')); ?>';
          }
        },
        success: function(response,newValue) {
            if(response.error ==0){
                $('.data-shipping').html(response.detail.shipping);
                $('.data-received').html(response.detail.received);
                $('.data-subtotal').html(response.detail.subtotal);
                $('.data-tax').html(response.detail.tax);
                $('.data-total').html(response.detail.total);
                $('.data-shipping').html(response.detail.shipping);
                $('.data-discount').html(response.detail.discount);
                $('.item_id_'+response.detail.item_id).html(response.detail.item_total_price);
                var objblance = $('.data-balance').eq(0);
                objblance.before(response.detail.balance);
                objblance.remove();
                alertJs('success', response.msg);
            } else {
              alertJs('error', response.msg);
            }
        }

    });
}

function deleteItem(id){	
  Swal.mixin({
    customClass: {
      confirmButton: 'btn btn-success',
      cancelButton: 'btn btn-danger'
    },
    buttonsStyling: true,
  }).fire({
    title: '<?php echo e(trans('admin.confirm_delete')); ?>',
    text: "",
    type: 'warning',
    showCancelButton: true,
    confirmButtonText: '<?php echo e(trans('admin.confirm_delete_yes')); ?>',
    confirmButtonColor: "#DD6B55",
    cancelButtonText: '<?php echo e(trans('admin.confirm_delete_no')); ?>',
    reverseButtons: true,

    preConfirm: function() {
        return new Promise(function(resolve) {
            $.ajax({
                method: 'POST',
                url: '<?php echo e(route("admin_order.delete_item")); ?>',
                data: {
                  'pId':id,
                    _token: '<?php echo e(csrf_token()); ?>',
                },
                success: function (response) {
                  if(response.error ==0){
                    location.reload();
                    alertJs('success', response.msg);
                } else {
                  alertJs('error', response.msg);
                }
                  
                }
            });
        });
    }

  }).then((result) => {
    if (result.value) {
      alertMsg('success', '<?php echo e(trans('admin.confirm_delete_deleted_msg')); ?>', '<?php echo e(trans('admin.confirm_delete_deleted')); ?>' );
    } else if (
      // Read more about handling dismissals
      result.dismiss === Swal.DismissReason.cancel
    ) {
      // swalWithBootstrapButtons.fire(
      //   'Cancelled',
      //   'Your imaginary file is safe :)',
      //   'error'
      // )
    }
  })
} 


  $(document).ready(function(){
  // does current browser support PJAX
    if ($.support.pjax) {
      $.pjax.defaults.timeout = 2000; // time in milliseconds
    }

  });

  function order_print(){
    $('.not-print').hide();
    window.print();
    $('.not-print').show();
  }
</script>

<?php $__env->stopPush(); ?>


<?php echo $__env->make($templatePathAdmin.'layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/excelautomobile.in/resources/views/admin/screen/order_edit.blade.php ENDPATH**/ ?>