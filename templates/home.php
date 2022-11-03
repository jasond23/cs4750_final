<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>UVA Course Scheduler</title>
    <link rel="icon" type="image/x-icon" href="templates/school-image.png">

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" type ="text/css" href="./styles/main.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/less@4"></script>
  </head>

  <body>
    <?php 
        include "templates/navbar.php";
    ?>
    <div class="col-xs-1" align="center">
      <h1>UVA Course Scheduler</h1>
      <ul style="list-style: none; margin: 15px 0;">
        <li class="nav-item"><a class="btn btn-default" href="?command=home">
          <img src="templates/home-button.webp" width="50" /> Home
        </a></li>
        <li class="nav-item"><a class="btn btn-default" href="?command=schedule">
          <img src="templates/schedule-image.png" width="80" /> Schedule
        </a></li>
        <li class="nav-item"><a class="btn btn-default" href="?command=allCourses">
          <img src="templates/courses-image.png" width="50" /> Courses
        </a></li>
        <li class="nav-item"><a class="btn btn-default" href="?command=profile">
          <img src="templates/profile-image.png" width="50" /> Profile
        </a></li>
      </ul>
      <br><br><br><br>
    </div>
    <?php 
        include "templates/footer.php";
    ?>
</body>