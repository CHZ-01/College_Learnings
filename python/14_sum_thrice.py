def sumof(x,y,z):
    sum=x+y+z
    if x==y==z:
        print("SUM THRICE: ",sum*3)
    else:
        print("SUM: ",sum)

a=int(input("ENTER FIRST NUMBER: "))
b=int(input("ENTER SECOND NUMBER: "))
c=int(input("ENTER THIRD NUMBER: "))

sumof(a,b,c)
    