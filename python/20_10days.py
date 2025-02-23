import datetime

base=datetime.datetime.today()

for i in range(0,10):
    print(base+datetime.timedelta(days=i))
