<?php $__env->startSection('title','Add product'); ?>
<?php $__env->startSection('content'); ?>
<div>
    <h3>Add product</h3>
    <form action="<?php echo e(route('products.store')); ?>" method="POST" onchange="fetchQuestions(this.value)">

        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="name">product_name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="category">Select Categories</label>
            <select id="category" name="category_id" class="form-control" >
                <option value="">Select Categories</option>

            </select>
        </div>

        <div id="dynamic-questions">
            <!-- الأسئلة الديناميكية  -->
        </div>

        <button id="add" type="submit" class="btn btn-primary">Add product</button>
    </form>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</div>

<script>
    $(document).on('click','#add',function (e){
         e.preventDefault();
        $.ajax({
            type:'post',
            url:<?php echo e(route('products.store')); ?>,
            data:{'_token':'<?php echo e(csrf_token()); ?>'},
            success: function (data){

            },
            error: function (reject) {

            }

        })
    });

</script>

<?php $__env->stopSection(); ?>
<?php /**PATH C:\task4\resources\views/AddProduct.blade.php ENDPATH**/ ?>