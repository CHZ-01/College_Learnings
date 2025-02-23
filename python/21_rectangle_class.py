class Rectangle:
    def get(self,l,b):
        self.l=l
        self.b=b
    def area(self):
        print("AREA: ",self.l*self.b)
    def perimeter(self):
        print("PERIMETER: ",2*(self.l+self.b))        

l=int(input("ENTER LENGTH OF THE RECTANGLE: "))
b=int(input("ENTER BREADTH OF THE RECTANGLE: "))
c=0

obj=Rectangle()
obj.get(l,b)

while c!=3:
    print("1.AREA")
    print("2.PERIMETER")
    print("3.EXIT")
    c=int(input("ENTER YOUR CHOICE: "))

    if c==1:
        obj.area()

    if c==2:
        obj.perimeter()
else:
    print("END OF PROGRAM.")            
