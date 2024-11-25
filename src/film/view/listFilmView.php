<h2>Danh sách phim</h2>
<table border="1">
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
        <th>Hành động</th>
    </tr>
 <?php foreach ($films as $film): ?>
    <tr>
        <img src="" alt="">
        <td><?php echo htmlspecialchars($film['film_id']); ?></td>
        <td>
        <?php echo htmlspecialchars($film['film_name']); ?>        </td>
        <td><?php echo htmlspecialchars($film['description']); ?></td>
        <td>
    </td>
    <td>
        <img src="images/<?php echo htmlspecialchars($film['image']); ?>" class="img-poster">
        </td>

        <td><?php echo htmlspecialchars($film['release_year']); ?></td>
        <td><?php echo htmlspecialchars($film['language']); ?></td>
        <td>  <?php
    $date = new DateTime($film['created_at']);
    echo $date->format('d/m/Y H:i:s');
    ?></td>
        <td><?php echo htmlspecialchars($film['country_name']); ?></td>
        <td><?php echo htmlspecialchars($film['category_name']); ?></td>
        <td>
            <!-- Nút Thêm-->
            <a href="/create">Thêm</a> |
            <!-- Nút Sửa-->
            <a href="#">Sửa</a> |
            <!-- Nút Xóa-->
            <a href="#">Xóa</a>
        </td>
    </tr>
    <?php endforeach; ?>
 </table>
