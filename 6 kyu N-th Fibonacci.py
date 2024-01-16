def nth_fib(n):
    if(n < 1): return "invalid"

    if(n == 1): return 0
    elif(n == 2): return 1

    num1, num2 = 0, 1
    for _ in range(3, n + 1 ): 
        temp = num1 + num2
        num1, num2 = num2 , temp
    return num2
