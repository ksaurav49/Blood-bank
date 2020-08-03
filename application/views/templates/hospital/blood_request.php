
<!-- main section start ========================================================================= -->
<div class="main-section-container">
    <p class="page-heading">Requested Blood Samples</p>
    <table class="table-container">
        <thead>
            <tr>
                <th>
                    S. NO
                </th>
                <th>
                    Name
                </th>
                <th>
                    Contact no.
                </th>
                <th>
                    Address
                </th>
                <th>
                    Blood Group
                </th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 0;
            foreach ($requestedBloodData->result() as $row) {
                ?>
                <tr id="tr<?=$row->id?>">
                    <td>
                        <?=++$i?>
                    </td>
                    <td>
                        <?=$row->name?>
                    </td>
                    <td>
                        <?=$row->mobile?>
                    </td>
                    <td>
                        <?=$row->address?>
                    </td>
                    <td>
                        <span class="blood-group-data"> <?=$row->type?></span>
                    </td>
                    
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <!-- main section end =========================================================================== -->

</body>
</html>