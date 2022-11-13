<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">  


        <title>Courses</title>
        <link rel="icon" type="image/x-icon" href="res/school-image.png">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous"> 
    </head>
    <body style="background-color: lightgray">
    <?php 
        include "templates/navbar.php";
    ?>
        <div class="container" style="margin-top: 15px;">
            <div class="row col-md-12" style="text-align:center">
                <h1>Course List</h1>
                <?php
                if (isset($error_msg) && !empty($error_msg)) {
                    echo "<div class='alert alert-danger'>$error_msg</div>";
                }
            ?>
            </div>
            <hr>
            <h4 style="text-align: center"> </h4>
            <div class="dropdown" style="align-self: end">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Choose Major
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="?command=allCourses&subject=all">All</a>
                    <a class="dropdown-item" href="?command=allCourses&subject=CS">CS</a>
                    <a class="dropdown-item" href="?command=allCourses&subject=APMA">APMA</a>
                    <a class="dropdown-item" href="?command=allCourses&subject=DS">DS</a>
                    <a class="dropdown-item" href="?command=allCourses&subject=STS">STS</a>
                    <a class="dropdown-item" href="?command=allCourses&subject=STAT">STAT</a>
                    <a class="dropdown-item" href="?command=allCourses&subject=PSYC">PSYC</a>
                </div>
            </div><br>
    
            <div class="row">
            <h4 style="text-align: center"> Showing <?php echo $sub ?> courses</h4>
                <div class="col-md-12">  
                    <p> 
                        <?php
                            if (empty($courses)){
                                echo "<b>There are no courses yet. Add some.<b>";
                            }
                            else{
                                echo '<table class="table table-bordered table-dark">
                                <thead>
                                  <tr>
                                    <th scope="col">Course ID</th>
                                    <th scope="col">Course Name</th>
                                    <th scope="col">Professor</th>
                                    <th scope="col">Units</th>
                                    <th scope="col">Meeting Time</th>
                                    <th scope="col">Location</th>';

                                echo '<th scope="col">Add</th>';

                                echo '    
                                  </tr>
                                </thead>
                                <tbody>';}
                                $i = 1;
                                foreach ($courses as $key=>$value){
                                    echo '<tr>
                                    
                                    <td>'. $value["subject"] . " " . $value["courseNumber"]. '</td>
                                    <td>'. $value["courseName"].'</td>
                                    <td>'. $value["professor"].'</td>
                                    <td>'. $value["creditHours"].'</td>
                                    <td>'. $value["days"]." ". $value["time"].'</td>
                                    <td>'. $value["location"].'</td>
                                    <td>
                                        <form action="?command=addCourseFromAllCourses" method="post">
                                            <input type="submit" value="add" name="action" class="btn btn-primary" title="Add Course" />      
                                            <input type="hidden" name="courseId" id="courseId" value='.$value["courseId"] .'/>
                                        </form>
                                    </td>
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