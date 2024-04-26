<?php 
include_once "../template/header.php";
include_once "../template/navbar.php";


switch ($_GET['page']) {

     // Dashboard
     case "dashboard":
        include_once "view_dashboard.php";
        break;
    
    // Obat
    case "obat":
        include_once "view_obat.php";
        break;
    case "tambah_obat":
        include_once "../tambah/tambah_obat.php";
        break;
    case "proses_tambah_obat":
        include_once "../tambah/proses_tambah_obat.php";
        break;
    case "edit_obat":
        include_once "../edit/edit_obat.php";
        break;
    case "proses_edit_obat":
        include_once "../edit/proses_edit_obat.php";
        break;
    case "delete_obat":
        include_once "../delete/delete_obat.php";
        break;
    
    // Pelanggan
    case "pelanggan":
        include_once "view_pelanggan.php";
        break;
    case "tambah_pelanggan":
        include_once "../tambah/tambah_pelanggan.php";
        break;
    case "proses_tambah_pelanggan":
        include_once "../tambah/proses_tambah_pelanggan.php";
        break;
    case "edit_pelanggan":
        include_once "../edit/edit_pelanggan.php";
        break;
    case "proses_edit_pelanggan":
        include_once "../edit/proses_edit_pelanggan.php";
        break;
    case "delete_pelanggan":
        include_once "../delete/delete_pelanggan.php";
        break;
    
    // Transaksi
    case "tambah_transaksi":
        include_once "../tambah/tambah_transaksi.php";
        break;
    case "proses_tambah_transaksi":
        include_once "../tambah/proses_tambah_transaksi.php";
        break;
    
    default:
        # code...
        break;
}

include_once "../template/footer.php";

?>