

<td><a class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $row['WA_ID'];?>">Invoice</a></td>


<?php
$query = $db->query("SELECT ward_admisssion.WA_ID,ward.W_NAME,patient.P_FNAME,doctor.D_FNAME,staff.S_FNAME,ward_admisssion.CHECK_IN_DATE,ward_admisssion.CHECK_OUT_DATE,ward_admisssion.DAYS_ADMITTED,ward.W_COST FROM ward,staff,patient,doctor,ward_admisssion WHERE ward_admisssion.W_ID = ward.W_ID AND ward_admisssion.P_ID = patient.P_ID AND ward_admisssion.D_ID = doctor.D_ID AND ward_admisssion.S_ID = staff.S_ID ;");
if($query->num_rows > 0){
while($row = $query->fetch_assoc()){								
?>
<div class="modal fade" id="exampleModal<?php echo $row['WA_ID'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ward Admission  - <?php echo $row['WA_ID'];?></h5>
      </div>
      <div class="modal-body">
       <table>
        <tr>
            <th>Ward Name </th>
            <td> : <?php echo $row['W_NAME'];?></td>
        </tr>
        <tr>
            <th>Patient Name </th>
            <td> : <?php echo $row['P_FNAME'];?></td>
        </tr>
        <tr>
            <th>Doctor Name </th>
            <td> : <?php echo $row['D_FNAME'];?></td>
        </tr>
        <tr>
            <th>Check In </th>
            <td> : <?php echo $row['CHECK_IN_DATE'];?></td>
        </tr>
        <tr>
            <th>Check Out </th>
            <td> : <?php echo $row['CHECK_OUT_DATE'];?></td>
        </tr>
        <tr>
            <th>Total Fee </th>
            <td> : 
                <?php  $days = $row['DAYS_ADMITTED'];
                       $fee  = $row['W_COST'];

                       $total = $days * $fee;
                       echo $total;
                ?>
            </td>
        </tr>
       </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php } } ?>
