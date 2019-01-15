<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Profile</title>
   <link rel="stylesheet" href="style.css">
</head>

<body>   
    
   <div class="header">
        <h1>Information</h1>
    </div>
<div class="container">
    <h1>Please Enter Your Details</h1>
   <form action="display.php" method="post">
       <h4>User Name : <input type="text" name="name" required /></h4>
       <h4>Date Of Birth : </h4><input type="date" name="birthDate" required />
       <h4>Biography:</h4>
       <textarea name="biography" id="" cols="30" rows="6" required ></textarea>
       <h4>List of Interests: </h4>
       <select name = 'subject[]' multiple size = 4 required >

           <option value="Coding">Coding</option>
           <option value="Playing Games">Playing Games</option>
           <option value="Reading">Reading</option>
           <option value="Travelling">Travelling</option>

       </select><br>
       <p><input type = 'submit' name = 'submit' value = Submit> </p>
   </form>
   </div>

   <div class="footer">
        <p>CopyRight &copy; 2019. This site is created by Zakia Afrin Jeme. All Rights Reserved.</p>
    </div>
</body>

</html>