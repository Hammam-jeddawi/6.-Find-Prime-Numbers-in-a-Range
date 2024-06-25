<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
     <?php

function findPrimeNumsInRange($start, $end) {
    // Initialize a boolean array "prime[0..n]" and initialize all entries it as true.
    // A value in prime[i] will finally be false if i is Not a prime, otherwise true boolVal.
    $prime = array_fill(2, $end + 1, true);

    // Iterate from 2 to square root of n
    for ($p = 2; $p*$p <= $end; $p++) {
        // If prime[p] is not changed, then it is a prime
        if ($prime[$p] == true) {
            // Update all multiples of p
            for ($i = $p*$p; $i <= $end; $i += $p) {
                $prime[$i] = false;
            }
        }
    }

    // Collect and return all prime numbers in the specified range
    $primeNumsInRange = array_filter(array_keys($prime), function($num) use ($start, $end) {
        return $num >= $start && $num <= $end;
    });

    return $primeNumsInRange;
}

// Example usage
$start = 10;
$end = 50;
$primeNumbersInRange = findPrimeNumsInRange($start, $end);
echo implode(', ', $primeNumbersInRange);

?>
  </body>
</html>
