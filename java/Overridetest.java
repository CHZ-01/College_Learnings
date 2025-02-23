import java.util.*;
import java.io.*;
class Base
{
int x;
Base(int x)
{
this.x=x;
}
void display()
{
System.out.println("base x="+x);
}
}
class Sub extends Base
{
int y;
Sub(int y)
{
super(x);
this.y=y;
}
void display()
{
System.out.println("base x="+x);
System.out.println("base y="+y);
}
}

class Overridetest
{
public static void main(String args[])
{
Sub s1=new Sub(54,42);
s1.display(); 
}
}