
<!-- main section start ========================================================================= -->
<p class="page-heading">Added Blood Samples</p>
<div class="main-section-container">
    
    <table class="table-container">
        <thead>
            <tr>
                <th>
                    S. NO
                </th>
                <th>
                    Hospital Name
                </th>
                <th>
                    Address
                </th>
                <th>
                    Contact no.
                </th>
                <th>
                    Type
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
                
            </tr>
        </thead>
        <tbody>
            <div class="threshold-box">
                    <?php
                    if($requestedSample->num_rows() == 0){ ?>
                    <span>
                        <img src='<?=BASE_URL?>static/img/sad.jpg'><br>
                        no request found!
                    </span>
                    <?php } ?>
                </div>
            <?php
            $i = 0;
            foreach ($requestedSample->result() as $row)
            {
                ?>
                <tr id="tr<?=$row->id?>">
                    <td>
                        <?=++$i?>
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
                        <span class="blood-group-data"> <?=$row->type?></span>
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


                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <!-- main section end =========================================================================== -->


</body>
</html>