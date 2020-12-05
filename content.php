<?php
   if(!defined('INDEX')) die("");

   $guru = array("dashboard",
      "add_guru", "create_guru", "delete_guru", 
      "edit_guru", "pages_guru",
      "paging_guru", "read_guru", "update_guru");
      
   $siswa = array("dashboard",
      "add_siswa", "create_siswa", "delete_siswa", 
      "edit_siswa", "pages_siswa",
      "paging_siswa", "read_siswa", "update_siswa");

   $pelajaran = array("dashboard",
      "add_pelajaran", "create_pelajaran", "delete_pelajaran", 
      "edit_pelajaran", "pages_pelajaran",
      "paging_pelajaran", "read_pelajaran", "update_pelajaran");

   $t_nilai = array("dashboard",
      "add_nilai", "create_nilai", "delete_nilai", 
      "edit_nilai", "pages_nilai",
      "paging_nilai", "read_nilai", "update_nilai");

   $t_jadwal = array("dashboard",
      "add_jadwal", "create_jadwal", "delete_jadwal", 
      "edit_jadwal", "pages_jadwal",
      "paging_jadwal", "read_jadwal", "update_jadwal");

   $c_nilai = array("dashboard",
      "read","pages");
      
   $c_jadwal = array("dashboard",
      "read","pages");

   $c_guru = array("dashboard",
      "read","pages");
      
   $c_siswa = array("dashboard",
      "read","pages");

   $c_jadwalP = array("dashboard",
      "read","pages");

   if(isset($_GET['gu']))  $gu = $_GET['gu'];
   else $gu = "content/dashboard.php";

   if(isset($_GET['sis'])) $sis = $_GET['sis'];
   else $sis = "content/dashboard";

   if(isset($_GET['pel'])) $pel = $_GET['pel'];
   else $pel = "content/dashboard";

   if(isset($_GET['tn'])) $tra_n = $_GET['tn'];
   else $tra_n = "content/dashboard";

   if(isset($_GET['tj'])) $tra_j = $_GET['tj'];
   else $tra_j = "content/dashboard";
   
   if(isset($_GET['cn'])) $ce_n = $_GET['cn'];
   else $ce_n = "content/dashboard";

   if(isset($_GET['cj'])) $ce_j = $_GET['cj'];
   else $ce_j = "content/dashboard";

   if(isset($_GET['cg'])) $ce_g = $_GET['cg'];
   else $ce_g = "content/dashboard";
   
   if(isset($_GET['cs'])) $ce_s = $_GET['cs'];
   else $ce_s = "content/dashboard";

   if(isset($_GET['cjp'])) $ce_jp = $_GET['cjp'];
   else $ce_jp = "content/dashboard";

   foreach($guru as $g){
      if($gu == $g){
         include "content/guru/$g.php";
         break;
      }
   };

   foreach ($siswa as $s) {
      if ($sis == $s) {
         include "content/siswa/$s.php";
         break;
      }
   };

   foreach ($pelajaran as $p) {
      if ($pel == $p) {
         include "content/pelajaran/$p.php";
         break;
      }
   };

   foreach ($t_nilai as $tn) {
      if ($tra_n == $tn) {
         include "content/transaksi/nilai/$tn.php";
         break;
      }
   };

   foreach ($t_jadwal as $tj) {
      if ($tra_j == $tj) {
         include "content/transaksi/jadwal/$tj.php";
         break;
      }
   };

   foreach ($c_nilai as $cn) {
      if ($ce_n == $cn) {
         include "content/laporan/nilai/$cn.php";
         break;
      }
   };

   foreach ($c_jadwal as $cj) {
      if ($ce_j == $cj) {
         include "content/laporan/pelajaran/$cj.php";
         break;
      }
   };

   foreach ($c_guru as $cg) {
      if ($ce_g == $cg) {
         include "content/laporan/guru/$cg.php";
         break;
      }
   };

   foreach ($c_siswa as $cs) {
      if ($ce_s == $cs) {
         include "content/laporan/siswa/$cs.php";
         break;
      }
   };
   
   foreach ($c_jadwalP as $cjp) {
      if ($ce_jp == $cjp) {
         include "content/laporan/jadwal/$cjp.php";
         break;
      }
   };
?>
