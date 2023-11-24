<html>

<head>
  <meta charset="UTF-8">
  <meta name="description" content="gym project">
  <meta name="keywords" content="HTML,CSS,XML,JavaScript">
  <meta name="author" content="Aalamjot Singh">
  <meta name="viewport" content="width=device-width, initial-scale=0.4">


<title>  Power Gym  </title>

<!-- fontawesome, jquerry and google maps -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-CE6pKg1Iuz1b9YgDLqszfhM3D7xKKaT/c6cPhB+q3KJDRnlaSjU3D+LcA1KV3QFg7ckJo+ypskEtwRsfD2ntHg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha384-5LkB+5w8XBWGlNEIYa0k6jA9gT3M6U9YsT/XB1N6w6U7ZvuTcGgS9saPsisXxsGv" crossorigin="anonymous"></script>

</head>

<!---------------------------- php navbar --------------------->
<?php include 'navbar.php'; ?>


<!---------------------------- javascript --------------------->
<script src="main.js"></script>
<script src="responsive_navbar.js"></script>

<!------------------------------- css ------------------------------------->
<link rel="stylesheet" href="CSS/upperbody.css" type="text/css">
<link rel="stylesheet" href="CSS/midbody.css" type="text/css">

<link rel="stylesheet" href="CSS/mainstyle.css" type="text/css">
<link rel="stylesheet" href="CSS/table.css" type="text/css">
<link rel="stylesheet" href="CSS/photogallery.css" type="text/css">



<!-- responsive navbar -->
<!-- <script>
  function navbarFunction() {
    var x = document.getElementById("navbar");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }
</script> -->

<body onload="loaded()">


  <div class="upperbody" id="transition" id="backgoundcolorusage"
        style="background-image: url('Images/guy_deadlift.jpg');">
      <ol id="olusage" id="olusage">
      <li id="liusage"><a style="text-decoration: none;" href="#">Home</a></li>
      <li id="floatusage" id="ausage"><a style="text-decoration: none;" href="#about">About</a></li>
      <li><a style="text-decoration: none;" href="#Pricing">Pricing</a></li>
      <li><a style="text-decoration: none;" href="#contact">Contact</a></li>
    </ol>

    <div style="height: 70px;" id="h1usage"></div>
    <h1>Power Gym</h1>

  </div>
  <div class="upperbodydata" id="cssparagraph">
    <span id="dropcap">A</span><br>
    <p>t our hardcore modern upscale gym, we take fitness to the next level.
       Our state-of-the-art facility features top-of-the-line equipment, world-class trainers, 
       and an electrifying atmosphere that will push you to your limits. Whether you're a
       seasoned athlete or just starting your fitness journey, we have everything you need
       to achieve your goals and surpass them.
    </p>
  </div>




  </div>
  <div class="row" id="flexusage">
    <div class="midbody">

    </div>
    <div class="services">
      <h1 style="text-shadow: 0 0 3px #FF0000; font-family: 'Times New Roman', Times, serif;" id="txtshadow">Services
      </h1>

      <blockquote style="margin-left: auto; margin-right: auto;">
        At our gym, we pride ourselves on offering a diverse selection of classes to cater to every fitness level and interest.
        Our classes range from high-intensity interval training to powerlifting to kickboxing and everything in between.
         Our trainers are experienced and passionate about helping you reach your personal fitness goals, and they work
          with you to design a program that suits your needs and abilities.

        We understand that nutrition is a vital component of any fitness journey, which is why we offer customized meal
         plans and nutritional coaching to help you fuel your body for optimal performance. Our expert coaches will
          work with you to develop a personalized plan that fits your lifestyle and dietary requirements,
           ensuring that you are getting the right balance of nutrients to help you achieve your fitness goals.
      </blockquote>



    </div>
  </div>



  <!------------------------------------------------------- photo gallery  ------------------------------------------------------------------>
  <hr id="hrusage">
  <div class="row" id="shadow">
    <div class="photo_galery">
      <a href="https://www.lifefitness.com/en-us/hammer-strength" target="_blank">
        <img src="Images/hammerstrength.png">
      </a>
    </div>
    <div class="photo_galery" id="imgsusage"> <a href=""><img src="Images/alexander-jawfox-Kl2t5U6Gkm0-unsplash.jpg"></a>
    </div>
    <div class="photo_galery"> <img src="Images/kettlebells.jpg"></div>
    <div class="photo_galery"> <img src="Images/guy_deadlift.jpg"></div>

  </div>
 

<body>

