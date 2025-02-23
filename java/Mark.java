import java.util.Scanner;

class Mark
{
public static void main(String args[])
{
int mark;
Scanner sc = new Scanner(System.in);
System.out.println("ENTER YOUR MARK:");
mark=sc.nextInt();
if(mark>40)
  if(mark>50)
    if(mark>60)
      if(mark>70)
      System.out.println("DISTINCTION");
      else
      System.out.println("FIRST CLASS");
    else
    System.out.println("SECOND CLASS");
  else
  System.out.println("THIRD CLASS");
else
System.out.println("FAIL"); 
}
}