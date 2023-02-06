using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Тестовое_задание
{
    internal class Сircle
    {
        private double r { get; set; }

        public bool Pozitive()
        {
            if (r >= 0) { return true; }
            return false;
        }

        public double C_Area()
        {
            if (Pozitive()) 
            { 
                return Math.PI * Math.Pow(r, 2); 
            }
            else
            {
                return 0;
            }
        }
    }
}