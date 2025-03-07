<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- reset options -->
  <link rel="stylesheet" href="../../files/css/normalize.css">
  <!-- font awesome stylesheet -->
  <link rel="stylesheet" href="../../files/css/all.min.css">
  <!-- bootstrap stylesheet -->
  <link rel="stylesheet" href="../../files/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../files/css/bootstrap.min.css.map">
  <!-- component css page -->
  <link rel="stylesheet" href="../../component/comp.css">
  <!-- main css page -->
  <link rel="stylesheet" href="./reflected lab.css">
  <!-- page title -->
    <title>Open redirection</title>
    <!-- manifest file -->
    <link rel="canonical" href="https://radwaamer.github.io/Graduation-Project/" />
    <link rel="manifest" href="/Graduation-Project/manifest.json">
    <meta name="theme-color" content="#3ab8ff">
</head>
<body>




<?php
if(isset($_GET['submit'])) {
  $input = $_GET['input'];
  echo "Input Text: $input <br>";
  
  if (strpos($input, 'http') !== false) {
    // if input contains http or https, redirect to given link
    header("Location: $input");
    exit();
  }
}

?>

<!-- <form method="get">
  <label for="input">Enter text with HTML tags:</label><br>
  <input type="text" name="input" id="input"><br>
  <input type="submit" name="submit" value="Submit">
</form> -->

<div class="xss d-flex flex-column justify-content-center align-items-center mb-5">
    <div class="container  mb-2 justify-content-center align-items-center mt-4 ">
        <div class="d-flex align-items-center logo-labs position-relative mb-5">
            <div class="landing rounded-4 d-flex align-items-center justify-content-center text-center">
                    <img src="../../files/imgs/logo.png" alt="">
                </div>
                <div class="border border-0 border-start ms-2 ps-4">
                  <h2  class="text fs-2 fw-semibold border-bottom border-primary text-white "> <span class=" position-absolute "style="
                height: 68px
                top: 4rem;
            " >Open Redirection</span> 
            <a href="./Open redirection description.html"><br><span class="text2 fs-5 text-white">Back to lab description <small class="fs-6">>>></small> </span>  </a>  </h2>
                </div>
                <div class="position-absolute end-0 w-100" style="background-color: var(--main-color); height: 2px; bottom:-13px"></div>
          </div>

          <div class="back w-100 h-50  p-3 mb-2 justify-content-center align-items-center d-flex ">
              <form method="get" class="position-relative mt-2 form  d-flex align-items-center justify-content-center">
                  <input id="input" name="input" class="rounded-pill p-3 w-100 border-0 ps-4 pe-5" type="text" placeholder="Search The Blog..." data-search require>
                  <button class="btn border-0" type="submit" name="submit">
                      <i class="SearchIcon position-absolute top-50 p-3 translate-middle-y fa-solid fs-4 fa-magnifying-glass text-black-50 "role="button"
                      type="submit" name="submit" style="right: 4%;" ></i> 
                  </button>
                  
                </form>
          </div>
    
   </div>
