https://www.codewars.com/kata/55db23c6ab208d61e10000af/train/javascript

const bignumber = require('bignumber.js')

function subtract(a, b){
  let result = new bignumber(a).minus(b)
  if(result.toString().includes(".")){
     result = new bignumber(result).toFixed(0)
  }
  return result.toString()
}
