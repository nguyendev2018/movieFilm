<?php
namespace Banner;

use Engine\Base;

class BannerModel extends Base
{
    public function getAllBanner(): array
    {
        $query = "SELECT * FROM `banner`";
        return $this->database->query($query);
    }
    public function updateBannerById(int $banner_id, string $banner_name, string $banner_desc, ?string $image)
        {
            $query = "UPDATE banner SET
                banner_name = '$banner_name',
                banner_desc = '$banner_desc'";
                if ($image !== null) {
                $query .= ", image = '$image'";
            }

            $query .= " WHERE banner_id = $banner_id;";

            return $this->database->query($query);
        }
    public function create(string $banner_name, string $banner_desc, string $image)
    {
        $query = "INSERT INTO `banner`(`banner_name`, `banner_desc`, `image`)
        VALUES('$banner_name', '$banner_desc', '$image')";
        return $this->database->query($query);
    }
    public function findBannerById(int $banner_id)
    {
        return $this->database->query("SELECT * FROM `banner` WHERE banner_id =
$banner_id");
    }
    public function deleteBannerById(int $banner_id)
    {
        $query = "DELETE FROM `banner` WHERE banner_id = $banner_id";
        return $this->database->query($query);
    }

}
