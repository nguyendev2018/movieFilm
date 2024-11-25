<?php
namespace Film;

use Engine\Base;

class FilmModel extends Base
{
    public function getAllFilms(): array
    {
        // Truy vấn JOIN để lấy country_name từ bảng countries
        $query = "
            SELECT
                films.film_id,
                films.film_name,
                films.description,
                films.image,
                films.release_year,
                films.language,
                films.created_at,
                countries.country_name,
                category.category_name
            FROM
                films
            LEFT JOIN countries ON films.country_id = countries.country_id
            LEFT JOIN category ON films.category_id = category.category_id        ";

        return $this->database->query($query);
    }

    public function create(string $film_name, string $description, string $image, int $release_year, string $language) {
        $query = "INSERT INTO `films`(`film_name`, `description`, `image`, `release_year`, `language`)
                  VALUES('$film_name', '$description', '$image', '$release_year','$language')";
        return $this->database->query($query);
    }
}
