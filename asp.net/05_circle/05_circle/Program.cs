using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _05_circle
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("ENTER RADIUS: ");
            int r = Convert.ToInt32(Console.ReadLine());
            Console.WriteLine("AREA: " + 3.14*r*r);
            Console.WriteLine("PERIMETER: " + 2*3.14*r);
        }
    }
}
