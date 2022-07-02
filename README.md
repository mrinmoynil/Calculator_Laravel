-----------------------------overview----------------------------                                                                                                      
-calculator will operate on two numbers and one operator.                                                                                                             
-the calculator has buttons and a display,clicking the buttons will show the digits in the display.                                                                   
-string from display will be rendered to server, server will  process it and send back to the display
------------------------------------------------------------------


------------------------------approch-----------------------------                                                                                                     
*******front end*******

#1. user.blade.php:

1.all digit buttons and emojis are in the form, form has a display.
  clicking buttons show digit and operator on display, "=" is the
  submit button.
2.when "=" is clicked, the texts in the display are sent to server
 through web.php

*******routing**********

#2. web.php:

1.route renders the values to "CalculatorController.php".
  it sends the values to "getData" function.

*******server side calculation******** 
 
#3. CalculatorController.php:

1.function receives the string or text .                                                                                                                               
2.the it finds which operator is used for the calculation through "strpos()" fuction.                                                                                 
3.when operator is found it then divides the string into 2 numbers using explode() and array_map() funtions.                                                          
4.calculation is done according to the operator.                                                                                                                       
5.in "division" if there is any "1/0", it will result will be "undefined".                                                                                             
6.if there is wrong syntax , it result will be "invalid syntax".                                                                                                       
7. result then will be encoded by "json"                                                                                                                               
8. in "user.blade.php" this "json" file will be decoded and result will be displayed in the display portion.                                                           
-------------------------------------------------------------------

--------------------------------steps------------------------------

1.install laravel 9 and open xampp control panel and start "Apache"                                                                                                   
2.open command prompt and change the directory to the project folder

i.e ->cd C:\xampp\htdocs\Laravel\simple_calculator

3.write "php artisan serve" and hit enter.                                                                                                                             
4.it will show a port number i.e-8000.                                                                                                                                 
5. open a browser and write the url-> "localhost/port number/" and enter i.e->localhost/8000/                                                                         
6. this will show the calculator.

-------------------------------------------------------------------


-------------------------------files-------------------------------                                                                                                           
controllers
App\Http\Controllers\CalculatorController.php

routes->
routes\web.php

html->
resources\views\user.blade.php

css->
public\css\calc.css
-------------------------------------------------------------------




<img src="images/add.png" width="100" height=100>
<img src="images/add_result.png" width="100" height=100>


