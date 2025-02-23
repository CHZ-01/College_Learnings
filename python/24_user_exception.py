class Error(Exception):
    pass

class SmallValue(Error):
    pass

class LargeValue(Error):
    pass

a=int(input("ENTER YOUR NUMBER: "))
b=10

if(a!=10):  
    try:
        if a<b:
           raise SmallValue    
        elif a>b:
            raise LargeValue
    except SmallValue:
        print("VALUE IS TOO SMALL")
    except LargeValue:
        print("VALUE TOO LARGE")
else:
    print("CONGRAGULATIONS! CORRECT VALUE.")
    