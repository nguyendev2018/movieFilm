<?php
namespace Film;

use Engine\Base;

class FilmModel extends Base
{
    public function getAllFilms($limit, $offset): array
    {
        // Truy vấn JOIN để lấy country_name từ bảng countries
        // $query = "
        //     SELECT
        //         films.film_id,
        //         films.film_name,
        //         films.description,
        //         films.image,
        //         films.release_year,
        //         films.language,
        //         films.created_at,
        //         countries.country_name,
        //         category.category_name
        //     FROM
        //         films
        //     LEFT JOIN countries ON films.country_id = countries.country_id
        //     LEFT JOIN category ON films.category_id = category.category_id
        //     LIMIT :limit OFFSET :offset";

        $query = "SELECT * FROM `films` LIMIT :limit OFFSET :offset";

        //         // Chuẩn bị câu truy vấn và truyền tham số
        // $stmt = $this->database->prepare($query);
        // $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
        // $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);

        // // Thực thi truy vấn
        // $stmt->execute();

            return $this->database->query($query, ['limit' => $limit, 'offset' => $offset]);

       // return $this->database->query($query);
    }  public function getAllFilmsFull(): array
    {
        $query = "
        SELECT films.*, countries.country_name, category.category_name
        FROM films
        LEFT JOIN countries ON films.country_id = countries.country_id
        LEFT JOIN category ON films.category_id = category.category_id;
";

        return $this->database->query($query);
    }
    public function getAllCountryName(): array {
        // Truy vấn để lấy thông tin từ bảng categories và countries
        $query = "
        SELECT DISTINCT
            films.country_id,
            countries.country_name
        FROM
            films
        LEFT JOIN countries ON countries.country_id = films.country_id
    ";

        return $this->database->query($query);
    }

    public function getAllGenersName(): array {
        // Truy vấn để lấy thông tin từ bảng categories và countries
        $query = "
        SELECT DISTINCT
            films.genre_id,
            genres.genre_name
        FROM
            films
        LEFT JOIN genres ON genres.genre_id = films.genre_id
    ";

        return $this->database->query($query);
    }
    //Tong so luong film
        public function countAllFilms(): int
    {
        return $this->database->query("SELECT COUNT(*) as total FROM `films`")['total'];
    }
    public function findFilmsByCountryId(int $country_id)
    {
        return $this->database->query(" SELECT *
        FROM films
        INNER JOIN countries ON countries.country_id = films.country_id
        WHERE countries.country_id = $country_id");
    }
    public function findFilmByGenerId(int $genre_id)
    {
        return $this->database->query(" SELECT *
        FROM films
        INNER JOIN genres ON genres.genre_id = films.genre_id
        WHERE genres.genre_id = $genre_id");
    }

    public function create(string $film_name, string $description, int $release_year, string $language, int $category_id, int $country_id, string $image, int $genre_id)
    {
        $query = "INSERT INTO `films`(`film_name`, `description`, `release_year`, `language`, `category_id`,`country_id`, `image`, `genre_id`)
                  VALUES('$film_name', '$description', '$release_year', '$language','$category_id', '$country_id','$image', '$genre_id')";
        return $this->database->query($query);
    }
    public function getAllCategories(): array
    {
        $query = "SELECT category_id, category_name FROM category";
        return $this->database->query($query);
    }
    public function getAllCountry(): array
    {
        $query = "SELECT country_id, country_name FROM countries";
        return $this->database->query($query);
    }
    public function getAllGenres(): array
    {
        $query = "SELECT genre_id, genre_name FROM genres";
        return $this->database->query($query);
        // return $this->database->query("SELECT genre_id, genre_name FROM genres");
    }
    public function findFilmById(int $film_id)
    {
        return $this->database->query("SELECT * FROM `films` WHERE film_id =
$film_id");
    }
    public function  findEpisodeByFilmId(int $film_id)
    {
        return $this->database->query("SELECT * FROM `episodes` WHERE film_id = $film_id");
    }
    public function updateFilmById(int $film_id, string $film_name, string $description,
        string $release_year, string $language, int $category_id, int $country_id, ?string $image, int $genre_id
    ) {
        $query = "UPDATE films SET
            film_name = '$film_name',
            description = '$description',
            release_year = '$release_year',
            language = '$language',
            category_id = $category_id,
            country_id = $country_id,
            genre_id = $genre_id";
        if ($image !== null) {
            $query .= ", image = '$image'";
        }

        $query .= " WHERE film_id = $film_id;";

        return $this->database->query($query);
    }

    // xóa thông tin khỏi csdl
    public function deleteFilmById(int $film_id)
    {
        $query = "DELETE FROM `films` WHERE film_id = $film_id";
        return $this->database->query($query);
    }

        public function filterFilm(string $keyword)
    {

    // $query = "SELECT * FROM `films`
    // WHERE film_id LIKE '%$keyword%'
    // OR film_name LIKE '%$keyword%'
    // OR release_year LIKE '%$keyword%'";

        // $query = "SELECT * FROM `films`
        // WHERE `film_id` LIKE ?
        // OR `film_name` LIKE?
        // OR `description` LIKE?
        // OR `image` LIKE?
        // OR `release_year` LIKE?
        // OR `language` LIKE?
        // OR `created_at` LIKE?
        // OR `country_name` LIKE?
        // OR `category_name` LIKE?
        // OR `genre_name` LIKE?";
        // $params = ["%$keyword%","%$keyword%", "%$keyword%","%$keyword%", "%$keyword%","%$keyword%", "%$keyword%","%$keyword%", "%$keyword%","%$keyword%"];
        // return $this->database->query($query, $params);


            $query = "
                SELECT films.*, countries.country_name, category.category_name, genres.genre_name
                FROM films
                LEFT JOIN countries ON films.country_id = countries.country_id
                LEFT JOIN category ON films.category_id = category.category_id
                LEFT JOIN genres ON films.genre_id = genres.genre_id
                WHERE films.film_id LIKE ?
                   OR films.film_name LIKE ?
                   OR films.description LIKE ?
                   OR films.release_year LIKE ?
                   OR films.language LIKE ?
                   OR countries.country_name LIKE ?
                   OR category.category_name LIKE ?
                   OR genres.genre_name LIKE ?";

            $params = array_fill(0, 8, "%$keyword%");

            return $this->database->query($query, $params);

    }

    public function getFilmForChart()
    {
    return $this->database->query("SELECT film_name, COUNT(*) as total
    FROM `films` GROUP BY film_name");
    }


}
