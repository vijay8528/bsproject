<!doctype html>
<html lang="en">
    <head>
      <!--Required meta tag-->
      <meta charset="utf-8">
      <meta name="viewport"
    content="width=device-width,initial-scale=1,shrink-to-fit=no"> 
      <link rel="litle icon"type="image/png"href="image/bs.png">
       <!-- Bootstrap CSS-->
      
         <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"crossorigin="anonymous">
    <link rel="stylesheet"href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
    integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm"crossorigin="anonymous"/>

 
         
   </head>
   <body>
     <!--Nav-->
      <nav class="navbar navbar-expand-md navbar-light bg-dark sticky-top">
        
         <a href="#"class="navbar-brand"><i class="fas fa-child text-warning fa-2x"></i></a>

           <button type="button"class="navbar-toggler bg-light"data-toggle="collapse"
           data-target="#nav">
                   <span class="navbar-toggler-icon"></span>
             </button>

         <div class="collapse navbar-collapse"id="nav">
             <ul class="navbar-nav">
                   <li class="nav-item"><a class="nav-link text-light text-uppercase font-weight-bold px-3"href="">Micronsol</a></li>
                   
    </div>
    </nav>

      <div class="container-fluid">
        <div class="row justify-content-center">

        <div class="card my-5 shadow">

        <div class="card-header text-center bg-primary text-light">; 

           <h5>Login Form</h5>
</div>
          <?php
           if(isset($_GET['invalid_user'])){
                echo"<span class='text-danger'>Invalid username and password</span>";

           }
          
           ?>

         <div class="card-body bg-light">
                <form action="admin/index.php" method="post">
                    <div class="form-group">
                         <label for="name">username</label>

         <input type="text"name="user"class="form-control"placeholder="username"id="user"outofocus>
               <span id="suser"class="text-danger"></span>
        </div>

          <div class="form-group">
                <label for="password">password</label>
                <input type="password"name="pass"class="form-control"placeholder="password"id="pass">

        <span id="spass"class="text-danger"></span>
        </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block"name="btn"id="btn">Login</button>
        </div>
        </form>
        <a href="register_page.php"class="text-danger">Register here</a>

          </div>     
        </div>
        </div>
        </div>


        <!--Footer-->
          <footer class="bg-secondary fixed-botton">
          <div class="container">
              <div class="row">
                <div class="col-lg-12 text-center">
        <div class="py-2">
            <a href="#">
                <i class="fab fa-facebook fa-2x text-primary mx-3"></i>

                </a>
                <a href="#">
                <i class="fab fa-google-plus fa-2x text-danger mx-3"></i>

                </a>

                <a href="#">
                <i class="fab fa-twitter fa-2x text-info mx-3"></i>

                </a>

                <a href="#">
                <i class="fab fa-youtube fa-2x text-danger mx-3"></i>

                </a>

        </div>
         <p class="text-light py-4 m-0">
                &copy;Copyright2021 Made By CreativieWarriors
        </p>
        </div>
        </div>
        </div>
        </footer>

            <!--Optional JavaScript-->
            <!--jQuery first,then Popper.js,then Bootstrap JS--> 

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


         <title>Admin Loging Page</title>
         <script>
          $(document).ready(function(){
            $('#btn').click(function(){
              //username
              if($('#user').val==""){
                $('#suser').html("**please enter username");
                $('#user').focus();
                return false;
              }
              if($('#user').val().length<3){
                $('#suser').html("**username atleast 3char!");
                $('#user').focus();
                return false;
              }
              if($.isNumeric($('#user').val())){
                $('#suser').html("**username alphanumeric!");
                $('#user').val("");
                $('#user').focus();
                return false;
              }
              //password
              if($('#pass').val()==""){
                $('#spass').html("**please enter password");
                $('#pass').focus();
                return false;
              }
              if($('#pass').val().length<3){
              $('#spass').html("**password atleast 3 char");
              $('#pass').focus();
              return false;
              }
              if($.isNumeric(($'#pass').val())){
                $('#spass').html("**password alphanumeric!");
                $('#pass').val('');
                $('#pass').focus.();
                return false;
              } 
          
            })
          })
           
           </script>

          </head>


       