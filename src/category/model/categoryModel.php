<?php
namespace Category;

use Engine\Base;

class CategoryModel extends Base
{
    public function getAllCategories($limit, $offset): array
{
    // Truy vấn để lấy thông tin từ bảng categories và countries
    // $query = "
    //     SELECT
    //         category.category_id,
    //         category.category_name,
    //         countries.country_name
    //     FROM
    //         category
    //     LEFT JOIN films ON films.category_id = category.category_id
    //     LEFT JOIN countries ON films.country_id = countries.country_id
    //      LIMIT :limit OFFSET :offset
    // ";

    // return $this->database->query($query, ['limit' => $limit, 'offset' => $offset]);
    $query = "SELECT * FROM `category` LIMIT :limit OFFSET :offset";
    return $this->database->query($query, ['limit' => $limit, 'offset' => $offset]);
}
    public function countAllCategory(): int
    {
        return $this->database->query("SELECT COUNT(*) as total FROM `category`")['total'];
    }


    public function create(string $category_name) {
        $query = "INSERT INTO `category`(`category_name`)
                  VALUES('$category_name')";       
        return $this->database->query($query);
    }

    //Sửa thông tin
    public function findCategoryById(int $category_id)
    {
        return $this->database->query("SELECT * FROM `category` WHERE category_id = $category_id");
    }
    public function updateCategoryById(int $category_id, string $category_name)
    {
        $query = "UPDATE category SET
        category_name = '$category_name' WHERE category_id = $category_id;";
        return $this->database->query($query);
    }
    
    // xóa thông tin khỏi csdl
    public function deleteCategoryById(int $category_id)
    {
        $query = "DELETE FROM `category` WHERE category_id = $category_id";
        return $this->database->query($query);
    }

    //TH06
    public function filterCategory(string $keyword)
    {
        // $query = "SELECT * FROM `category` WHERE category_id LIKE '%$keyword%' OR
        //     category_name LIKE '%$keyword%' ";
        // return $this->database->query($query);
        $query = "SELECT * FROM `category` 
        WHERE `category_name` LIKE ?
        OR `category_id` LIKE?";
        $params = ["%$keyword%", "%$keyword%"];
        
        return $this->database->query($query, $params);
    }
}
