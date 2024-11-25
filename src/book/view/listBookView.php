<h1>List all book</h1>
<?php
    foreach($books as $book){
        echo "<div class='book-item'>";
        echo "<p><strong>". $book['title']."</strong><span>" .$book['description']. "</span></p>";
        echo "</div>";
    }
?>    