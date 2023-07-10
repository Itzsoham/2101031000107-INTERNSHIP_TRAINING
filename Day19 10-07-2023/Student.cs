using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace student
{
    internal class Program
    {
        static void Main(string[] args)
        {
            //Ask the user to Enter Student Details
            Console.WriteLine("Enter Student Details");
            Console.WriteLine("Enter Registration Number");
            int RegdNumber = Convert.ToInt32(Console.ReadLine());
            Console.WriteLine("Enter Name");
            string Name = Console.ReadLine();
            Console.WriteLine("Enter Marks of three Subjects:");
            Console.WriteLine("Subject1");
            int Mark1 = Convert.ToInt32(Console.ReadLine());
            Console.WriteLine("Subject2");
            int Mark2 = Convert.ToInt32(Console.ReadLine());
            Console.WriteLine("Subject3");
            int Mark3 = Convert.ToInt32(Console.ReadLine());

            int TotalMarks = Mark1 + Mark2 + Mark3;
            int AverageMark = TotalMarks / 3;

            //Display the Student Details
            Console.WriteLine("\nStudent Details are as Follows:");
            Console.WriteLine($"Registration Number: {RegdNumber}");
            Console.WriteLine($"Name: {Name}");
            Console.WriteLine($"Total Marks : {TotalMarks}");
            Console.WriteLine($"Average Mark: {AverageMark}");
            Console.ReadKey();
        }
    }
}
