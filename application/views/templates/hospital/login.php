<!DOCTYPE html>
<html>
<head>
  <title>jkkj</title>
  <script src="<?=BASE_URL?>static/js/validation.js"></script>
  <script src="<?=BASE_URL?>/bootstrap/js/sweet.js"></script>
</head>
<body>

  <form action="<?=BASE_URL?>hospitalLoginSubmit" method="post" onsubmit="return loginValidation()">
    <p><?php echo form_error('email'); ?></p>
    <input type="email" name="email" value="<?php echo set_value('email'); ?>" id="email" placeholder="email"><br><br>
    <p><?php echo form_error('password'); ?></p>
    <input type="text" name="password" value="<?php echo set_value('password'); ?>" id="password" placeholder="password"><br><br>
    <input type="submit" name="submit" id="submit">
  </form>
</body>
</html>