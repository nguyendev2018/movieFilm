<?php
namespace Genres;

use Engine\Base;

class GenresModel extends Base
{
    public function getAllGenres($limit, $offset): array
{
     // Truy vấn SQL để lấy thông tin từ bảng genres và countries
//      $query = "
//      SELECT
//          genres.genre_id,
//          genres.genre_name,
//          countries.country_name
//      FROM
//          genres
//      LEFT JOIN film_genres ON genres.genre_id = film_genres.genre_id
//      LEFT JOIN films ON film_genres.film_id = films.film_id
//      LEFT JOIN countries ON films.country_id = countries.country_id
//      ORDER BY 
//             genres.genre_id ASC;
//  ";
//  return $this->database->query($query);
    $query = "SELECT * FROM `genres` LIMIT :limit OFFSET :offset";
    return $this->database->query($query, ['limit' => $limit, 'offset' => $offset]);
}
    public function countAllGenres(): int
    {
        return $this->database->query("SELECT COUNT(*) as total FROM `genres`")['total'];
    }


    public function create(string $genre_name) {
        $query = "INSERT INTO `genres`(`genre_name`)
                  VALUES('$genre_name')";       
        return $this->database->query($query);
    }

    //Sửa thông tin
    public function findGenresById(int $genre_id)
    {
        return $this->database->query("SELECT * FROM `genres` WHERE genre_id = $genre_id");
    }
    public function updateGenresById(int $genre_id, string $genre_name)
    {
        $query = "UPDATE genres SET
        genre_name = '$genre_name' WHERE genre_id = $genre_id;";
        return $this->database->query($query);
    }
    
    // xóa thông tin khỏi csdl
    public function deleteGenresById(int $genre_id)
    {
        $query = "DELETE FROM `genres` WHERE genre_id = $genre_id";
        return $this->database->query($query);
    }

    //TH06
    public function filterGenres(string $keyword)
    {
    $query = "SELECT * FROM `genres` 
    WHERE `genre_name` LIKE ?";
    $params = ["%$keyword%"];
    return $this->database->query($query, $params);
    }
}
