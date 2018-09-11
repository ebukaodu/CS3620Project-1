<?php
/**
 * Created by PhpStorm.
 * User: chukas
 * Date: 10/09/2018
 * Time: 4:51 PM
 */

if (isset($_POST['submit'])){

    $silly = $_POST['sillyWord'];
    $lName = $_POST['lName'];
    $illness = $_POST['illness'];
    $noun = $_POST['noun'];
    $adj1 = $_POST['adjective'];
    $adj2 = $_POST['adjective2'];
    $silly2 = $_POST['sillyWord2'];
    $place = $_POST['place'];
    $num = $_POST['number'];
    $adj3 = $_POST['adjective3'];

    $ok = true;

    /**if (!isset($_POST['sillyWord'] ) || $_POST['sillyWord'] == '' ||
        ($_POST['lName']) || $_POST['lName'] == ''||
        ($_POST['illness']) || $_POST['illness'] == ''||
        ($_POST['noun']) || $_POST['noun'] == ''||
        ($_POST['adjective']) || $_POST['adjective'] == ''||
        ($_POST['adjective2']) || $_POST['adjective2'] == ''||
        ($_POST['sillyWord2']) || $_POST['sillyWord2'] == ''||
        ($_POST['place']) || $_POST['place'] == ''||
        ($_POST['number']) || $_POST['number'] == ''||
        ($_POST['adjective3']) || $_POST['adjective3'] == '')
    {
        $ok = false;
    }*/



    if ($ok) {
        print  " <div align=\"center\"  >". "<center>"."Dear School Nurse: "."</center>"."<b>". $silly."</b>". " ". "<b>".$lName."</b>" .
            " will not be attending school today. She has come down with a case of ". "<b>".$illness."</b>".
            " and has horrible "."<b>".$noun."</b>"." and a/an "."<b>".$adj1."</b>". " fever. We have made an 
            appointment with the " . "<b>".$adj2."</b>". " Dr. " . "<b>".$silly2."</b>" . ", who studied for many years 
            in " . "<b>".$place."</b>" ." and has " . "<b>".$num."</b>" . " degrees in pediatrics. He will send you all 
            the information you need. Thank you!" . "<p>Sincerely</p>" ."<p>"."Mrs. " . "<b>".$adj3."</b>"."."."</p>".
            "</div>";}

}