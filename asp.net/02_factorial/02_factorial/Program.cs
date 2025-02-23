using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _02_factorial
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("ENTER A NUMBER: ");
            int num= Convert.ToInt32(Console.ReadLine());
            int fact = 1;
            for(int i = 1; i <= num; i++) 
            {
                fact *= i;
            }
            Console.WriteLine("FACTORIAL: " + fact);
        }
    }
}
