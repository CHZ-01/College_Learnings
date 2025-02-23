import java.lang.*;
import java.io.*;
class Error2
{
public static void main(String args[])
{
int a[]={10,5};
int b=5,x,y;
System.out.println("x="+a[0]+"/("+b+"-"+a[1]+")");
try
{
x=a[0]/(b-a[1]);
}
catch(ArithmeticException e)
{
System.out.println("DIVISION BY ZERO");
}
catch(ArrayIndexOutOfBoundsException e)
{
System.out.println("ARRAY INDEX ERROR");
}
catch(ArrayStoreException e)
{
System.out.println("WRONG DATATYPE");
}
y=a[0]/(b+a[1]);
System.out.println("y="+a[0]+"/("+b+"+"+a[1]+")="+y);
}
}