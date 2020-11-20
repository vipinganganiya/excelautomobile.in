<?php $__env->startSection('main'); ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header with-border">
                <h2 class="card-title"><?php echo e($title_description??''); ?></h2>

                <div class="card-tools">
                    <div class="btn-group float-right mr-5">
                        <a href="<?php echo e(sc_route('admin_category.index')); ?>" class="btn  btn-flat btn-default" title="List"><i
                                class="fa fa-list"></i><span class="hidden-xs"> <?php echo e(trans('admin.back_list')); ?></span></a>
                    </div>
                </div>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="<?php echo e($url_action); ?>" method="post" accept-charset="UTF-8" class="form-horizontal" id="form-main"
                enctype="multipart/form-data">


                <div class="card-body">
                    <?php
                    $descriptions = $category?$category->descriptions->keyBy('lang')->toArray():[];
                    ?>

                    <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $code => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                    <div class="card">
                        <div class="card-header with-border">
                            <h3 class="card-title"><?php echo e($language->name); ?> <?php echo sc_image_render($language->icon,'20px','20px', $language->name); ?></h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                </div>
                        </div>
                
                        <div class="card-body">

                        <div class="form-group row  <?php echo e($errors->has('descriptions.'.$code.'.title') ? ' text-red' : ''); ?>">
                            <label for="<?php echo e($code); ?>__title"
                                class="col-sm-2 col-form-label"><?php echo e(trans('category.title')); ?> <span class="seo" title="SEO"><i class="fa fa-coffee" aria-hidden="true"></i></span></label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                    </div>
                                    <input type="text" id="<?php echo e($code); ?>__title" name="descriptions[<?php echo e($code); ?>][title]"
                                        value="<?php echo old()? old('descriptions.'.$code.'.title'):($descriptions[$code]['title']??''); ?>"
                                        class="form-control <?php echo e($code.'__title'); ?>" placeholder="" />
                                </div>
                                <?php if($errors->has('descriptions.'.$code.'.title')): ?>
                                <span class="form-text">
                                    <i class="fa fa-info-circle"></i> <?php echo e($errors->first('descriptions.'.$code.'.title')); ?>

                                </span>
                                <?php else: ?>
                                    <span class="form-text">
                                        <i class="fa fa-info-circle"></i> <?php echo e(trans('admin.max_c',['max'=>200])); ?>

                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div
                            class="form-group row  <?php echo e($errors->has('descriptions.'.$code.'.keyword') ? ' text-red' : ''); ?>">
                            <label for="<?php echo e($code); ?>__keyword"
                                class="col-sm-2 col-form-label"><?php echo e(trans('category.keyword')); ?> <span class="seo" title="SEO"><i class="fa fa-coffee" aria-hidden="true"></i></span></label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                    </div>
                                    <input type="text" id="<?php echo e($code); ?>__keyword"
                                        name="descriptions[<?php echo e($code); ?>][keyword]"
                                        value="<?php echo old()?old('descriptions.'.$code.'.keyword'):($descriptions[$code]['keyword']??''); ?>"
                                        class="form-control <?php echo e($code.'__keyword'); ?>" placeholder="" />
                                </div>
                                <?php if($errors->has('descriptions.'.$code.'.keyword')): ?>
                                <span class="form-text">
                                    <i class="fa fa-info-circle"></i> <?php echo e($errors->first('descriptions.'.$code.'.keyword')); ?>

                                </span>
                                <?php else: ?>
                                    <span class="form-text">
                                        <i class="fa fa-info-circle"></i> <?php echo e(trans('admin.max_c',['max'=>200])); ?>

                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div
                            class="form-group row  <?php echo e($errors->has('descriptions.'.$code.'.description') ? ' text-red' : ''); ?>">
                            <label for="<?php echo e($code); ?>__description"
                                class="col-sm-2 col-form-label"><?php echo e(trans('category.description')); ?> <span class="seo" title="SEO"><i class="fa fa-coffee" aria-hidden="true"></i></span></label>
                            <div class="col-sm-8">
                                    <textarea type="text" id="<?php echo e($code); ?>__description" 
                                        name="descriptions[<?php echo e($code); ?>][description]"
                                        class="form-control <?php echo e($code.'__description'); ?>" placeholder="" /><?php echo e(old()?old('descriptions.'.$code.'.description'):($descriptions[$code]['description']??'')); ?></textarea>
                                <?php if($errors->has('descriptions.'.$code.'.description')): ?>
                                <span class="form-text">
                                    <i class="fa fa-info-circle"></i> <?php echo e($errors->first('descriptions.'.$code.'.description')); ?>

                                </span>
                                <?php else: ?>
                                    <span class="form-text">
                                        <i class="fa fa-info-circle"></i> <?php echo e(trans('admin.max_c',['max'=>300])); ?>

                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <div class="form-group row <?php echo e($errors->has('parent') ? ' text-red' : ''); ?>">
                            <label for="parent"
                                class="col-sm-2 col-form-label"><?php echo e(trans('category.admin.select_category')); ?></label>
                            <div class="col-sm-8">
                                <select class="form-control parent select2" style="width: 100%;" name="parent">
                                    <option value=""></option>
                                    <?php
                                    $categories = [0=>'==ROOT==']+ $categories;
                                    ?>
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($k); ?>"
                                    <?php echo e((old('parent', $category['parent']??'') ==$k) ? 'selected':''); ?>><?php echo e($v); ?>

                                    </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <?php if($errors->has('parent')): ?>
                                <span class="form-text">
                                    <i class="fa fa-info-circle"></i> <?php echo e($errors->first('parent')); ?>

                                </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row  <?php echo e($errors->has('alias') ? ' text-red' : ''); ?>">
                            <label for="alias" class="col-sm-2 col-form-label"><?php echo trans('category.alias'); ?></label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                    </div>
                                    <input type="text" id="alias" name="alias"
                                        value="<?php echo old('alias',($category['alias']??'')); ?>" class="form-control"
                                        placeholder="" />
                                </div>
                                <?php if($errors->has('alias')): ?>
                                <span class="form-text">
                                    <i class="fa fa-info-circle"></i> <?php echo e($errors->first('alias')); ?>

                                </span>
                                <?php endif; ?>
                            </div>
                        </div>                        

                        <div class="form-group row  <?php echo e($errors->has('image') ? ' text-red' : ''); ?>">
                            <label for="image" class="col-sm-2 col-form-label"><?php echo e(trans('category.image')); ?></label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <input type="text" id="image" name="image"
                                        value="<?php echo old('image',$category['image']??''); ?>"
                                        class="form-control input image" placeholder="" />
                                    <div class="input-group-append">
                                        <a data-input="image" data-preview="preview_image" data-type="category"
                                            class="btn btn-primary lfm">
                                            <i class="fa fa-image"></i> <?php echo e(trans('product.admin.choose_image')); ?>

                                        </a>
                                    </div>
                                </div>
                                <?php if($errors->has('image')): ?>
                                <span class="form-text">
                                    <i class="fa fa-info-circle"></i> <?php echo e($errors->first('image')); ?>

                                </span>
                                <?php endif; ?>
                                <div id="preview_image" class="img_holder">
                                    <?php if(old('image',$category['image']??'')): ?>
                                    <img src="<?php echo e(asset(old('image',$category['image']??''))); ?>">
                                    <?php endif; ?>

                                </div>
                            </div>
                        </div>

                        <div class="form-group row  <?php echo e($errors->has('sort') ? ' text-red' : ''); ?>">
                            <label for="sort" class="col-sm-2 col-form-label"><?php echo e(trans('category.sort')); ?></label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                    </div>
                                    <input type="number" style="width: 100px;" id="sort" name="sort"
                                        value="<?php echo old()?old('sort'):$category['sort']??0; ?>" class="form-control sort"
                                        placeholder="" />
                                </div>
                                <?php if($errors->has('sort')): ?>
                                <span class="form-text">
                                    <i class="fa fa-info-circle"></i> <?php echo e($errors->first('sort')); ?>

                                </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group  row">
                            <label for="top" class="col-sm-2 col-form-label"><?php echo e(trans('category.top')); ?></label>
                            <div class="col-sm-8">
                                <input class="checkbox" type="checkbox" name="top"
                                    <?php echo e(old('top',(empty($category['top'])?0:1))?'checked':''); ?>>
                            </div>
                            <span class="form-text">
                                <i class="fa fa-info-circle"></i> <?php echo e(trans('category.top_help')); ?>

                            </span>
                        </div>

                        <div class="form-group  row">
                            <label for="status" class="col-sm-2 col-form-label"><?php echo e(trans('category.status')); ?></label>
                            <div class="col-sm-8">
                                <input class="checkbox" type="checkbox" name="status"
                                    <?php echo e(old('status',(empty($category['status'])?0:1))?'checked':''); ?>>

                            </div>
                        </div>
                </div>



                <!-- /.card-body -->

                <div class="card-footer row" id="card-footer">
                    <?php echo csrf_field(); ?>
                    <div class="col-md-2">
                    </div>

                    <div class="col-md-8">
                        <div class="btn-group float-right">
                            <button type="submit" class="btn btn-primary"><?php echo e(trans('admin.submit')); ?></button>
                        </div>

                        <div class="btn-group float-left">
                            <button type="reset" class="btn btn-warning"><?php echo e(trans('admin.reset')); ?></button>
                        </div>
                    </div>
                </div>

                <!-- /.card-footer -->
            </form>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startPush('scripts'); ?>
<?php $__env->stopPush(); ?>
<?php echo $__env->make($templatePathAdmin.'layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/automobile.in/vendor/s-cart/core/src/Admin/Views/screen/category.blade.php ENDPATH**/ ?>