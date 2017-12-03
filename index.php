<?php

require "model.php";
include "header.php";

$model = new Model;

if(isset($_POST['submit'])) {
    $limit = (int) $_POST['exercises']; 
    $exercises = $model->getExercises($limit);
    
    foreach ($exercises as $exercise) {
        echo("<li>" . $exercise['exercise_name'] . "</li>");
    }
}

include "footer.php";