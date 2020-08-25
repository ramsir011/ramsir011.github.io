<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OSMS</title>
    <link rel="stylesheet" href="fontAwesome/css/all.css">
    <link rel="stylesheet" href="bootstrap5/css/bootstrap.css">

    <link rel="stylesheet" href="style.css">
    <style>
   img .round{
      width:100;

    }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container-fluid">
          <a class="navbar-brand text-white" href="#">OSMS</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <span class="navbar-text text-white">Coustumers Happiness is Our Aim</span>
            <ul class="navbar-nav  ml-5 style" >
              <li class="nav-item  ">
                <a class="nav-link text-white active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">Registration</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="requester/login.php">Login</a>
              </li>
              <li class="nav-item text-white">
                <a class="nav-link text-white" href="#">Contact Us</a>
              </li>
             
            </ul>
          </div>
        </div>
      </nav>  
      <!-- end ofNavbar -->  

      <header class="img-fluid" style="background-image: url(c.jpg);">
       
          <div class="container-fluid p-5">
        
            <h1 class="text-uppercase text-danger font-weight-bold">welcome to OSMS</h1>
            <p class="font-italic pclass text-white" >Customer's Happiness is our Aim</p>
            <a href=""class="btn btn-success mr-4">Sing up</a>
            <a href="requester/login.php"class="btn btn-danger mr-4">Login</a>
          </div>
      </header>

      <div class="container my-5 bg-info p-4">
           
        <h3 class="text-center text-white">OSMS SERVICES</h3>
        <hr/>
        <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum impedit 
            dolore reiciendis, ullam esse placeat doloremque nostrum unde. 
            Hic non veniam consequuntur molestiae, reiciendis sequi, ad ducimus autem soluta nam quibusdam? Nemo dolorum nesciunt accusamus architecto deleniti cupiditate consequuntur mollitia, cumque animi sapiente exercitationem, voluptates adipisci, nobis ut atque aut laborum consequatur sed in facere ipsa obcaecati ipsam! Maxime ducimus repellat blanditiis minus omnis vitae ratione a! Incidunt totam rerum vel iste voluptates tenetur commodi obcaecati harum placeat aut, autem quisquam officiis aliquid porro id, fugiat sed enim, exercitationem ratione iure saepe fuga aperiam! Qui hic 
            aut repudiandae ipsam delectus.</p>

            <!-- start introduction end -->
   </div>
    
   <div class="container text-center">
    <h2 >Our Services</h2>
    <div class="row mt-4">
     <div class="col-sm-4 mb-4">
         <a href="#"><i class="fas fa-tv fa-8x text-success"></i></a>
         <h4 class="mt-0">Electronic Appliances</h4>
     </div>
     <div class="col-sm-4 mb-4">
         <a href="#"><i class="fas fa-sliders-h fa-8x text-info"></i></a>
         <h4 class="mt-0">Electronic Appliances</h4>
     </div>
     <div class="col-sm-4 mb-4">
         <a href="#"><i class="fas fa-cogs fa-8x text-success"></i></a>
         <h4 class="mt-0">Electronic Appliances</h4>
     </div>

    </div>
   </div>    
   <!-- end of services section container -->


   <!-- start registration form -->
   <?php include "registration.php"?>;
 
 <!-- end of registration form -->
 <!-- happy costumers -->
 
<section id="team" class="bg-info">

  <div class="container">
  <h1 class="text-center text-white">Our Happy Coustumers</h1>
    <div class="row">
      <div class="col-lg-4 col-sm-6">

        <div class="card shadow-lg mb-2" style="width:20rem;">
         
          <div class="card-body text-center ml-2">
          <img src="2.jpg" alt="" class="card-img-top" style="width:5rem;height:5rem;border-radius:50%; position:center;">
            <h5 class="text-center">Shova Phuyal</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Click here for more</a>
          </div>
        </div>


      </div>
      <div class="col-lg-4 col-sm-6">

        <div class="card shadow-lg mb-2" style="width:20rem;">
         
          <div class="card-body text-center ml-2">
          <img src="2.jpg" alt="" class="card-img-top" style="width:5rem;height:5rem;border-radius:50%; position:center;">
            <h5 class="text-center">Shova Phuyal</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Click here for more</a>
          </div>
        </div>


      </div>
      <div class="col-lg-4 col-sm-6">

        <div class="card shadow-lg mb-2" style="width:20rem;">
         
          <div class="card-body text-center ml-2">
          <img src="2.jpg" alt="" class="card-img-top" style="width:5rem;height:5rem;border-radius:50%; position:center;">
            <h5 class="text-center">Shova Phuyal</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Click here for more</a>
          </div>
        </div>


      </div>
      
    




</div>
     


      </div>
    
  </div>
</div>
</section>
 <!-- end of happy costumers -->
 <!-- start contact us  -->
 <div class="container mt-5 bg-light" >
     <h2 class="text-center mb-4">Contact us</h2>
     <div class="row">
         <div class="col-md-8">
             <form action=""method="post">
                <input type="text"class="form-control"name="name"placeholder="Name"> <br>
                <input type="email"class="form-control"name="email"placeholder="Email"> <br>
                <input type="text"class="form-control"name="subject"placeholder="Subject"> <br>
                <textarea class="form-control"name="message" id="" cols="20" rows="10"placeholder="How can we hlep you?"></textarea> <br>
                <input type="Submit" class="btn btn-primary"value="Send"name="submit"><br><br>
             </form>
         </div>
         <div class="col-md-4 text-center">

        <strong>Headquarter:</strong><br>
        OSMS pvt Ltd,<br>
        MadyapurThimi-01,Bhaktapur,
        phone: 9849127058 <br>
        <a href="#"target="_blank">www.osms.com</a><br>
        <br><br>
        <strong>Branch:</strong><br>
        OSMS pvt Ltd,<br>
        MadyapurThimi-01,Bhaktapur <br>
        phone: 9849127058 <br>
        <a href="#"target="_blank">www.osms.com</a><br>
        <br><br>


         </div>
     </div>
 </div>
 <!-- start footer -->
 <footer class="container-fluid bg-dark mt-5">
  <div class="container">
      <div class="row py-3">
          <div class="col-md-6">
              <span class="pr-2 text-white">Follow us:</span>
              <a href="#"target="_blank" class="pr-2 fi-color"><i class="fab fa-facebook-f"></i></a>
              <a href="#"target="_blank" class="pr-2 fi-color"><i class="fab fa-twitter"></i></a>
              <a href="#"target="_blank" class="pr-2 fi-color"><i class="fab fa-google-plus-g"></i></a>
              <a href="#"target="_blank" class="pr-2 fi-color"><i class="fas fa-rss"></i></a>
              <a href="#"target="_blank" class="pr-2 fi-color"><i class="fab fa-youtube"></i></a>
          </div>
          <div class="col-md-6 text-right">
              <small class="text-white">Desingned by Ram Siwakoti &copy;154</small>
              <small class="ml-2"><a href="admin/login.php" >Admin Login</a></small>
          </div>
      </div>
  </div>
 </footer>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</body>
</html>
      