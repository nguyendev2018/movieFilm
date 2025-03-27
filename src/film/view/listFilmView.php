<<<<<<< HEAD
<div class="container">
<h2 class="admin-title text-dark">Quản Lý Phim</h2>
<div class="d-flex align-items-center mt-20 mb-20">
<a class="btn btn-add text-white" href="/createOrUpdateFilm" >Thêm phim</a>

<form method="GET" action="/film" class="w-100 pl-10 pr-10">
    <div class="form-search">
        <input type="text" name="keyword" placeholder="Nhập id, tên phim" class="search-input form-control">
        <button type="submit" class="search-button admin">Tìm kiếm</button>
    </div>
    </form>
</div>
<div class="table-responsive">
<table  class="table table-striped table-dark table-bordered text-center">

<tr>
    <th>ID</th>
    <th>Tên Phim</th>
    <th>Mô Tả</th>
    <th>Hình Ảnh</th>
    <th>Năm Phát Hành</th>
    <th>Ngôn ngữ</th>
    <th>Thời gian cụ thể tạo</th>
    <th>Quốc Gia</th>
    <th>Danh mục</th>
    <th>Thể loại</th>
    <th>Hành động</th>
</tr>
<?php if (!empty($films)): ?>
<?php foreach ($films as $film): ?>
<tr>
    <td><?php echo htmlspecialchars($film['film_id']); ?></td>
    <td>
    <?php echo htmlspecialchars($film['film_name']); ?></td>
    <td>
        <span class="text-overflow">
            <?php echo htmlspecialchars($film['description']); ?>
        </span>
    </td>
=======
<h2>Danh sách phim</h2>
<table border="1" style="width: 100%; border-collapse: collapse; ">
    <!--Tim kiem -->
    <form method="GET" action="/film">
        <input type="text" name="keyword" placeholder="Nhập id, tên phim" class="search-input">
        <button type="submit"class="search-button">Tìm kiếm</button>
    </form> 
    <tr>
        <th>ID</th>
        <th>Tên Phim</th>
        <th>Mô Tả</th>
        <th>Hình Ảnh</th>
        <th>Ngày Phát Hành</th>
        <th>Ngôn ngữ</th>
        <th>Thời gian cụ thể tạo</th>
        <th>Quốc Gia</th>
        <th>Danh mục</th>
        <th>Thể loại</th>
        <th>Hành động</th>
    </tr> 
    <?php if (!empty($films)): ?> 
 <?php foreach ($films as $film): ?>
    <tr>
        <td><?php echo htmlspecialchars($film['film_id']); ?></td>
        <td>
        <?php echo htmlspecialchars($film['film_name']); ?>        </td>
        <td><?php echo htmlspecialchars($film['description']); ?></td>
>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a
    <td>
    <img src="images/<?php echo htmlspecialchars($film['image']); ?>" class="img-poster">
    </td>

<<<<<<< HEAD
    <td><?php echo htmlspecialchars($film['release_year']); ?></td>
    <td><?php echo htmlspecialchars($film['language']); ?></td>
    <td><?php $date = new DateTime($film['created_at']);
    echo $date->format('d/m/Y H:i:s');?></td>
    <td><?php echo htmlspecialchars($film['country_name']); ?></td>
    <td><?php echo htmlspecialchars($film['category_name']); ?></td>
    <td><?php echo htmlspecialchars($film['genre_name']); ?></td>
    <td>
        <!-- Nút Sửa-->
        <a class="btn-action btn-success mb-20" href="/createOrUpdateFilm?film_id=<?php echo $film['film_id'];?>">Sửa</a>
        <!-- Nút Xóa-->
        <!-- <a href="#">Xóa</a> -->
        <form action="" method="POST" style="display:inline;">
            <input type="hidden" name="film_id" value="<?php echo htmlspecialchars($film['film_id']); ?>">
            <button class="btn-action btn-danger" type="submit"  onclick="return confirm('Bạn có chắc chắn muốn xóa không?');">
                Xóa
            </button>
        </form>
    </td>
