<?php
namespace Country;
use Engine\Base;
class CountryController extends Base
{
    /**
     *Functiondùngđểhiểnthịdanhsáchthểloại
     *@returnvoid
     */
    public function index(): void
    {
        $country_model = new CountryModel();
        $data = array();
        $limit = 10; // Số sản phẩm trên mỗi trang
        $page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
        $offset = ($page - 1) * $limit;
        // Tìm tổng số nhân viên
        $data["countries"] = $country_model->getAllCountries($limit, $offset);
        $totalCountry = $country_model->countAllCountry();
        // Tính số trang
        $totalPages = ceil($totalCountry / $limit);
        // Gán số trang vào mảng $data["totalPages"]
        $data["totalPages"] = $totalPages;
        // Gỡ lỗi để kiểm tra dữ liệu
        // echo '<pre>';
        // print_r($data["categories"]); // Kiểm tra dữ liệu
        // echo '</pre>';
        // die();
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $country_id = $_POST["country_id"];
            try { // ⇐ bắt đầu Try-Catch
                $country_model->deleteCountryById($country_id);
                $_SESSION['message'] = "Xóa thành công.";
            } catch (\Exception $e) {
                $_SESSION['error'] = "Đã xảy ra lỗi: " . $e->getMessage();
            } // ⇐ kế t thúc Try-Catch
            // Redirect về này trang chủ
            header("Location: /country");
            exit;
        }
         // Nế u phương thức hiện tại là GET => thực hiện lọc dữ liệu nhân viên
         if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $keyword = $_GET['keyword'] ?? '';
            if ($keyword) {
                $result = $country_model->filterCountry($keyword, $country_id);
                /**
                * Dòng mã phía dưới đang gán giá trị cho mảng $data["employees"].
                * Nế u biế n $result rỗng, nó sẽ gán một mảng rỗng cho $data["employees"].
                * Nế u biế n $result không rỗng, nó sẽ kiểm tra xem phần tử đầu tiên của $result có tồn tại hay không?
                * Nế u có, nó sẽ gán $result cho $data["employees"].
                * Nế u không, nó sẽ bọc $result trong một mảng và gán mảng đó cho $data["employees"]
                */
                $data["countries"] = empty($result) ? array() : (isset($result[0]) ? $result : array($result));
            } else {
                // Nế u $keyword rỗng, trả lại danh sách nhân viên
                $data["countries"] = $country_model->getAllCountries($limit, $offset);
            }
        }
        $this->output->addJs("js/Notify");
        $this->output->load("country/listCountry", $data);
    }
    
    public function createOrUpdateCountry(): void
{
    $data = array();
    $country_model = new CountryModel();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $country_id = $_GET['id'] ?? null;
        $country_name = $_POST['country_name'];

        if ($country_id) {
            // Cập nhật quốc gia
            try {
                $country_model->updateCountryById($country_id, $country_name);
                $_SESSION['message'] = "Cập nhật thành công.";
            } catch (\Exception $e) {
                $this->console->addError("Error during update: " . $e->getMessage());
                $_SESSION['error'] = "Có lỗi xảy ra trong quá trình cập nhật!";
            }
        } else {
            // Tạo quốc gia mới
            try {
                $country_model->create($country_name);
                $_SESSION['message'] = "Thêm thành công.";
            } catch (\Exception $e) {
                $this->console->addError("Error during create: " . $e->getMessage());
                $_SESSION['error'] = "Có lỗi xảy ra trong quá trình thêm!";
            }
        }
        // Chuyển hướng về trang danh sách quốc gia
        header("Location: /country");
        exit;
    } else {
        // Lấy dữ liệu quốc gia nếu có ID
        if (isset($_GET['id'])) {
            $data['countries'] = $country_model->findCountryById($_GET['id']);
        } else {
            $data['countries'] = ['country_name' => '']; // Giá trị mặc định
        }
    }

    // Load giao diện form thêm/sửa
    $this->output->load("country/createOrUpdateCountry", $data);
}

    //tới đây nha    
}

