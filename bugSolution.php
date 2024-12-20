function foo(a, b) {
  if (a === b) {
    return true; 
  }
  return false;
}

//This will now correctly return false due to strict comparison
var result = foo(1, '1'); // returns false, as expected
console.log(result); // false