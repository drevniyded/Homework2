<!DOCTYPE html>
<html> 
  <head>
    <title>Registration</title>
    <meta charset="utf-8" />
  </head>
  <body>
  	     <form action="index.php" method="POST" name="registerform">
         <fieldset class="form_field">
         	<BR>
<SELECT lang=''>
<OPTION value=" "></OPTION>
<OPTION value="RU">RU</OPTION>
<OPTION value="DE">DE</OPTION>
<OPTION value="UA">UA</OPTION>
<OPTION value="EN">EN</OPTION>
<OPTION value="FR">FR</OPTION>
</SELECT>
<?php
$lang = ' ';
     switch ($lang) {
     	case 'EN':
     		echo "Hello, user!";
     		break;
        case 'RU':
     		echo "Привет. пользователь!";
     		break;
     	case 'UA':
     		echo "Привіт, користувач!";
     		break;
        case 'DE':
     		echo "Hallo, der Benutzer!";
     		break;	
     	case 'FR':
     		echo "Bonjour utilisateur!";
     		break;

     	default:
     		echo "Выбрать язык";
     		break;
     }

?>
            <BR>
        <p>
             <label for="name">Name</label>
          <input type="text" id="name" value="<?php echo "$name";?>" " maxlength="25" pattern="[А-Яа-яЁёA-Za-z\s]+$" required ><span></span>
          
          <?php if($isError == 1):
	        		if(!empty($error[0])):
	        			echo $error[0];
        			endif;
        		  endif;
        		?> 
        </p>
        <p>
          <label for="sname">Sname</label>
          <input type="text" id="sname" value="<?php echo "$sname";?>"maxlength="25" pattern="[А-Яа-яЁёA-Za-z\s]+$"  required/><span></span>
           <?php if($isError == 1):
	        		if(!empty($error[0])):
	        			echo $error[0];
        			endif;
        		  endif;
        		?>
        </p>
        <p>
          <label for="mail">Email</label>
          <input type="email" id="mail" value="<?php echo "$email";?>" maxlength="25"  required/><span></span>
           <?php if($isError == 1):
	        		if(!empty($error[0])):
	        			echo $error[0];
        			endif;
        		  endif;
        		?>
        </p>
        <p>
          <label for="passw">Password</label>
          <input type="password" id="passw" value="<?php echo "$name";?>"pattern="\w{5,25}" required/><span></span>
          	<?php if($isError == 1):
	        		if(!empty($error[1])):
	        			echo $error[1];
	        		endif;
        		  endif;
        	?> 
        </p>         
        <button>Registration</button>     
          </form>
  </body>
</html>

