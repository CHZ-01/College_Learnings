import java.awt.*;
import java.awt.event.*;
import java.applet.*;
public class Suma extends Applet implements ActionListener
{
 label f=new label("First Number");   
 label s=new label("Second Number");   
 label a=new label("Sum");   
 TextField t1=new TextField(10);
 TextField t2=new TextField(10);
 TextField t3=new TextField(10);
 Button b=new Button("ADD");

 public void init()
 {
  add(f);
  add(t1);  
  add(s);  
  add(t2);  
  add(a);  
  add(t3);  
  add(b);
  b.ActionListener(this);
 }
 public void action performed(Action event e)
 {
  if(e.getsource()==b)   
  {
    int n1=Integer.parseInt(t1.getText()); 
    int n1=Integer.parseInt(t1.getText()); 
    t3.setText(""+(n1+n2));  
  } 
 }
}