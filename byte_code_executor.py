import dis

a = 10
b = 20
c = 30
d = a + b * c

# def func():
#     d = a + b * c
#     return d

# print(dis.dis(func))

# print("globals:", globals())
 # Call globals to see all global variables

executed_stack = []

# variables = {
#     "a": 11,
#     "b": 20,
#     "c": 30,
# }

variables = globals()

byte_codes = [
    ("LOAD_GLOBAL", "a"), #  a
    ("LOAD_GLOBAL", "b"), #  b
    ("LOAD_GLOBAL", "c"), #  c
    ("BINARY_OP", "*"),   # b * c
    ("BINARY_OP", "+"), # a + (b*c)
]

for byte_code in byte_codes:
    # print("byte code:", byte_code)
    op_code = byte_code[0]
    # print("op_code:", op_code)
    if op_code == "LOAD_GLOBAL":
        var_name = byte_code[1]
        operand = variables[var_name]
        executed_stack.append(operand)
    elif op_code == "BINARY_OP":
        op_two = executed_stack.pop()
        op_one = executed_stack.pop()

        operator = byte_code[1]
        if operator == "*":
            executed_stack.append(op_one * op_two)
        elif operator == "+":
            executed_stack.append(op_one + op_two)
    else:
        print("unknown op_code:", op_code)

print("result:", executed_stack.pop())
print("d result is :", d)
