<?php
namespace App\Controllers;

use App\Helpers\Test;

class TestController
{
    public function index()
    {
    	$test = new Test();
    	echo $test->help();
        return 'TestController work';
    }
}
