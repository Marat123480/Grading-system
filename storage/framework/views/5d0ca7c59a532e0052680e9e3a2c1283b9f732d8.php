

<?php $__env->startSection('title'); ?>
    Группы
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php if(Auth::user()->is_admin == 1): ?>
    <?php echo $__env->make('create-group', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Имя</th>
                    <th></th>
                    <?php if(Auth::user()->is_admin == 1): ?>
                        <th></th>
                        <th></th>
                    <?php endif; ?>
                </tr>
                </thead>
                <?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td></td>
                        <td><?php echo e($group->name); ?></td>
                        <td><a class="btn btn-primary" href="<?php echo e(action('StudentController@getStudent', $group->id)); ?>">Студенты</a></td>
                        <?php if(Auth::user()->is_admin == 1): ?>
                        <td><a class="btn btn-primary" href="<?php echo e(action('GroupController@getUpdateGroup', $group->id)); ?>">Изменить</a></td>
                        <td>
                            <form action="<?php echo e(action('GroupController@destroyGroup', $group->id)); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>

                                <button class="btn btn-danger" type="submit">Удалить</button>
                            </form>
                        </td>
                        <?php endif; ?>
                    </tr>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </table>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\grade\resources\views/group.blade.php ENDPATH**/ ?>