<?php
namespace Film;

use Engine\Base;

class FilmModel extends Base
{
    public function getAllFilms($limit, $offset): array
    {

        $query = "
                SELECT
                    films.film_id,
                    films.film_name,
                    films.description,
                    films.image,
                    films.release_year,
                    films.language,
                    films.created_at,
                    COALESCE(countries.country_name, 'Chưa xác định') AS country_name,
                    COALESCE(category.category_name, 'Chưa xác định') AS category_name,
                    COALESCE(genres.genre_name, 'Chưa xác định') AS genre_name
                FROM films
                LEFT JOIN countries ON films.country_id = countries.country_id
                LEFT JOIN category ON films.category_id = category.category_id
                LEFT JOIN genres ON films.genre_id = genres.genre_id
                LIMIT :limit OFFSET :offset";

        return $this->database->query($query, [
            'limit'  => (int) $limit,
            'offset' => (int) $offset,
        ]);
    }

    public function getAllFilmsFull(): array
    {
        $query = "
        SELECT films.*, countries.country_name, category.category_name
        FROM films
        LEFT JOIN countries ON films.country_id = countries.country_id
        LEFT JOIN category ON films.category_id = category.category_id";

        return $this->database->query($query);
    }
    public function getAllBannerImage(): array
    {
        $query = "
        SELECT image
        FROM banner";
        return $this->database->query($query);
    }
    public function getAllCountryName(): array
    {
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

    public function getAllGenresName(): array
    {
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
    public function findFilmByGenreId(int $genre_id)
    {
        return $this->database->query(" SELECT *
        FROM films
        INNER JOIN genres ON genres.genre_id = films.genre_id
        WHERE genres.genre_id = $genre_id");
    }
    public function getGenreNameById(int $genre_id)
{
    return $this->database->query("SELECT genre_name  FROM `genres` WHERE genre_id  =
$genre_id ");
}

    public function create(string $film_name, string $description, int $release_year, string $language, int $category_id, int $country_id, int $genre_id, string $image)
    {
        $query = "INSERT INTO `films`(`film_name`, `description`, `release_year`, `language`, `category_id`,`country_id`, `genre_id`, `image`)
        VALUES('$film_name', '$description', '$release_year', '$language','$category_id', '$country_id', '$genre_id','$image')";
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
    public function findCountryByFilmId(int $film_id)
    {
        return $this->database->query(" SELECT *
        FROM films
        INNER JOIN countries ON countries.country_id  = films.country_id
        WHERE films.film_id = $film_id");
    }
    public function findCategoryByFilmId(int $film_id)
    {
        return $this->database->query(" SELECT *
        FROM films
        INNER JOIN category ON category.category_id  = films.category_id
        WHERE films.film_id = $film_id");
    }
    public function findGenreByFilmId(int $film_id)
    {
        return $this->database->query(" SELECT *
        FROM films
        INNER JOIN genres ON genres.genre_id   = films.genre_id
        WHERE films.film_id = $film_id");
    }
    public function findEpisodeByFilmId(int $film_id)
    {
        return $this->database->query("SELECT * FROM `episodes` WHERE film_id = $film_id");
    }
    // public function updateFilmById(int $film_id, string $film_name, string $description,
    //     string $release_year, string $language, int $category_id, int $country_id, int $genre_id, ?string $image)
    //  {
    //     $query = "UPDATE films SET
    //         film_name = '$film_name',
    //         description = '$description',
    //         release_year = '$release_year',
    //         language = '$language',
    //         category_id = '$category_id',
    //         country_id = '$country_id',
    //         genre_id = '$genre_id' ";
    //         if ($image !== null) {
    //         $query .= ", image = '$image'";
    //     }

    //     $query .= " WHERE film_id = $film_id;";

    //     return $this->database->query($query);
    // }

    public function updateFilmById(int $film_id, string $film_name, string $description, int $release_year, string $language, int $category_id, int $country_id, int $genre_id, ?string $image)
    {
        $query = "UPDATE films SET
            film_name = :film_name,
            description = :description,
            release_year = :release_year,
            language = :language,
            category_id = :category_id,
            country_id = :country_id,
            genre_id = :genre_id";

        $params = [
            'film_name'    => $film_name,
            'description'  => $description,
            'release_year' => $release_year,
            'language'     => $language,
            'category_id'  => $category_id,
            'country_id'   => $country_id,
            'genre_id'     => $genre_id,
            'film_id'      => $film_id,
        ];

        if ($image !== null) {
            $query .= ", image = :image";
            $params['image'] = $image;
        }

        $query .= " WHERE film_id = :film_id";

        return $this->database->query($query, $params);
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

    //TH09TH09
    public function getFilmForChart()
    {
        return $this->database->query("SELECT film_name, COUNT(*) as total
    FROM `films` GROUP BY film_name");
    }

}
