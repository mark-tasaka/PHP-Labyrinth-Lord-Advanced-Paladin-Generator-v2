<?php

//Palidin Turn Undead

function paladinTurnAdjustment($level)
{
    $level -= 2;

    return $level;
}

function undeadHD1($level)
{
    if($level == 1)
    {
        return "7";
    }
    else if($level == 2)
    {
        return "5";
    }
    else if($level == 3)
    {
        return "3";
    }
    else if($level == 4 || $level == 5)
    {
        return "T";
    }
    else if($level > 5)
    {
        return "D";
    }
    else
    {
        return "-";
    }

}


function undeadHD2($level)
{
    if($level == 1)
    {
        return "9";
    }
    else if($level == 2)
    {
        return "7";
    }
    else if($level == 3)
    {
        return "5";
    }
    else if($level == 4)
    {
        return "3";
    }
    else if($level == 5 || $level == 6)
    {
        return "T";
    }
    else if($level > 6)
    {
        return "D";
    }
    else
    {
        return "-";
    }

}


function undeadHD3($level)
{
    if($level == 1)
    {
        return "11";
    }
    else if($level == 2)
    {
        return "9";
    }
    else if($level == 3)
    {
        return "7";
    }
    else if($level == 4)
    {
        return "5";
    }
    else if($level == 5)
    {
        return "3";
    }
    else if($level == 6 || $level == 7)
    {
        return "T";
    }
    else if($level > 7)
    {
        return "D";
    }
    else
    {
        return "-";
    }

}


function undeadHD4($level)
{
    if($level == 1)
    {
        return "-";
    }
    else if($level == 2)
    {
        return "11";
    }
    else if($level == 3)
    {
        return "9";
    }
    else if($level == 4)
    {
        return "7";
    }
    else if($level == 5)
    {
        return "5";
    }
    else if($level == 6)
    {
        return "3";
    }
    else if($level == 7 || $level == 8)
    {
        return "T";
    }
    else if($level > 8)
    {
        return "D";
    }
    else
    {
        return "-";
    }

}



function undeadHD5($level)
{
    if($level <= 2)
    {
        return "-";
    }
    else if($level == 3)
    {
        return "11";
    }
    else if($level == 4)
    {
        return "9";
    }
    else if($level == 5)
    {
        return "7";
    }
    else if($level == 6)
    {
        return "5";
    }
    else if($level == 7)
    {
        return "3";
    }
    else if($level == 8 || $level == 9)
    {
        return "T";
    }
    else if($level > 9)
    {
        return "D";
    }
    else
    {
        return "-";
    }

}


function undeadHD6($level)
{
    if($level <= 3)
    {
        return "-";
    }
    else if($level == 4)
    {
        return "11";
    }
    else if($level == 5)
    {
        return "9";
    }
    else if($level == 6)
    {
        return "7";
    }
    else if($level == 7)
    {
        return "5";
    }
    else if($level == 8)
    {
        return "3";
    }
    else if($level == 9 || $level == 10)
    {
        return "T";
    }
    else if($level > 10)
    {
        return "D";
    }
    else
    {
        return "-";
    }

}


function undeadHD7($level)
{
    if($level <= 4)
    {
        return "-";
    }
    else if($level == 5)
    {
        return "11";
    }
    else if($level == 6)
    {
        return "9";
    }
    else if($level == 7)
    {
        return "7";
    }
    else if($level == 8)
    {
        return "5";
    }
    else if($level == 9)
    {
        return "3";
    }
    else if($level == 10 || $level == 11)
    {
        return "T";
    }
    else if($level > 11)
    {
        return "D";
    }
    else
    {
        return "-";
    }

}


function undeadHD8($level)
{
    if($level <= 5)
    {
        return "-";
    }
    else if($level == 6)
    {
        return "11";
    }
    else if($level == 7)
    {
        return "9";
    }
    else if($level == 8)
    {
        return "7";
    }
    else if($level == 9)
    {
        return "5";
    }
    else if($level == 10)
    {
        return "3";
    }
    else if($level == 11 || $level == 12)
    {
        return "T";
    }
    else if($level > 12)
    {
        return "D";
    }
    else
    {
        return "-";
    }

}


function undeadHD9($level)
{
    if($level <= 6)
    {
        return "-";
    }
    else if($level == 7)
    {
        return "11";
    }
    else if($level == 8)
    {
        return "9";
    }
    else if($level == 9)
    {
        return "7";
    }
    else if($level == 10)
    {
        return "5";
    }
    else if($level == 11)
    {
        return "3";
    }
    else if($level == 12 || $level == 13)
    {
        return "T";
    }
    else
    {
        return "D";
    }

}


function undeadHD10($level)
{
    if($level <= 7)
    {
        return "-";
    }
    else if($level == 8)
    {
        return "11";
    }
    else if($level == 9)
    {
        return "9";
    }
    else if($level == 10)
    {
        return "7";
    }
    else if($level == 11)
    {
        return "5";
    }
    else if($level == 12)
    {
        return "3";
    }
    else if($level == 13 || $level == 14)
    {
        return "T";
    }
    else
    {
        return "D";
    }

}







?>