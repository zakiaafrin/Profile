<?php include "inc/header.php"; ?>
    <h1>Please Enter Your Details</h1>
   <form action="display.php" method="post" enctype="multipart/form-data">
       <h4>User Name : <input type="text" name="name" required /></h4>
       <h4>User Image : <input type="file" name="fileToUpload" id="fileToUpload" required></h4>
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
<?php include "inc/footer.php"; ?>