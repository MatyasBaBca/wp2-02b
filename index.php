<!DOCTYPE html>
<html>
    <head>
    <body>
  <form action="submit.php" method="post" >
Jméno <input type="text" name="jmeno"><br>
Věk   <input type="number" name="vek"><br>
Pohlaví <br>
        <input type="radio" id="check" name="pohlavi" value="male"> Muž <br/>
        <input type="radio" id="check" name="pohlavi" value="woman"> Žena <br/>
     <!--   <input type="radio" id="check" name="pohlavi" value="unknown"> Neznámo <br/> -->
		<input type="submit" value="Submit">
</form>
</body>
</head>