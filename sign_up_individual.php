<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	
		<!--<link href="css/style.css" rel="stylesheet">-->
		<link rel="stylesheet" type="text/css" href="css/sui.css">
		<script type="text/javascript" src='js/sui.js'></script>

        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script>
        $(document).ready(function(){
            $('input[type="radio"]').click(function(){
                var inputValue = $(this).attr("value");
                var targetBox = $("." + inputValue);
                $(".box").not(targetBox).hide();
                $(targetBox).show();
            });
        });
        </script>

    <title>Form</title>
</head>
<body>

    <div class="container-fluid px-1 py-5 mx-auto">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                <h3>Fill in the following details</h3>
                <div class="card">
                    <h5 class="text-center mb-4">Sign-up form</h5>
                    <form action="insert.php" method="post" class="form-card" >
                        
                        
                        
                        
                        <p>Select Type</p>
                        <div class="row justify-content-between text-left">
                            <div>
                                <label><input type="radio" name="colorRadio" value="red">Individual</label> &nbsp &nbsp
                                <label><input type="radio" name="colorRadio" value="green">Higher Education Institution</label>
                            </div>

                        <div class="red box">
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Name<span class="text-danger"> *</span></label> <input type="text" id="name" name="name" placeholder="Enter your name"> </div>
                                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Email<span class="text-danger"> *</span></label> <input type="text" id="email" name="email" placeholder="Email address" > </div>
                            </div>
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Aadhar Number<span class="text-danger"> *</span></label> <input type="text" id="aadhar" name="aadhar" placeholder="Aadhar Number" > </div>
                                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Phone number<span class="text-danger"> *</span></label> <input type="text" id="mob" name="mob" placeholder="Phone Number" > </div>
                            </div>
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-12 flex-column d-flex"> <label class="form-control-label px-3">Website/LinkedIn URL<span class="text-danger"> *</span></label> <input type="text" id="ans" name="ans" placeholder="" > </div>
                            </div>
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-12 flex-column d-flex"> <label class="form-control-label px-3">Address<span class="text-danger"> *</span></label> <input type="text" id="add" name="add" placeholder="Address" > </div>
                            </div>
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-12 flex-column d-flex"> <label class="form-control-label px-3">Password<span class="text-danger"> *</span></label> <input type="password" id="pass" name="pass" placeholder="Enter password"> </div>
                            </div>

                        </div>
                        <div class="green box">
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Organisation Name<span class="text-danger"> *</span></label> <input type="text" id="name" name="name" placeholder="Enter your name" > </div>
                                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Institution ID<span class="text-danger"> *</span></label> <input type="text" id="aadhar" name="aadhar" placeholder="Aadhar Number"> </div>
                            </div>
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Email<span class="text-danger"> *</span></label> <input type="text" id="email" name="email" placeholder="Email address" > </div>
                                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Phone number<span class="text-danger"> *</span></label> <input type="text" id="mob" name="mob" placeholder="Phone Number" > </div>
                            </div>
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-12 flex-column d-flex"> <label class="form-control-label px-3">Website/LinkedIn URL<span class="text-danger"> *</span></label> <input type="text" id="ans" name="ans" placeholder=""> </div>
                            </div>
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-12 flex-column d-flex"> <label class="form-control-label px-3">Address<span class="text-danger"> *</span></label> <input type="text" id="add" name="add" placeholder="Address"> </div>
                            </div>
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-12 flex-column d-flex"> <label class="form-control-label px-3">Password<span class="text-danger"> *</span></label> <input type="password" id="pass" name="pass" placeholder="Enter password" > </div>
                            </div>
                        </div>
                        
                        <div class="row justify-content-end">
                            <div class="form-group col-sm-6"> <button type="submit" value="submit" class="btn-block btn-primary">Submit</button> </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>