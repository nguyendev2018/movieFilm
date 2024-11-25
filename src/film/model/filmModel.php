<?php
namespace Film;

use Engine\Base;

class FilmModel extends Base
{
    public function getAllFilms(): array
    {
        return $this->database->query("SELECT * FROM `films`");
    }
    public function create(string $name, string $desc, string $image, string  $lang, string $create_at) {
        $query = "INSERT INTO `films`(`name`, `desc`, `image`,
`lang`, `create_at`) VALUES('$name', '$desc', '$image',
'$lang','" . date("Y-m-d", strtotime($create_at)) . "')";
        return $this->database->query($query);
    }
}
