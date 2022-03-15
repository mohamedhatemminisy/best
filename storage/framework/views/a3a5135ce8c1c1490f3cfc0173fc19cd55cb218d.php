
<?php if($name && $value): ?>

<a href="<?php echo e(route($name.'.show',$value->id)); ?>" class="btn btn-sm btn-clean
btn-icon mr-2" title="<?php echo app('translator')->get('general.locales.show'); ?>">
    <i class="fa fa-eye"></i>
</a>

<a href="<?php echo e(route($name.'.edit',$value->id)); ?>" class="btn btn-sm btn-clean
btn-icon mr-2 custimizeEditBtn" title="<?php echo app('translator')->get('general.locales.edit'); ?>">
    <i class="fa fa-edit"></i>
</a>
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('invoice.destroy')): ?>
 <form id="delete-form-<?php echo e($value->id); ?>" style="display: inline-table;" action="<?php echo e(route($name.'.destroy',$value->id)); ?>"
    method="post">
    <?php echo csrf_field(); ?>
    <?php echo method_field('delete'); ?>
    <button type="button" class="btn btn-sm btn-clean btn-icon"
            title="<?php echo app('translator')->get('general.locales.delete'); ?>" onclick="confirmDelete
    ('delete-form-<?php echo e($value->id); ?>')">
        <i class="fa fa-trash"></i>
    </button>
</form>
<?php endif; ?>

<?php endif; ?>


<?php /**PATH /home/demoyoursite/public_html/minesy/best_edit/resources/views/admin/components/table-control.blade.php ENDPATH**/ ?>