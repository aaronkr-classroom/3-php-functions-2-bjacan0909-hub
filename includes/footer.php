<?php
    function wrin_copyright() {
       $year = date("Y");
        echo '&copy; ' . $year ;
    }
?>
<footer>
    <?php wrin_logo(); ?>
    <?php wrin_copyright(); ?>
</footer>
</body>
</html>