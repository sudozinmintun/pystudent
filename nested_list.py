lists = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
]

for lst in lists:
    # print(lst)
    for item in lst:
        print("Item ", item)

for row, row_item in enumerate(lists):
    print(f"Row {row} Item {row_item}")
    for col, col_item in enumerate(row_item):
        print(f"Row {row} Col {col} Item {col_item}")