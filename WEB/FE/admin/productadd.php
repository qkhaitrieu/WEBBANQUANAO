<?php
include "header.php";
include "slider.php";
include "handle/product_class.php"
?>
<?php
$product = new product;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // var_dump($_POST,$_FILES); 
//     echo '<pre>';
//    echo  print_r($_FILES['product_img_desc']); 
//    echo '</pre>';
    $insert_product = $product->insert_product($_POST, $_FILES);
}
?>
<div class="admin-category-right">
    <div class="admin-product-right-dm__add">
        <h1>THÊM SẢN PHẨM</h1>
        <div class="product-add">
            <div class="left-add-product">
                <form action="" method="POST" enctype="multipart/form-data">
                    <!-- phải có  enctype="multipart/form-data để up file lên csdl-->
                    <label for=""> Nhập tên sản phẩm <span style="color: red;">*</span></label>
                    <input name="product_name" required type="text">
                    <label for="">Chọn danh mục <span style="color: red;">*</span></label>
                    <select name="category_id" id="category_id">
                        <option value="#">Chọn</option>
                        <?php
                        $show_category = $product->show_category();
                        if ($show_category) {
                            while ($result = $show_category->fetch_assoc()) {
                        ?>
                        <option value=" <?php echo $result['category_id'] ?>"> <?php echo $result['category_name'] ?></option>
                        <?php
                            }
                        }
                        ?>
                    </select>
                    <label for="">Chọn loại sản phẩm <span style="color: red;">*</span></label>
                    <select name="brand_id" id="brand_id">
                    <label for="">Chọn loại sản phẩm <span style="color: red;">*</span></label>
                        <option value="#">Chọn</option>
                      
                    </select>
                    <label for="">Nhập giá sản phẩm <span style="color: red;">*</span></label>
                    <input name="product_price" required type="text">
                    <label  for="">Nhập giá khuyến mãi <span style="color: red;">*</span></label>
                    <input name="product_voucher" required type="text">
            </div>
            <div class="right-add-product">
                <div class="right-add-product-content">
                    <p>Nhập mô tả</p>
                    <textarea required name="product_desc" id="editor1" cols="30" rows="10"></textarea>
                    <p>Ảnh sản phẩm <span style="color: red;">*</span></p>
                    <span style="color: red;"><?php if(isset($insert_product)){ echo $insert_product ; } ?></span>
                    <input name="product_img" required type="file">
                    <p>Ảnh mô tả <span style="color: red;">*</span></p>
                    <input name="product_img_desc[]" required multiple type="file">
                </div>
                <button class="btn-add-product" type="submit">THÊM SẢN PHẨM</button>
            </div>
        </div>

        </form>
    </div>
</div>
</section>
</body>
            <script>
                        // Replace the <textarea id="editor1"> with a CKEditor 4
                        // instance, using default configuration.
                        CKEDITOR.replace( 'editor1', {
                        filebrowserBrowseUrl: 'ckfinder/ckfinder.html',
                        filebrowserUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files'       
        } );
            </script>
            <script >
                $(document).ready(function(){
                    $("#category_id").change(function(){
                       var  x = $(this).val()
                       $.get("productadd_ajax.php",{category_id:x},function(data){
                            $("#brand_id").html(data);
                       })
                    })
                })
            </script>
</html>