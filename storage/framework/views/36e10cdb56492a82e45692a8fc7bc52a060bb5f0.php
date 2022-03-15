<?php if(session('success')): ?>


<script type="text/javascript">
    $(function() {
      Swal.fire({
        position: "center-center",
        icon: "success",
        title: "<?php echo e(session('success')); ?>",
        showConfirmButton: false,
        timer: 1500
    });


    });

  </script>

<?php endif; ?>


<?php if(session('error')): ?>


<script type="text/javascript">
    $(function() {
      Swal.fire({
        position: "center-center",
        icon: "error",
        title: "<?php echo e(session('error')); ?>",
        showConfirmButton: false,
        timer: 1500
    });


    });

  </script>


<?php endif; ?>
<?php /**PATH F:\Work\best_edit\best_edit\resources\views/admin/layouts/_messages.blade.php ENDPATH**/ ?>