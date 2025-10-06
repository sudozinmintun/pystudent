lists = list(range(1, 11))
print("Lists:", lists)

lists_two = []
for i in lists:
    lists_two.append(i * 2)
print("Lists two:", lists_two)

lists_three = [x * 2 for x in lists]
print("Lists three:", lists_three)

lst = ["apple", "banana", "cherry", "kiwi", "mango"]
new_lst = [(x.upper(), len(x)) for x in lst if len(x) > 5]
print("New list:", new_lst)


marks = [
    ("Science", 70),
    ("Eng", 40),
    ("Math", 92),
]
pass_subjects = [subject for subject in marks if subject[1] >= 40]
print("Pass subjects:", pass_subjects)

pass_exam = len(marks) == len(pass_subjects)
print("Pass exam:", pass_exam)
