<body style="background-color:#F0ECD6;">
<font color="blue">編輯商品</font>



<form action="<?php echo e(route('posts.update', [ 'post' => $post])); ?>" method="POST">

    <?php echo method_field('PUT'); ?>

    <?php echo csrf_field(); ?>

    <label><font color="blue">內容：</font>

        <textarea name="content"><?php echo e($post->content); ?></textarea>

    </label><br>

    <input type="submit" value="送出商品">

</form>
<form action="<?php echo e(route('posts.destroy', [ 'post' => $post])); ?>" method="POST">

    <?php echo method_field('DELETE'); ?>

    <?php echo csrf_field(); ?>

    <input type="submit" value="刪除商品">

</form>
</body><?php /**PATH C:\UniServerZ\www\LaravelDemo-master2\resources\views/posts/edit.blade.php ENDPATH**/ ?>