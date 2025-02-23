import java.util.*;
import java.io.*;

class Room
{
double l,b;
Room(double x,double y)
{
l=x;
b=y;
}
Room(double x)
{
l=b=x;
}
double area()
{
return(l*b);
}
}

class Rmain
{
public static void main(String args[])
{
Room r=new Room(25.55,15.5);
Room r1=new Room(15);
double a=r.area();
double a1=r1.area();
System.out.println("FIRST AREA:"+a);
System.out.println("SECOND AREA:"+a1);
}
}
