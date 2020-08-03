
<!-- main section start ========================================================================= -->
<div class="main-section-container">
    <p class="page-heading">Added Blood Samples</p>
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
                        <input type="text" id="unit<?=$row->id?>" value="<?=$row->unit?>" readonly>
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
                swal("Great!", "Blood-info updated..", "success");
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