<?php
include('../conn/conn.php');

if (isset($_GET['category'])) {
  $category = $_GET['category'];

  try {

    $query = "DELETE FROM `tbl_expense_category` WHERE `tbl_expense_category_id` = '$category'";

    $stmt = $conn->prepare($query);
    $query_execute = $stmt->execute();

    if ($query_execute) {
      echo "<script>
            //alert('Categoría eliminada correctamente'); 
            window.location.href = 'http://localhost/control-gastos/home.php?deleteCategory=success';
            </script>";
    } else {
      echo "<script>
            //alert('Categoía aun no ha sido eliminada!'); 
            window.location.href = 'http://localhost/control-gastos/home.php?deleteCategory=fail';
            </script>";
    }
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
}
