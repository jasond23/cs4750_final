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
            <?php
                if (isset($error_msg) && !empty($error_msg)) {
                    echo "<div class='alert alert-danger'>$error_msg</div>";
                }
            ?>
                <h1>Welcome, <?php echo $name ?> !</h1>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-4">
                    <h3 align="center">Profile Information</h3>
                    <table class="table table-bordered table-dark">
                        <thead>
                        <tr>
                            <th>School Year</th>
                            <td> <?php echo $schoolYear ?> </td>
                        </tr>
                        <tr>
                            <th>Major</th>
                            <td> <?php echo $major ?> </td>
                        </tr>
                        <tr>
                            <th>Minor</th>
                            <td>  <?php echo $minor ?> </td>
                        </tr>
                        <tr>
                            <th>Student Id</th>
                            <td>  <?php echo $studentId ?> </td>
                        </tr>
                        </thead>
                    </table>
                </div>
                <div style="text-align: left" class="col-md-8">  
                    <h2 style="text-align: center" >Current Courses</h2>
                    <?php
                            if (empty($studentCourses)){
                                echo "<b>There are no courses yet. Add some.<b>";
                            }
                            else{
                                echo '<table class="table table-bordered table-dark">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Course ID</th>
                                    <th scope="col">Semester ID</th>
                                    <th style="width: 5%"scope="col">Remove</th>';
                                echo '    
                                  </tr>
                                </thead>
                                <tbody>';}
                                $i = 1;
                                foreach ($studentCourses as $key=>$value){
                                    echo '<tr>
                                    <th scope="row">' . $i . '</th>
                                    <td>'. $value["courseId"]. '</td>
                                    <td>'. $value["semesterId"].'</td>
           
                                    <td>
                                        <form action="?command=removeCourseFromProfile" method="post">
                                            <input type="submit" value="X" name="action" class="btn btn-danger" title="Remove Course" />   
                                            <input type="hidden" name="studentId" id="studentId" value='.$studentId.'/>   
                                            <input type="hidden" name="courseId" id="courseId" value='.$value["courseId"] .'/>
                                            <input type="hidden" name="semesterId" id="semesterId" value='.$value["semesterId"] .'/>
                                        </form>
                                    </td>
                                    </tr>';
                                    $i++;
                                }
                                echo '</tbody>
                                </table>';     
                        ?>
                </div>
            </div>
        </div><br><br><br>
        <?php 
        include "templates/footer.php";
    ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    </body>
</html>