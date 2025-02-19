<h2>Phim theo thể loại</h2>
<div class="row">
<?php foreach ($films as $film): ?>
    <div class=" col-md-3">
            <div class="card">
            <img src="images/<?php echo htmlspecialchars($film['image']); ?>" class="card-img-top">

<div class="card-body">
<h5 class="card-title"><?php echo htmlspecialchars($film['film_name']); ?></h5>
    <a href="/filmDetail?film_id=<?php echo $film['film_id']; ?>" class="btn btn-primary">Xem chi tiết</a>
            </div>
        </div>
        </div>
         <?php endforeach; ?>
</div>

