<?php include "../includes/session.php";

if (isset($_GET['id'])) {
  if (!isset($_SESSION['email'])) {
    $_SESSION['email'] = "Please log in to apply";
    header("location: ../login.php");
    exit();
  } else {
    $id_jobpost = $_GET['id'];
    $id_company = $_GET['cid'];
    $id_user = $_SESSION['id_user'];
    $createdat = date("Y-m-d");

    $sql = "insert into applied_jobposts (id_jobpost,id_user,id_company,createdat) values('$id_jobpost','$id_company','$id_user','$createdat')";
    $conn->query($sql);
  }
}
