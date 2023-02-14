<?php

$router->get('PI_2022/index.php', 'controllers/index.controller.php');
$router->get('PI_2022/index.php/logout', 'controllers/logout.controller.php');
$router->get('PI_2022/index.php/register', 'controllers/register.controller.php');
$router->get('PI_2022/index.php/student', 'controllers/student.controller.php');
$router->get('PI_2022/index.php/profesor', 'controllers/profesor.controller.php');
$router->get('PI_2022/index.php/detyratemia', 'controllers/detyratemia.controller.php');
$router->get('PI_2022/index.php/lendet', 'controllers/lendet.controller.php');
$router->get('PI_2022/index.php/dorezodetyren', 'controllers/dorezodetyren.controller.php');
$router->get('PI_2022/index.php/vleresimet', 'controllers/vleresimet.controller.php');
$router->get('PI_2022/index.php/dorezimet', 'controllers/dorezimet.controller.php');
$router->get('PI_2022/index.php/faqProfesori', 'controllers/faqProfesori.controller.php');
$router->get('PI_2022/index.php/faqStudenti', 'controllers/faqStudenti.controller.php');
$router->get('PI_2022/index.php/gethint.php', 'controllers/gethint.php');
//$router->post('PI_2022/index.php/names', 'controllers/add-name.php');
$router->get('PI_2022/index.php/detyratProf', 'controllers/detyratProf.controller.php');
$router->get('PI_2022/index.php/addDetyra', 'controllers/addDetyra.controller.php');
$router->get('PI_2022/index.php/controllDetyra', 'controllers/controllDetyra.controller.php');
$router->get('PI_2022/index.php/controllDetyra2', 'controllers/controllDetyra2.controller.php');
$router->post('PI_2022/index.php/controllDetyra2', 'controllers/controllDetyra2.controller.php');
$router->get('PI_2022/index.php/lendetStudent', 'controllers/lendetStudent.controller.php');
$router->get('PI_2022/index.php/vleresimetProfesor', 'controllers/vleresimetProfesor.controller.php');
$router->get('PI_2022/index.php/userprofile', 'controllers/userprofile.controller.php');
$router->get('PI_2022/index.php/shtoLenden', 'controllers/shtoLenden.controller.php');
$router->get('PI_2022/index.php/modifikoLenden', 'controllers/modifikoLenden.controller.php');
$router->post('PI_2022/index.php/saveLenda', 'controllers/saveLenda.controller.php');
$router->post('PI_2022/index.php/updateLenda', 'controllers/updateLenda.controller.php');
$router->post('PI_2022/index.php/register', 'controllers/register.controller.php');
$router->post('PI_2022/index.php', 'controllers/index.controller.php');
$router->post('PI_2022/index.php/userprofile', 'controllers/userprofile.controller.php');
$router->get('PI_2022/index.php/markDetyra', 'controllers/markDetyra.controller.php');
$router->post('PI_2022/index.php/markDetyra', 'controllers/markDetyra.controller.php');
$router->get('PI_2022/index.php/vleresimetDetails', 'controllers/vleresimetDetails.controller.php');
$router->post('PI_2022/index.php/dorezodetyren', 'controllers/dorezodetyren.controller.php');
$router->post('PI_2022/index.php/addDetyra', 'controllers/addDetyra.controller.php');
$router->get('PI_2022/index.php/DetyratNgaLenda', 'controllers/DetyratNgaLenda.controller.php');
?>