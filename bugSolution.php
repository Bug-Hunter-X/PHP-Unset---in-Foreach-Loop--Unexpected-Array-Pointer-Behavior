function foo(array $arr) {
  $keysToRemove = [];
  foreach ($arr as $key => $value) {
    if ($value === null) {
      $keysToRemove[] = $key;
    }
  }
  foreach ($keysToRemove as $key) {
    unset($arr[$key]);
  }
  return $arr;
}

$arr = [1, 2, null, 4, null];
$result = foo($arr);
print_r($result); // Output: Array ( [0] => 1 [1] => 2 [3] => 4 )

function bar(array &$arr) {
  $keysToRemove = [];
  foreach ($arr as $key => $value) {
    if ($value === null) {
      $keysToRemove[] = $key;
    }
  }
  foreach ($keysToRemove as $key) {
      unset($arr[$key]);
  }
}

$arr = [1, 2, null, 4, null];
bar($arr);
print_r($arr); // Output: Array ( [0] => 1 [1] => 2 [3] => 4 )