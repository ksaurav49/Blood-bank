<?php
/*
Letter in Capital case shows Positive blood group 
and small case shows negative blood group
*/
$a="";
$A="";
$B="";
$b="";
$O="";
$o="";
$AB="";
$ab="";
if($active_uri == "A+"){
    $A = "active-blood-group";
}else if($active_uri == "A-"){
    $a = "active-blood-group";
}else if($active_uri == "O+"){
    $O = "active-blood-group";
}else if($active_uri == "O-"){
    $o = "active-blood-group";
}else if($active_uri == "B+"){
    $B = "active-blood-group";
}else if($active_uri == "B-"){
    $b = "active-blood-group";
}else if($active_uri == "AB+"){
    $AB = "active-blood-group";
}else if($active_uri == "AB-"){
    $ab = "active-blood-group";
}
?>
    <!-- main section start ========================================================================= -->
    <div class="main-section-container">
        <div class="blood-type-navigation">
            <span class="heading-blood-group">
                BLOOD GROUP
            </span>
            <div class="blood-group-names">
                <a class="<?=$A?>" style="text-decoration: none;" href="<?=BASE_URL?>getBloodSample/A+">
                    <span class="heading-sm">A+</span>
                </a>
                <a class="<?=$O?>" style="text-decoration: none;" href="<?=BASE_URL?>getBloodSample/O+">
                    <span class="heading-sm">O+</span>
                </a>
                <a class="<?=$B?>" style="text-decoration: none;" href="<?=BASE_URL?>getBloodSample/B+">
                    <span class="heading-sm">B+</span>
                </a>
                <a class="<?=$AB?>" style="text-decoration: none;" href="<?=BASE_URL?>getBloodSample/AB+">
                    <span class="heading-sm">AB+</span>
                </a>
                <a class="<?=$a?>" style="text-decoration: none;" href="<?=BASE_URL?>getBloodSample/A-">
                    <span class="heading-sm">A-</span>
                </a>
                <a class="<?=$o?>" style="text-decoration: none;" href="<?=BASE_URL?>getBloodSample/O-">
                    <span class="heading-sm">O-</span>
                </a>
                <a class="<?=$b?>" style="text-decoration: none;" href="<?=BASE_URL?>getBloodSample/B-">
                    <span class="heading-sm ">B-</span>
                </a>
                <a class="<?=$ab?>" style="text-decoration: none;" href="<?=BASE_URL?>getBloodSample/AB-">
                    <span class="heading-sm ">AB-</span>
                </a>
            </div>
        </div>
        <table class="table-container">
            <thead>
                <tr>
                    <th>
                        Plasma Level
                    </th>
                    <th>
                        RBC Level
                    </th>
                    <th>
                        WBC Level
                    </th>
                    <th>
                        Sugar Level
                    </th>
                    <th>
                        Quantity
                    </th>
                    <th>
                        Hospital Name
                    </th>
                    <th>
                        Address
                    </th>
                    <th>
                        Contact
                    </th>
                    <th>
                        Place Request
                    </th>
                    
                </tr>
            </thead>
            <tbody class="tbody">
                <div class="threshold-box">
                    <?php
                    if($getBloodSample->num_rows() == 0){ ?>
                    <span>
                        <img src='<?=BASE_URL?>static/img/sad.jpg'><br>
                        no sample found
                    </span>
                    <?php } ?>
                </div>
                <?php 
            $i = 0;
            
                
             
            foreach ($getBloodSample->result() as $row) {
                ?>
                <tr>
                    <td>
                        <?=$row->plasma_level?>
                    </td>
                    <td>
                        <?=$row->rbc_level?>
                    </td>
                    <td>
                        <?=$row->wbc_level?>
                    </td>
                    <td>
                        <?=$row->sugar_level?>
                    </td>
                    <td>
                        <?=$row->unit?>
                    </td>
                    <td>
                       <?=$row->name?>   
                    </td>
                    <td>
                        <?=$row->address?>
                    </td>
                    <td>
                        <?=$row->mobile?>
                    </td>
                    <td>
                        <button onclick="placeRequest(<?=$row->id?>,<?=$row->h_id?>)" class="small-size-active-button small-font">request</button>
                    </td>
                    
                </tr>
              <?php
              }
              ?>  
                
            </tbody>
        </table>
    </div>
    <!-- main section end =========================================================================== -->
    <script type="text/javascript">
        function placeRequest(id,h_id){

        var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log(this.responseText)
                if(this.responseText === "hospital"){
                    swal("Opps!!!", "Hospital cannot place request..", "error");
                }else if(this.responseText === "login"){
                    swal("Opps!!!", "Login as Receiver to place request..", "error");
                }else{
                    swal("Requested","sample requested", "success");
                }
               
            }else{
                swal("Opps!!!", "Something went wrong..", "error");
            }
          };
          xhttp.open("POST", "<?=BASE_URL?>receiver/placeRequestSubmit", true);
          xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          xhttp.send("id="+id);
    }
    </script>
</body>
</html>