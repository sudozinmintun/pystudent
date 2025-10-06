my_tuple = "Mg Mg", 20
print("My Tuple ", my_tuple)
print("Name ", my_tuple[0], " Age ", my_tuple[1])

my_tuple = "Mg Mg",
print(type(my_tuple))

students = (("Mg Mg", 20), ("Aung Aung", 40))
print(students)
print(students[0])
print("Len", len(students))

lst = [1, "Hello", 3]
my_tuple = tuple(lst)
print("Tuple constructor ", my_tuple)

one_to_ten = range(1, 10)
my_tuple = tuple(one_to_ten)
print("Tuple constructor from range", my_tuple)
print("Tuple [1:5]", my_tuple[1:5])

# Tuple is Immtable (Can't change element)
another_tuple = ([1,2,3,4,5], "Another")
print("Another Tuple ", another_tuple)
# another_tuple[0] = [] #
another_tuple[0].append(200)
print("Another Tuple ", another_tuple)

fruits = ("Apple", "Banana", "Orange")
fruits_repeated = fruits * 3
print("Fruits repeated ", fruits_repeated)
print("Fruits repeated len", len(fruits_repeated))
print("Fruits repeated count(Apple)", fruits_repeated.count("Apple"))

