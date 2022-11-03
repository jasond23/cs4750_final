<!-- This is the navbar. Do an "include" in the body to make the navbar appear-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="width: 100%;height:4rem ;">
      <div class="container-xl">
        <a href="#"><img src="templates/school-image.jpg" style="max-width: 25%;"></a> 
        <a class="navbar-brand" href="#">UVA Course Scheduler</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>   
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          <!-- TODO: Add appropriate navbar header links and titles -->
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="?command=home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="?command=schedule"
                >Schedule?</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="?command=allCourses"
                >Courses</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="?command=profile"
                >Profile</a
              >
            </li>
          </ul>
          
          <div class="text-end">

            <?php 
            // if logged in, show logout button. Otherwise, show login and signup buttons
            if (isset($_SESSION["studentId"])){
              echo '<a href="?command=profile" class="btn btn-outline-light me-1">'.$_SESSION["studentId"].'</a>';
              echo '<a href="?command=logout" class="btn btn-danger">Logout</a>';
            }
            else{
              echo '<a href="?command=login" class="btn btn-outline-light me-2">Login</a>';
              echo '<a href="?command=signup" class="btn btn-warning">Signup</a>';
            }
            ?>
          </div>
        </div>
      </div>
</nav>