<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalExample"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalExample">Are you Sure You wanted to Delete?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Delete" below if you want to delete User!.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger" href="<?php echo e(route('logout')); ?>"
                    onclick="event.preventDefault(); document.getElementById('user-delete-form').submit();">
                    Delete
                </a>
                <form id="user-delete-form" method="POST" action="<?php echo e(route('users.destroy', ['user' => $user->id])); ?>">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                </form>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\laravel-admin\resources\views/users/delete-modal.blade.php ENDPATH**/ ?>