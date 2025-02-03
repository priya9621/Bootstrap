<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="title icon" type="Images/png" href="./Images/favicon-v4.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link rel="stylesheet" href="./css/fontawesome.css">
    <title>Pure Bootstrap Website</title>

  </head>
  <body>

  <nav class="navbar navbar-expand-md navbar-light bg-dark">

      <a href="#" class="navbar-brand"><i class="fas fa-child text-warning fa-2x"></i></a>
     
      <button type="button" class="navbar-toggler bg-light" data-toggle="collapse" data-target="#nav">
        <span class="navbar-toggler-icon"></span>
      </button>
     
    <div class="collapse navbar-collapse" id="nav">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link text-light text-uppercase font-weight-bold px-3" href="Home.php">Home</a></li>
        <li class="nav-item"><a class="nav-link text-light text-uppercase font-weight-bold px-3" href="Skills.php">Skills</a></li>
        
        <li class="nav-item"><a class="nav-link text-light text-uppercase font-weight-bold px-3" href="Project.php">Project</a></li>
          
        
        <li class="nav-item"><a class="nav-link text-light text-uppercase font-weight-bold px-3" href="Team.php">Team</a></li>
        <li class="nav-item"><a class="nav-link text-light text-uppercase font-weight-bold px-3" href="Progress-Bar.php">Progress Bar</a></li>
        <li class="nav-item"><a class="nav-link text-light text-uppercase font-weight-bold px-3" href="Login-Form.php">Login</a></li>
        <li class="nav-item"><a class="nav-link text-light text-uppercase font-weight-bold px-3" href="Contact-Us.php ">Contact</a></li>
      </ul>

      <form action="" class="form-inline">
        <div class="input-group">
            <input type="text" placeholder="Search" class="form-control">
            <div class="input-group-append">
               <button type="button" class="btn">
                 <i class="fas fa-search text-muted"></i>
               </button>
            </div>
        </div>
      </form>
    </div> 
    </nav>
    
       <!--Skills--> 

       <section class="bg-light p-5">
          
       
       <div class="container-fluid">
            <div class="col text-center">
              <button class="btn btn-warning btn-lg px-4"><h4 class="text-dark">Add Skills</h4></button>
              <br/><br/>

              <div class="table col-lg-12 col-sm-12 max-auto mb-5"> 
              <table class="table table-bordered table-striped">
                
                <tr class="bg-dark text-white">
                    <div class="col-lg-12 text-center mb-3">
                  
                  <th type="text">Id</th>
                  <th type="text">Skills Name</th>
                  <th type="text">Skill Icon</th>
                  <th type="text">Skill Description</th>
                  <th type="text">Edit</th>
                  <th type="text">Delete</th>
                     </div>
                </tr>

                <tr>
                  <td>1</td>
                  <td>Development</td>
                  <td><i class="fas fa-desktop fa-2x text-warning mb-3"></i></td>
                  <td><p class="text my-4">Program development is the process of creating application.</p></td>
                <td>
                <i class="fas fa-edit fa-2x text-info mb-3"></i>
                </td>
                <td>
                <i class="fas fa-trash fa-2x text-danger mb-3"></i>
                </td>
                </tr>

                <tr>
                  <td>2</td>
                  <td>Design</td>
                  <td><i class="fas fa-pen fa-2x text-warning mb-3"></i></td>
                  <td><p class="text my-4">Design includes planning for the learning environment and experience.</p></td>
                  <td>
                  <i class="fas fa-edit fa-2x text-info mb-3"></i>
                  </td>
                  <td>
                  <i class="fas fa-trash fa-2x text-danger mb-3"></i>
                  </td>
                </tr>

                <tr>
                  <td>3</td>
                  <td>Creativity</td>
                  <td><i class="fas fa-cogs fa-2x text-warning mb-3"></i></td>
                 <td> <p class="text-dark my-4">Coding can be used to create a huge range of creative outputs,from websitesto visualisations.</p></td>
                  <td>
                  <i class="fas fa-edit fa-2x text-info mb-3"></i>
                  </td>
                  <td>
                 <i class="fas fa-trash fa-2x text-danger mb-3"></i>
                </td>
                </tr>

              </table>
              </div>
            </div>
            </div>
