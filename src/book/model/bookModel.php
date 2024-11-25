<?php
namespace Book;

use Engine\Base;

class BookModel extends Base
{
    public function getAllBooks(): array
    {
        return array(
            [
                "id"=> 1,
                "title"=>"sample book 1",
                "description"=>"This is a book",
            ],
            [
                "id"=>2,
                "title"=>"Sample book 2",
                "description"=>"This i a book",
            ],
            [
                "id"=>3,
                "title"=>"Sample book 3",
                "descreiption"=>"this is a book",
            ],
        );
    }
}

