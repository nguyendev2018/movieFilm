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
     $name = $_POST['name'];
     $desc = $_POST['desc'];
     $image = $_POST['image'];
     $lang = $_POST['lang'];
     // Thêm dữ liệu film mới bằng function create() đã tạo trong Model

     $film_model->create(
     $name,
     $desc,
     $image,
     $lang,
     );
     // Redirect về lại trang chủ
     header("Location: /");
 }
 $this->output->load("film/createFilm", $data);
}
 }

