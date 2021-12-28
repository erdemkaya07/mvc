<?php 

//Defult
App::get('/');
App::get('/default/index/{[\d]+}', true);
App::get('/default/detail/{[\d]+}', true);
App::get('/default/login', false);


App::get('/user/index', false);

//Prduct

 ?>