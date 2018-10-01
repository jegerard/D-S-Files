<?php
// Change the working directory to this file.
chdir(__DIR__);
set_include_path (__DIR__);
require 'environment.php';

if ($_SERVER['REQUEST_METHOD']=='POST'
&& stripos($_SERVER['CONTENT_TYPE'], 'application/json'))
/** MODELS **/
require 'models/Work.php';
