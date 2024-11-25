<?php
namespace Book;

use Engine\Base;

class BookController extends Base
{

    public function listAllBooks():void{
        $product_model = new BookModel;
        $data = array();
        $data["books"] = $product_model->getAllBooks();
        $this->output->load("book/listBook", $data);
    }
}