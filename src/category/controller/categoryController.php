<?php
namespace Category;

use Engine\Base;

class CategoryController extends Base
{
    /**
     *Functiondùngđểhiểnthịdanhsáchthểloại
     *@returnvoid
     */
    public function index(): void
    {
        $category_model = new CategoryModel();
        $data = array();

        $limit = 10; // Số sản phẩm trên mỗi trang
        $page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
        $offset = ($page - 1) * $limit;
        
        $data["categories"] = $category_model->getAllCategories($limit, $offset);
        // Tìm tổng số nhân viên
        $totalCategory = $category_model->countAllCategory();
        // Tính số trang
        $totalPages = ceil($totalCategory / $limit);
        // Gán số trang vào mảng $data["totalPages"]
        $data["totalPages"] = $totalPages;
        //$data["categories"] = $category_model->getAllCategories();
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $category_id = $_POST['category_id'];
            try { // ⇐ bắt đầu Try-Catch
                $category_model->deleteCategoryById($category_id);
                $_SESSION['message'] = "Xóa thành công.";
            } catch (\Exception $e) {
                $_SESSION['error'] = "Đã xảy ra lỗi: " . $e->getMessage();
            } // ⇐ kế t thúc Try-Catch
            // Redirect về này trang chủ
            header("Location: /category");
            exit;
        }
        // Nế u phương thức hiện tại là GET => thực hiện lọc dữ liệu nhân viên
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $keyword = $_GET['keyword'] ?? '';
            if ($keyword) {
                $result = $category_model->filterCategory($keyword, $category_id);
                /**
                * Dòng mã phía dưới đang gán giá trị cho mảng $data["employees"].
                * Nế u biế n $result rỗng, nó sẽ gán một mảng rỗng cho $data["employees"].
                * Nế u biế n $result không rỗng, nó sẽ kiểm tra xem phần tử đầu tiên của $result có tồn tại hay không?
                * Nế u có, nó sẽ gán $result cho $data["employees"].
                * Nế u không, nó sẽ bọc $result trong một mảng và gán mảng đó cho $data["employees"]
                */
                $data["categories"] = empty($result) ? array() : (isset($result[0]) ? $result : array($result));
            } else {
                // Nế u $keyword rỗng, trả lại danh sách nhân viên
                $data["categories"] = $category_model->getAllCategories($limit, $offset);
            }
        }
        $this->output->addJs("js/Notify");
        $this->output->load("category/listCategory", $data);
    }
    public function createOrUpdateCategory(): void
    {
        $data = array();
        $category_model = new CategoryModel();
        // Nế u phương thức hiện tại là POST => thực hiện thêm hoặc sửa dữ liệu
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $category_id = $_GET['id'];
            $category_name = $_POST['category_name'];
            if ($category_id) {
                // Sửa dữ liệu nhân viên mới bằng function updateEmployeeById() đã tạo trong Model
                try { // ⇐ bắt đầu Try-Catch
                    $category_model->updateCategoryById(
                        $category_id,
                        $category_name,
                    );
                    $_SESSION['message'] = "Cập nhật thành công.";
                } catch (\Exception $e) {
                    $this->console->addError("Error during update: " . $e->getMessage());
                    $_SESSION['error'] = "Có lỗi xảy ra trong quá trình cập nhật!";
                } // ⇐ kế t thúc Try-Catch
            } else {
                // Thêm dữ liệu nhân viên mới bằng function create() đã tạo trong Model
                try { // ⇐ bắt đầu Try-Catch
                    $category_model->create(
                        $category_name,
                    );
                    $_SESSION['message'] = "Thêm thành công.";
                } catch (\Exception $e) {
                    $this->console->addError("Error during create: " . $e->getMessage());
                    $_SESSION['error'] = "Có lỗi xảy ra trong quá trình thêm!";
                } // ⇐ kế t thúc Try-Catch
            }
            //chuyển về trang chủ
            header("Location: /category");
           
        } else {
            //Lấy data mới nếu có $id
            if (isset($_GET['id'])) {
                $data['categories'] = $category_model->findCategoryById($_GET['id']);
            } else {
                $data['categories'] = ['category_name' => '']; // Dữ liệu mặc định nếu không có id
            }
            
        }
        // Load trang thêm hoặc sửa 
        $this->output->load("category/createOrUpdateCategory", $data);
    }
    //tới đây nha

    
}
