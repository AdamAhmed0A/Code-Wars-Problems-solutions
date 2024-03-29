def even_fib(n):
    if n < 2:
        return 0

    num1, num2 = 0, 1
    even_sum = 0

    while num2 < n:
        if num2 % 2 == 0:
            even_sum += num2

        num1, num2 = num2, num1 + num2

    return even_sum
