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
                <h1 style="margin-top: 20px">Add Friends</h1>
                <p style="margin-top: 20px">Send friend requests to other students! Enter in student ID's the search bar below to find other students.   </p>
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

                <form action="?command=addFriend" method="POST">
                    <div class="row">
                        <div class="col-md-11">
                            <input type="search" name="friendId" id="friendId" required class="form-control rounded" placeholder="Search computing ID" aria-label="Search" aria-describedby="search-addon" />
                            <input type="hidden" name="madeASubmit" id="madeASubmit" value='true'/>
                        </div>
                        <div class="col-md-1">
                            <button type="submit" class="btn btn-primary">search</button>
                        </div>
                    </div>
                </form>
            </div>
                    <br><br><br>
            <div>
                <?php if ($madeASearch == true){
                    if ($noResults){
                        echo '<div class="card">
                            <div class="card-body">
                            <h5 class="card-title">There are no results for your search criteria</h5>
                                 <p class="card-text">Enter in a full, valid computing ID (i.e. ka5vky).</p>
                            </div>
                         </div>'; 
                    } else {
                        if ($yourself){
                            echo '<div class="card">
                            <div class="card-body">
                            <h5 class="card-title">you searched for yourself</h5>
                            </div>
                         </div>'; 
                        } else {
                            echo '<div class="card">
                            <div class="card-body">
                            <h5 class="card-title"> '.$idSearch[0]["name"]. ' ('.$idSearch[0]["studentId"] . ')</h5>
                                 <p class="card-text">Year: '.$idSearch[0]["schoolYear"] .'</p>
                                 <p class="card-text">Major: '.$idSearch[0]["major"] .'</p>
                                 <p class="card-text">Minor: '.$idSearch[0]["minor"] .'</p>
                                 <form action="?command=addNewFriend" method="post">
                                    <input type="submit" value="Add Friend" name="action" class="btn btn-primary" title="Add Friend" />   
                                    <input type="hidden" name="addFriendID" id="addFriendID" value='. $idSearch[0]["studentId"] .'/> 
                                    <input type="hidden" name="addFriendName" id="addFriendName" value='. $idSearch[0]["name"] .'/>    
                                 </form>
                            </div>
                         </div>'; 
                        }
                       
                    }
                    
                } else {
                    echo "";
                } ?>
                
            </div>
        </div>
        <hr>
        <?php 
        include "templates/footer.php";
    ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    </body>
</html>