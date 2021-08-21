<?php
function buat_menu($link, $ikon, $judul,  $leveluser=array("admin")){
	foreach($leveluser as $level){
		if($_SESSION['leveluser']==$level) echo'<li class="nav-item"><a class="nav-link" href="?content='.$link.'"><i class="fa fa-'.$ikon.'"></i> '.$judul.'</a></li>';
	}
}

function buat_submenu($link, $judul, $leveluser=array("admin")){
	foreach($leveluser as $level){
		if($_SESSION['leveluser']==$level) 
		echo'<a class="dropdown-item" href="?content='.$link.'"> '.$judul.'</a>';
		
	}
}

function buka_dropdown($ikon, $judul, $leveluser=array("admin")){
	foreach($leveluser as $level){
		if($_SESSION['leveluser']==$level) 
			echo'<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
			<i class="fa fa-'.$ikon.'"></i> '.$judul.' <b class="caret"></b></a>
			<div class="dropdown-menu" aria-labelledby="dropdownId">';
	}
}
function tutup_dropdown($leveluser=array("admin")){
	foreach($leveluser as $level){
		if($_SESSION['leveluser']==$level) echo' </div>';
	}
}
?>
