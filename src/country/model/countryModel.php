<?php
namespace Country;

use Engine\Base;

class CountryModel extends Base
{
    /**
     * Lấy danh sách tất cả các quốc gia
     *
     * @return array
     */
    public function getAllCountries($limit, $offset): array
    {
        // Truy vấn để lấy thông tin từ bảng categories và countries
    // $query = "
    //     SELECT 
    //         countries.country_id,
    //         countries.country_name,
    //         category.category_name
    //     FROM 
    //         countries
    //     LEFT JOIN films ON films.country_id = countries.country_id
    //     LEFT JOIN category ON films.category_id = category.category_id
    //     ORDER BY 
    //         countries.country_id ASC;
    // "; 
    // return $this->database->query($query);
    $query = "SELECT * FROM `countries`ORDER BY countries.country_id ASC LIMIT :limit OFFSET :offset";
    return $this->database->query($query, ['limit' => $limit, 'offset' => $offset]);
}
    public function countAllCountry(): int
    {
        return $this->database->query("SELECT COUNT(*) as total FROM `countries`")['total'];
    }
    public function create(string $country_name) {
        $query = "INSERT INTO `countries`(`country_name`)
                  VALUES('$country_name')";       
        return $this->database->query($query);
    }
    //Sửa thông tin
    public function findCountryById(int $country_id)
    {
        return $this->database->query("SELECT * FROM `countries` WHERE country_id = $country_id");
    }
    public function updateCountryById(int $country_id, string $country_name)
    {
        $query = "UPDATE countries SET
        country_name = '$country_name' WHERE country_id = $country_id;";
        return $this->database->query($query);
    }
    public function filterCountry(string $keyword)
    {
        // $query = "SELECT * FROM `category` WHERE category_id LIKE '%$keyword%' OR
        //     category_name LIKE '%$keyword%' ";
        // return $this->database->query($query);
        $query = "SELECT * FROM `countries` 
        WHERE `country_name` LIKE ?
        OR `country_id` LIKE?";
        $params = ["%$keyword%", "%$keyword%"];
        
        return $this->database->query($query, $params);
    }
   // xóa thông tin khỏi csdl
   public function deleteCountryById(int $country_id)
   {
       $query = "DELETE FROM `countries` WHERE country_id = $country_id";
       return $this->database->query($query);
   }
    //     public function getAllEmployees($limit, $offset): array
    // {
    // $query = "SELECT * FROM `countries` LIMIT :limit OFFSET :offset";
    // return $this->database->query($query, ['limit' => $limit, 'offset' =>
    // $offset]);
    // }
//         public function countAllEmployees(): int
//     {
//     return $this->database->query("SELECT COUNT(*) as total FROM
//     `countries`")['total'];
//     }
}
