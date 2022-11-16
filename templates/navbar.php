<!-- This is the navbar. Do an "include" in the body to make the navbar appear-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="width: 100%;height:4rem ;">
      <div class="container-xl">
        <a href="#" style="width: 7%"><img src="res/school-image.jpg" style="max-width: 70%;"></a> 
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
          <ul class="navbar-nav me-auto">

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
            <!-- <li class="nav-item">
              <a class="nav-link" aria-current="page" href="?command=addFriend"
                >Add Friend</a
              >
            </li> -->
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                Friends
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="?command=addFriend">Add Friends</a>
                <a class="dropdown-item" href="?command=pendingRequests">Pending friend requests</a>
                <a class="dropdown-item" href="?command=incomingRequests">Incoming friend requests</a>
                <a class="dropdown-item" href="?command=friendList">Friend List</a>
              </div>
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