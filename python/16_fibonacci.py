def fibo(x):
    if x<=1:
        return x
    else:
        return fibo(x-1)+fibo(x-2)
    
a=int(input("ENTER NUMBER OF SEQUENCE: "))

if a<=0:
    print("ENTER A POSITIVE NUMBER")
else:
    print("FIBONACCI NUMBERS:")
    for i in range(a):
        print(fibo(i))
