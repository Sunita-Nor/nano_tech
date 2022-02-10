<?php
require_once 'includes/database.php';
require_once 'includes/function.php';

$query = '';
$output = array();
$query = "SELECT * FROM product_type ";

if(isset($_POST["search"]["value"])) {
  $query .= 'WHERE pt_id LIKE "%'.$_POST["search"]["value"].'%" ';
  $query .= 'OR pt_name LIKE "%'.$_POST["search"]["value"].'%" ';
}

if(isset($_POST["order"])) {
  $query .= ' ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
} else {
  $query .= ' ORDER BY pt_id DESC';
}

if($_POST['length'] != -1) {
  $query .= ' LIMIT ' .$_POST['start'].','.$_POST['length'];
}

// echo $query;

$statement = $pdo->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$data = array();
$filtered_rows = $statement->rowCount();

foreach($result as $row)
{
  $sub_array = array();
  $sub_array[] = $row["pt_name"];
  $sub_array[] = '<td>
                    <div class="form-button-action">
                      <button type="button" data-toggle="tooltip" class="btn btn-link btn-primary btn-lg edit"
                        data-original-title="Edit Task" name="edit" id="'.$row["pt_id"].'" >
                        <i class="fa fa-edit"></i>
                      </button>
                      <button type="button" data-toggle="tooltip" class="btn btn-link btn-danger delete"
                        data-original-title="Remove" name="delete" id="'.$row["pt_id"].'" >
                        <i class="fa fa-times"></i>
                      </button>
                    </div>
                  </td>';
  $data[] = $sub_array;
}

$output = array(
  "draw"              =>  intval($_POST["draw"]),
  "recordsTotal"      =>  $filtered_rows,
  "recordsFiltered"   =>  get_total_all_records(),
  "data"              =>  $data
);

  echo json_encode($output);
?>
