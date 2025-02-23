import java.util.*;
import java.io.*;
class Sort2
{
public static void main(String args[])
{
int n;
Scanner sc=new Scanner(System.in);
System.out.println("ENTER NUMBER OF NAMES TO BE SORTED:");
n=sc.nextInt();
Scanner s=new Scanner(System.in);
String a[]=new String[n];
System.out.println("NAME LIST:");
for(int i=0;i<n;i++)
{
System.out.println("ENTER NAME:");
a[i]=s.nextLine();
}
for(int i=0;i<n;i++)
{
for(int j=0;j<n;j++)
{
if(a[i].compareTo(a[j])<0)
{
String temp=a[i];
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