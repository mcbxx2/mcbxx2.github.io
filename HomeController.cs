using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;

namespace Exploration4.Controllers
{
    public class HomeController : Controller
    {
        public ActionResult Index()
        {
            return View();
        }

        public ActionResult About()
        {
            ViewBag.Message = "Your application description page.";

            return View();
        }

        public ActionResult Contact()
        {
            ViewBag.Message = "Your contact page.";

            return View();
        }

        /* public ActionResult Counter()
         {   
             int count = 0;
             ++count;
             count += 10;

             ViewBag.Counter = count;

             return View();
         }*/
        public int count = 0;

        public void countIt()
        {
            ViewBag.Count = count;

        }
        //ViewBag.Count = count;
        //public int count += 10;
        //count += 10;
        
    }
}
