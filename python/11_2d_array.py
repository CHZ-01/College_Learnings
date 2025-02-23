row=int(input("ENTER NUMBER OF ROWS: "))
col=int(input("ENTER NUMBER OF COLUMNS: "))
a=[[0 for c in range(col)] for r in range(row)]

for r in range(row):
    for c in range(col):
        a[r][c]=int(input("ENTER A NUMBER: "))

print(a)
