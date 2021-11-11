<?php
include("./classes/MNB.php");
?>

<form action = "?oldal=arfolyamok" method = "post">
   <fieldset>
     <legend>Adj meg egy időszakot és egy valutát</legend>
     <br>
     <input type="text" name="startDate" id="startDate" placeholder="Kezdő dátum" required><br><br>
     <input type="text" name="endDate" id="endDate" placeholder="Végső dátum" required><br><br>
	 <label for="html">EUR</label>
	 <input type="radio" id="currency" name="currency" value="EUR" required><br><br>
	 <label for="html">USD</label>
	 <input type="radio" id="currency" name="currency" value="USD" required><br><br>
	 <label for="html">CHF</label>
	 <input type="radio" id="currency" name="currency" value="CHF" required><br><br>
	 <input type="submit" name="exchange" value="Lekérdez"">

     <br>&nbsp;
   </fieldset>
</form>





