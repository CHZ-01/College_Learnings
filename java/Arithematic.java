import java.util.*;
import java.io.*;
class Arithematic
{
public static void main(String args[])
{
int n1,n2,s;
Scanner sc= new Scanner(System.in);
System.out.println("\nENTER TWO NUMBERS:");
n1=sc.nextInt();
n2=sc.nextInt();
System.out.println("___MENU___");
System.out.println("1.ADD");
System.out.println("2.SUBTRACT");
System.out.println("3.MULTIPLY");
System.out.println("4.DIVIDE");
System.out.println("5.MODULUS");
System.out.println("SELECT YOUR CHOICE:");
s=sc.nextInt();
switch(s)
{
case 1:
s=n1+n2;
System.out.println(n1+ "+" +n2+ "=" +s);
break;
case 2:
s=n1-n2;
System.out.println(n1+ "-" +n2+ "=" +s);
break;
case 3:
s=n1*n2;
System.out.println(n1+ "*" +n2+ "=" +s);
break;
case 4:
s=n1/n2;
System.out.println(n1+ "/" +n2+ "=" +s);
break;
case 5:
s=n1%n2;
System.out.println(n1+ "%" +n2+ "=" +s);
break;
}
}
}