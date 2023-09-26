<?php

function checkLotteryTicket($userNumber1, $userNumber2) {
    // Generate two random numbers between 1 and 32
    $randomNumber1 = rand(1, 32);
    $randomNumber2 = rand(1, 32);

    // Check if user's numbers match the random numbers
    if ($userNumber1 == $randomNumber1 && $userNumber2 == $randomNumber2) {
        return "The winning ticket is: $randomNumber1 and $randomNumber2 Congratulations! You won 20,000 pesos!";
    } else {
        return "The winning ticket is: $randomNumber1 and $randomNumber2 Sorry, no winning ticket. Try again!";
    }
}

if($_POST['btn-play'])
{
  $result = checkLotteryTicket($_POST['txt-num1'], $_POST['txt-num2']);
  echo $result;
}
