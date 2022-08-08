<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Main.css">
    <link rel="stylesheet" href="dictionary.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <script src="navigate.js"></script>
   <script src="Calculator.js"></script>
   <script src=
"https://cdnjs.cloudflare.com/ajax/libs/mathjs/10.6.4/math.js"
        integrity=
"sha512-BbVEDjbqdN3Eow8+empLMrJlxXRj5nEitiCAK5A1pUr66+jLVejo3PmjIaucRnjlB0P9R3rBUs3g5jXc8ti+fQ=="
        crossorigin="anonymous" 
        referrerpolicy="no-referrer"></script>
    <script src=
"https://cdnjs.cloudflare.com/ajax/libs/mathjs/10.6.4/math.min.js"
        integrity=
"sha512-iphNRh6dPbeuPGIrQbCdbBF/qcqadKWLa35YPVfMZMHBSI6PLJh1om2xCTWhpVpmUyb4IvVS9iYnnYMkleVXLA=="
        crossorigin="anonymous" 
        referrerpolicy="no-referrer"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
   <script>
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("id1").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "Login.php", true);
  xhttp.send();
}
</script>
    <title>EduEra</title>
</head>
<body>
<div class="grid-container">
    
    <div class="content1">
    <nav class="navigate">
        <center>
        <div class="zishan" id="flip">CONTENTS</div>
        <div class="panel">HOME</div>
        <div class="panel" id="about">ABOUT US</div>
        <div id="us">
               <img src="Inam.jpeg" alt="" class="image">
               <p style="font-size:17px;font-weight:bolder;">Founder of EduEra</p>
               <p>Inam Khan</p>
               <p>Alumuni of BIT(2023 Batch)
               Working as senior SDE in Amazon</p>
               <img src="Zishan.jpeg" alt="" class="image">
               <p style="font-size:17px;font-weight:bolder;">Co-Founder of EduEra</p>
               <p>Md Zishan</p>
               <p>Alumuni of BIT(2023 Batch)
               Working as senior SDE in Google</p>
        </div>
        <div class="panel" id="feedbackup">FEEDBACK</div>
        <div id="feedback"><h3>Write Your Experience With Us</h3><input type="textarea" style="height:150px;width:160px;"></div>
        <div class="panel" id="contactup">CONTACT US</div>
        <div id="contact">
           <h3>MOBILE NUMBER
           <i class='fas fa-phone-square-alt' style='font-size:23px'></i> 9142200711 <br> 
           <i class="fas fa-envelope-open" style="font-size:23px;"></i><span style="font-size:15px;">inam1402@gmail.com</span>
           <i class="fas fa-address-open" style="font-size:20px;">37/H/3 Canal East Road Kolkata-700011</i>
           </h3>
        </div>
</center>
</nav>
</div>

   
    <div class="main" id="id1">
    <center>
        <h1 class="head"><span class="first">E</span>du<span class="first">E</span>ra</h1>
<div class="form">
    <form action="SignUpHelp.php" method="POST">
    <div>

        <input type="text" name="name" placeholder="Enter Your Full Name" class="input" required><br>
        <input type="text" name="fname" placeholder="Enter Your Father's Name" class="input"required><br>
        <input type="email" name="email" placeholder="Enter Your Email"class="input" required><br>
        <input type="text" name="address" placeholder="Enter Your Address"class="input" required><br>
        <input type="text" name="phone" placeholder="Enter Your Phone Number"class="input" required><br>
        <span>Select Your Gender:&nbsp;</span><select value="" name="gender"class="gender" id="">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Secret">Secret</option>
        </select><br>
        <button type="submit" class="register" >Register</button><br>
        <span>If Already Registered Then Login Here</span>&nbsp;
        <button type="submit" class="Login"  onclick="loadDoc()">Login</button>

    </div>
</form>
</div>
</center>
    </div>
    <div class="dictionary">
    <div class="wrapper">
      <header>English Dictionary</header>
      <div class="search">
        <input type="text" placeholder="Search a word" required spellcheck="false">
        <i class="fas fa-search"></i>
        <span class="material-icons">close</span>
      </div>
      <p class="info-text">Type any existing word and press enter to get meaning, example, synonyms, etc.</p>
      <ul>
        <li class="word">
          <div class="details">
            <p>__</p>
            <span>_ _</span>
          </div>
          <i class="fas fa-volume-up"></i>
        </li>
        <div class="content">
          <li class="meaning">
            <div class="details">
              <p>Meaning</p>
              <span class="mean">___</span>
            </div>
          </li>
          <li class="example">
            <div class="details">
              <p>Example</p>
              <span class="mean">___</span>
            </div>
          </li>
          <li class="synonyms">
            <div class="details">
              <p>Synonyms</p>
              <div class="list"></div>
            </div>
          </li>
        </div>
      </ul>
    </div>
    <script src="dictionary.js"></script>
</div>
</div>
</body>
</html>