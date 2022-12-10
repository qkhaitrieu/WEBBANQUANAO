<?php
include "header.php";
include "slider.php";
include "handle/brand_class.php";
?>
<?php
$brand = new brand;
 $show_brand =  $brand -> show_brand();
?>
<div class="admin-category-right">
    <div class="admin-category-right-dm__list">
                <h1>DANH SÁCH DANH MỤC</h1>
                <table>
                    <tr>
                        <th>STT</th>
                        <th>ID</th>
                        <th>Danh mục</th>
                        <th>Loại sản phẩm</th>
                        <th></th>
                    </tr>
                    <?php
                    if($show_brand){$i=0;
                        while( $result = $show_brand->fetch_assoc()){$i++
                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $result['brand_id'] ?></td>
                        <td><?php echo $result['category_name'] ?></td>
                        <td><?php echo $result['brand_name'] ?></td>
                        <td><a href="brandedit.php?brand_id=<?php echo $result['brand_id'] ?>">
                        Sửa</a>  | <a href="branddelete.php?brand_id=<?php echo $result['brand_id'] ?>">Xóa</a></td>
                    </tr>
                    <?php
                    }
                }
                    ?>
                </table>          
            </div>
        </div>
    </section>
</body>
</html>