import java.util.*;
import java.io.*;
class Twod
{
public static void main(String args[])
{
int row,col,i,j;
Scanner sc= new Scanner(System.in);
System.out.println("ENTER NUMBER OF ROWS:");
row=sc.nextInt();
System.out.println("ENTER NUMBER OF COLS:");
col=sc.nextInt();
int mat1[][]=new int[row][col];
int mat2[][]=new int[row][col];
int sum[][]=new int[row][col];

System.out.println("ENTER FIRST MATRIX:");
for(i=0;i<row;i++)
{
for(j=0;j<col;j++)
{
mat1[i][j]=sc.nextInt();
System.out.println();
}
}

System.out.println("ENTER SECOND MATRIX:");
for(i=0;i<row;i++)
{
for(j=0;j<col;j++)
{
mat2[i][j]=sc.nextInt();
System.out.println();
}
}

for(i=0;i<row;i++)
{
for(j=0;j<col;j++)
{
sum[i][j]=mat1[i][j]+mat2[i][j];
System.out.println();
}
}

System.out.println("FIRST MATRIX:");
for(i=0;i<row;i++)
{
for(j=0;j<col;j++)
{
System.out.println(mat1[i][j]+"");
System.out.println();
}
}

System.out.println("SECOND MATRIX:");
for(i=0;i<row;i++)
{
for(j=0;j<col;j++)
{
System.out.println(mat2[i][j]+"");
System.out.println();
}
}

System.out.println("SUM:");
for(i=0;i<row;i++)
{
for(j=0;j<col;j++)
{
System.out.println(sum[i][j]+"");
System.out.println();
}
}

}
}