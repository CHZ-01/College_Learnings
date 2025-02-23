using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _06_n_sum_
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("ENTER A NUMBER: ");
            int num= Convert.ToInt32(Console.ReadLine());
            int sum=0;
            for (int i = 1; i <= num; i++) 
            {
                sum += i;
            }
            Console.WriteLine("SUM OF " + num + " NATURAL NUMBERS: " + sum);
        }
    }
}
