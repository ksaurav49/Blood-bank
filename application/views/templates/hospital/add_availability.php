
    <div class="receiver-sheet" style="height: 800px;">
        
        <div class="right-box" style="width: 100%;">
            <i class="material-icons label-icons cancel-cross">cancel</i>
            <span class="button-group-center heading-sm">Post Blood Availability</span>
            <div class="inputs-boxes">
                <form action="<?=BASE_URL?>hospital/addBloodSubmit" method="post">
                    <div class="inputs inputs-sm">
                        <span class="heading-sm">BLOOD GROUP :</span>
                        <select name="grp" id="grp" required="">

                            <option value="" style="cursor: not-allowed;" disabled selected>
                                ---- SELECT ----</option>
                            <option value="A+">A+</option>
                            <option value="O+">O+</option>
                            <option value="B+">B+</option>
                            <option value="AB+">AB+</option>
                            <option value="A-">A-</option>
                            <option value="O-">O-</option>
                            <option value="B-">B-</option>
                            <option value="AB-">AB-</option>
                        </select>
                        <span class="error" id="grp_text"></span>
                    </div>
                    <div class="inputs inputs-sm">
                        <span class="heading-sm">PLASMA LEVEL :</span>
                        <select name="plasma_level" id="level" required="">

                            <option value="" style="cursor: not-allowed;" disabled selected>
                                ---- SELECT ----</option>
                                <option value="LOW">LOW</option>
                                <option value="MODERATE">MODERATE</option>
                                <option value="HIGH">HIGH</option>
                        </select>
                        <span class="error" id="level_text"></span>
                    </div>
                    <div class="inputs inputs-sm">
                        <span class="heading-sm">RBC LEVEL :</span><br>
                        <select name="rbc_level" id="rbc_level" required="">

                            <option value="" style="cursor: not-allowed;" disabled selected>
                                ---- SELECT ----</option>
                                <option value="LOW">LOW</option>
                                <option value="MODERATE">MODERATE</option>
                                <option value="HIGH">HIGH</option>
                        </select>
                    </div>
                    <div class="inputs inputs-sm">
                        <span class="heading-sm">WBC LEVEL :</span><br>
                        <select name="wbc_level" id="wbc_level" required="">

                            <option value="" style="cursor: not-allowed;" disabled selected>
                                ---- SELECT ----</option>
                                <option value="LOW">LOW</option>
                                <option value="MODERATE">MODERATE</option>
                                <option value="HIGH">HIGH</option>
                        </select>
                    </div>
                    <div class="inputs inputs-sm">
                        <span class="heading-sm">SUGAR LEVEL :</span>
                        <select name="sugar_level" id="sugar_level" required="">

                            <option value="" style="cursor: not-allowed;" disabled selected>
                                ---- SELECT ----</option>
                                <option value="LOW">LOW</option>
                                <option value="MODERATE">MODERATE</option>
                                <option value="HIGH">HIGH</option>
                        </select>
                    </div>
                    <div class="inputs" style="line-height: 7;">
                        <input type="number" name="qnt" id="qnt" required >
                        <label for="qnt">
                            <i class="material-icons label-icons">science</i>&nbsp;QUANTITY :
                        </label>
                    </div>
        
            <div class="button-group-center">      
            <button class="add-availability" type="submit">POST AVAILABILTY</button>
        </div>
            </form>
            </div>
        </div>
</body>
    <?php     
    if($this->session->flashdata('success')){
        $msg=$this->session->flashdata('success');
    if($msg == "yes"){  ?>
         <script> swal("Blood-info Added!", "Browse to add more...", "success");</script>
    <?php }else{ ?>
        <script>swal("opps !!!", "Something went wrong...", "error");</script>
   <?php     
    }
    }

?>

</html>