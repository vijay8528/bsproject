<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"crossorigin="anonymous">
    <link rel="stylesheet"href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
    integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm"crossorigin="anonymous"/>
<script>
     function Validate(){
       var  name = document.getElementById("name").value;
       var facebook_url = document.getElementById("facebook_url").value;
        
       var twitter_url = document.getElementById("twitter_url").value;
       var youtube_url = document.getElementById("youtube_url").value;
       var message = document.getElementById("message").value;
       var img = document.getElementById("imgupd").value;

      
       if(name==""){
        alert("Please Enter Your Name...");
        document.getElementById("name").focus();
        return false;
       } 

       if(!isNaN(name)){
        alert("Please Enter Valid First Name!");
        document.getElementById("first_name").value="";
        document.getElementById("first_name").focus();
        return false;
       }

       if(name.length<3){
        alert("Please Enter Atleast 3 Char Long First Name!");
        document.getElementById("first_name").value="";
        document.getElementById("first_name").focus();
        return false;
       }

       if(facebook_url==""){
        alert("Please Enter Your Facebook_Url...");
        
        document.getElementById("facebook_url").focus();
        return false;
      } 

      if(!isNaN(facebook_url)){
        alert("Please Enter Valid Facebook_Url!");
        document.getElementById("facebook_url").value="";
        document.getElementById("facebook_url").focus();
        return false;
       }

       if(facebook_url.length<3){
        alert("Please Enter Atleast 3 Char Long  Facebook_Url!");
        document.getElementById("facebook_url").value="";
        document.getElementById("facebook_url").focus();
        return false;
       }

      if(twitter_url==""){
        alert("Please Enter Your Twitter_Url...");
        document.getElementById("twitter_url").focus();
        return false;
      } 

      if(!isNaN(twitter_url)){
        alert("Please Enter Valid Twitter_url!");
        document.getElementById("twitter_url").value="";
        document.getElementById("twitter_url").focus();
        return false;
       }

       if(twitter_url.length<3){
        alert("Please Enter Atleast 3 Char Long Twitter_url!");
        document.getElementById("twitter_url").value="";
        document.getElementById("twitter_url").focus();
        return false;
       }

      if(youtube_url==""){
        alert("Please Enter Your Youtube_url...");
        document.getElementById("youtube_url").focus();
        return false;
      } 

      if(!isNaN(youtube_url)){
        alert("Please Enter Valid Youtube_Url!");
        document.getElementById("youtube_url").value="";
        document.getElementById("youtube_url").focus();
        return false;
       }

       if(youtube_url.length<3){
        alert("Please Enter Atleast 3 Char Long Youtube_Url!");
        document.getElementById("youtube_url").value="";
        document.getElementById("youtube_url").focus();
        return false;
       }
 
      if(message.length<10){
        alert("Please Enter Atleast 10 Char Long Message!");
        document.getElementById("message").value="";
        document.getElementById("message").focus();
        return false;
       }

    if(img==""){
      alert("Please Enter Your Image...");
      document.getElementById("imgupd").focus();
      return false;
    }

      }
    </script>

</head>
<body>
    
      <!--Nav-->

<nav class="navbar navbar-expand-md navbar-light bg-dark">

<a href="#"class="navbar-brand"><i class="fas fa-child text-warning fa-2x"></i></a>
  
 <button type="button"class="navbar-toggler bg-light"data-toggle="collapse"data-target="#nav">
 <span class="navbar-toggler-icon"></span>
 </button>
 <div class="collapse navbar-collapse"id="nav">
    <ul class="navbar-nav">
       <li class="nav-item"><a class="nav-link text-light text-uppercase font-weight-bold px-3"href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link text-light text-uppercase font-weight-bold px-3"href="skill.php">skills</a></li>
          <li class="nav-item"><a class="nav-link text-light text-uppercase font-weight-bold px-3"href="project.php">project</a></li>
          
                     <li class="nav-item"><a class="nav-link text-light text-uppercase font-weight-bold px-3"href="team.php">Team</a></li>
                     <li class="nav-item"><a class="nav-link text-light text-uppercase font-weight-bold px-3"href="contact.php">Contact</a></li>
                     <li class="nav-item"><a class="nav-link text-light text-uppercase font-weight-bold px-3"href="progress.php">Progress</a></li>
                     <li class="nav-item"><a class="nav-link text-light text-uppercase font-weight-bold px-3"href="../index.php">Logout</a></li>
                     
                 </ul>
              <form action=""class="form-inline">
               <div class="input-group">
                 <input type="text"placeholder="search"class="form-control">
                  <div class="input-group-append">
                   <button type="button"class="btn">
                  <i class="fas fa-search text-muted"></i>
             </button>
         </div>
        </div>
     </form>
    </div>         
 </nav>


 <div class="container-center">
           
            <div class="col-lg-12 text-center mt-5">
            <h1 class="text-display-1">ADD TEAM</h1>
 
</div>
</div>

 <div class="row justify-content-center">
 <div class="col-lg-6 col-md-8 col-sm-10">


<form onsubmit="return Validate();">
<div class="form-group">
  <label for="name">Team Name</label>
  <input type="text" class="form-control"id="name" autofocus/>
</div> 


<div class="form-group">
  <label for="name">Facebook_url</label>
  <input type="text" class="form-control"id="facebook_url"/>
</div> 

<div class="form-group">
  <label for="name">Twitter_url</label>
  <input type="text" class="form-control"id="twitter_url"/>
</div> 

<div class="form-group">
  <label for="name">Youtube_url</label>
  <input type="text" class="form-control"id="youtube_url"/>
</div> 

<div class="form-group">
            <label for="message">Description</label>
           <textarea class="form-control"rows="3"id="message"></textarea>                                       
</div>
  
     <div>
        <label>Upload Image Thumbnail</label>
       
            <input type="file" id="imgupd" id="file">
      
</div>
     
     <button class="btn btn-warning btn-block"type="submit">Add Team</button>
    </form>
     <a href="team.php"class="text-danger">Back</a>
     </div>
    </div>

    <footer class="bg-secondary py-3 mt-5">
       <div class="container">    
         <p class="text-center text-white pt-3 fw-bold fs-6">@ 2024 Micronsol,all right reserved</p>
        </div>
    </footer>
                    

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  

</body>
</html>