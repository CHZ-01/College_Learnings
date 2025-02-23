import java.util.*;
import java.io.*;
class Sum
{
int n;
void read()
{
Scanner ab=new Scanner(System.in);
System.out.println("ENTER A NUMBER:");
n=ab.nextInt();
}
void add()
{
int s=0,r;
do
{
r=n%10;
s=s+r;
n=n/10;
}while(n>0);
System.out.println("SUM OF DIGITS:"+s);
}
public static void main(String args[])
{
Sum s=new Sum();
s.read();
s.add();
}
}