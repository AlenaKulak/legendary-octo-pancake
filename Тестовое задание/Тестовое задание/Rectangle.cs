using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Xml.Linq;

namespace Тестовое_задание
{
    internal class Rectangle
    {
        private double a { get; set; }
        private double b { get; set; }
        private double c { get; set; }

        public bool Pozitive()
        {
            if (a >= 0 && b >= 0 && c >= 0) { return true; }
            return false;
        }

        public bool T_Rectangle()
        {
            if (Pozitive())
            {
                if ((a + b) > c)
                {
                    return false;
                }
                if ((b + c) > a)
                {
                    return false;
                }
                if ((a + c) > b)
                {
                    return false;
                }
                else
                {
                    return true;
                }
            }
            else
            {
                return false;
            }
        }

        public bool Right_Rectangle()
        {
            if (Pozitive())
            {
                if (T_Rectangle())
                {
                    if (Math.Pow(a, 2) == Math.Pow(b, 2) + Math.Pow(c, 2))
                    {
                        return true;
                    }
                    if (Math.Pow(b, 2) == Math.Pow(a, 2) + Math.Pow(c, 2))
                    {
                        return true;
                    }
                    if (Math.Pow(c, 2) == Math.Pow(a, 2) + Math.Pow(b, 2))
                    {
                        return true;
                    }
                    else
                    {
                        return false;
                    }

                }
                else
                {
                    return false;
                }
            }
            else
            {
                return false;
            }
        }

        public double R_Area()
        {
            if (Pozitive())
            {
                if (T_Rectangle())
                {
                    double p = (a + b + c) / 2;
                    return Math.Sqrt(p * (p - a) * (p - b) * (p - c));
                }
                else
                {
                    return 0;
                }
            }
            else
            {
                return 0;
            }
        }
    }
}
