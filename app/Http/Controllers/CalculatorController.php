<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
	function getData(Request $request)
	{
		//receives the string from display box of the form.
    	$string= $request->input('display');

    	//if the string contains "+", then this will be triggered.
    	if(strpos($string,"+")==True){

    		//explode function divides the string according to "+",
    		// nums[0] is the first part and nums[1] is the second part
    		//got two arrays and convert them two integers

    		$nums=array_map('intval', explode('+', $string));
    		$result=$nums[0]+$nums[1];

    	}

    	elseif(strpos($string,"-")==True){

    		$nums=array_map('intval', explode('-', $string));
    		$result=$nums[0]-$nums[1];

    	    //echo $sub;

    	}

    	elseif(strpos($string,"*")==True){

    		$nums=array_map('intval', explode('*', $string));
    		$result=$nums[0]*$nums[1];

    	    

    	}

    	elseif(strpos($string,"/")==True){

    		$nums=array_map('intval', explode('/', $string));

    		// check 1/0 which is undefined
    		if ($nums[1]==0)
    			{
    				$result= "undefined";
    			}

    			else
    				{$result=$nums[0]/$nums[1];

    				
    			}

    	}

    		//when there is any invalid syntex
    	else
    		{
    			$result="Invalid syntax";
    		}


    		
    		//creating json file 	
    		$encoded_data=json_encode($result);

    		file_put_contents('data.json', $encoded_data);

    		return redirect('/');



    }
}
