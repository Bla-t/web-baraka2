<?php
require_once "method.php";
$mhs = new Api();
$request_method = $_SERVER["REQUEST_METHOD"];
switch ($request_method) {
	case 'GET':
		//get data tarif
		if (!empty($_GET["dari"])) {
			$dari = $_GET["dari"];
			$tujuan = $_GET["tujuan"];
			$mhs->get_tarif($dari, $tujuan);
		} // data area
		else if (isset($_GET['area'])) {
			$mhs->get_area();
		} // data dari
		else if (!empty($_GET['isi'])) {
			$dari = $_GET['isi'];
			$mhs->get_dari($dari);
		} // data tujuan
		else if (!empty($_GET['tujuan'])) {
			$tujuan = $_GET['tujuan'];
			$mhs->get_tujuan($tujuan);
		}
		break;
	case 'POST':
		$mhs->insert_mhs();
		break;
	case 'PUT':
		if (!empty($_POST["id"])) {
			$id = intval($_POST["id"]);
			$mhs->update_mhs($id);
		} else {
			header("HTTP/1.0 405 Method Not Allowed");
		}
		break;
	case 'DELETE':
		$id = intval($_GET["id"]);
		$mhs->delete_mhs($id);
		break;
	default:
		// Invalid Request Method
		header("HTTP/1.0 405 Method Not Allowed");
		break;
}
