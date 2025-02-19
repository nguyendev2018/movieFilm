<h1>Quản lý  quốc gia</h1>
<h2><?php echo $_GET['id'] ? 'Cập nhật  quốc gia' : 'Thêm quốc gia'?></h2>
<form action="" method="POST" enctype="multipart/form-data">
<div class="form-group">
<label for="">Tên quốc gia</label>
<input type="text" name="country_name" placeholder="Mời bạn nhập tên quốc gia" >
</div>
<button type="submit" class="blue waves-effect waves-light btn"
name="addOrUpdate" style="margin-top:10px"><?php echo $_GET['id'] ? 'Cập nhật' : 'Thêm quốc gia '?></button>
</form>
<br />
<a href="/">Quay lại danh sách phim</a>

<script>
    let countryId = "<?php echo $_GET['id'] ?? ''; ?>";
    if (!!countryId) {
        let country_data = <?php echo json_encode($data['country'] ?? []); ?>;
        if (ccountry_data && country_data['country_name']) {
            document.getElementsByName('country_name')[0].value = country_data['country_name'];
        }
    }
</script>


