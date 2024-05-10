#!/usr/bin/php
<?php
##############################################################################
#                                                                            #
# Script Name     : calc.php                                                 #
# Description     : This example program shows a number of PHP calculator    #
# Author          : Neville Croker                                           #
# Date            : 26st July 2022                                           #
# Version         : 1.0.0                                                    #
#----------------------------------------------------------------------------#
#                                                                            #
#                 PROPRIETARY AND CONFIDENTIAL INFORMATION                   #
#                   AND INTELLECTUAL PROPERTY OF CROKER.                     #
#                            (C) 2022 CROKER.                                #
#                           ALL RIGHTS RESERVED.                             #
#                                                                            #
# NOTE        : DO NOT MAKE ANY CHANGES TO THIS PROGRAM.........             #
#             : Please feel free to copy this program.                       #
#                                                                            #
#--------------------------- Amendment History ------------------------------#
# Date        | Author             | Description                             #
#----------------------------------------------------------------------------#
# dd/mm/yyyy  |                    |                                         #
##############################################################################

if ( $_POST["first_number"] && $_POST["operator"] && $_POST["second_number"]) {
   $firstnum = $_POST["first_number"];
   $secondnum = $_POST["second_number"];
   $oper = $_POST["operator"];
   if ($oper == "+") {
      $answer = $firstnum + $secondnum;
   }
   elseif ($oper == "-") {
      $answer = $firstnum - $secondnum;
   }
   elseif ($oper == "/") {
      $answer = $firstnum / $secondnum;
   }
   elseif ($oper == "*") {
      $answer = $firstnum * $secondnum;
   }
   else {
      $answer = "You must enter '+, -, /, or *";
      print("$answer\n");
      exit(16);
   }
   print("The result of the calculation $firstnum $oper $secondnum is : ");
   print("$answer\n");
   exit(0);
}
else {
   print("You must enter into all three fields\n");
   exit(16);
}
?>

