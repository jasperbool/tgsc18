<?php defined('G_IN_SYSTEM')or exit('No permission resources.'); ?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>支付</title>
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>
    <form id="payform" class="form-inline" method="post" action="<?php  echo $tjurl;  ?>">
        <?php 
            foreach ($jsapi as $key => $val) {
                echo '<input type="hidden" name="' . $key . '" value="' . $val . '">';
            }
         ?>
        <button type="submit" class="btn btn-primary btn-lg btn-form"></button>
    </form>

    <script>
        $(document).ready(function(){
            $('#payform').submit();
        });
    </script>
</body>
</html>