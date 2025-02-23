a=int(input("ENTER FIRST NUMBER: "))
b=int(input("ENTER SECOND NUMBER: "))

min=min(a,b)

for i in range(1,min+1):
    if (a%i)==0 and (b%i)==0:
        gcd=i

print("GCD: ",gcd)        