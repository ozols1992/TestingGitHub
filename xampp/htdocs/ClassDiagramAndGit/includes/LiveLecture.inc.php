<?php

/**
 * Description of LiveLecture
 *
 * @author Marianne Nielsen
 * @date 11-09-2017
 */
class LiveLecture extends Product {
    protected $lecturer;
    protected $duration;
    protected $topic;

    function __construct($topic, $lecturer, $duration) {
        $this->lecturer = $lecturer;
        $this->duration = $duration;
        $this->topic = $topic;
        $this->type = 'Live lecture';
    }

    public function display() {}
    
    function getLecturer() {
        return $this->lecturer;
    }

    function getDuration() {
        return $this->duration;
    }

    function getTopic() {
        return $this->topic;
    }
}