</tr>
<?php endforeach; ?>
<?php else: ?>
        <tr>
            <td colspan="8">Không có dữ liệu.</td>
        </tr>
<?php endif; ?>

</table>
</div>


 <!-- Phân trang -->
  <div class="col-12">
  <div class="pagination-wrap">
    <nav>
    <ul>
            <?php
            $currentPage = isset($_GET['page']) ? $_GET['page'] : 1; // Mặc định là trang 1
            for ($i = 1; $i <= $totalPages; $i++):
            ?>
                <li>
                    <a href="/film?page=<?php echo $i; ?>"
                       class="<?php echo ($currentPage == $i) ? 'active' : ''; ?>">
                        <?php echo $i; ?>
                    </a>
                </li>
            <?php endfor; ?>
        </ul>
    </nav>
</div>

  </div>


=======
        <td><?php echo htmlspecialchars($film['release_year']); ?></td>
        <td><?php echo htmlspecialchars($film['language']); ?></td>
        <td>  <?php
    $date = new DateTime($film['created_at']);
    echo $date->format('d/m/Y H:i:s');
    ?></td>
        <td><?php echo htmlspecialchars($film['country_name']); ?></td>
        <td><?php echo htmlspecialchars($film['category_name']); ?></td>
        <td><?php echo htmlspecialchars($film['genre_name']); ?></td>
        <td>
            <!-- Nút Thêm-->
            <a class="btn light-blue" style="display:block;margin-bottom:8px" href="/createOrUpdateFilm" >Thêm</a>
            <!-- Nút Sửa-->
            <a class="btn cyan"  style="display:block;margin-bottom:8px" href="/createOrUpdateFilm?film_id=<?php echo $film['film_id'];?>">Sửa</a>
            <!-- Nút Xóa-->
             <!-- <a href="#">Xóa</a> -->
            <form action="" method="POST" style="display:inline;">

            <input type="hidden" name="film_id" value="<?php echo htmlspecialchars($film['film_id']); ?>">
            <input class="btn deep-orange" type="submit" value="Xóa" onclick="return confirm('Bạn có chắc chắn muốn xóa không?');">
            </form>

        </td>
    </tr>
    <?php endforeach; ?>
    <?php else: ?>
            <tr>
                <td colspan="8">Không có dữ liệu.</td>
            </tr>
    <?php endif; ?>    

</table>

 <!-- Phân trang -->
<div class="pagination">
    <?php for ($i = 1; $i <= $totalPages; $i++): ?>
        <a href="/film?page=<?php echo $i; ?>"><?php echo $i; ?></a>
    <?php endfor; ?>
</div>

<style>
    .search-button {
        background-image: linear-gradient(to right,rgb(55, 73, 236),rgb(81, 187, 236));
        color: white;
        border: none;
        padding: 8px 15px;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .search-button:hover {
        /* background-color: #45a049; */
        background-image: linear-gradient(to right,rgb(55, 73, 236),rgb(81, 187, 236));
        color: white;
    }

</style>
>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a
    <!-- TH05 -->
    <!-- Hiển thị thông báo nế u có -->
    <?php if (isset($_SESSION['message'])): ?>
        <script>
            // Chạy function JS showNotification() trong file Notify.js
            showNotification('<?php echo $_SESSION['message']; ?>', 'success');
            // Unset thông báo sau khi hiển thị
            <?php unset($_SESSION['message']); ?>
        </script>
        <?php endif; ?>
    <!-- Hiển thị lỗi nế u có -->
    <?php if (isset($_SESSION['error'])): ?>
        <script>
            // Chạy function JS showNotification() trong file Notify.js
            showNotification('<?php echo $_SESSION['error']; ?>', 'error');
            // Unset lỗi sau khi hiển thị
            <?php unset($_SESSION['error']); ?>
        </script>
    <?php endif; ?>
<<<<<<< HEAD


</div>
=======
    
>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a
