<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>ONOF</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <style>
            body {
              background-image: url('https://mavenlink.marketing/wp-content/uploads/2021/08/project-proposal-elements-guidelines.jpg');
              background-repeat: no-repeat;
              background-attachment: fixed;
              background-size: cover;
            }
        </style>

    <style>
        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }

        /* The Close Button */
        .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }
        .myBtn_multi{
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }
        #myBtn{
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }
        #mBtn{
            background-color: #2537f3; /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            width: 100px;
            height: 45px;
        }
        .modal-content{
            color: #000;
            
        }
        .modal_multi{
            width: 500px;
        }
    </style>
    <script type="text/javascript" src='js/main.js'></script>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top" /> ONOF</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#team">FAQs</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <p class="text-center">
                
                <?php 
                if(isset($_SESSION['username']))
                echo 'Welcome to our website  '.$_SESSION['username'];
   
               ?>
        </p>
        <header class="masthead" id="b1">
            <div class="container">
                <div id="d1" class="masthead-subheading">Post/Find projects under one roof.</div>
                <div class="masthead-heading text-uppercase"></div>
                <button  class="myBtn_multi">Post project</button>
                <!-- The Modal -->
                <div class="modal modal_multi">
            
                    <!-- Modal content -->
                    <div class="modal-content">
                        <span class="close close_multi">×</span>
                        <form name="myform" id="myform" class="needs-validation " method="post" action="checkk.php">
                            <div class="form-group">
                              <label for="exampleInputEmail1"><span class="text-danger"> *</span>Email address</label>
                              <input id="email" name="email" type="email" class="form-control"  placeholder="Enter email" required>
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1"><span class="text-danger"> *</span>Password</label>
                              <input id="password" name="password" type="password" placeholder="Password" required>
                            </div>
                            <div class="form-group form-check">
                              <input type="checkbox" class="form-check-input" id="exampleCheck1">
                              <label class="form-check-label" for="exampleCheck1">Accept our terms and conditions</label>
                            </div>
                          </form>
                          <button type="submit" name="submit" id="submit" value="Submit" >Login</button>
                        <a id="a1" href="C:\xampp\htdocs\SIH\hei_sign-up.html" >create an account</a>

                    </div>
                </div>
                &nbsp;&nbsp;
                <button class="myBtn_multi">Find project</button>
                <!-- The Modal -->
                <div  class="modal modal_multi">
            
                    <!-- Modal content -->
                    <div class="modal-content">
                        <span class="close close_multi">×</span>
                        <form  name="myform" id="myform" class="needs-validation " method="post" action="checkk.php">
                            <div class="form-group">
                              <label for="exampleInputEmail1"><span class="text-danger"> *</span>Email address</label>
                              <input id="email" name="email" type="email" class="form-control"  placeholder="Enter email" required>
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1"><span class="text-danger"> *</span>Password</label>
                              <input id="password" name="password" type="password" placeholder="Password" required>
                            </div>
                            <div class="form-group form-check">
                              <input type="checkbox" class="form-check-input" id="exampleCheck1">
                              <label class="form-check-label" for="exampleCheck1">Accept our terms and conditions</label>
                            </div>
                        </form>
                          <button type="submit" name="submit" id="submit" value="Submit" >Login</button>
                        <a href="C:\xampp\htdocs\SIH\sign_up_individual.html">create an account</a>
                    </div>
                   
                </div>
                &nbsp;&nbsp;
                <!-- Trigger/Open The Modal -->
                <button  class="myBtn_multi">Evaluator Login</button>
                <!-- The Modal -->
                <div class="modal modal_multi">
                    <!-- Modal content -->
                    <div class="modal-content">
                        <span class="close close_multi">x</span>
                        <form>
                            <div class="form-group">
                              <label for="exampleInputEmail1"><span class="text-danger"> *</span>Email address</label>
                              <input id="email" name="email" type="email" class="form-control"  placeholder="Enter email" required>
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1"><span class="text-danger"> *</span>Password</label>
                              <input id="password" name="password" type="password" placeholder="Password" required>
                            </div>
                        </form>
                        <br>
                        <button type="submit" name="submit" id="submit" value="Submit" >Login</button>
                    </div>
            
                </div>
            </div>
        </header>
        <!-- Services-->
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy;ONOF</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <script>
            // Get the modal
    
            var modalparent = document.getElementsByClassName("modal_multi");
    
            // Get the button that opens the modal
    
            var modal_btn_multi = document.getElementsByClassName("myBtn_multi");
    
            // Get the <span> element that closes the modal
            var span_close_multi = document.getElementsByClassName("close_multi");
    
            // When the user clicks the button, open the modal
            function setDataIndex() {
    
                for (i = 0; i < modal_btn_multi.length; i++)
                {
                    modal_btn_multi[i].setAttribute('data-index', i);
                    modalparent[i].setAttribute('data-index', i);
                    span_close_multi[i].setAttribute('data-index', i);
                }
            }
    
    
    
            for (i = 0; i < modal_btn_multi.length; i++)
            {
                modal_btn_multi[i].onclick = function() {
                    var ElementIndex = this.getAttribute('data-index');
                    modalparent[ElementIndex].style.display = "block";
                };
    
                // When the user clicks on <span> (x), close the modal
                span_close_multi[i].onclick = function() {
                    var ElementIndex = this.getAttribute('data-index');
                    modalparent[ElementIndex].style.display = "none";
                };
    
            }
    
            window.onload = function() {
    
                setDataIndex();
            };
    
            window.onclick = function(event) {
                if (event.target === modalparent[event.target.getAttribute('data-index')]) {
                    modalparent[event.target.getAttribute('data-index')].style.display = "none";
                }
    
                // OLD CODE
                if (event.target === modal) {
                    modal.style.display = "none";
                }
            };
    
    //XXXXXXXXXXXXXXXXXXXXXXX    Modified old code    XXXXXXXXXXXXXXXXXXXXXXXXXX
    
    // Get the modal
    
            var modal = document.getElementById('myModal');
    
    // Get the button that opens the modal
            var btn = document.getElementById("myBtn");
    
    // Get the <span> element that closes the modal
            var span = modal.getElementsByClassName("close")[0]; // Modified by dsones uk
    
    // When the user clicks on the button, open the modal
    
            btn.onclick = function() {
    
                modal.style.display = "block";
            }
    
    // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
                modal.style.display = "none";
            }
    
    
    
        </script>
    </body>
</html>
