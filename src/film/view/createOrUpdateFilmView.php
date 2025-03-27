<<<<<<< HEAD

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

=======
<h1>Quản lý phim</h1>
<h2><?php echo isset($_GET["film_id"]) && $_GET["film_id"]
    ? "Cập nhật thông tin phim"
    : "Thêm phim"; ?></h2>

<form action=""  method="POST" enctype="multipart/form-data">
    <div class="row">
        <div class="col">
                    <label for="film_name">Tên phim</label>
                    <input type="text" name="film_name" id="film_name"
                    value="<?= isset($film["film_name"])
                        ? htmlspecialchars($film["film_name"])
                        : "" ?>"
                    placeholder="Mời bạn nhập tên phim" required>
                </div>
        <div class="col-md-12">
>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a
                <label for="">Mô tả</label>
                <input type="text" name="description"
               value="<?php echo htmlspecialchars($film["description"]); ?>"
               placeholder="Mời bạn nhập mô tả" required>
<<<<<<< HEAD
    <div class="form-group">
    <label for="image">Hình ảnh</label>

=======
        </div>
        <div class="col-md-12">
        <label for="image">Hình ảnh</label>
            <div class="row">
                <div class="col-md-12">
>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a
                      <!-- Tải lên hình ảnh mới -->
            <input type="file" name="image">

             <!-- Hiển thị hình ảnh cũ -->
<<<<<<< HEAD
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
=======
            <?php if (!empty($film["image"])): ?>
                <img src="images/<?= htmlspecialchars(
                    $film["image"]
                ) ?>" alt="Hình ảnh cũ" style="max-width: 200px;">
            <?php endif; ?>


                </div>
            </div>
        </div>
        <div class="col-md-12">
                <label for="">Ngày phát hành</label>
                <input type="number" name="release_year"
               value="<?php echo htmlspecialchars($film["release_year"]); ?>"
               placeholder="Mời bạn nhập ngày phát hành" required>
                </div>
        <div class="col-md-12">

                <label for="">Ngôn ngữ</label>
                <input type="text" name="language"
               value="<?php echo htmlspecialchars($film["language"]); ?>"
               placeholder="Mời bạn nhập ngôn ngữ" required>


        </div>
        <div class="col-md-12">
            <label for="">Danh mục</label>

                    <select  name="categories">
        <?php if (!empty($categories)): ?>
    <?php foreach ($categories as $category): ?>
        <option value="<?= $category["category_id"] ?>"
            <?= isset($film["category_id"]) &&
            $film["category_id"] == $category["category_id"]
                ? "selected"
                : "" ?>>
            <?= htmlspecialchars($category["category_name"]) ?>
        </option>
    <?php endforeach; ?>
<?php else: ?>
    <option value="">Không có danh mục nào</option>
<?php endif; ?>
</select>
        </div>

        <div class="col-md-12">
    <label for="genres">Thể loại</label>
    <select name="genres" required>
        <?php if (!empty($genres)): ?>
            <?php foreach ($genres as $genre): ?>
                <option value="<?= $genre["genre_id"] ?>"
                    <?= isset($film["genre_id"]) && $film["genre_id"] == $genre["genre_id"] ? "selected" : "" ?>>
                    <?= htmlspecialchars($genre["genre_name"]) ?>
                </option>
            <?php endforeach; ?>
        <?php else: ?>
>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a
            <option value="">Không có thể loại nào</option>
        <?php endif; ?>
    </select>
</div>
<<<<<<< HEAD
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
=======

        <div class="col-md-12">
        <label for="">Quốc Gia</label>
        <select name="country">
        <?php if (!empty($countries)): ?>
    <?php foreach ($countries as $country): ?>
        <option value="<?= $country["country_id"] ?>"
            <?= isset($film["country_id"]) &&
            $film["country_id"] == $country["country_id"]
                ? "selected"
                : "" ?>>
            <?= htmlspecialchars($country["country_name"]) ?>
>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a
        </option>
    <?php endforeach; ?>
<?php else: ?>
    <option value="">Không có quốc gia nào</option>
<?php endif; ?>

</select>
<<<<<<< HEAD
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
=======
    </div>
            <button class=" waves-effect waves-light btn " style="margin-top:10px;" type="submit" name="addOrUpdate"><?php echo isset(
                $_GET["film_id"]
            ) && $_GET["film_id"]
                ? "Cập nhật"
                : "Thêm phim"; ?></button>
            <a href="/">Quay lại danh sách phim</a>
    </div>
</form>


>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a
