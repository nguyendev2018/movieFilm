<<<<<<< HEAD
<section class="contact-area contact-bg" data-background="img/bg/contact_bg.jpg">
<div class="container">
    <div class="row justify-content-center">
    <div class="col-xl-8 col-lg-7">
<div class="contact-form">
<form action=""  method="POST" enctype="multipart/form-data" class="mt-20 mb-20">
<h2 class="admin-title"><?php echo $_GET['id'] ? 'Cập nhật thể loại phim' : 'THÊM THỂ LOẠI'?></h2>
=======
<h1>Quản lý thể loại phim</h1>
<h2><?php echo $_GET['id'] ? 'Cập nhật thể loại phim' : 'Thêm thể loại phim'?></h2>
<form action="" method="POST" enctype="multipart/form-data">
>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a
<div class="form-group">
<label for="">Tên thể loại</label>
<input type="text" name="genre_name" placeholder="Mời bạn nhập tên thể loại" >
</div>
<<<<<<< HEAD
<div class="d-flex justify-content-between align-items-baseline mt-30">

<button type="submit" class=" btn"
name="addOrUpdate" style="margin-top:10px"><?php echo $_GET['id'] ? 'Cập nhật' : 'Thêm thể loại '?></button>
</form>
<a href="/">Quay lại danh sách phim</a>
</div>
</section>
=======
<button type="submit" class="blue waves-effect waves-light btn"
name="addOrUpdate" style="margin-top:10px"><?php echo $_GET['id'] ? 'Cập nhật' : 'Thêm thể loại '?></button>
</form>
<br />
<a href="/">Quay lại danh sách phim</a>


>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a
<script>
    let genresId = "<?php echo $_GET['id'] ?? ''; ?>";
    if (!!genresId) {
        let genres_data = <?php echo json_encode($data['genres'] ?? []); ?>;
        if (genres_data && genres_data['genre_name']) {
            document.getElementsByName('genre_name')[0].value = genres_data['genre_name'];
        }
    }
</script>