</section>
        <!--Project Section-->

       <section class="bg-light p-5">
          <div class="container-fluid">
            <div class="col text-center">
              <button class="btn btn-warning btn-lg px-4"><h4 class="text-dark">Projects</h4></button>
              <br/><br/>

              <div class=" table col-lg-12 col-sm-12 max-auto mb-5"> 
              <table class="table table-bordered table-striped">
                
                <tr class="bg-dark text-white">
                    <div class="col-lg-12 text-center mb-3">
                  
                  <th type="text">Id</th>
                  <th type="text">Project Name</th>
                  <th type="text">Project Image</th>
                  <th type="text">Project Description</th>
                  <th type="text">Edit</th>
                  <th type="text">Delete</th>
                     </div>
                </tr>

                <tr>
                  <td>1</td>
                  <td>Project 1</td>
                  <td><img src="Images/1.jpg" class="img-thumbnail border border-secondary"/></td>
                  <td><p class="text my-4">A piece of work, often involving many people that is planned organized carefully.
            To plane something that will happen in the future. </p></td>
                <td>
                <i class="fas fa-edit fa-2x text-info mb-3"></i>
                </td>
                <td>
                <i class="fas fa-trash fa-2x text-danger mb-3"></i>
                </td>
                </tr>

                <tr>
                  <td>2</td>
                  <td>Project 2</td>
                  <td><img src="Images/2.jpg" class="img-thumbnail border border-secondary"/></td>
                  <td><p class="text my-4">A piece of work, often involving many people that is planned organized carefully.
            To plane something that will happen in the future. </p></td>
                  <td>
                  <i class="fas fa-edit fa-2x text-info mb-3"></i>
                  </td>
                  <td>
                  <i class="fas fa-trash fa-2x text-danger mb-3"></i>
                  </td>
                </tr>

                <tr>
                  <td>3</td>
                  <td>Project 3</td>
                  <td><img src="Images/3.jpg" class="img-thumbnail border border-secondary"/></td>
                 <td> <p class="text-dark my-4">A piece of work, often involving many people that is planned organized carefully.
            To plane something that will happen in the future. </p></td>
                  <td>
                  <i class="fas fa-edit fa-2x text-info mb-3"></i>
                  </td>
                  <td>
                 <i class="fas fa-trash fa-2x text-danger mb-3"></i>
                </td>
                </tr>

                <tr>
                  <td>4</td>
                  <td>Project 4</td>
                  <td><img src="Images/4.jpg" class="img-thumbnail border border-secondary"/></td>
                  <td> <p class="text-dark my-4">A piece of work, often involving many people that is planned organized carefully.
            To plane something that will happen in the future. </p>
                </td>
                <td>
                  <i class="fas fa-edit fa-2x text-info mb-3"></i>
                  </td>
                  <td>
                 <i class="fas fa-trash fa-2x text-danger mb-3"></i>
                </td>
            </tr> 
                
              </table>
              </div>
            </div>
            </div>
