<!DOCTYPE html>
<html>
    <head>
        <title></title>
</head>
<style>
    .center {
  margin-left: auto;
  margin-right: auto;
}
table{
    background-color: rgba(167,194,211,255);
    border-radius: 25px;
    text-align: center;
}
#myTable tr:hover {
  background-color: grey;
}
tr{
  background-color: #f2f2f2;
}

#myInput {
  background-image: url('sbtn.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 30%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}
</style>
<body background="dFhnNH1.jpg">
<p><img src="logo2.png" alt="Animal care" style="float:right;width:220px;height:80px;"></p>

    <br><br><br>
    <table id="tbl" border="0" class="center" cellspacing="17">
    <tr><th border="0" colspan="8"><font size="5">Doctor Information</font></th></tr>    
</tr>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
<table id="myTable" border="1" class="center" cellspacing="17">
    <br><br>
      <tr>
              <th>Email</th>
              <th>Name</th>
              <th>Phone</th>
              <th>Status</th>
              <th>Address</th>
              <th>Area</th>
              <th>Gender</th>
              <th>Hospital Name</th>
              <th>Operations</th>
          </tr>
      

<?php
include("connection.php");
error_reporting(0);
$query = "select d_mail, d_name, d_phone, status, address, area, gender, hospital_name from doctor_info where d_mail<>' '";
$data=mysqli_query($conn, $query);
$total=mysqli_num_rows($data);

if($total!=0){
    //$result=musqli_fetch_assoc($data);
    while($result=mysqli_fetch_assoc($data)){
      echo "<tr>
        <td>".$result['d_mail']."</td>
        <td>".$result['d_name']."</td>
        <td>".$result['d_phone']."</td>
        <td>".$result['status']."</td>
        <td>".$result['address']."</td>
        <td>".$result['area']."</td>
        <td>".$result['gender']."</td>
        <td>".$result['hospital_name']."</td>
        <td><a href = 'doc_dlt.php?rn=$result[d_mail]' onclick='return checkdelete()'>Delete</a></td>
        </tr>";
    }

}
else{
    echo "No results found";
}

?>
</table>

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}

function checkdelete(){
    return Confirm('Are You sure to want delete this Record');
}
</script>

</body>
</html>