s={}
s1=input("ENTER A WORD: ")

for i in s1:
    if i in s:
        s[i]+=1
    else:
        s[i]=1

print("CHARACTER FREQUENCY: ")

for k,v in s.items():
    print(k,v)




