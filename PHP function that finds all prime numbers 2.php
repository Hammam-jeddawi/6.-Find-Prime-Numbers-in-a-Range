<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <?php


 // Finds all prime numbers within a specified range (inclusive).
 //'@throws InvalidArgumentException If the start is greater than the end,
//  or either is less than 2.'

function findPrimeNumbers(int $start, int $end): array
{
  if ($start > $end) {
    throw new InvalidArgumentException('Start cannot be greater than end');
  }

  if ($start < 2 || $end < 2) {
    throw new InvalidArgumentException('Start and end must be greater than or equal to 2');
  }

  // Create an array to mark all numbers as prime (except 0 and 1)
  $isPrime = array_fill(0, $end - $start + 1, true);
  $isPrime[0] = false; // 0 is not prime
  $isPrime[1] = false; // 1 is not prime

  // Iterate up to the square root of the end number for efficiency
  $limit = sqrt($end);
  for ($i = 2; $i <= $limit; $i++) {
    if ($isPrime[$i - $start]) {
      // Mark all multiples of i as non-prime (except multiples of 1)
      for ($j = $i * $i; $j <= $end; $j += $i) {
        $isPrime[$j - $start] = false;
      }
    }
  }

  // Return the prime numbers based on the isPrime array
  $primes = [];
  foreach ($isPrime as $i => $isPrimeValue) {
    if ($isPrimeValue) {
      $primes[] = $start + $i;
    }
  }

  return $primes;
}

// Example usage with a descriptive message
try {
  $start = 50; // Adjust start and end for different ranges
  $end = 100;

  $primeNumbers = findPrimeNumbers($start, $end);

  $message = "Prime numbers between $start and $end: ";
  echo $message . PHP_EOL;
  print_r($primeNumbers);
} catch (InvalidArgumentException $e) {
  echo "Error: " . $e->getMessage() . PHP_EOL;
}


?>
  </body>
</html>
