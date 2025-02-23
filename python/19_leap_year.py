import calendar

def leap_year(y):
    if calendar.isleap(y):
        print(y," IS A LEAP YEAR")
    else:
        print(y," IS NOT A LEAP YEAR")

y=int(input("ENTER A YEAR: "))
leap_year(y)