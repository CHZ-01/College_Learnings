using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _03_odd_even
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("ENTER A NUMBER: ");
            int num = Convert.ToInt32(Console.ReadLine());
            if((num%2) == 0) 
            {
                Console.WriteLine("EVEN NUMBER");
            }
            else 
            {
                Console.WriteLine("ODD NUMBER");
            }
        }
    }
}
