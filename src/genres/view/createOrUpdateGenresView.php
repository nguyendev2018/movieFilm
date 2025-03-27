<section class="contact-area contact-bg" data-background="img/bg/contact_bg.jpg">
<div class="container">
    <div class="row justify-content-center">
    <div class="col-xl-8 col-lg-7">
<div class="contact-form">
<form action=""  method="POST" enctype="multipart/form-data" class="mt-20 mb-20">
<h2 class="admin-title"><?php echo $_GET['id'] ? 'Cập nhật thể loại phim' : 'THÊM THỂ LOẠI'?></h2>
<div class="form-group">
<label for="">Tên thể loại</label>
<input type="text" name="genre_name" placeholder="Mời bạn nhập tên thể loại" >
</div>
<div class="d-flex justify-content-between align-items-baseline mt-30">

<button type="submit" class=" btn"
name="addOrUpdate" style="margin-top:10px"><?php echo $_GET['id'] ? 'Cập nhật' : 'Thêm thể loại '?></button>
</form>
<a href="/">Quay lại danh sách phim</a>
</div>
</section>
<script>
    let genresId = "<?php echo $_GET['id'] ?? ''; ?>";
    if (!!genresId) {
        let genres_data = <?php echo json_encode($data['genres'] ?? []); ?>;
        if (genres_data && genres_data['genre_name']) {
            document.getElementsByName('genre_name')[0].value = genres_data['genre_name'];
        }
    }
</script>


