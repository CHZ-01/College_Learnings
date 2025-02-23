import java.util.*;
import java.io.*;
class Large
{
public static void main(String args[])
{
int n1,n2,n3;
Scanner sc= new Scanner(System.in);
System.out.println("ENTER THREE NUMBERS:");
n1=sc.nextInt();
n2=sc.nextInt();
n3=sc.nextInt();
if(n1>n2)
  if(n1>n3)
  System.out.println(n1+" IS LARGEST");
  else
  System.out.println(n3+" IS LARGEST");
else
if(n2>n3)
System.out.println(n2+" IS LARGEST");
else
System.out.println(n3+" IS LARGEST");
}
}