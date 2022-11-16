<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">  


        <title>Courses</title>
        <link rel="icon" type="image/x-icon" href="res/school-image.png">
        <!-- <link rel="stylesheet" type="text/css" href="./styles/form.css" /> -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous"> 
    </head>
    <body style="background-color: lightgray">
    <?php 
        include "templates/navbar.php";
    ?>
        <div class="container" style="margin-top: 15px;">
            <div class="row col-md-12" style="text-align:center">
                <h1 style="margin-top: 20px; margin-bottom: 20px">Friend List for <?php echo $name?> </h1>
                <p>View all your friends, and you can either remove them as a friend :( or you can view their schedule! (TODO: implement the button that allows you
                        to view someone elses schedule)</p>
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
                <?php if (empty($friends)){
                    echo '<div class="card">
                    <div class="card-body">
                    <h5 class="card-title">You have no friends.</h5>
                         <p class="card-text">:(</p>
                    </div>
                 </div>'; 
                } else {
                    foreach ($friends as $key=>$value){
                        # get the names
                        $friend = $this->db->query("SELECT * FROM student WHERE studentId = ?","s", $value["friendId"]);
                        // print_r($name);
                        echo 
                       '<div class="card" style="margin-bottom: 10px;">
                            <div class="row card-body" style="justify-content: end;">
                                <div class="col-md-9" style="padding-top: 15px">
                                    <h5 class="card-title">'.$friend[0]["name"] ." (" . $value["friendId"] .')</h5>
                                    <p class="card-text">Major: '.$friend[0]["major"] .'&emsp;  Minor: ' .$friend[0]["minor"]   .' &emsp; Year: '.$friend[0]["schoolYear"]  .'</p>
                                </div>
                                <div class="col-md-3"  style="padding-top: 0px; padding-left: 145px;">
                                   
                                        <span class="spanFormat">
                                            <form action="?command=viewFriendSchedule" method="post">
                                                <input style="width: 130px" type="submit" value="View Schedule" name="action" class="btn btn-warning" title="Accept friend request" />      
                                                <input type="hidden" name="friendId" id="friendId" value='.$value["friendId"] .'/>
                                            </form>
                                        </span> <div style="height: 10px"></div>
                                        <span class="spanFormat" >
                                            <form action="?command=removeFriend" method="post">
                                                <input style="width: 130px" type="submit" value="Remove Friend" name="action" class="btn btn-danger" title="Remove Friend" />      
                                                <input type="hidden" name="friendId" id="friendId" value='.$value["friendId"] .'/>
                                            </form>
                                        </span>

                                </div>
                            </div> 
                        </div>'; 
                    }
                }
                ?>
            </div>

        </div>
        <hr>
        <?php 
        include "templates/footer.php";
    ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    </body>
</html>