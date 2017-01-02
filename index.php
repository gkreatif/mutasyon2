<?php
require_once(dirname(__FILE__).'/model/settings/settings.php');

/** Create Page **/
include 'model/top.php';
if (isset ( $_SESSION ["mutasyon_session"] )) {
    switch ($url) {
        case "invoices" :
            include ("model/invoice.php");
            break;
        case "invoices/add" :
            include ("model/addInvoice.php");
            break;
        case "customers" :
            include ("model/customers.php");
            break;
        case "customers/add" :
            include ("model/addCustomer.php");
            break;
        case "products/detail" :
            include ("model/productDetail.php");
            break;
        default:
            include ("model/mainPage.php");
    }
} else
    $smarty->display ( 'view/login/login.html' );
