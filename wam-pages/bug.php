<?php

// Datei Pr�fen
if(!isset($mysql_connect)){ exit(); } file_check("logged");

if(!empty($_POST["message"])){

	$post_bug_message = $_POST["message"];

	mail($site_admin_email, "".$site_title." - Fehler melden", $post_bug_message, "");

	system_message("Die Nachricht wurde erfolgreich an den Administrator gesendet!");

}

?>
				 <script type="text/javascript">
				 function checkform ( form )
                 {
				 if (form.message.value == "") { alert( "Nem t�lt�tted ki az �zenet mez�t!" ); form.message.focus(); return false; }
				 return true ;
				 }
				 </script>
				 
		     <table class="body3" cellspacing="0" cellpadding="0">
			   <tr>
			     <td class="body3-title">
				 
				     Fehler melden<img class="nav-icon" src="<?php echo theme_file("images/icons/bug.png"); ?>" alt="Hibajelent�s" />
				 
				 </td>
			   </tr>
			   <tr>
			     <td class="body3-body">
				 
				     <table class="location-info" cellspacing="0" cellpadding="0">
                        <tr>
                          <td class="location-info-img">
						  
						  <img src="<?php echo theme_file("images/icons/info.png"); ?>" alt="Inform�ci�" />
						  
						  </td>
						  <td class="location-info-text">
						  
						  Sollten sie im Accountmanagement einen Fehler finden das vieleicht eine Funktion nicht funktioiert oder sie auch Ungarischen Text gesehn haben k�nnen Sie es uns hier dr�ber mitteilen! (Bitte keine Bugs posten die das Spiel selber betreffen daf�r haben wir andere m�glichkeiten die auch besser sind
						  
						  </td>
						</tr>
					</table>
					
				 <form action="?id=bug" method="POST" onsubmit="return checkform(bug);" name="bug"> 
				 <table cellspacing="0" cellpadding="0" class="body5">
				   <tr>
				     <td align="center">
					 Nachricht: <a href="#" title="Hier�ber senden sie den Bug direckt an den Admin: <?php echo $site_admin_email; ?>"><font class="mini">[?]</font></a><br /><textarea name="message" class="normal" cols="50" rows="5"></textarea><br /><input class="input-sbm" type="submit" value="Senden" />
				     </td>
				   </tr>
				 </table>
				 </form>
				 
				 </td>
			   </tr>
			 </table>