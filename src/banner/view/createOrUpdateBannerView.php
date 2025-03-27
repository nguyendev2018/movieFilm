<section class="contact-area contact-bg" data-background="img/bg/contact_bg.jpg">

<div class="container">
    <div class="row justify-content-center">
    <div class="col-xl-8 col-lg-7">


<div class="contact-form">

<form action=""  method="POST" enctype="multipart/form-data" class="mt-20 mb-20">
<h2 class="admin-title"><?php echo isset($_GET["banner_id"]) &&
                            $_GET["banner_id"]
                        ? "CẬP NHẬT BANNER"
                        : "Thêm banner"; ?></h2>
            <label for="banner_name">Tên banner</label>
                    <input type="text" name="banner_name" id="banner_name"
                    value="<?php echo isset($data["banner_name"])
                           ? htmlspecialchars($data["banner_name"])
                           : ""; ?>"
                    placeholder="Mời bạn nhập tên banner" required>

                <label for="banner_desc">Mô tả</label>
                <input type="text" name="banner_desc" id="banner_desc"
               value="<?php echo htmlspecialchars($data["banner_desc"]); ?>"
               placeholder="Mời bạn nhập mô tả" required>

        <label for="image">Hình ảnh</label>

            <input type="file" name="image">

            <?php if (! empty($data["image"])): ?>
                <img src="images/<?php echo htmlspecialchars(
    $data["image"]
); ?>" alt="Hình ảnh cũ" style="max-width: 200px;">
            <?php endif; ?>
            <div class="d-flex justify-content-between align-items-baseline mt-30">
            <button class="btn" type="submit" name="addOrUpdate"><?php echo isset($_GET["banner_id"]) && $_GET["banner_id"]? "Cập nhật": "Thêm banner"; ?>
    </button>
    <a href="/banner">Quay lại danh sách banner</a>
            </div>

            </div>
        </div>
</select>
    </div>
            </div>
</form>
 </div>
    </div>

 </div>

 </section>

