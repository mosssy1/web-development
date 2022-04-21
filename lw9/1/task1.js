/**
 * @param {number} num 
 * @return {boolean|null}
 */
function IsPrimeNumber(num) {
    result = true;
    if (num == 0 || num == 1) {
      return null;
    }
    for (let i = 2; i < num; i++) {
      if (num % i == 0) {
        result = false;
        break;
      }
    }
      return result
  }
 function IsNumber(n){
   return (typeof n == 'number' || typeof n == 'bigint')
 }
 function IsArray(n){
   return (Array.isArray(n))
 }
 function CheckPrime(n){
   if (IsPrimeNumber(n)) {
     console.log('That is a prime number - ' + n);
   } else if (IsPrimeNumber(n) === false) {
     console.log('That is not a prime number - ' + n);
   } else {
     console.log('That can not be a prime number or not prime number - ' + n);
   }
 }
 /**
  * @param {number|Array<*>} num 
  */
  function isPrime(n) {
    if (IsNumber(n) & IsArray(n) === false) {
      CheckPrime(n)
    } else if(IsArray(n)) {
      console.log('Input - [' + n + ']');
      for(value of n) {
        if (IsNumber(value)) {
          CheckPrime(value)
        } else {
          console.log('Input: ' + value);
          console.log('Wrong type');
        }
       }
      }
    else {
      console.log('Input: ' + n);
      console.log('Wrong type');
    }
  }
  
  isPrime(0);
  isPrime(1);
  isPrime(5);
  isPrime(10);
  isPrime([0, 1, 'a', 5, 13, 14, 17]);
  isPrime('abc');
  isPrime(null)