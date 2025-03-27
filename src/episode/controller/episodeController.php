<?php
namespace Episode;

use Engine\Base;

class EpisodeController extends Base
{
    /**
     * Hiển thị danh sách tập phim
     */
    public function index(): void
    {
        $episode_model = new EpisodeModel();
        $film_id = $_GET["film_id"] ?? null; 
        $data = array();
        $limit = 10; // Số sản phẩm trên mỗi trang
        $page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
        $offset = ($page - 1) * $limit;
        $totalEpisode = $episode_model->countAllEpisode();
        $totalPages = ceil($totalEpisode / $limit);
        $data["totalPages"] = $totalPages;

        if ($film_id) {
            $data["episodes"] = $episode_model->getEpisodesByFilmId($film_id);
        } else {
            $data["episodes"] = $episode_model->getAllEpisodes($limit, $offset);
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $episode_id = $_POST["episode_id"];
            $episode_model->deleteEpisodeById($episode_id);
            header("Location: /episode");
        }
        // Nế u phương thức hiện tại là GET => thực hiện lọc dữ liệu nhân viên
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $keyword = $_GET['keyword'] ?? '';
            if ($keyword) {
                $result = $episode_model->filterEpisode($keyword);
                
                $data["episodes"] = empty($result) ? array() : (isset($result[0]) ? $result : array($result));
            } else {
                // Nế u $keyword rỗng, trả lại danh sách nhân viên
                $data["episodes"] = $episode_model->getAllEpisodes($limit, $offset);
            }
        }
        $this->output->addJs("js/Notify");
        $this->output->load("episode/listEpisode", $data);
    }

    public function createOrUpdateEpisode(): void 
    {
        $episode_model = new EpisodeModel();

        if (! $this->database) {
            die("Lỗi kết nối database!");
        }

        $data["ds_film"] = $episode_model->getDanhSachFilm();
        $data["error_message"] = "";
        $episode_id = $_GET["episode_id"] ?? null;

        // Nếu có episode_id, lấy dữ liệu từ DB
        if ($episode_id && is_numeric($episode_id)) {
            $episode = $episode_model->findEpisodeById($episode_id);
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $episode_id = $_POST["episode_id"] ?? null;
            $film_id = $_POST["film_id"] ?? null;
            $episode_number = $_POST["episode_number"] ?? null;
            $episode_name = $_POST["episode_name"] ?? null;
            $video_url = $_POST["video_url"] ?? null;

            if (!$film_id || !$episode_number || !$episode_name || !$video_url) {
                die("Lỗi: Thiếu dữ liệu đầu vào!");
            }

            // Kiểm tra tập phim đã tồn tại chưa
            if ($episode_model->isEpisodeExists($film_id, $episode_number, $episode_id)) {
                $data["error_message"] = "Tập số {$episode_number} đã tồn tại cho phim này. Vui lòng chọn số khác!";
                $data["episode"] = compact("film_id", "episode_number", "episode_name", "video_url");
                $this->output->load("episode/createOrUpdateEpisode", $data);
                return;
            }

            if ($episode_id) {
                $episode_model->updateEpisodeById($episode_id, $film_id, $episode_number, $episode_name, $video_url);
            } else {
                $episode_model->create($film_id, $episode_number, $episode_name, $video_url);
            }

            header("Location: /episode");
            exit;
        } 

        // Nếu không có dữ liệu từ DB, gán giá trị mặc định
        if (empty($episode)) {
            $episode = [
                "film_id" => '',
                "episode_number" => '',
                "episode_name" => '',
                "video_url" => ''
            ];
        }

        $data['episode'] = $episode;    
        $this->output->load("episode/createOrUpdateEpisode", $data);
    }


}
