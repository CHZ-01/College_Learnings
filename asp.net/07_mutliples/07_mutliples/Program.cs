using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _07_mutliples
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("ENTER A NUMBER: ");
            int num = Convert.ToInt32(Console.ReadLine());
            Console.WriteLine("ENTER STARTING NUMBER: ");
            int s = Convert.ToInt32(Console.ReadLine());
            Console.WriteLine("ENTER ENDING NUMBER: ");
            int e = Convert.ToInt32(Console.ReadLine());
            Console.WriteLine("MULTIPLES: ");
            for (int i = s; i <= e; i++) 
            {
                if(i%num == 0)
                {
                    Console.WriteLine(i);
                }
            }

        }
    }
}
