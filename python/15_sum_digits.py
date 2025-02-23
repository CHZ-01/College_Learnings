def sumof(n):
    sum=0
    while n>0:
        digit=n%10
        sum+=digit
        n=n//10
    print("SUM OF DIGITS: ",sum)

a=int(input("ENTER A NUMBER: "))
sumof(a)