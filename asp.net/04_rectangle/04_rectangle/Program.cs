using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _04_rectangle
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("ENTER LENGTH: ");
            int l = Convert.ToInt32(Console.ReadLine());
            Console.WriteLine("ENTER BREADTH: ");
            int b = Convert.ToInt32(Console.ReadLine());
            Console.WriteLine("AREA: " + (l * b));
            Console.WriteLine("PERIMETER: " + 2*(l * b));
        }
    }
}
