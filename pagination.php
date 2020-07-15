<?php

include('connect.php');
$record_per_page = 4;
$page = '';
$output = '';
if(isset($_POST["page"])){
    $page = $_POST["page"];
}
else{
    $page = 1;
}

$start = ($page - 1)*$record_per_page;

$query = "SELECT * FROM `staff_details` ORDER BY `id` DESC LIMIT $start, $record_per_page" ;
// echo $query;        
$result = mysqli_query($conn, $query);

$output .= "
    <table class = 'table table-bordered'>
    <tr>
        <th width = '30%'>Firstname</th>
        <th width = '30%'>Lastname</th>
        <th width = '30%'>Password</th>
    </tr>
";


while($row = mysqli_fetch_array($result))
{
    $output .='
    <tr>
        <td>'.$row["first_name"].'</td>
        <td>'.$row["last_name"].'</td>
        <td>'.$row["password"].'</td>
    </tr>
';
}
$output .= '<table><br><div align="center">';
$page_query = "SELECT * FROM `staff_details` ORDER BY `id` DESC";
$page_result = mysqli_query($conn,$page_query);
$total_records = mysqli_num_rows($page_result);
$total_pages = ceil($total_records/$record_per_page);
for($i=1; $i<=$total_pages; $i++)
{
    $output .= "<span class='pagination_link' style='cursor:pointer; padding:6px; border:2px' id='".$i."'>".$i."</span>";
}
echo $output;
?>