<h2 style="text-align:center">Slideshow Gallery</h2>

<div class="container">
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
    <img src="resized_img/bruce-mars-gJtDg6WfMlQ-unsplash.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <img src="resized_img/cardio.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <img src="resized_img/deadlift2.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <img src="resized_img/deadlift3.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
    <img src="resized_img/emily-sea-coiWR0gT8Cw-unsplash -phone.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
    <img src="resized_img/sven-mieke-jO6vBWX9h9Y-unsplash.jpg" style="width:100%">
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  
  </div>
</div>

<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("demo");
  let captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
    


  <!------------------------------------------------------------------------------ Multimedia video --------------------------------------------------------------------------------------------------------------->

  
  <hr>
  <div style="display:flex; flex-wrap: wrap; text-align: center; margin: 20px;" class="row" id="video">
    <h1>
      GYM walkthrough
    </h1>

    <video width="100%" height="100%" controls>
      <source src="vid.mp4" type="video/mp4">

    </video>

  </div>
  <div id="validate" class="row"
    style="background-color: grey;text-align: center;height: auto;padding: 10px;margin: 70px;">

    <span style="color: white;margin: auto; ;display:block;text-align:center ; font-size: xx-large;"
      id="signupfornewslator "> Subscribe for news and promotions</span>
    <form action="#" id="form1">

      <input type="text" placeholder="First Name" style="margin-left :5px;" id="firsts">
      <input type="text" placeholder="Last" style="margin-left: 5px;" id="lasts">
      <input type="text" placeholder="Email" style="margin-left: 5px;" id="emails">
      <input type="submit" value="Subscribe" id="submits" onclick="validate()">
    </form>



  </div>
  <br>
  <hr>
  <br>
  <h1 style="text-align: center;margin: 10px; font-family: 'Times New Roman', Times, serif;letter-spacing: 10px; ">Pricing
  </h1>
  <br>
