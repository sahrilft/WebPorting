<?php 
error_reporting(0);
session_start();
$pagename = $_GET['page'];
// print_r($_SESSION);die();
if ($pagename == '') {
	header('location:index.php?page=menu');
	}

if ($pagename == 'work_order') {
	
	include 'routing/work_order.php';
}

if ($pagename == 'work_add') {
	
	include 'routing/work_add.php';
}

if ($pagename == 'menu') {
	include 'routing/start_job.php';
}

if ($pagename == 'kpi') {
	
	include 'routing/kpi.php';
}


if ($pagename == 'export-excel') {
	
	include 'routing/export-excel.php';
}

if ($pagename == 'view_user') {
	
	include 'routing/view_users.php';
}
if ($pagename == 'activity_log') {
	
	include 'routing/view_log.php';
}

if ($pagename !== '' and $pagename !== 'work_order' and $pagename !== 'work_add' and $pagename !== 'menu' and $pagename !== 'kpi' and $pagename !== 'view_user' and $pagename !== 'activity_log') {
	include 'routing/404.php';
	}

 ?>