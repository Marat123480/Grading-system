

<?php $__env->startSection('title'); ?>
Редактировать учителя
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-12">
        <h4>Редактировать учителя</h4>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <form class="form-inline" method="POST" action="<?php echo e(action('UserController@updateTeacher', $id)); ?>">
            <input class="form-control" placeholder="Имя" type="text" value="<?php echo e($teacher->name); ?>" name="nameI" required>
            <input class="form-control" placeholder="Фамилия" type="text" value="<?php echo e($teacher->surname); ?>" name="surnameI" required>
            <input class="form-control" placeholder="Почта" type="text" value="<?php echo e($teacher->email); ?>" name="emailI" required>
            <input class="form-control" placeholder="Номер" type="text" value="<?php echo e($teacher->phone); ?>" name="phoneI" required>
            <button type="submit" class="btn btn-primary">Изменить</button>

            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\grade\resources\views/update-teacher.blade.php ENDPATH**/ ?>