using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _01_arithemtaic_operations
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("ENTER FIRST NUMBER: ");
            int num1 = Convert.ToInt32(Console.ReadLine());
            Console.WriteLine("ENTER SECOND NUMBER: ");
            int num2 = Convert.ToInt32(Console.ReadLine());
            Console.WriteLine("ARITHEMATIC OPERATORS: ");
            Console.WriteLine("ADDITION: " + (num1 + num2));
            Console.WriteLine("SUBSTRATION: " + (num1 - num2));
            Console.WriteLine("DIVISION: " + (num1 / num2));
            Console.WriteLine("MULTIPLICATION: " + (num1 * num2));
            Console.WriteLine("MODULUS: " + (num1 % num2));
        }
    }
}
