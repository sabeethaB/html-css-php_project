<?php  
 include('connection.php'); 
 $output = '';  
 $result = mysqli_query($conn, "SELECT * FROM `customertable` ORDER BY `customerid` DESC");  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered" style="margin-top: 0px;
    margin-left: 482px;width:300px;">  
                <tr>  
                     <th width="10px">Customer_id</th>  
                     <th width="20px">Customer Name</th>  
                     <th width="20px">Phone Number</th>
                     <th width="20px">City</th>
                     <th width="20px">State</th>
                     <th width="10px">Delete</th>  
                </tr>';  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td>'.$row["customerid"].'</td>  
                     <td class="customername" data-id1="'.$row["customerid"].'" contenteditable>'.$row["customername"].'</td>  
                     <td class="phonenumber" data-id2="'.$row["customerid"].'" contenteditable>'.$row["phonenumber"].'</td>
                     <td class="city" data-id3="'.$row["customerid"].'" contenteditable>'.$row["city"].'</td>
                     <td class="state" data-id4="'.$row["customerid"].'" contenteditable>'.$row["state"].'</td>
                     <td><button type="button" name="delete_btn" data-id5="'.$row["customerid"].'" class="btn btn-xs btn-danger btn_delete">x</button></td>  
                </tr>  ';  
      }  
 }  
 else  
 {  
      $output .= '<tr>  
                          <td colspan="5">Data not Found</td>  
                     </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>