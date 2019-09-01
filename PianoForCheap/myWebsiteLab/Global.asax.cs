﻿using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Optimization;
using System.Web.Routing;
using System.Web.Security;
using System.Web.SessionState;
using myWebsiteLab.Models;
using Microsoft.AspNet.Identity;
using Microsoft.AspNet.Identity.EntityFramework;


namespace myWebsiteLab
{
    public class Global : HttpApplication
    {
        void Application_Start(object sender, EventArgs e)
        {
            // Code that runs on application startup
            RouteConfig.RegisterRoutes(RouteTable.Routes);
            BundleConfig.RegisterBundles(BundleTable.Bundles);

            ApplicationDbContext context = new ApplicationDbContext();

            var roleStore = new RoleStore<IdentityRole>(context);
            var roleManager = new RoleManager<IdentityRole>(roleStore);

            if (!roleManager.RoleExists("Admin"))
            {
                roleManager.Create(new IdentityRole { Name = "Admin" });
                // create admin user
                var userManager = new UserManager<ApplicationUser>(new
                UserStore<ApplicationUser>(context));
                var appUser = new ApplicationUser
                {
                    UserName = "pianoadmin@capstone.com",
                    Email = "pianoadmin@capstone.com"
                };
                userManager.Create(appUser, "Password$1");
                userManager.AddToRole(
               userManager.FindByName("pianoadmin@capstone.com").Id, "Admin");

            }

            if (!roleManager.RoleExists("Member"))
            {
                roleManager.Create(new IdentityRole { Name = "Member" });
            }

        }
    }
}