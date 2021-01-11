
<title>雜貨店</title><body style="background-color: #ffff99
;">

<font color="green">新增商品</font>


<form action="<?php echo e(route('posts.store')); ?>" method="POST">

    <?php echo csrf_field(); ?>

    <label>內容：

        <textarea name="content">

</textarea>
     

    </label><br>
   





    <input type="submit" value="送出文章"></input>
<br>
<input style="background-color:brown;" type ="button" onclick="javascript:location.href='http://localhost:888/LaravelDemo-master(f)/public/'" value="回到首頁"></input>

</body><?php /**PATH D:\UniServerZ\www\LaravelDemo-master(f)\resources\views/posts/create.blade.php ENDPATH**/ ?>