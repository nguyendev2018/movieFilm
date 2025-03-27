
<section class="contact-area contact-bg" data-background="img/bg/contact_bg.jpg">
<div class="container">
    <div class="row justify-content-center">
    <div class="col-xl-8 col-lg-7">


<div class="contact-form">


<form action=""  method="POST" enctype="multipart/form-data">

<h2 class="admin-title"><?php echo isset($_GET["film_id"]) && $_GET["film_id"]
                        ? "Cập nhật phim"
                        : "Thêm phim"; ?></h2>

                    <label for="film_name">Tên phim</label>
                    <input type="text" name="film_name" id="film_name"
                    value="<?php echo isset($film["film_name"])
? htmlspecialchars($film["film_name"])
: ""?>"
                    placeholder="Mời bạn nhập tên phim" required>

                <label for="">Mô tả</label>
                <input type="text" name="description"
               value="<?php echo htmlspecialchars($film["description"]); ?>"
               placeholder="Mời bạn nhập mô tả" required>
    <div class="form-group">
    <label for="image">Hình ảnh</label>

                      <!-- Tải lên hình ảnh mới -->
            <input type="file" name="image">

             <!-- Hiển thị hình ảnh cũ -->
            <?php if (! empty($film["image"])): ?>
                <img src="images/<?php echo htmlspecialchars(
    $film["image"]
)?>" alt="Hình ảnh cũ" style="max-width: 200px;">
            <?php endif; ?>
    </div>


                <div class="form-group">
                <label for="">Năm phát hành</label>
                <input type="number" name="release_year"
               value="<?php echo htmlspecialchars($film["release_year"]); ?>"
               placeholder="Mời bạn nhập năm phát hành" required>

                </div>

                    <div class="form-group">
                    <label for="">Ngôn ngữ</label>
                <select name="language" class="form-control" required>
                    <option value="VN" <?php echo isset($film["language"]) && $film["language"] == "VN" ? "selected" : ""?>>Tiếng Việt</option>
                    <option value="EN" <?php echo isset($film["language"]) && $film["language"] == "EN" ? "selected" : ""?>>English</option>
                </select>
                    </div>
                <div class="form-group">
                <label for="">Danh mục</label>

<select  name="categories" class="form-control" required>
<?php if (! empty($categories)): ?>
<?php foreach ($categories as $category): ?>
<option value="<?php echo $category["category_id"]?>"
<?php echo isset($film["category_id"]) &&
$film["category_id"] == $category["category_id"]
? "selected"
: ""?>>
<?php echo htmlspecialchars($category["category_name"])?>
</option>
<?php endforeach; ?>
<?php else: ?>
<option value="">Không có danh mục nào</option>
<?php endif; ?>
</select>
                </div>

<div class="form-group">
<label for="genres">Thể loại</label>
    <select name="genres" class="form-control" required>
        <?php if (! empty($genres)): ?>
<?php foreach ($genres as $genre): ?>
                <option value="<?php echo $genre["genre_id"]?>"
                    <?php echo isset($film["genre_id"]) && $film["genre_id"] == $genre["genre_id"] ? "selected" : ""?>>
                    <?php echo htmlspecialchars($genre["genre_name"])?>
                </option>
            <?php endforeach; ?>
<?php else: ?>
            <option value="">Không có thể loại nào</option>
        <?php endif; ?>
    </select>
</div>
<div class="form-group">
<label for="">Quốc Gia</label>
        <select name="country" class="form-control" required>
        <?php if (! empty($countries)): ?>
<?php foreach ($countries as $country): ?>
        <option value="<?php echo $country["country_id"]?>"
            <?php echo isset($film["country_id"]) &&
$film["country_id"] == $country["country_id"]
? "selected"
: ""?>>
            <?php echo htmlspecialchars($country["country_name"])?>
        </option>
    <?php endforeach; ?>
<?php else: ?>
    <option value="">Không có quốc gia nào</option>
<?php endif; ?>

</select>
<div class="d-flex justify-content-between align-items-baseline mt-30">

<button class="btn"  type="submit" name="addOrUpdate"><?php echo isset(
                                                                                                                 $_GET["film_id"]
                                                                                                             ) && $_GET["film_id"]
                                                                                                         ? "Cập nhật"
                                                                                                         : "Thêm phim"; ?></button>



            <a href="/film">Quay lại danh sách phim</a>

</div>
</div>


    </div>
</form>
</div>
    </div>

 </div>

 </section>
