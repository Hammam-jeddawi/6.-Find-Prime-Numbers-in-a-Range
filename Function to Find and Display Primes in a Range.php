<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
 // Find and display all prime numbers in a given range.

function displayPrimesInRange(int $start, int $end): void
{
   if ($start > $end) {
       echo "Invalid range: Start should be less than or equal to End.";
       return;
   }

   $primes = [];
   for ($i = $start; $i <= $end; $i++) {
       if (isPrime($i)) {
           $primes[] = $i;
       }
   }

   if (empty($primes)) {
       echo "No prime numbers found in the range $start to $end.";
   } else {
       echo "Prime numbers in the range $start to $end: " . implode(', ', $primes);
   }
}

// Example  error handling and clear output
try {
   $start = 10;
   $end = 50;
   displayPrimesInRange($start, $end);
} catch (Exception $e) {
   echo "Error: " . $e->getMessage();
}


     ?>
  </body>
</html>
