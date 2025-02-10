<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Document</title>

    <link rel="title icon"type="image/png"href="./images/bs.png">
    <!-- Bootstrap CSS -->

    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"crossorigin="anonymous">
    <link rel="stylesheet"href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
    integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm"crossorigin="anonymous"/>


</head>
<body> 
   
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
            <h1 class="text-display-2">TEAM</h1>
 
</div>
</div>
           

<div class="container-center">
<a href="add-team.php" class="btn btn-dark">Add team</a>

 <!-- <button class="btn btn-dark">Add team</button>  -->
<table class="table table-striped text-center">

<thead class="text-light  bg-dark">
    <tr>
    <th>Sr.n</th>
    <th>Name</th>
    <th>Description</th>
    <th>Facebook_url
    <i class="fab fa-facebook fa-2x text-primary mx-3"></i>
    </th>
    <th>Twitter_url
    <i class="fab fa-twitter fa-2x text-info mx-3"></i>
    </th>
    <th>Youtube_url
    <i class="fab fa-youtube fa-2x text-danger mx-3"></i>
    </th>
    <th>Thumbnail</th>
    <th>Edit</th>
    <th>Delete</th>
</tr>
</thead>

<tbody class="table-bordered">
    <tr>
      <td>1</td>
      <td>Anurag</td>
      <td>Hello anurag</td>
      <td>https//:www.facebook.com/ajay_8528</td>
      <td>https//:www.twitter.com/ajay_8528</td>
      <td>https//.www.youtube.com/ajay_8528</td>

            <td class="col-lg-1 col-sm-12 max-auto mb-3">
            <img src="imagess/p5.jpg"class="thumbnail-img"width="60"height="60">
             </td>
             
             <td class="col-lg-1 col-simagess/p5.jpgm-12 max-auto mb-3">
              <a href="edit-team.php">
              <i class="fas fa-edit fa-2x text-primary mb-3"href="#"></i>
              </a>
 </td>

            <td class="col-lg-1 col-sm-12 max-auto mb-3">
              <i class="fas fa-trash fa-2x text-danger mb-3"href="#"></i>
</td>

</tr> 

<tr>
      <td>2</td>
      <td>Ajay</td>
      <td>Hello Ajay</td>
      <td>https//:www.facebook.com/karan_8528</td>
      <td>https//:www.twitter.com/rahul_8528</td>
      <td>https//.www.youtube.com/ajay_8528</td>
<td>
      <img src="imagess/p7.jpg"class="card-rounded-top"width="60"height="60">
       </td>                 

       <td class="col-lg-3 col-sm-12 max-auto mb-3">
        <a href="edit-team2.php">
        <i class="fas fa-edit fa-2x text-primary mb-3"href="#"></i>

        </a>
       </td>

         <td class="col-lg-3 col-sm-12 max-auto mb-3">
         <i class="fas fa-trash fa-2x text-danger mb-3"href="#"></i>
</td>                         
</tr>

<tr>
      
      <td>3</td>
      <td>Vijay</td>
      <td>Hello Vijay</td>
      <td>https//:www.facebook.com/vijay_5528</td>
      <td>https//:www.twitter.com/rahul_8588</td>
      <td>https//.www.youtube.com/karan_1595</td>
<td>
     <img src="imagess/p8.jpg"class="card-rounded-top"width="60"height="60">
                        
        </td>                 

         <td class="col-lg-1 col-sm-3 max-auto mb-3">
            <a href="edit-team3.php">
            <i class="fas fa-edit fa-2x text-primary mb-3"href="#"></i>

            </a>
        </td>

              <td class="col-lg-1 col-sm-3 max-auto mb-3">
              <i class="fas fa-trash fa-2x text-danger mb-3"href="#"></i>
</td>
</tr>
</table>
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