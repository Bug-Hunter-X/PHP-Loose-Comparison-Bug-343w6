function foo(a, b) {
  if (a === b) {
    return true; 
  }
  return false;
}

//This will cause a unexpected behavior due to loose comparison
var result = foo(1, '1'); // returns true, unexpected
console.log(result); // true