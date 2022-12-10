<?php
include "header.php";
include "slider.php";
include "handle/category_class.php";
?>
<?php
$category = new category;
    if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $category_name = $_POST['category_name'];
    $insert_category = $category->insert_category($category_name);
} 
?>
<div class="admin-category-right">
            <div class="admin-category-right-dm__add">
                <h1>THÊM DANH MỤC</h1>
                <form action="" method="POST">
                    <input required name="category_name" type="text" placeholder="Nhập tên danh mục">
                    <button type="submit">Thêm</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>