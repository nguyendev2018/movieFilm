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
                <label for="">Mô tả</label>
                <input type="text" name="description"
               value="<?php echo htmlspecialchars($film["description"]); ?>"
               placeholder="Mời bạn nhập mô tả" required>
        </div>
        <div class="col-md-12">
        <label for="image">Hình ảnh</label>
            <div class="row">
                <div class="col-md-12">
                      <!-- Tải lên hình ảnh mới -->
            <input type="file" name="image">

             <!-- Hiển thị hình ảnh cũ -->
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
            <option value="">Không có thể loại nào</option>
        <?php endif; ?>
    </select>
</div>

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
        </option>
    <?php endforeach; ?>
<?php else: ?>
    <option value="">Không có quốc gia nào</option>
<?php endif; ?>

</select>
    </div>
            <button class=" waves-effect waves-light btn " style="margin-top:10px;" type="submit" name="addOrUpdate"><?php echo isset(
                $_GET["film_id"]
            ) && $_GET["film_id"]
                ? "Cập nhật"
                : "Thêm phim"; ?></button>
            <a href="/">Quay lại danh sách phim</a>
    </div>
</form>


