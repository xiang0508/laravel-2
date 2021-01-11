<body style="background-color: #ffff99
;">

<font color="green">新增商品</font>


<form action="<?php echo e(route('posts.store')); ?>" method="POST">

    <?php echo csrf_field(); ?>

    <label>內容：

        <textarea name="content">

</textarea>
     

    </label><br>
   





    <input type="submit" value="送出文章"></input>


</body><?php /**PATH C:\UniServerZ\www\LaravelDemo-master2\resources\views/posts/create.blade.php ENDPATH**/ ?>