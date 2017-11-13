<?php 

require_once 'Model.php';
require_once 'View.php';

use Model\Form as ModelForm;
use View\Form as ViewForm;

$form = new ViewForm();
var_dump($form);

$form2 = new Model\Form();
var_dump($form2);

$form3 = new Model\Form();
var_dump($form3);