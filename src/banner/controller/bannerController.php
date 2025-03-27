<?php
namespace Banner;

use Engine\Base;

class BannerController extends Base
{
    /**
     * Hiển thị danh sách banner
     */
    public function index(): void
    {
        $banner_model = new BannerModel();
        $data["banners"] = $banner_model->getAllBanner();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $banner_id = (int)$_POST['banner_id'];
            try {
                $banner_model->deleteBannerById($banner_id);
                $_SESSION['message'] = 'Xóa thành công.';
            } catch (\Exception $e) {
                $_SESSION['error'] = 'Đã xảy ra lỗi: ' . $e->getMessage();
            }
            header('Location: /banner');
            exit;
        }

        // Chỉ load một lần
        $this->output->load('banner/listBanner', $data);
    }


    /**
     * Tạo hoặc cập nhật banner
     */
    public function createOrUpdateBanner(): void
   {
      $banner_model = new BannerModel();

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $banner_id = isset($_GET["banner_id"]) ? (int) $_GET["banner_id"] : 0;
        $banner_name = isset($_POST["banner_name"]) ? trim($_POST["banner_name"]) : '';
        $banner_desc = isset($_POST["banner_desc"]) ? trim($_POST["banner_desc"]) : '';
        $image ="";
        // Kiểm tra và xử lý upload ảnh
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


        try {
            if ($banner_id) {
                // Cập nhật banner
                $banner_model->updateBannerById($banner_id, $banner_name, $banner_desc, $image);
                $_SESSION['message'] = "Cập nhật thành công.";
            } else {
                // Thêm mới banner
                $banner_model->create($banner_name, $banner_desc, $image);
                $_SESSION['message'] = "Thêm mới thành công.";
            }
        } catch (\Exception $e) {
            $this->console->addError("Lỗi: " . $e->getMessage());
            $_SESSION['error'] = "Có lỗi xảy ra!";
        }

        // Điều hướng về danh sách banner
        header("Location: /banner");
        exit;
    }

    // Nếu là GET, lấy dữ liệu banner (nếu có)
    $banner_id = isset($_GET["banner_id"]) ? (int) $_GET["banner_id"] : 0;
    $data = $banner_id ? $banner_model->findBannerById($banner_id) : [];

    //Load giao diện
    $this->output->load("banner/createOrUpdateBanner", $data);


    }

}


