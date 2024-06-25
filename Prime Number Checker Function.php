<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
  //@param int $number The number to check.
// @return bool True if the number is prime, false otherwise.    

function isPrime(int $number): bool
{
  if ($number <= 1) {
      return false; // 0 and 1 are not prime numbers
  }
  if ($number == 2) {
      return true; // 2 is the only even prime number
  }
  if ($number % 2 == 0) {
      return false; // Eliminate other even numbers
  }

  // Check divisibility from 3 up to the square root of the number
  for ($i = 3; $i <= sqrt($number); $i += 2) {
      if ($number % $i == 0) {
          return false;
      }
  }
  return true;
}


     ?>
  </body>
</html>
