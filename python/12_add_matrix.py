a=[[1,2,3],[4,5,6],[7,8,9]]
b=[[9,8,12],[16,5,7],[4,6,2]]
sum=[[0,0,0],[0,0,0],[0,0,0]]

print("MATRIX 1:",a)
print("MATRIX 2:",b)

for i in range(len(a)):
    for j in range(len(a[0])):
        sum[i][j]=a[i][j]+b[i][j]

print("SUM OF MATRIX: ")
for s in sum:
    print(s)
