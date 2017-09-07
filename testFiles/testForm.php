<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js'></script>
<script type='text/javascript' src='testForm.js'></script>
<script type='text/javascript' src='are-you-sure.js'></script>
</head>
<body>

<form id="addBreakoutForm" action="testForm.php" method="post">
<select style="width:22em;" name="breakoutNameInput" id="breakoutNameInput">
      <option class="breakoutCandidate" value="Red">Red</option>
      <option class="breakoutCandidate" value="Blue B">Blue B (Blue changes to Blue A)</option>
      <option class="breakoutCandidate" value="Green">Green</option>
      <option class="breakoutCandidate" value="Orange B">Orange B (Orange changes to Orange A)</option>
      <option class="breakoutCandidate" value="Purple C">Purple C</option>
      <option class="breakoutCandidate" value="Yellow B">Yellow B (Yellow changes to Yellow A)</option>
      <option class="breakoutCandidate" value="Pink B">Pink B (Pink changes to Pink A)</option>
      <option class="breakoutCandidate" value="Silver B">Silver B (Silver changes to Silver A)</option>
      <option class="breakoutCandidate" value="Brown">Brown</option>        
      </select>      
      </td>      
      <td>          <label for="addBreakoutButton">2) Submit </label>      </td>
      <td>        
      <span class="submit">               
      <input id="addBreakout" type="hidden" name="addBreakout" value="-1" />        
      <input type="button" id="addBreakoutButton" name="addBreakoutButton" value="Add Breakout" onclick="popupaddBreakoutConfirmation()"/>         
      </span>     
      </form> 
</body>
</html>
