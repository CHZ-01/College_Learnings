l=[int(items) for items in input("ENTER A LIST OF NUMBERS: ").split()]
print(l)

print("SUM OF LIST: ",sum(l))

even=0
odd=0

for i in l:
    if (i%2)==0:
        even+=1
    else:
        odd+=1

print("TOTAL EVEN NUMBERS: ",even)

print("TOTAL ODD NUMBERS: ",odd)