import java.util.*;
import java.io.*;

class Room
{
int length,breadth;
Room(int x,int y)
{
length=x;
breadth=y;
}
int area()
{
return(length*breadth);
}
}
 
class Bedroom extends Room
{
int height;
Bedroom(int x,int y,int z)
{
super(x,y);
height=z;
}
int volume()
{
return(length*breadth*height);
}
}

class Inheritance 
{
public static void main(String args[])
{


Bedroom call=new Bedroom(25,15,10);
int a=call.area();
int v=call.volume();
System.out.println("AREA:"+a);
System.out.println("VOLUME:"+v);
}
}