<!------------------------------------------------------------------------------ table --------------------------------------------------------------------------------------------------------------->

  <table class="table" id="pricingTable">
    <thead>
      <tr>
        <th></th>
        <th>Basic</th>
        <th>Standard</th>
        <th>VIP</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Full acces to equipment</td>
        <td><i class="fa fa-check"></td>
        <td Yes><i class="fa fa-check"></i></td>
        <td><i class="fa fa-check"></i></td>
      </tr>
      <tr>
        <td>Strength Training</td>
        <td><i class="far fa-check-circle"></i></td>
        <td><i class="far fa-check-circle"></i></td>
        <td><i class="fa fa-check"></i></td>
      </tr>
      <tr>
        <td>Yoga</td>
        <td><i class="far fa-check-circle"></i></td>
        <td><i class="fa fa-check"></i></td>
        <td><i class="fa fa-check"></i></td>
      </tr>
      <tr>
        <td>Pilates</td>
        <td><i class="far fa-times-circle"></i></td>
        <td><i class="fa fa-check"></i></td>
        <td><i class="fa fa-check"></i></td>
      </tr>
      <tr>
        <td>Cardio</td>
        <td><i class="fa fa-check"></i></td>
        <td><i class="fa fa-check"></i></td>
        <td><i class="fa fa-check"></i></td>
      </tr>
    </tbody>
    <tfoot>
      <tr>
        <td></td>
        <td>$60/month</td>
        <td>$75/month</td>
        <td>$99/month</td>
      </tr>
    </tfoot>
  </table>


  <br>
  <hr>
  <br>
  <div class="membership_form" id="contact">
    <div style="text-align:center">
      <h2>Membership Form</h2>

    </div>
    <div class="row" id="location_map">
      <div class="column">
        <h1>Demo Location </h1>
        <!-- <iframe src="https://www.google.com/maps/place/Thompson+Rivers+University,+805+Tru+Way,+Kamloops,+BC+V2C+0C8/@50.6707684,-120.3660271,17z/data=!4m6!3m5!1s0x537e2c5fd4b3fa8d:0x9373b6f9763ebbf4!8m2!3d50.6707684!4d-120.3660271!16zL20vMDNfOGQ1" width="500px" height="500 px" frameborder="0"></iframe> -->
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2377.484367872934!2d-120.3658186843114!3d50.67131437950879!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x537e2c5fd4b3fa8d%3A0x9373b6f9763ebbf4!2sThompson%20Rivers%20University%2C%20805%20Tru%20Way%2C%20Kamloops%2C%20BC%20V2C%200C8%2C%20Canada!5e0!3m2!1sen!2sca!4v1636149296563!5m2!1sen!2sca" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
<!------------------------------------------------------------------------------ form --------------------------------------------------------------------------------------------------------------->
      <form action="#" method="post" id="Pricing">
        <h2>Membership Information</h2>
        <div>
          <label for="membership_type">Membership Type:</label>
          <select id="membership_type" name="membership_type" required>
            <option value="" selected disabled>Select Membership Type</option>
            <option value="basic">Basic</option>
            <option value="standard">Standard</option>
            <option value="premium">Premium</option>
          </select>
        </div>
        <div>
          <label for="membership_length">Membership Length:</label>
          <select id="membership_length" name="membership_length" required>
            <option value="" selected disabled>Select Membership Length</option>
            <option value="1_month">1 Month</option>
            <option value="3_months">3 Months</option>
            <option value="6_months">6 Months</option>
            <option value="1_year">1 Year</option>
          </select>
        </div>
        <h2>Personal Information</h2>
        <div>
          <label for="full_name">Full Name:</label>
          <input type="text" id="full_name" name="full_name" required>
        </div>
        <div>
          <label for="email">Email Address:</label>
          <input type="email" id="email" name="email" pattern="^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$"
            placeholder="Aalamjot@CallofDuty.com" required>
        </div>
        <div>
          <label for="phone_number">Phone Number:</label>
          <input type="tel" id="phone_number" name="phone_number" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
            placeholder="123-456-7891" required>
        </div>
        <div>
          <label for="address">Address:</label>
          <input type="text" id="address" name="address" placeholder="Address" required>
        </div>
        <div>
          <label for="city">City:</label>
          <input type="text" id="city" name="city" placeholder="City" required>
        </div>
        <div>
          <label for="state">State:</label>
          <input type="text" id="state" name="state" placeholder="state" required>
        </div>
        <div>
          <label for="zip_code">Zip Code:</label>
          <input type="text" id="zip_code" name="zip_code" pattern="[A-Za-z]\d[A-Za-z] \d[A-Za-z]\d"
            placeholder="V2C 1M1" required>
        </div>
        <div>
          <label for="country">Country:</label>
          <input type="text" id="country" name="country" required>
        </div>
        <button type="submit">Submit</button>
      </form>
      <style>
        .row {
          display: flex;
          flex-wrap: wrap;
        }
      
        .column {
          flex: 50%;
          padding: 10px;
        }
      
        #Pricing {
          flex: 50%;
          padding: 10px;
        }
      
        @media screen and (max-width: 768px) {
          .row {
            flex-direction: column;
          }
          .column {
            flex: 100%;
          }
          #Pricing {
            flex: 100%;
          }
        }
      </style>
      
      <script>
        document.addEventListener('DOMContentLoaded', () => {
          // Get all form input elements
          const formInputs = document.querySelectorAll('input, select');

          // Add event listeners for input validation and styling
          formInputs.forEach(input => {
            // Check input validity on input change or blur
            input.addEventListener('input', () => {
              if (input.checkValidity()) {
                // Valid input, remove red border
                input.style.border = '';
              } else {
                // Invalid input, add red border
                input.style.border = '5px solid red';
              }
            });

            // Highlight selected dropdown option
            if (input.tagName === 'SELECT') {
              input.addEventListener('change', () => {
                const selectedOption = input.options[input.selectedIndex];
                selectedOption.style.backgroundColor = 'yellow';
                setTimeout(() => {
                  selectedOption.style.backgroundColor = '';
                }, 1000); // Reset color after 1 second
              });
            }
          });
        });
      </script>
      <style>
        /* Highlight invalid form elements */
        input:invalid,
        select:invalid {
          border-color: red;
        }

        /* Style error messages */
        input:invalid+span::before,
        select:invalid+span::before {
          content: '⚠ ';
          color: red;
          margin-right: 5px;

        }


        /* Disable submit button by default */
        button[type="submit"] {
          opacity: 0.5;
          pointer-events: none;
        }

        /* Enable submit button if form is valid */
        form:valid button[type="submit"] {
          opacity: 1;
          pointer-events: auto;
        }
      </style>

    </div>

  </div>
  <!--------------------------------------------- footer ---------------------------------------------->
  <footer id="javascript_example">

    <h2> Last Updated </h2>
    <p style="font-size: medium;" id="date"></p>
    Made By Aalamjot Singh &#169;
    <br>
    <h4><a href="crossreference.html">Crossrefernce page</a></h4>
    <span>Present Time</span>
    <p style="font-size: large;" id="time"></p>
  </footer>

  </div>
</body>

</html>