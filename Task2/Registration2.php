<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>REGISTRATION</title>
  </head>
  <body>
  
  <?php



         
         $Sname = $Smail = $Sgender = $Spass = $Scomment = "";
         $name = $email = $pass = $gender = $comment = $hobby = "";
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") 
		 {
            if (empty($_POST["Name"])) 
			{
               $Sname = "Enter your Name";
            }
			else 
			{
               $name = test_input($_POST["Name"]);
            }
            
            if (empty($_POST["email"])) 
			{
               $Smail = "Enter your email";
            }
			else 
			{
               $email = test_input($_POST["email"]);

            }
            
            if (empty($_POST["pass"])) 
			{
               $Spass = "Enter your password";
            }
			else 
			{
               $pass = test_input($_POST["pass"]);
            }
            
            if (empty($_POST["comment"])) 
			{
               $Scomment = "Enter your comment";
            }
			else 
			{
               $comment = test_input($_POST["comment"]);
            }
            
            if (empty($_POST["gender"])) 
			{
               $Sgender = "Enter your gender";
            }
			else 
			{
               $gender = test_input($_POST["gender"]);
            }
         }
         
         function test_input($data) 
		 {
			 $data = trim($data);
             $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }
      ?>
	  
	  
  <form action="" method="POST">
  
      <legend><h2>Registration Form</h2></legend>
     
     
      <?php 
         echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"
    
    <table border="0">

      <tr>
       
        <td>Full Name:</td>
		<td></td>
		<td></td>
        <td><input name="name" type="text">
		<span class = "error">* <?php echo $Sname;?></span>
		</td>		
      </tr>

      <tr>
       


        <td>E-mail:</td>
		<td></td>
		<td></td>
        <td><input name="email" type="text">
		<span class = "error">* <?php echo $Smail;?></span>
		</td>

      </tr>
	  
	   <tr>
        


        <td>Password:</td>
		<td></td>
		<td></td>
        <td><input name="pass" type="password">
		<span class = "error">* <?php echo $Spass;?></span>
		</td>

      </tr>
	  
	  <tr>
       
        <td>Comment:</td>
		<td></td>
		<td></td>
        <td><textarea name="comment" id="10" cols="35" rows="6"></textarea>
        <td><textarea name="comment" id="10" cols="35" rows="6"></textarea>
		<span class = "error">* <?php echo $Scomment;?></span>
        </td>

      </tr>
	  <tr>
        
        <td>Gender:</td>
		<td></td>
		<td></td>
		<td>
        <input type="radio" name="gender">Female
		<input type="radio" name="gender">Male
		<input type="radio" name="gender">Other
		<span class = "error">* <?php echo $Sgender;?></span>

		</td>

      </tr>
	  
	   <tr>
        
        <td>Please Choose a hobby:</td>
		<td></td>
		<td></td>
        <td>


		<input type="checkbox" name="hobby">Singing
		<input type="checkbox" name="hobby">Dancing
		<input type="checkbox" name="hobby">Reading
		</td>

      </tr>
	  
	  <tr>
       
        <td>Please Choose a file:</td>
		<td></td>
		<td></td>
        <td> <input type="file"</td>
      </tr>

    </table>
	

	  <input type="submit" value="Submit">
	  <input type="reset">
	  
  </form>

	  
  </body>
</html>