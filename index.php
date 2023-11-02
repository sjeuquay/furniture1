<?php
include "model/connect.php";
include "view/header.php";
if(isset($_REQUEST['page'])){
    $page = $_REQUEST['page'];
    switch ($page){
        case 'shop':
            include "product.php";
            
            //code chức năng
            break;
        case '':
            //code chức năng
            break;
        case '':
            //code chức năng
            break;
        case '':
            //code chức năng
            break;
        case '':
            //code chức năng
            break;
        case '':
            //code chức năng
            break;
    }
}
?>
