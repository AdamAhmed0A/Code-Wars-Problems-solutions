function fib(n) {
  if(n <= 2) return n - 1
    let num1 = 0
    let num2 = 1
    
    for(let i = 3; i <= n ; i++){
        let temp = num1 + num2
        num1 = num2
        num2 = temp
    }
    return num2
}