</section>
       
       <!--Teams-->

       <section class="bg-light p-5">
          <div class="container-fluid">
            <div class="col text-center">
              <button class="btn btn-warning btn-lg px-4"><h4 class="text-dark">Teams</h4></button>
              <br/><br/>

              <div class="table col-lg-12 col-sm-12 max-auto mb-5"> 
              <table class="table table-bordered table-striped">
                
                <tr class="bg-dark text-white">
                    <div class="col-lg-12 text-center mb-3">
                  
                  <th type="text">Id</th>
                  <th type="text">Teams Name</th>
                  <th type="text">Teams Image</th>
                  <th type="text">Team Description</th>
                  <th type="text">Soical Media</th>
                  <th type="text">Edit</th>
                  <th type="text">Delete</th>
                     </div>
                </tr>

                <tr>
                  <td>1</td>
                  <td>Ann</td>
                  <td><img src="Images/Ann.jpeg" class="img-thumbnail border border-warning"/></td>
                  <td><p class="text my-4">A team is defined as group of people.who perform interdepeendent task to work toward accomlishing a specific objective.</p></td>
            <td>
            <div>
                        <a href="#">
                          <i class="fab fa-facebook fa-2x mx-2 text-info"></i>
                        </a><br/><br/>
                        <a href="#">
                          <i class="fab fa-twitter fa-2x mx-2 text-primary"></i>
                        </a>
                      </div>
            </td>
                <td>
                <i class="fas fa-edit fa-2x text-info mb-3"></i>
                </td>
                <td>
                <i class="fas fa-trash fa-2x text-danger mb-3"></i>
                </td>
                </tr>

                <tr>
                  <td>2</td>
                  <td>Emma</td>
                  <td><img src="Images/Emma.jpeg" class="img-thumbnail border border-warning"/></td>
                  <td><p class="text my-4">A team is defined as group of people. who perform interdepeendent task to work toward accomlishing a specific objective. </p></td>
            <td>
            <div>
                        <a href="#">
                          <i class="fab fa-facebook fa-2x mx-2 text-info"></i>
                        </a><br/><br/>
                        <a href="#">
                          <i class="fab fa-twitter fa-2x mx-2 text-primary"></i>
                        </a>
                      </div>
            </td>
                  <td>
                  <i class="fas fa-edit fa-2x text-info mb-3"></i>
                  </td>
                  <td>
                  <i class="fas fa-trash fa-2x text-danger mb-3"></i>
                  </td>
                </tr>

                <tr class="table table-active">
                  <td>3</td>
                  <td>Michael</td>
                  <td><img src="Images/Michael.jpeg" class="img-thumbnail border border-warning"/></td>
                 <td> <p class="text-dark my-4">A team is defined as group of people. who perform interdepeendent task to work toward accomlishing a specific objective. </p></td>
            <td>
            <div>
                        <a href="#">
                          <i class="fab fa-facebook fa-2x mx-2 text-info"></i>
                        </a><br/><br/>
                        <a href="#">
                          <i class="fab fa-twitter fa-2x mx-2 text-primary"></i>
                        </a>
                      </div>
            </td>
                  <td>
                  <i class="fas fa-edit fa-2x text-info mb-3"></i>
                  </td>
                  <td>
                 <i class="fas fa-trash fa-2x text-danger mb-3"></i>
                </td>
                </tr>

              </table>
              </div>
            </div>
            </div>
