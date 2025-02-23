import java.util.*;
import java.io.*;
class Evenodd
{
public static void main(String args[])
{
int n;
Scanner sc= new Scanner(System.in);
System.out.println("ENTER YOUR NUMBER:");
n=sc.nextInt();
if(n%2==0)
{
System.out.println("EVEN NUMBER");
}
else
{
System.out.println("ODD NUMBER");
}
}
}