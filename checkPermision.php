<?php
session_start();
if(!isset($_SESSION['admin']))
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
{
    header('location:Login.php') ;
}
