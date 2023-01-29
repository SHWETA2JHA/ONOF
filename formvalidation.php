     
<?php
  session_start();
?>
  
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    
    <link rel="stylesheet" href="style_another.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <title>Assignment</title>

    <script  >
        $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})

     </script>


<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


  <script>
  function myFunction() {
    document.getElementById("myform").reset();
  }
  </script>

<script>
  $(document).ready(function({
    $('#usererror').hide();
    var username_error = false;
    $('#username').keyup(function(){
      validateUsername();
    })
  }))
</script>



<script>
function setCookie(cname,cvalue,exdays) {
  const d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  let expires = "expires=" + d.toGMTString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
  let name = cname + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(';');
  for(let i = 0; i < ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

function checkCookie() {
  let user = getCookie("username");
  if (user != "") {
    alert("Welcome again " + user);
  } else {
     user = prompt("Please enter your name:","");
     if (user != "" && user != null) {
       setCookie("username", user, 30);
     }
  }
}
</script>



<script>

const usernameEl = document.querySelector('#username');
const emailEl = document.querySelector('#email');
const passwordEl = document.querySelector('#password');
const contactEl = document.querySelector('#contact');
const addressEl = document.querySelector('#address');

const form = document.querySelector('#submit');


const checkUsername = () => {

    let valid = false;

    const min = 3,
        max = 15;

    const username = usernameEl.value.trim();

    if (!isRequired(username)) {
        showError(usernameEl, 'Username cannot be blank.');
    } else if (!isBetween(username.length, min, max)) {
        showError(usernameEl, `Username must be between ${min} and ${max} characters.`)
    } else {
        showSuccess(usernameEl);
        valid = true;
    }
    return valid;
};


const checkEmail = () => {
    let valid = false;
    const email = emailEl.value.trim();
    if (!isRequired(email)) {
        showError(emailEl, 'Email cannot be blank.');
    } else if (!isEmailValid(email)) {
        showError(emailEl, 'Email is not valid.')
    } else {
        showSuccess(emailEl);
        valid = true;
    }
    return valid;
};

const checkPassword = () => {
    let valid = false;


    const password = passwordEl.value.trim();

    if (!isRequired(password)) {
        showError(passwordEl, 'Password cannot be blank.');
    } else if (!isPasswordSecure(password)) {
        showError(passwordEl, 'Password must has at least 8 characters that include at least 1 lowercase character, 1 uppercase characters, 1 number, and 1 special character in (!@#$%^&*)');
    } else {
        showSuccess(passwordEl);
        valid = true;
    }

    return valid;
};

const isEmailValid = (email) => {
    const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
};

const isPasswordSecure = (password) => {
    const re = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
    return re.test(password);
};

const isRequired = value => value === '' ? false : true;
const isBetween = (length, min, max) => length < min || length > max ? false : true;


const showError = (input, message) => {
    // get the form-field element
    const formField = input.parentElement;
    // add the error class
    formField.classList.remove('success');
    formField.classList.add('error');

    // show the error message
    const error = formField.querySelector('small');
    error.textContent = message;
};

const showSuccess = (input) => {
    // get the form-field element
    const formField = input.parentElement;

    // remove the error class
    formField.classList.remove('error');
    formField.classList.add('success');

    // hide the error message
    const error = formField.querySelector('small');
    error.textContent = '';
}


form.addEventListener('submit', function (e) {
    // prevent the form from submitting
    e.preventDefault();

    // validate fields
    let isUsernameValid = checkUsername(),
        isEmailValid = checkEmail(),
        isPasswordValid = checkPassword(),
        
    let isFormValid = isUsernameValid &&
        isEmailValid &&
        isPasswordValid &&
        isConfirmPasswordValid;

    // submit to the server if the form is valid
    if (isFormValid) {

    }
});


const debounce = (fn, delay = 500) => {
    let timeoutId;
    return (...args) => {
        // cancel the previous timer
        if (timeoutId) {
            clearTimeout(timeoutId);
        }
        // setup a new timer
        timeoutId = setTimeout(() => {
            fn.apply(null, args)
        }, delay);
    };
};

form.addEventListener('input', debounce(function (e) {
    switch (e.target.id) {
        case 'username':
            checkUsername();
            break;
        case 'email':
            checkEmail();
            break;
        case 'password':
            checkPassword();
            break;
    }
}));
</script>

 </head>
  <body onload="checkCookie()">
  <header id="h1" >
        <div class="container-fluid">
            <div class="row">
                <div class="col  ">
                    <img src= "l1.png" height="100px" width="150px" alt="There was supposed to be an image here" />
                </div>
                 <div class="col " >
                    &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp PHP
                    <br>
                    &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  Hypertext Preprocessor
                </div> 
                
            </div>
        </div>
    </header>
    

<div id="w1">
    <div class="w3-container">
        <br>
        <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black">Login</button>
      
        <div id="id01" class="w3-modal">
          <div class="w3-modal-content w3-card-4">
            <header class="w3-container w3-teal"> 
              <span onclick="document.getElementById('id01').style.display='none'" 
              class="w3-button w3-display-topright">&times;</span>
              <h2>Login details</h2>
            </header>
            

            <div class="w3-container">
                <form name="myform" id="myform" class="needs-validation " method="post" action="check.php">
                    <div class="form-group">
                        <label>Username: </label>
                        <input id="username" name="username" type="text" class="form-control" pattern=".{6,}"  title="6 characters minimum" required>
                    </div>
                    <div class="form-group">
                        <label>Password: </label>
                        <input id="password" name="password" type="password" class="form-control" pattern=".{8,12}" required title="8 to 12 characters">
                    </div>
                    <div class="form-group">
                        <label>Email id: </label>
                        <input id="email" name="email" type="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Contact: </label>
                        <input id="contact" name="contact" type="text" class="form-control" pattern="[7-9]{1}[0-9]{9}"  required title="Phone number with 7-9 and remaing 9 digit with 0-9">
                        
                    </div>
                    <div class="form-group">
                        <label>Address: </label>
                        <textarea id="address" name="address" type="text" class="form-control" ></textarea>
                    </div>
                    <br>
                   
                    <input type="submit" name="submit" id="submit" value="Submit" class="button" >
                    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                    <input type="button" onclick="myFunction()" value="Reset form" class="button">
                    
                    </form> 
            </div>
            <footer class="w3-container w3-teal">
              <p></p>
            </footer>
          </div>
        </div>
    </div>
</div>         
<br>
<div id="s1">
        <p class="text-center">
                
             <?php 
             if(isset($_SESSION['username']))
             echo 'Welcome to our website  '.$_SESSION['username'];

            ?>
            </p>
            <br>   
</div>   
       <div id="d1">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner" align="center">
          <div class="carousel-item active">
            <img src="p1.jpg" class="d-block w-50 h-40" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Swipe</h5>
              
            </div>
          </div>
          <div class="carousel-item">
            <img src="p2.jpg" class="d-block w-50 h-40" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Swipe</h5>
              
            </div>
          </div>
          <div class="carousel-item">
            <img src="p3.jpg" class="d-block w-50 h-40" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Swipe</h5>
              
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <br>
    <br>
   <div id="d2">
      <div class="row row-cols-1 row-cols-md-3 g-4  ">
        
        <div class="col">
          <div class="card">
            <img src="html.jpg" class="card-img-top" alt="...">
            <div class="card-body text-white bg-dark">
              <h5 class="card-title">HTML</h5>
              <p class="card-text"> <i>Hypertext Markup Language</i>
                <br>
                The HyperText Markup Language, or HTML is the standard markup language for documents designed to be displayed in a web browser.
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="css.jpg" class="card-img-top" alt="...">
            <div class="card-body text-white bg-dark">
              <h5 class="card-title">CSS</h5>
              <p class="card-text"><i>Cascading Style Sheets</i>
                <br>
                Cascading Style Sheets is a style sheet language used for describing the presentation of a document written in a markup language such as HTML. 
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="js.jpg" class="card-img-top" alt="...">
            <div class="card-body text-white bg-dark">
              <h5 class="card-title">JS</h5>
              <p class="card-text"><i>JavaScript</i>
                <br>
                JavaScript, often abbreviated as JS, is a programming language that conforms to the ECMAScript specification. .
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br>
   <!-- <nav aria-label="... bg-white">
      <ul class="pagination">
        <li class="page-item disabled">
          <span class="page-link"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp  Previous</span>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item active" aria-current="page">
          <span class="page-link">2</span>
        </li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#">Next</a>
        </li>
      </ul>
    </nav>-->
  
    <div id="ac">
    <div class="accordion accordion-flush " id="accordionFlushExample">
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingOne">
          <button class="accordion-button collapsed text-white bg-dark" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
            Tap to know more about &nbsp<b>HTML</b>
          </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body"> HTML elements are the building blocks of HTML pages. With HTML constructs, images and other objects such as interactive forms may be embedded into the rendered page. HTML provides a means to create structured documents by denoting structural semantics for text such as headings, paragraphs, lists, links, quotes and other items. HTML elements are delineated by tags, written using angle brackets. Tags such as img and input directly introduce content into the page. Other tags such as surround and provide information about document text and may include other tags as sub-elements. Browsers do not display the HTML tags, but use them to interpret the content of the page. </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingTwo">
          <button class="accordion-button collapsed text-white bg-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
            Tap to know more about&nbsp <b>CSS</b> 
          </button>
        </h2>
        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body"> CSS is designed to enable the separation of presentation and content, including layout, colors, and fonts.[3] This separation can improve content accessibility, provide more flexibility and control in the specification of presentation characteristics, enable multiple web pages to share formatting by specifying the relevant CSS in a separate .css file which reduces complexity and repetition in the structural content as well as enabling the .css file to be cached to improve the page load speed between the pages that share the file and its formatting. </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingThree">
          <button class="accordion-button collapsed text-white bg-dark" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
            Tap to know more about &nbsp <b>JS</b>
          </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body"> Alongside HTML and CSS, JavaScript is one of the core technologies of the World Wide Web.[11] Over 97% of websites use it client-side for web page behavior,often incorporating third-party libraries. All major web browsers have a dedicated JavaScript engine to execute the code on the user's device. </div>
        </div>
      </div>
    </div>
  </div>
    <br>
    
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      This website uses cookies. <a href="https://www.cookiebot.com/en/cookie-policy/">Tap for more info.</a> 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

</body>
</html>