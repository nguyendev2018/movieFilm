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
        $data       = [];
<<<<<<< HEAD

        $limit  = 10; //So san pham tren moi trang
        $page   = isset($_GET['page']) ? (int) $_GET['page'] : 1;
        $offset = ($page - 1) * $limit;

        $data["films"] = $film_model->getAllFilms($limit, $offset);
        //Tim tong so nhan vien
        $totalFilms = $film_model->countAllFilms();
        //Tinh so trang
        $totalPages = ceil($totalFilms / $limit);
        // $data['totalPages'] = ceil($totalFilms / $limit);
        //Gan so trang vao mang $data["totalPages"]
        $data["totalPages"] = $totalPages;
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $film_id = (int)$_POST['film_id'];
                try {
                    $film_model->deleteFilmById($film_id);
                    $_SESSION['message'] = 'Xóa thành công.';
                } catch (\Exception $e) {
                    $_SESSION['error'] = 'Đã xảy ra lỗi: ' . $e->getMessage();
                }
                header('Location: /film');
                exit;
            }

            if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['keyword'])) {
                $keyword = $_GET['keyword'];
                $result = $film_model->filterFilm($keyword);
                $data['films'] = empty($result) ? array() : (isset($result[0]) ? $result : array($result));
            }

            $this->output->addJs('js/Notify');
            $this->output->load('film/listFilm', $data);
        }
    /* */
    public function createOrUpdateFilm(): void
    {
        $data       = [];
        $film_model = new FilmModel();
        // Nếu phương thức hiện tại là POST => thực hiện thêm hoặc sửa dữ liệu
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $film_id      = $_GET["film_id"];
            $film_name    = $_POST["film_name"];
            $description  = $_POST["description"];
            $release_year = (int) $_POST["release_year"];
            $language     = $_POST["language"];
            $category_id  = $_POST['categories']; // Lấy giá trị từ input của form
            $country_id   = $_POST['country'];    // Lấy giá trị từ input của form
            $genre_id     = $_POST['genres'];
            $image        = '';
            // Xử lý tệp image
            if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
                $upload_dir = "public/images/"; // Thư mục lưu trữ
                                                // Tạo tên file duy nhất bằng cách thêm timestamp
                $image_name  = time() . '_' . basename($_FILES['image']['name']);
                $target_file = $upload_dir . $image_name;

                // Di chuyển tệp được upload vào thư mục lưu trữ
                if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
                    // Xóa hình ảnh cũ nếu tồn tại
                    if ($old_image && file_exists($upload_dir . $old_image)) {
                        unlink($upload_dir . $old_image);
                    }
                    // Lưu tên file mới vào database
                    $image = $image_name;
                } else {
                                         // Nếu không upload được
                    $image = $old_image; // Giữ nguyên hình cũ
                    echo "Failed to upload image.";
                }
            } else {
                // Nếu không có file mới, giữ nguyên hình cũ
                $image = $old_image;
            }

            // Kiểm tra xem có truyền id không?
            if ($film_id) {
                // Sửa dữ liệu nhân viên mới bằng function
                // updateEmployeeById() đã tạo trong Model

=======

        $limit  = 10; //So san pham tren moi trang
        $page   = isset($GET['page']) ? (int) $_GET['page'] : 1;
        $offset = ($page - 1) * $limit;

        $data["films"] = $film_model->getAllFilms($limit, $offset);
        //Tim tong so nhan vien
        $totalFilms = $film_model->countAllFilms();
        //Tinh so trang
        $totalPages = ceil($totalFilms / $limit);
        // $data['totalPages'] = ceil($totalFilms / $limit);
        //Gan so trang vao mang $data["totalPages"]
        $data["totalPages"] = $totalPages;

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $film_id = $_POST['film_id'];
            //da cap nhat
            try {
                $film_model->deleteFilmById($film_id);
                $_SESSION['message'] = "Xóa thành công.";
            } catch (\Exception $e) {
                $_SESSION['error'] = "Đã xảy ra lỗi: " . $e->getMessage();
            }
            // Redirect về này trang chủ
            header("Location: /film");
            exit;
        }
        // $this->output->load("film/listFilm", $data);

        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $keyword = $_GET['keyword'];
            if ($keyword) {
                $result = $film_model->filterFilm($keyword, $film_id);

                $data["films"] = empty($result) ? [] : (isset($result[0]) ? $result : [$result]);

            } else {
                // Nếu $keyword rỗng, trả lại danh sách nhân viên
                $data["films"] = $film_model->getAllFilms($limit, $offset);

            }
        }

        // Nếu phương thức hiện tại là GET => thực hiện lọc dữ liệu nhân viên
        // if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        //     $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';
        //     if (!empty($keyword)) {
        //         $result = $film_model->filterFilm($keyword);
        //         $data["films"] = empty($result) ? array() :
        // (isset($result[0]) ? $result : array($result));

        //     } else {
        //         $films = $film_model->getAllFilms($limit, $offset);
        //         $data["films"] = empty($films) ? array() :
        // (isset($films[0]) ? $films : array($films));
        //             }
        //         }

        /**
         * Thêm tệp JavaScript “Notify.js” vào.
         */
        $this->output->addJs("js/Notify");
        $this->output->load("film/listFilm", $data);

    }
    public function createOrUpdateFilm(): void
    {
        $data       = [];
        $film_model = new FilmModel();
        // Nếu phương thức hiện tại là POST => thực hiện thêm hoặc sửa dữ liệu
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $film_id      = $_GET["film_id"];
            $film_name    = $_POST["film_name"];
            $description  = $_POST["description"];
            $release_year = (int) $_POST["release_year"];
            $language     = $_POST["language"];
            $category_id  = $_POST['categories']; // Lấy giá trị từ input của form
            $country_id   = $_POST['country'];    // Lấy giá trị từ input của form
            $genre_id     = $_POST['genres'];
            $image        = '';
            // Xử lý tệp image
            if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
                $upload_dir = "public/images/"; // Thư mục lưu trữ
                                                // Tạo tên file duy nhất bằng cách thêm timestamp
                $image_name  = time() . '_' . basename($_FILES['image']['name']);
                $target_file = $upload_dir . $image_name;

                // Di chuyển tệp được upload vào thư mục lưu trữ
                if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
                    // Xóa hình ảnh cũ nếu tồn tại
                    if ($old_image && file_exists($upload_dir . $old_image)) {
                        unlink($upload_dir . $old_image);
                    }
                    // Lưu tên file mới vào database
                    $image = $image_name;
                } else {
                                         // Nếu không upload được
                    $image = $old_image; // Giữ nguyên hình cũ
                    echo "Failed to upload image.";
                }
            } else {
                // Nếu không có file mới, giữ nguyên hình cũ
                $image = $old_image;
            }

            // Kiểm tra xem có truyền id không?
            if ($film_id) {
                // Sửa dữ liệu nhân viên mới bằng function
                // updateEmployeeById() đã tạo trong Model

>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a
                try { // ⇐ bắt đầu Try-Catch
                    $film_model->updateFilmById(
                        $film_id,
                        $film_name,
                        $description,
                        $release_year,
                        $language,
                        $category_id,
                        $country_id,
                        $genre_id,
                        $image
<<<<<<< HEAD

=======
                      
>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a
                    );
                    $_SESSION['message'] = "Cập nhật thành công.";
                } catch (\Exception $e) {
                    $this->console->addError("Error during update: " . $e->getMessage());
                    $_SESSION['error'] = "Có lỗi xảy ra trong quá trình cập nhật!";
                } // ⇐ kế t thúc Try
                  //đẩy dữ liệu phim
            } else {
                      // Thêm dữ liệu film mới bằng function create() đã tạo trong Model
                try { // ⇐ bắt đầu Try-Catch
                    $film_model->create(
                        $film_name,
                        $description,
                        $release_year,
                        $language,
                        $category_id,
                        $country_id,
<<<<<<< HEAD
                        $genre_id,
                        $image

=======
                        $genre_id.
                        $image
                      
>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a
                    );
                    $_SESSION['message'] = "Thêm thành công.";
                } catch (\Exception $e) {
                    $this->console->addError("Error during create: " . $e->getMessage());
                    $_SESSION['error'] = "Có lỗi xảy ra trong quá trìnhh thêm!";
                } // ⇐ kế t thúc Try-Catch
            }
            // Redirect về lại trang chủ
            header("Location: /film");
            exit;
        } else {
            $data["film"] = isset($_GET["film_id"])
            ? $film_model->findFilmById($_GET["film_id"])
            : [
                'film_name'    => '',
                'description'  => '',
                'image'        => '',
                'release_year' => '',
                'language'     => '',
                'category_id'  => '',
                'country_id'   => '',
                'genre_id'     => '',
            ];
            // Lấy danh mục và quốc gia từ model
            $data["categories"] = $film_model->getAllCategories();
            $data["countries"]  = $film_model->getAllCountry();
<<<<<<< HEAD
            $data['genres']     = $film_model->getAllGenres();
=======
            $data["genres"]     = $film_model->getAllGenres();
>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a

        }
        // Load trang thêm hoặc sửa nhân viên
        $this->output->load("film/createOrUpdateFilm", $data);
    }
    public function home(): void
    {
        $film_model    = new FilmModel();
<<<<<<< HEAD
    $data["films"] = $film_model->getAllFilmsFull();

        if (! isset($_SESSION["genres"])) {
            $_SESSION["genres"] = $film_model->getAllGenresName();
=======
        $data["films"] = $film_model->getAllFilmsFull();

        if (! isset($_SESSION["genres"])) {
            $_SESSION["genres"] = $film_model->getAllGenersName();
>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a
        }
        if (! isset($_SESSION["country"])) {
            $_SESSION["country"] = $film_model->getAllCountryName();
        }
<<<<<<< HEAD
        $data["banners"] = $film_model->getAllBannerImage();
=======
>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a
        $this->output->load("film/listFilmFE", $data);

    }
    public function detail(): void
    {
        $film_model = new FilmModel();

        // Kiểm tra nếu có 'film_id' trong URL
        $film_id = isset($_GET["film_id"]) ? (int) $_GET["film_id"] : null;

        // Nếu không có film_id, báo lỗi
        if ($film_id === null) {
            die("Thiếu ID phim!");
        }

        // Lấy thông tin phim
        $film = $film_model->findFilmById($film_id);
<<<<<<< HEAD
         $filmCountry =  $film_model->findCountryByFilmId($film_id);
         $filmCategory =  $film_model->findCategoryByFilmId($film_id);
         $filmGenre =  $film_model->findGenreByFilmId($film_id);
=======

>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a
        // Kiểm tra nếu phim không tồn tại
        if (! $film) {
            die("Phim không tồn tại hoặc không tìm thấy!");
        }

        // Lấy danh sách tập phim
        $episodes = $film_model->findEpisodeByFilmId($film_id);


        // Truyền dữ liệu vào view
        $data = [
            "film"     => $film,
            "episodes" => $episodes,
<<<<<<< HEAD
            "filmCountry" => $filmCountry,
            "filmCategory" => $filmCategory,
            "filmGenre" => $filmGenre,
=======
>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a
        ];

        $this->output->load("film/detailFilmFE", $data);
    }
    public function filmGenres()
    {
        $film_model = new FilmModel();
        $genre_id = isset($_GET["genre_id"]) ? (int) $_GET["genre_id"] : null;

        if ($genre_id === null) {
            die("Không có genre_id hợp lệ!");
        }

<<<<<<< HEAD
        // Lấy danh sách phim và tên thể loại
        $films = $film_model->findFilmByGenreId($genre_id);
        // Nếu không tìm thấy thể loại, đặt tên mặc định
        if (!$genre_name) {
            $genre_name = "Không xác định";
        }

        $data["films"] = $films;

        $this->output->load("film/filmGenres", $data);
    }

    public function filmCountry()
    {
        $film_model = new FilmModel();
        $country_id = isset($_GET["country_id"]) ? (int) $_GET["country_id"] : null;

        if ($country_id === null) {
            die("Không có country_id hợp lệ!");
        }

        $films = $film_model->findFilmsByCountryId($country_id);

        if (empty($films)) {
            die("Không tìm thấy phim nào cho quốc gia này!");
        }

        $data["films"] = $films; // Trả về danh sách phim
        $this->output->load("film/filmCountry", $data);
    }

=======
        $films = $film_model->findFilmByGenerId($genre_id);

        if (empty($films)) {
            die("Không tìm thấy phim nào cho quốc gia này!");
        }

        $data["films"] = $films; // Trả về danh sách phim
        $this->output->load("film/filmGeners", $data);
    }
    public function filmCountry()
    {
        $film_model = new FilmModel();
        $country_id = isset($_GET["country_id"]) ? (int) $_GET["country_id"] : null;

        if ($country_id === null) {
            die("Không có country_id hợp lệ!");
        }

        $films = $film_model->findFilmsByCountryId($country_id);

        if (empty($films)) {
            die("Không tìm thấy phim nào cho quốc gia này!");
        }

        $data["films"] = $films; // Trả về danh sách phim
        $this->output->load("film/filmCountry", $data);
    }







    
>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a
            /**
        * Hiển thị trang thống kê các chức vụ
        */
        public function chartPage(): void
        {
            $labels = array();
            $sizes = array();
            $film_model = new FilmModel();
            $result = $film_model->getFilmForChart();
            foreach ($result as $row) {
                $labels[] = $row['film_name'];
                $sizes[] = $row['total'];
        }
        // Dữ liệu cho biểu đồ
        $data = [
        'labels' => $labels,
        'datasets' => [
        [
        'data' => $sizes,
        // Mẫu màu cho từng phần tử biểu đồ, có thể thay bằng mẫu màu khác
        'backgroundColor' => [
        '#FF6384',
        '#36A2EB',
        '#FFCE56',
        '#4BC0C0',
        '#9966FF',
        '#FF9F40'
        ],
        ]
        ]
        ];
        $this->output->load("film/chart", $data);
        }
}
<<<<<<< HEAD
=======

>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a