<div class="container mt-5  d-flex flex-column">
          <div class=" text-white  mb-5   d-flex flex-column justify-content-center align-items-center "> <img class="rounded w-50 mb-3" src="../imgs/12.jpg " alt="">
          <h2 class="text-primary mb-3 fs-5">It's All Just A Click Away</h2>
           <div class="paragraph  d-flex flex-column justify-content-center align-items-center ">
           <p class=" mb-3 ms-5  d-flex  flex-column justify-content-center align-items-center fs-6"style="
    align-content: center;
    display: inline-flex;
    width: 32rem;
    margin-right: 5rem;">What I love most about Social Media is how it fills my days. Time just evaporates with every word I read, every video I watch and every pointless self-analyzing quiz I take part in.....</p>    
       <a href="./Products/Product1.html" class="btn  btn-info d-flex  mb-5" >
         <p class="fw-semibold  text-white">View post</p> </a> </div>
        </div>
        <div class=" text-white d-flex flex-column justify-content-center align-items-center  mb-5  "> <img class="rounded w-50 mb-3" src="../imgs/13.jpg " alt="">
        <h2 class="text-primary mb-3 fs-5">Lies, Lies & More Lies</h2>
           <div class="paragraph  d-flex flex-column justify-content-center align-items-center ">
           <p class=" mb-3 ms-5  d-flex  flex-column justify-content-center align-items-cente fs-6"style="
    align-content: center;
    display: inline-flex;
    width: 32rem;
    margin-right: 5rem;"> I remember the first time I told a lie. That's not to say I didn't do it before then, I just don't remember. I was nine years old and at my third school already........</p>
           <a href="./Products/Product2.html" class="btn btn-info mb-5" >
             <p class="fw-semibold text-white">View post</p> </a> </div>
   </div>
        <div class=" text-white  mb-5 d-flex flex-column justify-content-center align-items-center "> <img class="rounded w-50 mb-3" src="../imgs/10.jpg " alt="">
        <h2 class="text-primary mb-3 fs-5">I'm A Photoshopped Girl Living In A Photoshopped World</h2>
           <div class="paragraph  d-flex flex-column justify-content-center align-items-center ">
           <p class=" mb-3 ms-5  d-flex  flex-column justify-content-center align-items-cente fs-6"style="
    align-content: center;
    display: inline-flex;
    width: 32rem;
    margin-right: 5rem;"> The 'discovery' of port dates back to the late Seventeenth Century when British sailors stumbled upon the drink in Portugal and then stumbled even more slowly home with several more bottles. It has been said since then that Portugal is...</p>
           <a href="./Products/product3.html" class="btn btn-info mb-5" > 
            <p class="fw-semibold  text-white">View post</p> </a> </div>
      </div>
        <div class=" text-white  mb-5 d-flex flex-column justify-content-center align-items-center "> <img class="rounded w-50 mb-3" src="../imgs/21.jpg" alt="">
        <h2 class="text-primary mb-3 fs-5">The Do's & Don'ts of Writing Your Resume</h2>
           <div class="paragraph  d-flex flex-column justify-content-center align-items-center ">
           <p class=" mb-3 ms-5  d-flex  flex-column justify-content-center align-items-cente fs-6"style="
    align-content: center;
    display: inline-flex;
    width: 32rem;
    margin-right: 5rem;"> We all know how extremely important first impressions are, especially in the business world. Your resume is your handshake to your future employer, don't make it a sweaty limp one...........
        </p>
           <a href="./Products/product4.html" class="btn btn-info mb-5" >
             <p class="fw-semibold  text-white">View post</p> </a> </div>
         </div>
        <div class=" text-white  mb-5 d-flex flex-column justify-content-center align-items-center "> <img class="rounded w-50 mb-3" src="../imgs/image (1).jpeg " alt="">
        <h2 class="text-primary mb-3 fs-5">The history of swigging port</h2>
           <div class="paragraph  d-flex flex-column justify-content-center align-items-center ">
           <p class=" mb-3 ms-5  d-flex  flex-column justify-content-center align-items-cente fs-6"style="
    align-content: center;
    display: inline-flex;
    width: 32rem;
    margin-right: 5rem;"> The 'discovery' of port dates back to the late Seventeenth Century when British sailors stumbled upon the drink in Portugal and then stumbled even more slowly home with several more bottles. It has been said since then that Portugal is...</p>
          
            </div>
           <a href="./Products/product5.html" class="btn btn-info" > <p class="fw-semibold  text-white">View post</p> </a>
        </div>
    
       
   </div>
    
  </div>



<script src="../../component/jquery.min.js"></script>
  <!-- font awesome js -->
    <script src="../../files/js/all.min.js"></script>
    <script src="https://kit.fontawesome.com/c7495e3692.js" crossorigin="anonymous"></script>
    <!-- bootstrap js file -->
    <script src="../../files/js/bootstrap.bundle.min.js"></script>
    <script src="../../files/js/bootstrap.bundle.min.js.map"></script>
    <!-- header -->
    <!-- <script src="../../component/header.php"></script> -->
    <!-- sign in -->
    <script src="../../component/sign in.php"></script>
    <!-- sign up -->
    <script src="../../component/sign up.js"></script>
    <!-- forget password -->
    <script src="../../component/forget password.js"></script>
    <!-- profile header -->
    <!-- <script src="../component/profile header.js"></script> -->
    <!-- main js file -->
    <script src="../js/description.js"></script>
    <!-- footer -->
    <!-- <script src="../../component/footer.js"></script> -->
    <!-- qr code -->
    <script src="../../component/qr code.js"></script>
    <!-- arrow -->
    <script src="../../component/arrow.js"></script>
    <!-- component js file -->
    <script src="../../files/js/app.js"></script>
</body>
</html>