</section>

       <!--Progress-->

       <section class="bg-light p-5">
          <div class="container-fluid">
            <div class="col text-center">
              <button class="btn btn-warning btn-lg px-4"><h4 class="text-dark">Progress Bar</h4></button>
              <br/><br/>

              <div class="table col-lg-12 col-sm-12 max-auto mb-5"> 
              <table class="table table-striped table-bordered">
                
                <tr class="bg-dark text-white">
                    <div class="col-lg-12 text-center mb-3">
                  
                  <th type="text">Id</th>
                  <th type="text">Course Name</th>
                  <th type="text">Course Description</th>
                  <th type="text">Progress Bar</th>
                  <th type="text">Edit</th>
                  <th type="text">Delete</th>
                     </div>
                </tr>

                <tr>
                  <td>1</td>
                  <td>HTML</td>
                  <td>Hyper Text Markup Language</td>
                  <td> <div class="progress bg-secondary mb-3">
                <div class="progress-bar" style="width: 50%;">
                 50%
                </div>
              </div>
            </td>
                <td>
                <i class="fas fa-edit fa-2x text-info mb-3"></i>
                </td>
                <td>
                <i class="fas fa-trash fa-2x text-danger mb-3"></i>
                </td>
                </tr>

                <tr>
                  <td>2</td>
                  <td>CSS</td>
                  <td>Cascading Style Sheet</td>
                  <td><div class="progress-bar bg-warning" style="width: 70%;">
                70%
                 </div>
              </div>
            </td>
                  <td>
                  <i class="fas fa-edit fa-2x text-info mb-3"></i>
                  </td>
                  <td>
                  <i class="fas fa-trash fa-2x text-danger mb-3"></i>
                  </td>
                </tr>

                <tr>
                  <td>3</td>
                  <td>JavaScript</td>
                  <td>JavaScript to make web pages interactive.</td>
                 <td><div class="progress bg-secondary mb-3">
                <div class="progress-bar bg-danger" style="width: 90%;">
                90%
                </div>
              </div></td>
                  <td>
                  <i class="fas fa-edit fa-2x text-info mb-3"></i>
                  </td>
                  <td>
                 <i class="fas fa-trash fa-2x text-danger mb-3"></i>
                </td>
                </tr>

                <tr>
                  <td>4</td>
                  <td>Bootstrap</td>
                  <td>Bootstrap the world's most popular framework.</td>
                  <td>
                  <div class="progress bg-secondary mb-3">
                <div class="progress-bar bg-danger" style="width: 90%;">
                90%
                </div>
              </div>
                </td>
                <td>
                  <i class="fas fa-edit fa-2x text-info mb-3"></i>
                  </td>
                  <td>
                 <i class="fas fa-trash fa-2x text-danger mb-3"></i>
                </td>
            </tr> 
                
              </table>
              </div>
            </div>
            </div>
</section>

       <!--Contact-->
      
       <section class="bg-light p-5">
          <div class="container-fluid">
            <div class="col text-center">
              <button class="btn btn-warning btn-lg px-4"><h4 class="text-dark">Contact Us</h4></button>
              <p class="lead text-secondary text-row">Communication with someone</p>
              
              <div class=" table col-lg-12 col-sm-12 max-auto mb-5"> 
              <table class="table table-bordered table-striped">
                
                <tr class="bg-dark text-white">
                    <div class="col-lg-12 text-center mb-3">
                  
                  <th type="text">Sr.no</th>  
                  <th type="text">Name</th>
                  <th type="text">E-mail</th>
                  <th type="text">Message</th>
                  <th type="text">Submit</th>
                  <th type="text">Edit</th>
                  <th type="text">Delete</th>
                     </div>
                </tr>

                <tr>
                  <td>1</td>
                  <td>Radha</td>
                  <td>Radha123@gmail.com</td>
                  <td>Hello Sir</td>
                  <td>Submit</td>
                <td>
                <i class="fas fa-edit fa-2x text-info mb-3"></i>
                </td>
                <td>
                <i class="fas fa-trash fa-2x text-danger mb-3"></i>
                </td>
                </tr>
              </table>
              </div>
            </div>
            </div>
</section>
       
       <!--Footer-->
       
       <footer class="bg-secondary">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h1 class="text-white font-weight-light text-capitalize p-3">
                Pure Bootstrap Project
              </h1>
              <h3 class="text-light font-weight-light font-italic p-3">
                Lorem, ipsum dolor.
              </h3>
              <div class="py-2">
                <a href="#">
                  <i class="fab fa-facebook fa-2x text-primary mx-3"></i>
                </a>
                <a href="#">
                  <i class="fab fa-google fa-2x text-danger mx-3"></i>
                </a>
                <a href="#">
                  <i class="fab fa-twitter fa-2x text-info mx-3"></i>
                </a>
                <a href="#">
                  <i class="fab fa-youtube fa-2x text-danger mx-3"></i>
                </a>
              </div>
              <p class="text-light py-4 m-0">
                &copy; Copyright 2023
              </p>
            </div>
          </div>
        </div>
       </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="./js/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="./js/bootstrap.min.js"></script>
  </body>
</html>