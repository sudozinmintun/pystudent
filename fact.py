# factorial() in Python
# fact(5)
#     5! = 5 * 4 * 3 * 2 * 1
#     4! = 4 * 3 * 2 * 1
#     3! = 3 * 2 * 1
#     1! = 1
#       n! = n * (n - 1) !

# fact(3)
#     = 3 * fact(2)
#         = 2 * fact(1)
            # = 1


def fact(n):
    if n == 1: #base case
        return 1
    else:
        return n * fact(n - 1)



    
# print("3 ! => ", fact(3))
print("3 ! => ", fact(9999))


def calculate_factorial_recursive(n):
    if n < 0:
        return "Factorial is not defined for negative numbers."
    elif n == 0 or n == 1:
        return 1
    else:
        return n * calculate_factorial_recursive(n - 1)

num = 5
result = calculate_factorial_recursive(num)
print(f"The factorial of {num} is: {result}")