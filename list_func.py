list = [10, -2, 40, 100, 12]
list.reverse()
print("Reverse List:", list)

list.sort()
print("Sorted List:", list)

list.sort(reverse=True)
print("Sorted List in Descending Order:", list)

list_two = list 
list_two_copy = list[:] # copy of list

print("List Two:", list_two)
print("list id ", id(list))
print("list id ", id(list_two))
print("list id ", id(list_two_copy))

lst = [10, 20] * 3
print("List after multiplication:", lst)