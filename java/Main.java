import java.util.*;
import java.io.*;

abstract class Shape
{
double area,l,b,r;
final double pi=3.14;
abstract void area();
}

class Rectangle extends Shape
{
void area()
{
Scanner sc= new Scanner(System.in);
System.out.println("ENTER THE LENGTH:");
l=sc.nextInt();
System.out.println("ENTER THE BREADTH:");
b=sc.nextInt();
area=l*b;
System.out.println("AREA:"+area);
}
}

class Circle extends Shape
{
void area()
{
Scanner s= new Scanner(System.in);
System.out.println("ENTER THE RADIUS:");
r=s.nextInt();
area=pi*r*r;
System.out.println("AREA:"+area);
}
}

class Main
{
public static void main(String args[])
{
Rectangle rect= new Rectangle();
rect.area();
Circle circ= new Circle();
circ.area();
}
}