<?php
include "header.php";
include "slider.php";
include "handle/brand_class.php";
?>
<?php
    $brand = new brand;
    $brand_id = $_GET["brand_id"];
    $get_brand = $brand -> get_brand($brand_id);
    if($get_brand){
        $resultA =  $get_brand -> fetch_assoc();
    }

    if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $category_id = $_POST['category_id'];
    $brand_name = $_POST['brand_name'];
    $update_brand = $brand->update_brand($category_id, $brand_name,$brand_id );
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
                        <option <?php if($resultA['category_id']==$result['category_id']){ echo "SELECTED";} /* làm hiện cái danh mục  */ ?> value="<?php echo $result['category_id'] ?>"> <?php echo $result['category_name'] ?></option>
                        <?php
                         }} 
                        ?>
                    </select> <br>
                    <input required name="brand_name" type="text" placeholder="Nhập tên loại sản phẩm" value="<?php echo $resultA['brand_name'] ?>">
                    <button type="submit">Sửa</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>