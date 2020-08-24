<?php 
    
class Task{
    public $title;
    public $description;
    public $completed = false;
    public function __construct($title, $description){
        $this->description = $description;
        $this->title = $title;

    }
}

$task = new Task('Cook', 'GO and cook some food');

var_dump($task->description);