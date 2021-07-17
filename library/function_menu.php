<?php
function buat_menu($link, $ikon, $judul,  $leveluser = array("admin"))
{
	foreach ($leveluser as $level) {
		if ($_SESSION['leveluser'] == $level) echo '<li class="nav-item"><a class="nav-link" href="?content=' . $link . '"><i class="fa fa-' . $ikon . '"></i> ' . $judul . '</a></li>';
	}
}

function buat_submenu($link, $judul, $leveluser = array("admin"))
{
	foreach ($leveluser as $level) {
		if ($_SESSION['leveluser'] == $level) echo '<li><a class="nav-link" href="?content=' . $link . '"> ' . $judul . '</a></li>';
	}
}

function buka_dropdown($ikon, $judul, $leveluser = array("admin"))
{
	foreach ($leveluser as $level) {
		if ($_SESSION['leveluser'] == $level)
			echo '<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
			<i class="fa fa-' . $ikon . '"></i> ' . $judul . ' <b class="caret"></b></a>
			<ul class="dropdown-menu">';
	}
}
function tutup_dropdown($leveluser = array("admin"))
{
	foreach ($leveluser as $level) {
		if ($_SESSION['leveluser'] == $level) echo '</ul></li>';
	}
}
