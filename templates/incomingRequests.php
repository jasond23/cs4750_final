<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">  


        <title>Courses</title>
        <link rel="icon" type="image/x-icon" href="res/school-image.png">
        <!-- not sure which one it is -->
        <link rel="stylesheet" type="text/css" href="./styles/form.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous"> 
    </head>
    <body style="background-color: lightgray">
    <?php 
        include "templates/navbar.php";
    ?>
        <div class="container" style="margin-top: 15px;">
            <div class="row col-md-12" style="text-align:center">
                <h1 style="margin-top: 20px">Incoming requests</h1><br><br><br>
                <p style="margin-top: 20px">View your incoming requests here. Pending requests are friend requests that other students have sent to you. 
                    You can either accept or deny the request.</p>
                <?php
                if (isset($error_msg) && !empty($error_msg)) {
                    echo "<div class='alert alert-danger'>$error_msg</div>";
                } elseif (isset($success_msg) && !empty($success_msg)) {
                    echo "<div class='alert alert-success'>$success_msg</div>";
                } 
            ?>
            </div>
            <hr>
            <h4 style="text-align: center"> </h4>
    
            <div class="row">
                <?php if (empty($request)){
                    echo '<div class="card">
                    <div class="card-body">
                    <h5 class="card-title">You have no incoming requests.</h5>
                         <p class="card-text">No one wants to be your friend.</p>
                    </div>
                 </div>'; 
                } else {
                    foreach ($request as $key=>$value){
                        # get the names
                        $name = $this->db->query("SELECT * FROM student WHERE studentId = ?","s", $value["senderId"]);
                        // print_r($name);
                        echo 
                       '<div class="card" style="margin-bottom: 10px;">
                            <div class="row card-body" style="justify-content: end;">
                                <div class="col-md-10">
                                    <h5 class="card-title">from: '.$name[0]["name"] ." (" . $value["senderId"] .')</h5>
                                    <p class="card-text">on: '. $value["sendDate"] .'</p>
                                </div>
                                <div class="col-md-2"  style="padding-top: 10px; padding-left: 77px;">
                                   
                                        <span class="spanFormat">
                                            <form action="?command=acceptRequest" method="post">
                                                <input style="width: 40px" type="submit" value="✓" name="action" class="btn btn-success" title="Accept friend request" />      
                                                <input type="hidden" name="senderId" id="senderId" value='.$value["senderId"] .'/>
                                                <input type="hidden" name="studentId" id="studentId" value='.$value["studentId"] .'/>
                                            </form>
                                        </span>
                                        <span class="spanFormat">
                                            <form action="?command=denyRequest" method="post">
                                                <input style="width: 40px" type="submit" value="✕" name="action" class="btn btn-danger" title="Deny friend request" />      
                                                <input type="hidden" name="studentId" id="studentId" value='.$value["studentId"] .'/>
                                                <input type="hidden" name="senderId" id="senderId" value='.$value["senderId"] .'/>
                                            </form>
                                        </span>

                                </div>
                            </div> 
                        </div>'; 
                    }
                }
                ?>
            </div>
                    <br><br><br><br><br>

        </div>
        <hr>
        <?php 
        include "templates/footer.php";
    ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    </body>
</html>