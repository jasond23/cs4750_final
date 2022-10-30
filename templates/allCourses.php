<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">  


        <title>Courses</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous"> 
    </head>
    <body style="background-color: lightgray">
    <?php 
        include "templates/navbar.php";
    ?>
        <div class="container" style="margin-top: 15px;">
            <div class="row col-xs-8" style="text-align:center">
                <h1>Course List</h1>
            </div>
            <hr>
            <h4 style="text-align: center"> </h4>
            <div class="row">
                <div class="col-xs-8 mx-auto">  
                    <p> 
                        <?php
                            if (empty($courses)){
                                echo "<b>There are no courses yet. Add some.<b>";
                            }
                            else{
                                echo '<table class="table table-bordered table-dark">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Course ID</th>
                                    <th scope="col">Subject</th>
                                    <th scope="col">Professor</th>
                                    <th scope="col">Credit Hours</th>
                                    <th scope="col">Meeting Days</th>
                                    <th scope="col">Start Time</th>
                                    <th scope="col">Location</th>
                                  </tr>
                                </thead>
                                <tbody>';}
                                $i = 1;
                                foreach ($courses as $key=>$value){
                                    echo '<tr>
                                    <th scope="row">' . $i . '</th>
                                    <td>'. $value["courseId"]. '</td>
                                    <td>'. $value["subject"].'</td>
                                    <td>'. $value["professor"].'</td>
                                    <td>'. $value["creditHours"].'</td>
                                    <td>'. $value["days"].'</td>
                                    <td>'. $value["time"].'</td>
                                    <td>'. $value["location"].'</td>
                                    </tr>';
                                    $i++;
                                }
                                echo '</tbody>
                                </table>';     
                        ?>

                      </p>
                
                </div>
            </div>
        </div><br><br><br>
        <?php 
        include "templates/footer.php";
    ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    </body>
</html>