<?php $__env->startSection('content'); ?>

<?php if(session()->get('success')): ?>
  <div class="alert alert-success">
    <?php echo e(session()->get('success')); ?>

  </div> <br />
<?php endif; ?>


    <div class="row">
      <form action="<?php echo e(route('profile.update', $userinfo[0]->id)); ?> " method="POST" enctype="multipart/form-data">
        <?php echo e(method_field('PATCH')); ?>

        <?php echo e(csrf_field()); ?>


        <div class="col-sm-3">
              <img src="<?php echo e(url('/storage/app/'.$userinfo[0]->profile_picture)); ?>" id="userprofileimg" style="width:200px;height:200px;  " />
              <input type="file" name="profileimage" style="margin-top:20px;" id="profileimage" />
        </div>

        <div class="col-sm-7">
          <div class="panel panel-default">
              <div class="panel-heading">
                  <h3 class="panel-title">Personal Information</h3>
              </div>
              <div class="panel-body">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name= "name" value=" <?php echo e($userinfo[0]->name); ?> ">
                </div>

                <div class="form-group">
                    <label for="address">Address</label>
                    <textarea id="address" name="address" class="form-control" style="height:150px;"><?php echo e($userinfo[0]->address); ?></textarea>
                </div>

                <div class="form-group">
                    <label for="services">Services (Use comma to separate)</label>
                    <textarea name="services" class="form-control" id="services"><?php echo e($userinfo[0]->services); ?></textarea>
                    <!-- <input type="text" class="form-control" id="services" name= "services" value="<?php echo e($userinfo[0]->services); ?>"> -->
                </div>

                <div class="form-group">
                    <label for="contactnum">Contact Number</label>
                    <input type="text" class="form-control" id="contactnum" name= "contactnum" value="<?php echo e($userinfo[0]->contactnumber); ?>">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name= "email" value="<?php echo e($userinfo[0]->email); ?>">
                </div>


                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name= "username" value="<?php echo e($userinfo[0]->username); ?>">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name= "password" value="!password">
                </div>

                <div class="form-group">
                      <label for="category">Category</label>
                      <select class="form-control" id="category" name="category">
                          <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($category->id == $userinfo[0]->category_id): ?>
                                <option value="<?php echo e($category->id); ?>" selected><?php echo e($category->category_name); ?></options>
                            <?php else: ?>
                              <option value="<?php echo e($category->id); ?>"><?php echo e($category->category_name); ?></options>
                            <?php endif; ?>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                </div>


                <div class="form-group">
                    <label for="username">Sample Works (Upload Photo)
                      <?php if(count($userworks) > 0): ?>
                        <a href="#" data-toggle="modal" data-target="#deleteWorksModal" style="color:red;" title="Delete Photos"><i class="fa fa-trash"></i></a>
                      <?php endif; ?>
                    </label>
                    <input type="file" name="worksphoto[]" id="worksphoto" multiple />

                    <div class="gallery" style="margin-top:20px;"></div>
                </div>



                <div class="form-group">

                        <?php $__currentLoopData = $userworks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $userwork): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <img src="<?php echo e(url('/storage/app')); ?><?php echo e('/'.$userwork->photo); ?>" style="width:100px;height:100px;margin-left:10px;" />
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>

                <div class="form-group">
                    <input type="hidden" name="oldpicture" value="<?php echo e($userinfo[0]->profile_picture); ?>" />
                    <button type="submit" class="btn btn-primary pull-right">Update</button>
                </div>
              </div>
          </div>
        </div>

      </form>

      <div class="clearfix"></div>

    </div>




<!-- Modal -->
<div class="modal fade" id="deleteWorksModal" tabindex="-1" role="dialog" aria-labelledby="deleteWorksModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete this photos?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" onclick="deletePhotos()">Yes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
      </div>
    </div>
  </div>
</div>


<input type="hidden" id="userid" value="<?php echo e($userinfo[0]->id); ?>" />

<?php $__env->stopSection(); ?>

<?php echo $__env->make('customlayout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>