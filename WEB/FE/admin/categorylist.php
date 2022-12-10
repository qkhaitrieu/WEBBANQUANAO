<?php
include "header.php";
include "slider.php";
include "handle/category_class.php";
?>
<?php
$category = new category;
 $show_category =  $category -> show_category();
?>
<div class="admin-category-right">
    <div class="admin-category-right-dm__list">
                <h1>DANH SÁCH DANH MỤC</h1>
                <table>
                    <tr>
                        <th>STT</th>
                        <th>ID</th>
                        <th>Danh mục</th>
                        <th>Cập nhật</th>
                    </tr>
                    <?php
                    if($show_category){$i=0;
                        while( $result = $show_category->fetch_assoc()){$i++
                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $result['category_id'] ?></td>
                        <td><?php echo $result['category_name'] ?></td>
                        <td><a href="categoryedit.php?category_id=<?php echo $result['category_id'] ?>">
                        Sửa</a>  | <a href="categorydelete.php?category_id=<?php echo $result['category_id'] ?>">Xóa</a></td>
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