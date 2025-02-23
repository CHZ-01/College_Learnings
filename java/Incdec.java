import java.util.*;
import java.io.*;
class Incdec
{
public static void main(String args[])
{
int m,n;
Scanner sc= new Scanner(System.in);
System.out.println("ENTER A NUMBER M:");
m=sc.nextInt();
System.out.println("ENTER A NUMBER N:");
n=sc.nextInt();
System.out.println("PRE-INCREMENT OPERATOR");
System.out.println("M="+m +"\n++M="+ ++m);
System.out.println("N="+n +"\n--N="+ --n);
System.out.println("POST-INCREMENT OPERATOR");
System.out.println("M="+m +"\nM++="+ m-- +"\nM="+m);
System.out.println("N="+n +"\nN--="+ n-- +"\nN="+n);
}
}