<?php

/**
 * Description of Book
 *
 * @author Marianne Nielsen
 * @date 11-09-2017
 */
class Book extends Product {
    protected $pageCount;
    
    function __construct($title, $pageCount) {
        $this->title = $title;
        $this->pageCount = $pageCount;
        $this->type = "Book";
    }
    function getPageCount() {
        return $this->pageCount;
    }
    
    public function display() { // void on class diagram
        printf("<b>%s</b><br />\nPageCount: %s <br />"
                , $this->title
                , $this->getPageCount());
    }
}