<?hh

if (
  $predicate // pred 1
  || $other_predicate // pred 2
) {
  // ...
}

if (
  $first_predicate // 1
  || $second_predicate // 2
  || $third_predicate // 3
  || $fourth_predicate // 4
) {
  // ...
}

if (
  $predicate || // pred 1
  $other_predicate // pred 2
) {
  // ...
}

if (
  $first_predicate || // 1
  $second_predicate || // 2
  $third_predicate || // 3
  $fourth_predicate // 4
) {
  // ...
}

if (
  $first_predicate || // UNSAFE
  $second_predicate // FALLTHROUGH
) {
  // ...
}

$sum = $num1 // num1
  + $num2; // num2

$sum = $number_with_long_identifier1 // num1
  + $number_with_long_identifier2 // num2
  + $number_with_long_identifier3; // num3

$sum = $num1 + // num1
  $num2; // num2

$sum = $number_with_long_identifier1 + // num1
  $number_with_long_identifier2 + // num2
  $number_with_long_identifier3; // num3

function_call(
  $num1 // num1
  + $num2, // num2
);

function_call(
  $number_with_long_identifier1 // num1
  + $number_with_long_identifier2 // num2
  + $number_with_long_identifier3, // num3
);

function_call(
  $num1 + // num1
  $num2, // num2
);

function_call(
  $number_with_long_identifier1 + // num1
  $number_with_long_identifier2 + // num2
  $number_with_long_identifier3, // num3
);

// TODO: test cases where last arg has trailing comment but no comma

// function_call(
//   $num1, // num1
//   $num2 // num2
// );
//
// function_call(
//   $number_with_long_identifier1, // num1
//   $number_with_long_identifier2, // num2
//   $number_with_long_identifier3 // num3
// );
//
// function_call(
//   $num1 // num1
//   , $num2 // num2
// );
//
// function_call(
//   $number_with_long_identifier1 // num1
//   , $number_with_long_identifier2 // num2
//   , $number_with_long_identifier3 // num3
// );
