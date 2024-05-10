#!/usr/bin/php
<?php
##############################################################################
#                                                                            #
# Script Name     : proj8b.php                                               #
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
?>

<html>
<h1>PHP Calculator</h1>
<form action="calc.php" method="POST">
    First Number: <input type="text" name="first_number">
    <br/>
    Operator: <input type="text" name="operator">
    <br/>
    Second Number: <input type="text" name="second_number">
    <br/>
    <input type="submit">
</form>
</html>
