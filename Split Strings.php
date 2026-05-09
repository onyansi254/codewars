//Complete the solution so that it splits the string into strings of two characters in a list/array (depending on the language you use). If the string contains an odd number of characters then it should replace the missing second character of the final pair with an underscore ('_').

//Examples:
//* 'abc' =>  ['ab', 'c_']
//* 'abcdef' => ['ab', 'cd', 'ef']

function solution($str) {
  if ($str === '') {
    return []; // checks first if an array is empty
  }
  if (strlen($str) % 2 !== 0){
    $str .= '_'; // if lenth is odd add _ to the last str character
  }
  return str_split($str, 2); // splits into 2 chunks
}

solution('abc');

