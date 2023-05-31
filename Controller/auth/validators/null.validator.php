<?php 

    function checkNull(array $params): void
    {
        foreach($params as $param):
            if(empty($param)): die(header("location: ../../../index.php?error=nullparams")); endif;
        endforeach;
    }
?>