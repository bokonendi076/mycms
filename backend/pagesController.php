<?php require_once __DIR__ . '/init.php';
// function getPages() {
//     $page = "SELECT * FROM pages WHERE ID = ' ". $_GET["pageid"] . "'";
//  }

 function getPage() {
   $id = $_GET['pageid'];
   $page = selectOne("SELECT * FROM pages WHERE pages.id = $id");
   return $page;
 }
