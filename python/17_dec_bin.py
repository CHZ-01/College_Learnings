def bin(x):
    if x>1:
        bin(x//2)
    print(x%2,end="")    

a=int(input("ENTER A DECIMAL: "))

print("BINARY CONVERTED: ",end="")
bin(a)