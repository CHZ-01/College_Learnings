using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _08_mutliplication_table
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("ENTER STARTING NUMBER: ");
            int num1 = Convert.ToInt32(Console.ReadLine());
            Console.WriteLine("ENTER ENDING NUMBER: ");
            int num2 = Convert.ToInt32(Console.ReadLine());
            for (int i = num1; i <= num2; i++) 
            {
                Console.WriteLine();
                for (int j = 1; j <= 10; j++) 
                {
                    Console.WriteLine(i+"*"+j+"="+i*j);
                }
            }
        }
    }
}
