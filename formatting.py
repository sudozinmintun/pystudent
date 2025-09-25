price = 12
quantity = 4
total = price * quantity
print("Price is {} and quantity is {}, so total is {}".format(price, quantity, total))
print("quanity is {1}, price is {0}, so total is {2}".format(price, quantity, total))
print("quanity is {q}, price is {p}, so total is {t}".format(p=price, q=quantity, t=total))

print("Total is {:d}". format(total)) #Only works if total is an integer
print("Total is {:5d}". format(total)) #5 spaces, right aligned
print("Total is {:05d}". format(total)) #5 spaces, right aligned, padded with zeros
print("Total is #float {:f}". format(total)) #float

print("Total is {:<5d}". format(total)) #5 spaces, left aligned
print("Total is {:^5d}". format(total)) #5 spaces, centered
print("Total is {:,d}". format(1234567890)) #with commas
print("Total is {:_d}". format(1234567890)) #with underscores
print("Total is #binary {:b}". format(total)) #binary
print("Total is #octal {:o}". format(total)) #octal
print("Total is {:x}". format(total)) #hexadecimal, lowercase
print("Total is {:X}". format(total)) #hexadecimal, uppercase
print("Total is {:e}". format(total)) #scientific notation, lowercase
print("Total is {:E}". format(total)) #scientific notation, uppercase
print("Total is {:.2f}". format(12.34567)) #float with 2 decimal places
print("Total is {:.0f}". format(12.34567)) #float with 0 decimal places, rounded
print("Total is {:.2%}". format(0.1234)) #percentage with 2 decimal places
print("Total is {:.0%}". format(0.1234)) #percentage with 0 decimal places, rounded
