<?php

function getXPNextLevel ($level)
{
    $xpNext = "";


    switch ($level) 
    {
        case "1":
            $xpNext = "2,735";
          break;

        case "2":
            $xpNext = "5,465";
        break;
        
        case "3":
            $xpNext = "11,025";
        break;
        
        case "4":
            $xpNext = "20,251";
        break;
        
        case "5":
            $xpNext = "42,501";
        break;
        
        case "6":
            $xpNext = "90,001";
        break;        

        case "7":
            $xpNext = "170,001";
        break;
                
        case "8":
            $xpNext = "340,001";
        break;
                
        case "9":
            $xpNext = "560,001";
        break;
                
        case "10":
            $xpNext = "780,001";
        break;
                
        case "11":
            $xpNext = "1,000,001";
        break;
                
        case "12":
            $xpNext = "1,220,001";
        break;
                
        case "13":
            $xpNext = "1,440,001";
        break;
                
        case "14":
            $xpNext = "1,660,001";
        break;
                
        case "15":
            $xpNext = "1,880,001";
        break;
                
        case "16":
            $xpNext = "2,100,001";
        break;
                
        case "17":
            $xpNext = "2,320,001";
        break;
                
        case "18":
            $xpNext = "2,540,001";
        break;
                
        case "19":
            $xpNext = "2,780,001";
        break;
                
        case "20":
            $xpNext = "---";
        break;


        default:
          $xpNext = " =P ";
      }

      return $xpNext;
}


?>