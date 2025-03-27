<?php
namespace Episode;

use Engine\Base;
use PDO;

class EpisodeModel extends Base
{

    public function getAllEpisodes($limit, $offset): array
    {
        $query = "SELECT * FROM `episodes` e JOIN `films` f ON e.film_id = f.film_id LIMIT :limit OFFSET :offset";
    return $this->database->query($query, ['limit' => $limit, 'offset' => $offset]);
    }
    public function countAllEpisode(): int
    {
        return $this->database->query("SELECT COUNT(*) as total FROM `episodes`")['total'];
    }

    public function getEpisodesByFilmId(int $film_id): array
    {
        $query = "SELECT episode_id, film_id, episode_number, episode_name, video_url, created_at FROM episodes WHERE film_id = $film_id";
        return $this->database->query($query);
    }

    public function findEpisodeById(int $episode_id)
    {
        return $this->database->query("SELECT * FROM `episodes` WHERE episode_id = $episode_id");
    }



    public function create(int $film_id, int $episode_number, string $episode_name, string $video_url)
    {
        $query = "INSERT INTO episodes (film_id, episode_number, episode_name, video_url) VALUES ($film_id, $episode_number, '$episode_name', '$video_url')";
        return $this->database->query($query);
    }


    public function updateEpisodeById(int $episode_id, int $film_id, int $episode_number, string $episode_name, string $video_url)
    {
        $query = "UPDATE episodes SET film_id = $film_id, episode_number = $episode_number, episode_name = '$episode_name', video_url = '$video_url' WHERE episode_id = $episode_id";
        return $this->database->query($query);
    }


    public function deleteEpisodeById(int $episode_id)
    {
        $query = "DELETE FROM episodes WHERE episode_id = $episode_id";
        return $this->database->query($query);
    }

    public function getDanhSachFilm()
    {
        $sql  = "SELECT film_id, film_name FROM films ORDER BY film_name";
        
        // Sử dụng phương thức query() của Database
        $films = $this->database->query($sql);

        // Kiểm tra nếu $films là false (không có dữ liệu), trả về mảng rỗng
        return $films ? $films : [];
    }

    public function isEpisodeExists($film_id, $episode_number, $episode_id = null)
    {
        $sql = "SELECT COUNT(*) as count FROM episodes WHERE film_id = ? AND episode_number = ?";
        $params = [$film_id, $episode_number];

        // Nếu đang cập nhật (có episode_id), không tính tập hiện tại
        if ($episode_id) {
            $sql .= " AND episode_id != ?";
            $params[] = $episode_id;
        }

        $result = $this->database->query($sql, $params);
    }

    //TH06
    public function filterEpisode(string $keyword)
    {
        $query = "SELECT * FROM `episodes` 
                  WHERE `episode_name` LIKE ? 
                  OR `episode_id` LIKE ?";
        
        $params = ["%$keyword%", "%$keyword%"];
    
        return $this->database->query($query, $params);
    }
    

}