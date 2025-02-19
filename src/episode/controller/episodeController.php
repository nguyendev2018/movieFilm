<?php
namespace Episode;

use Engine\Base;

class EpisodeController extends Base
{
    public function index(): void
    {
        $episode_model = new EpisodeModel();
        $data = [];

        // Lấy film_id từ query string
        $film_id = $_GET['film_id'] ?? null;

        if ($film_id) {
            $data["episodes"] = $episode_model->getEpisodesByFilmId((int)$film_id);
        } else {
            $data["episodes"] = $episode_model->getAllEpisodes();
        }

        // Hiển thị danh sách tập phim
        $this->output->load("episode/listEpisode", $data);
    }

    public function createOrUpdateEpisode(): void
    {
        $episode_model = new EpisodeModel();
        $film_id = $_GET['film_id'] ?? null;
        $episode_id = $_GET['episode_id'] ?? null;

        $data = [];

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $post_data = [
                "film_id" => $_POST["film_id"],
                "episode_number" => $_POST["episode_number"],
                "episode_name" => $_POST["episode_name"],
                "video_url" => $_POST["video_url"],
            ];

            if ($episode_id) {
                $episode_model->updateEpisodeById((int)$episode_id, $post_data);
            } else {
                $episode_model->createEpisode($post_data);
            }

            // Redirect về danh sách tập phim
            header("Location: /episode?film_id=" . $film_id);
            exit;
        }

        if ($episode_id) {
            $data['episode'] = $episode_model->findEpisodeById((int)$episode_id);
        } else {
            $data['episode'] = [
                "episode_number" => "",
                "episode_name" => "",
                "video_url" => "",
            ];
        }

        $data['film_id'] = $film_id;

        // Load form thêm/sửa tập phim
        $this->output->load("episode/createOrUpdateEpisode", $data);
    }
}
