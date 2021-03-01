

?>


<?php

    $sql = "SELECT * from article ORDER BY published";

    $result = mysqli_query($conn,$sql);


    if (mysqli_error($conn)) {
        # code...

        echo 'the error of mysql '.mysqli_error($conn);
    }
    else {

        check_result($str1);
        // print_r($result);

        $article = mysqli_fetch_all($result,MYSQLI_NUM);

        // print_r($article);
        // print('<br>');

        // var_dump($article);

        print "<table border='1px'>";
        for ($i=0; $i < count($article); $i++) { 
            # code...
            print '<tr>';
            for ($j=0; $j < count($article[$i]); $j++) { 
                # code...
                print '<td>';
                print $article[$i][$j];
                print '</td>';
            }



            print '</tr>';

        }
        print "</table>";
    }



?>


<?php
    if (isset($_REQUEST['welcome'])) {
        # code...

        $title = $_REQUEST['loginnumber'];
        $content = $_REQUEST['loginname'];
       


        $sql = "INSERT INTO article(loginnumber,loginname)
                VALUES('".$loginnumber."','".$loginname."')";


        $result = mysqli_query($conn,$sql);


        if (mysqli_error($conn)) {
            # code...
            echo 'the problem with request '.mysqli_error($conn);
        }
        else {
            $loginnumber = mysqli_insert_id($conn);
            echo 'this is '.$id;
        }


    }
    else {
        require('example.html');
    }
