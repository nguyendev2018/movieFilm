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
     $image = $_POST['image']['name'];
     $release_year = $_POST['release_year'];
     $language = $_POST['language'];
        // Xử lý upload ảnh
       // Xử lý upload ảnh
       if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
        $upload_dir = 'public/images/'; // Thư mục lưu ảnh
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0777, true); // Tạo thư mục nếu chưa tồn tại
        }

        // Lấy tên file gốc
        $image_name = basename($_FILES['image']['name']);
        $target_file = $upload_dir . time() . '_' . $image_name;

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
            // Nếu upload thành công, chỉ lưu tên file vào database
            $image = time() . '_' . $image_name;
        } else {
            $image = ''; // Trường hợp lỗi, ảnh sẽ để trống
        }
    } else {
        $image = ''; // Không có ảnh được tải lên
    }

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

