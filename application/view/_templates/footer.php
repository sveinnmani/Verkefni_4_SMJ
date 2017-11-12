
    <div class="footer">
        <?php
        $fromYear = 2017; 
        $thisYear = (int)date('Y'); 
        if ($fromYear == $thisYear) {
            echo $fromYear . " Sveinn Máni";
        }
        else {  
            echo $fromYear . (($fromYear != $thisYear) ? '-' . $thisYear : ''). " Sveinn Máni";  
        }
       ?>
    </div>

    <!-- jQuery, loaded in the recommended protocol-less way -->
    <!-- more http://www.paulirish.com/2010/the-protocol-relative-url/ -->
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <!-- define the project's URL (to make AJAX calls possible, even when using this in sub-folders etc) -->
    <script>
        var url = "<?php echo URL; ?>";
    </script>

    <!-- our JavaScript -->
    <script src="<?php echo URL; ?>js/application.js"></script>
</body>
</html>
