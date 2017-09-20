<?php

include('./App/Helpers/test.php');
include('./App/Controllers/TestController.php');

$show = new App\Controllers\TestController();
echo $show->index();