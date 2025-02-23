l=[24,87,56,90,45,69]
a=int(input("SEARCH NUMBER: "))
f=0

for i in range(len(l)):
    if (a==l[i]):
        print("NUMBER FOUND AT INDEX: ",i)
        f=1
        break

if f==0:
    print("NUMBER NOT FOUND")


