<section class="contact-area contact-bg" data-background="img/bg/contact_bg.jpg">
<div class="container">
    <div class="row justify-content-center">
    <div class="col-xl-8 col-lg-7">
<div class="contact-form">
<form action=""  method="POST" enctype="multipart/form-data" class="mt-20 mb-20">

<h2 class="admin-title"><?php echo $_GET['id'] ? 'Cập nhật  quốc gia' : 'Thêm quốc gia'?></h2>
<div class="form-group">
<label for="">Tên quốc gia</label>
<input type="text" name="country_name" placeholder="Mời bạn nhập tên quốc gia" >
</div>
<div class="d-flex justify-content-between align-items-baseline mt-30">

<button type="submit" class="btn" name="addOrUpdate">
    <?php echo $_GET['id'] ? 'Cập nhật' : 'Thêm quốc gia' ?>
</button>
<a href="/">Quay lại danh sách phim</a>
</div>
</form>
</section>
<script>
    let countryId = "<?php echo $_GET['id'] ?? ''; ?>";
    if (!!countryId) {
        let country_data = <?php echo json_encode($data['country'] ?? []); ?>;
        if (ccountry_data && country_data['country_name']) {
            document.getElementsByName('country_name')[0].value = country_data['country_name'];
        }
    }
</script>
