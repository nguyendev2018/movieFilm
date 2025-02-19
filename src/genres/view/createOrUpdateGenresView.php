<h1>Quản lý thể loại phim</h1>
<h2><?php echo $_GET['id'] ? 'Cập nhật thể loại phim' : 'Thêm thể loại phim'?></h2>
<form action="" method="POST" enctype="multipart/form-data">
<div class="form-group">
<label for="">Tên thể loại</label>
<input type="text" name="genre_name" placeholder="Mời bạn nhập tên thể loại" >
</div>
<button type="submit" class="blue waves-effect waves-light btn"
name="addOrUpdate" style="margin-top:10px"><?php echo $_GET['id'] ? 'Cập nhật' : 'Thêm thể loại '?></button>
</form>
<br />
<a href="/">Quay lại danh sách phim</a>


<script>
    let genresId = "<?php echo $_GET['id'] ?? ''; ?>";
    if (!!genresId) {
        let genres_data = <?php echo json_encode($data['genres'] ?? []); ?>;
        if (genres_data && genres_data['genre_name']) {
            document.getElementsByName('genre_name')[0].value = genres_data['genre_name'];
        }
    }
</script>


