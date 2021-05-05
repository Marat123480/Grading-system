<?php $__env->startSection('title'); ?>
Редактировать студента
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-12">
        <h4>Редактировать студента</h4>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <form class="form-inline" method="POST" action="<?php echo e(action('StudentController@updateStudent', $id)); ?>">
            <input class="form-control" placeholder="Имя" type="text" value="<?php echo e($student->name); ?>" name="nameI" required>
            <input class="form-control" placeholder="Фамилия" type="text" value="<?php echo e($student->surname); ?>" name="surnameI" required>
            <input class="form-control" placeholder="Почта" type="text" value="<?php echo e($student->email); ?>" name="emailI" required>
            <input class="form-control" placeholder="Номер" type="text" value="<?php echo e($student->phone); ?>" name="phoneI" required>
            <select class="form-control" name="groupIdI" >
                <?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($group->id == $student->group_id): ?>
                        <option value="<?php echo e($group->id); ?>" selected disabled><?php echo e($group->name); ?></option>
                    <?php else: ?>
                        <option value="<?php echo e($group->id); ?>"><?php echo e($group->name); ?></option>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
           
            <button type="submit" class="btn btn-primary">Изменить</button>

            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\grade\resources\views/update-student.blade.php ENDPATH**/ ?>