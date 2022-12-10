<?php
include "header.php";
include "slider.php";
include "handle/brand_class.php";
?>
<?php
$brand = new brand;
    if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $category_id = $_POST['category_id'];
    $brand_name = $_POST['brand_name'];
    $insert_brand = $brand->insert_brand($category_id, $brand_name );
} 
?>
<style>
    select{
        height: 30px;
        width: 200px;
        margin-left: 30px;
    }
</style>
<div class="admin-category-right">
            <div class="admin-category-right-dm__add">
                <h1 style="margin-bottom: 20px">THÊM LOẠI SẢN PHẨM</h1>
                <form action="" method="POST">
                    <select name="category_id" id="">
                        <option value="#">Chọn danh mục</option>
                        <?php
                        $show_category = $brand ->show_category();
                        if($show_category){while($result = $show_category -> fetch_assoc()){

                        ?>
                        <option value="<?php echo $result['category_id'] ?>"> <?php echo $result['category_name'] ?></option>
                        <?php
                         }} 
                        ?>
                    </select> <br>
                    <input required name="brand_name" type="text" placeholder="Nhập tên loại sản phẩm">
                    <button type="submit">Thêm</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>