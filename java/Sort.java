import java.util.*;
import java.io.*;
class Sort
{
public static void main(String args[])
{
int n;
Scanner sc=new Scanner(System.in);
System.out.println("ENTER NUMBER OF ELEMENTS TO BE SORTED:");
n=sc.nextInt();
int a[]=new int[10];
System.out.println("ENTER THE ELEMENTS:");
for(int i=0;i<n;i++)
{
a[i]=sc.nextInt();
}
for(int i=0;i<n;i++)
{
for(int j=0;j<n;j++)
{
if(a[i]<a[j])
{
int temp=a[i];
a[i]=a[j];
a[j]=temp;
}
}
}
System.out.println("SORTED LIST:");
for(int i=0;i<n;i++)
{
System.out.println(a[i]);
}
}
}