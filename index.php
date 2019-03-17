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