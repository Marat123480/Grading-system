<div class="row">
    <div class="col-12">
        <h4>Добавить Группу</h4>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <form class="form-inline" method="POST" action="<?php echo e(route('group')); ?>">
            <input class="form-control" placeholder="Имя" type="text" value="<?php echo e(old('nameI')); ?>" name="nameI" required>
            <button type="submit" class="btn btn-primary">Сохранить</button>
            <?php echo csrf_field(); ?>

        </form>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\grade\resources\views/create-group.blade.php ENDPATH**/ ?>