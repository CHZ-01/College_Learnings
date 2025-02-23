class Student:
    def data(self,rno,name,course):
        self.rno=rno
        self.name=name
        self.course=course
    def display1(self):
        print("ROLLNO: ",self.rno)
        print("NAME: ",self.name)
        print("COURSE: ",self.course)
        
class Mark(Student):
    def mark(self,mark):
        self.mark=mark
    def display2(self):
        print("MARK: ",self.mark)        

rno=int(input("ENTER YOUR ROLLNO: "))
name=input("ENTER YOUR NAME: ")
course=input("ENTER YOUR COURSE: ")
mark=int(input("ENTER YOUR MARK: "))

print("RESULT")
obj=Mark()
obj.data(rno,name,course)
obj.mark(mark)
obj.display1()
obj.display2()
