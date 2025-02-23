import java.util.*;
class Ternary
{
public static void main(String args[])
{
int m;
String result;
Scanner sc= new Scanner(System.in);
System.out.println("ENTER YOUR MARK:");
m=sc.nextInt();
result=(m>40)?"PASS":"FAIL";
System.out.println("RESULT:"+result);
}
}