<?php 
require_once '../util/main.php';
include '../view/header.php'; 
include '../view/sidebar.php';
require_once '../model/volunteer_hour_db.php';

$dir=$_SESSION['choice'];
if($dir==0)
{  $name=$_POST["name"];}
else {
    $name=$_SESSION['name'];
}
$address=  get_all_hours($name);
?>

<form action="" method="" id="get_all_hours_form">
<p><?php echo $name;?>, here are your record: </p>  
<table >
  <tr>
  <td width="10%">Length  </td> <td width="20%">Time Started</td> <td width="15%"> Date </td> 
  <td width="10%">Lambda or Free</td> <td width="10%">If logged in</td> <td width="30%">Description </td>
</tr>

<?php 
$sum=0;
for($i=0;$i<count($address);$i++){
    echo "<tr>";
    echo "<td>", $address[$i]['hours'], "</td>";
    $sum=$sum+$address[$i]['hours'];
    echo "<td>",$address[$i]['time'],"</td>";
    echo "<td>",$address[$i]['date'],"</td>";
    echo "<td>",$address[$i]['L_or_F'],"</td>";
    echo "<td>",$address[$i]['ifLoggedIn'],"</td>";
    echo "<td>",$address[$i]['description'],"</td>","</tr>";
}
?>
</table>
<p>You volunteered <?php echo $sum; ?> hours in total.</p>
</form>
<?php  include '../view/footer.php'; ?>