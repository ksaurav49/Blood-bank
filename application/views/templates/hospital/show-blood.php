<p class="page-heading">Available Blood Samples</p>
<!-- main section start ========================================================================= -->
<div class="table-subheading">
    <div class="add-availability-container">
        <a href="<?=BASE_URL?>hospital/add">
            <button class="add-new-availability">+ ADD NEW</button>
        </a>
    </div>
    <table class="table-container">
        <thead>
            <tr>
                <th>
                    S. NO
                </th>
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
                    Blood Group
                </th>
                <th>
                    Quantity (in unit)
                </th>
                <th>
                    Edit
                </th>
                <th>
                    Delete
                </th>
            </tr>
        </thead>
        <tbody>
            <div class="threshold-box">
                    <?php
                    if($bloodData->num_rows() == 0){ ?>
                    <span>
                        <img src='<?=BASE_URL?>static/img/sad.jpg'><br>
                        no sample added
                    </span>
                    <?php } ?>
                </div>
            <?php
            $i = 0;
            foreach ($bloodData->result() as $row)
            {
                ?>
                <tr id="tr<?=$row->id?>">
                    <td>
                        <?=++$i?>
                    </td>
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
                        <span class="blood-group-data"> <?=$row->type?></span>
                    </td>
                    <td>
                        <input type="number" id="unit<?=$row->id?>" value="<?=$row->unit?>" readonly>
                    </td>
                    <td>
                        <i id="unit_edit<?=$row->id?>" onclick="onEditClick(<?=$row->id?>)" class="material-icons edit-icon">
                            edit
                        </i>
                        <!-- <a href="<?=BASE_URL?>editBloodInfo/?>"> -->
                            <i id="unit_save<?=$row->id?>" onclick="onSaveClick(<?=$row->id?>)" style="display: none;" class=" material-icons edit-icon">
                            save
                            </i>
                        <!-- </a> -->
                    </td>
                    <td>
                        <i class="material-icons edit-icon" onclick="onDeleteClick(<?=$row->id?>)">delete</i>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <script type="text/javascript">
    function onSaveClick(id){
        
        var unit = document.getElementById('unit'+id).value;

        var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById('unit_edit'+id).style.display = "block";
                document.getElementById('unit_save'+id).style.display = "none";
                document.getElementById('unit'+id).readOnly = true;
                swal("Blood-info updated..");
            }else{
                swal("Opps!!!", "Something went wrong..", "error");
            }
          };
          xhttp.open("POST", "<?=BASE_URL?>hospital/showBloodSubmit", true);
          xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          xhttp.send("id="+id+"&qnt="+unit);
    }
    function onDeleteClick(id){
        
        var unit = document.getElementById('unit'+id).value;

        var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                window.location.reload()
            }else{
                swal("Opps!!!", "Something went wrong..", "error");
            }
          };
          xhttp.open("POST", "<?=BASE_URL?>hospital/deleteBloodSubmit", true);
          xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          xhttp.send("id="+id);
    }
    </script>
    <!-- main section end =========================================================================== -->

    
    <script src="<?=BASE_URL?>static/js/show-blood.js"></script>

</body>
</html>