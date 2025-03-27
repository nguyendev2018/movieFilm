<section class="contact-area contact-bg" data-background="img/bg/contact_bg.jpg">
<div class="container">
    <div class="row justify-content-center">
    <div class="col-xl-8 col-lg-7">
<div class="contact-form">
<form action=""  method="POST" enctype="multipart/form-data" class="mt-20 mb-20">
<h2 class="admin-title"><?php echo $_GET['id'] ? 'Cập nhật danh mục phim' : 'Thêm danh mục phim'?></h2>
<div class="form-group">
<label for="">Tên danh mục</label>
<input type="text" name="category_name" placeholder="Mời bạn nhập tên danh mục" >
</div>
<div class="d-flex justify-content-between align-items-baseline mt-30">
<button type="submit" class=" btn"
name="addOrUpdate" style="margin-top:10px"><?php echo $_GET['id'] ? 'Cập nhật' : 'Thêm danh mục '?></button>
</form>
<a href="/category">Quay lại danh mục phim</a>
</div>
</section>
<script>
    let categoryId = "<?php echo $_GET['id'] ?? ''; ?>";
    if (!!categoryId) {
        let category_data = <?php echo json_encode($data['categories'] ?? []); ?>;
        if (category_data && category_data['category_name']) {
            document.getElementsByName('category_name')[0].value = category_data['category_name'];
        }
    }
</script>




