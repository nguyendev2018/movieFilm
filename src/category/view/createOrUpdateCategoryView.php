<h1>Quản lý danh mục phim</h1>
<h2><?php echo $_GET['id'] ? 'Cập nhật danh mục phim' : 'Thêm danh mục phim'?></h2>
<form action="" method="POST" enctype="multipart/form-data">
<div class="form-group">
<label for="">Tên danh mục</label>
<input type="text" name="category_name" placeholder="Mời bạn nhập tên danh mục" >
</div>
<button type="submit" class="blue waves-effect waves-light btn"
name="addOrUpdate" style="margin-top:10px"><?php echo $_GET['id'] ? 'Cập nhật' : 'Thêm danh mục '?></button>
</form>
<br />
<a href="/category">Quay lại danh mục phim</a>


<script>
    let categoryId = "<?php echo $_GET['id'] ?? ''; ?>";
    if (!!categoryId) {
        let category_data = <?php echo json_encode($data['categories'] ?? []); ?>;
        if (category_data && category_data['category_name']) {
            document.getElementsByName('category_name')[0].value = category_data['category_name'];
        }
    }
</script>


