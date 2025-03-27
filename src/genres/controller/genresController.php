<?php
namespace Genres;

use Engine\Base;

class GenresController extends Base
{
    /**
     *Functiondùngđểhiểnthịdanhsáchthểloại
     *@returnvoid
     */
    public function index(): void
    {
        $genres_model = new GenresModel();
        $data = array();
        $limit = 10; // Số sản phẩm trên mỗi trang
        $page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
        $offset = ($page - 1) * $limit;
        $data["genres"] = $genres_model->getAllGenres($limit,
        $offset);
        // Tìm tổng số nhân viên
        $totalGenres = $genres_model->countAllGenres();
        // Tính số trang
        $totalPages = ceil($totalGenres / $limit);
        // Gán số trang vào mảng $data["totalPages"]
        $data["totalPages"] = $totalPages;
        // $data["genres"] = $genres_model->getAllGenres();
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $genre_id = $_POST['genre_id'];
            try { // ⇐ bắt đầu Try-Catch
                $genres_model->deleteGenresById($genre_id);
                $_SESSION['message'] = "Xóa thành công.";
            } catch (\Exception $e) {
                $_SESSION['error'] = "Đã xảy ra lỗi: " . $e->getMessage();
            } // ⇐ kế t thúc Try-Catch
            // Redirect về này trang chủ
            header("Location: /genres");
            exit;
        }
        // Nế u phương thức hiện tại là GET => thực hiện lọc dữ liệu nhân viên
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $keyword = $_GET['keyword'] ?? '';
            if ($keyword) {
                $result = $genres_model->filterGenres($keyword);
                /**
                * Dòng mã phía dưới đang gán giá trị cho mảng $data["employees"].
                * Nế u biế n $result rỗng, nó sẽ gán một mảng rỗng cho $data["employees"].
                * Nế u biế n $result không rỗng, nó sẽ kiểm tra xem phần tử đầu tiên của $result có tồn tại hay không?
                * Nế u có, nó sẽ gán $result cho $data["employees"].
                * Nế u không, nó sẽ bọc $result trong một mảng và gán mảng đó cho $data["employees"]
                */
                $data["genres"] = empty($result) ? array() : (isset($result[0]) ? $result : array($result));
            } else {
                // Nế u $keyword rỗng, trả lại danh sách nhân viên
                $data["genres"] = $genres_model->getAllGenres($limit, $offset);
            }
        }
        $this->output->addJs("js/Notify");
        $this->output->load("genres/listGenres", $data);
    }
    public function createOrUpdateGenres(): void
    {
        $data = array();
        $genres_model = new GenresModel();
        // Nế u phương thức hiện tại là POST => thực hiện thêm hoặc sửa dữ liệu
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $genre_id = $_GET['id'];
            $genre_name = $_POST['genre_name'];
            if ($genre_id) {
                // Sửa dữ liệu nhân viên mới bằng function updateEmployeeById() đã tạo trong Model
                try { // ⇐ bắt đầu Try-Catch
                    $genres_model->updateGenresById(
                        $genre_id,
                        $genre_name
                    );
                    $_SESSION['message'] = "Cập nhật thành công.";
                } catch (\Exception $e) {
                    $this->console->addError("Error during update: " . $e->getMessage());
                    $_SESSION['error'] = "Có lỗi xảy ra trong quá trình cập nhật!";
                } // ⇐ kế t thúc Try-Catch
            } else {
                // Thêm dữ liệu nhân viên mới bằng function create() đã tạo trong Model
                try { // ⇐ bắt đầu Try-Catch
                    $genres_model->create(
                        $genre_name
                    );
                    $_SESSION['message'] = "Thêm thành công.";
                } catch (\Exception $e) {
                    $this->console->addError("Error during create: " . $e->getMessage());
                    $_SESSION['error'] = "Có lỗi xảy ra trong quá trình thêm!";
                } // ⇐ kế t thúc Try-Catch
            }
            //chuyển về trang chủ
            header("Location: /genres");
           
        } else {
            //Lấy data mới nếu có $id
            if (isset($_GET['id'])) {
                $data['genres'] = $genres_model->findGenresById($_GET['id']);
            } else {
                $data['genres'] = ['genre_name' => '']; // Dữ liệu mặc định nếu không có id
            }
            
        }
        // Load trang thêm hoặc sửa 
        $this->output->load("genres/createOrUpdateGenres", $data);
    }
    //tới đây nha

    
}
