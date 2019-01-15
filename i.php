<form action="display.php" method="post" id="usrform">
Name: <input type="text" name="name"><br>
date of birth: <input type="date" name="date"><br>
short biography:<br>
<textarea rows="4" cols="50" name="biography" form="usrform">
</textarea><br>
list of interests:<input list="lists" name="list">
 <datalist id="lists">
   <option value="playing">
   <option value="reading">
   <option value="working">
   <option value="sleeping">
   <option value="eating">
 </datalist><br>
<input type="submit">
</form>

Welcome <?php echo $_POST["name"]; ?><br>
Your date of birth: <?php echo $_POST["date"]; ?><br>
short biography: <?php echo $_POST["biography"]; ?><br>
list of interests: <?php echo $_POST["list"]; ?><br>