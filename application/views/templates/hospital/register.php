<!DOCTYPE html>
<html>
<head>
  <title>jkkj</title>
  <script src="<?=BASE_URL?>static/js/validation.js"></script>
  <script src="<?=BASE_URL?>/bootstrap/js/sweet.js"></script>
</head>
<body>

  <form action="<?=BASE_URL?>hospitalRegisterSubmit" method="post" onsubmit="return registerValidation()">
    <label>Name :</label><br>
    <input type="text" name="name" value="<?php echo set_value('name'); ?>" id="name" placeholder="name"><br><br>
    <p><?php echo form_error('email'); ?></p>
    <input type="email" name="email" value="<?php echo set_value('email'); ?>" id="email" placeholder="email"><br><br>
    <input type="number" name="phone" value="<?php echo set_value('phone'); ?>" id="phone" placeholder="phone"><br><br>
    <input type="text" name="address" value="<?php echo set_value('address'); ?>" id="address" placeholder="address"><br><br>
    <input type="text" name="password" value="<?php echo set_value('password'); ?>" id="password" placeholder="password"><br><br>
    <input type="text" name="cnfPassword" value="<?php echo set_value('cnfPassword'); ?>" id="cnfPassword" placeholder="confirm password"><br><br>
    <input type="submit" name="submit" id="submit">
  </form>
</body>
</html>