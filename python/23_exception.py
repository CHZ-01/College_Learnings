a=int(input("ENTER FIRST NUMBER: "))
b=int(input("ENTER SECOND NUMBER: "))

try:
    c=a/b
    print("DIVISION SUCESS: ",c)
except ZeroDivisionError:
    print("DIVISION BY ZERO")    