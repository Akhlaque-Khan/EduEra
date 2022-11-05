<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="Main.css">
    <link rel="stylesheet" href="dictionary.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js">
        </script>
        <style>
            #details{
    display: flex;
    align-items: center;
    background-color: bisque;
    width:auto;
    height: 400px;
    justify-content: center;
    border-radius: 30px;
                
            }
            #input{
                border:2 solid white;
    height: 2.5rem;
    width: 30rem;
    border-radius:44px;
    margin:4px;
    font-size: 20px;
    text-align: center;
    color:cadetblue;
    font-family: serif;
    font-weight: bolder;
            }
            #span{
                color:black;
            }
        </style>
</head>
<body>
<div class="grid-container">
<div class="content1">
<?php include 'content.php'; ?>
    </div>
    <div id="dictionary" style="background-color:bisque; border-radius:15px;">
       <h2 style="font-size:40px;fon-weight:600">Welcome To <span class="auto-type" style="color:green;font-size:40px;fon-weight:600;"></span></h2> 
       <div id="details"><form action="./Student_record/Connect_profile.php" method="POST">
       <input type="text" placeholder="Enter Your School Name" id="input" name="school-name"><br>
       <input type="text" placeholder="School Roll Number" id="input" name="roll-no"><br>
       <span id="span">Select Your Class:</span>
        <select name="select" id="select"> 
            <option value="CLASS-1">CLASS-1</option>
            <option value="CLASS-2">CLASS-2</option>
            <option value="CLASS-3">CLASS-3</option>
            <option value="CLASS-4">CLASS-4</option>
            <option value="CLASS-5">CLASS-5</option>
            <option value="CLASS-6">CLASS-6</option>
            <option value="CLASS-7">CLASS-7</option>
            <option value="CLASS-8">CLASS-8</option>
            <option value="CLASS-9">CLASS-9</option>
            <option value="CLASS-10">CLASS-10</option>
            <option value="CLASS-11">CLASS-11</option>
            <option value="CLASS-12">CLASS-12</option>
            
        </select><br>
        <button type="submit" class="register">Submit</button>

       




       </form>
</div>
    </div>
    <div>
<?php include 'dictionary.php'; ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
        var typed = new Typed(".auto-type", {
            strings:["EduEra","Best Learning Platform","Achieve"],
            typeSpeed:100,
            backSpeed:100,
            loop:true
        })
    </script>
</body>
</html>
