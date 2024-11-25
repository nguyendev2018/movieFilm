<?php
 namespace Film;
 use Engine\Base;
 class FilmController extends Base
 {
 /**
 *Functiondùngđểhiểnthịdanhsáchnhânviên
 *@returnvoid
 */
 public function index(): void
    {
        $film_model = new FilmModel();
        $data = array();
        $data["films"] = $film_model->getAllFilms();
        $this->output->load("film/listFilm", $data);
    }

 public function create()
 {
     $data = array();
     $film_model = new FilmModel();

     // Nếu phương thức hiện tại là POST => thực hiện thêm dữ liệu
     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     $film_name = $_POST['film_name'];
     $description = $_POST['description'];
     $image = $_POST['image'];
     $release_year = $_POST['release_year'];
     $language = $_POST['language'];
     // Thêm dữ liệu film mới bằng function create() đã tạo trong Model

     $film_model->create(
     $film_name,
     $description,
     $image,
     $release_year,
     $language,
     );
     // Redirect về lại trang chủ
     header("Location: /");
 }
 $this->output->load("film/createFilm", $data);
}
 }

