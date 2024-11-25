<h1>Quản lý phim</h1>
<h2>Thêm phim</h2>
<form action="" method="POST" enctype="multipart/form-data">
<div class="form-group">
<label for="">Tên phim</label>
<input type="text" name="film_name" placeholder="Tên phim" >
</div>
<div class="form-group">
<label for="">Mô tả</label>
<input type="text" name="description" placeholder="Mô tả" >
</div>
<div class="form-group">
<label for="image">Hình ảnh</label>
<input type="file" name="image">
</div>
<div class="form-group">
<label for="">Ngày phát hành</label>
<input type="text" name="release_year" placeholder="Ngày phát hành" >
</div>
<div class="form-group">
<label for="">Ngôn ngữ</label>
<input type="text" name="language" placeholder="ngôn ngữ" >
</div>

<button type="submit"
name="add_film">Thêm phim</button>
</form>
<br />
<a href="/">Quay lại danh sách phim</a>
</form>
