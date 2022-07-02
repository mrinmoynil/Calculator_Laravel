
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        
        <title>Calculator</title>

        <link rel="stylesheet" href="/css/calc.css">

    </head>

<!--this is for getting the json file-->
@php

$j=file_get_contents('data.json');
$message=json_decode($j);

@endphp

<body>
<div class="container">
<fieldset id="container">

 

<!-- when submit button will be clicked action will be fired with post method-->

<form name="calculator" action="users" method="POST">

@csrf


<!-- display board-->      
<input id="display" type="text" name="display" value='{{$message}}'  >


<!--calculator digits-->
<br>
<input class="button digits" type="button" value="7" onclick="calculator.display.value += '7'">
<input class="button digits" type="button" value="8" onclick="calculator.display.value += '8'">
<input class="button digits" type="button" value="9" onclick="calculator.display.value += '9'">

<!-- hexadecimal values are used in "value" to create emoji-->

<input class="button mathButtons" type="button" value=" &#128125" onclick="calculator.display.value += '+'">

<br>

<input class="button digits" type="button" value="4" onclick="calculator.display.value += '4'">
<input class="button digits" type="button" value="5" onclick="calculator.display.value += '5'">
<input class="button digits" type="button" value="6" onclick="calculator.display.value += '6'">

<input class="button mathButtons" type="button" value=" &#x1F480 -" onclick="calculator.display.value += '-'">

<br>

<input class="button digits" type="button" value="1" onclick="calculator.display.value += '1'">
<input class="button digits" type="button" value="2" onclick="calculator.display.value += '2'">
<input class="button digits" type="button" value="3" onclick="calculator.display.value += '3'">



<input class="button mathButtons" type="button" value="&#x1F47B" onclick="calculator.display.value += '*'">

<br>

<input id="clearButton" class="button" type="button" value="C" onclick="calculator.display.value = ''">
<input class="button digits" type="button" value="0" onclick="calculator.display.value += '0'">

<input class="button mathButtons" type="submit" value="="  >

<input class="button mathButtons" type="button" value="&#x1F631" onclick="calculator.display.value += '/'">




</form>


</fieldset>
</div>
</body>
</html>


