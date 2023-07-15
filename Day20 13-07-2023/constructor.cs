using System;
namespace ConstructorDemo
{
    class Program
    {
        static void Main(string[] args)
        {
            ExplicitConstructor obj = new ExplicitConstructor();

            Console.ReadKey();
        }
    }
    class ExplicitConstructor
    {
        public ExplicitConstructor()
        {
            Console.WriteLine("Explicit Constructor is Called!");
        }
    }
}