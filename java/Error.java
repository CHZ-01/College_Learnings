import java.util.*;
import java.io.*;
class Error
{
public static void main(String args[])
{
int a=10,b=5,c=5,x,y;
System.out.println("x="+a+"/("+b+"-"+c+")");
try
{
x=a/(b-c);
}
catch(ArithmeticException e)
{
System.out.println("DIVISION BY ZERO");
}
y=a/b+c;
System.out.println("y="+a+"/("+b+"+"+c+")="+y);
}
}