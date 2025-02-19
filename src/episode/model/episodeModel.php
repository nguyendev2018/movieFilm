<?php
namespace Episode;

use Engine\Base;

class EpisodeModel extends Base
{
    // Lấy danh sách tập phim theo film_id
    public function getEpisodesByFilmId(int $film_id): array
    {
        $query = "
            SELECT 
                e.episode_id, 
                f.film_name, 
                e.episode_number, 
                e.episode_name, 
                e.video_url, 
                e.created_at
            FROM 
                episodes e
            LEFT JOIN 
                films f ON f.film_id = e.film_id
            WHERE 
                e.film_id = :film_id
        ";

        return $this->database->query($query, ["film_id" => $film_id]);
    }

    // Lấy danh sách toàn bộ tập phim (nếu cần)
    public function getAllEpisodes(): array
    {
        $query = "
            SELECT 
                e.episode_id, 
                f.film_name, 
                e.episode_number, 
                e.episode_name, 
                e.video_url, 
                e.created_at
            FROM 
                episodes e
            LEFT JOIN 
                films f ON f.film_id = e.film_id
        ";

        return $this->database->query($query);
    }

    // Thêm tập phim mới
    public function createEpisode(array $data): bool
    {
        $query = "
            INSERT INTO episodes (film_id, episode_number, episode_name, video_url, created_at)
            VALUES (:film_id, :episode_number, :episode_name, :video_url, NOW())
        ";

        return $this->database->execute($query, $data);
    }

    // Sửa tập phim theo ID
    public function updateEpisodeById(int $episode_id, array $data): bool
    {
        $query = "
            UPDATE episodes
            SET 
                episode_number = :episode_number, 
                episode_name = :episode_name, 
                video_url = :video_url
            WHERE 
                episode_id = :episode_id
        ";

        $data['episode_id'] = $episode_id;
        return $this->database->execute($query, $data);
    }

    // Xóa tập phim
    public function deleteEpisodeById(int $episode_id): bool
    {
        $query = "DELETE FROM episodes WHERE episode_id = :episode_id";
        return $this->database->execute($query, ["episode_id" => $episode_id]);
    }
}
