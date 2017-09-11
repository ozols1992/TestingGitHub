<?php

/**
 * Description of DVD
 *
 * @author Marianne Nielsen
 * @date 11-09-2017
 */
class DVD extends Product {
    private $duration;
    
    function __construct($title, $duration) {
        $this->title = $title;
        $this->duration = $duration;
        $this->type = "DVD";
    }
    
    function getDuration() {
        return $this->duration;
    }

    public function display() {
        return sprintf("<b>%s: %s</b><br />Duration: %s <br /><br />"
                , $this->getProductType()
                , $this->title
                , $this->getDuration());
    }
}
