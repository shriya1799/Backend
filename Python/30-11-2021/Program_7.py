def check_exponent(base_val, exp):
    num = exp
    result = 1
    while num > 0:
        result = result * base_val
        num = num - 1
    print(base_val, "raises to the power of", exp, "is:- ", result)

check_exponent(6, 2)