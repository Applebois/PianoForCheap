using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Data;
using System.Data.SqlClient;

namespace myWebsiteLab.ForAdmin
{
    public partial class Product : System.Web.UI.Page
    {
        SqlConnection con = new SqlConnection(@"Data Source=(LocalDb)\MSSQLLocalDB;Initial Catalog=aspnet-myWebsiteLab-20170822082057;Integrated Security=True");
        String a, b;
        protected void Page_Load(object sender, EventArgs e)
        {
            

        }
        public class Class1
        {

            public static string GetRandomPassword(int length)
            {
                char[] chars = "abcdefghijklmnopqrstuvwxyz1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ".ToCharArray();
                string password = string.Empty;
                Random random = new Random();

                for (int i = 0; i < length; i++)
                {
                    int x = random.Next(1, chars.Length);
                    //For avoiding Repetation of Characters
                    if (!password.Contains(chars.GetValue(x).ToString()))
                        password += chars.GetValue(x);
                    else
                        i = i - 1;
                }
                return password;
            }

        }
        protected void b1_Click(object sender, EventArgs e)
        {
            a = Class1.GetRandomPassword(10).ToString();
            f1.SaveAs(Request.PhysicalApplicationPath + "/SiteImages/" + a + f1.FileName.ToString());
            b = "SiteImages/" + a + f1.FileName.ToString();

            con.Open();
            SqlCommand cmd = con.CreateCommand();
            cmd.CommandType = CommandType.Text;
            cmd.CommandText = "insert into products values ('" + t1.Text + "','" + t2.Text + "','" + t3.Text + "','" + t4.Text + "','" + t5.Text + "','" + t7.Text + "','" + t8.Text + "','" + t10.Text + "','" + b.ToString() + "')";
            cmd.ExecuteNonQuery();
            con.Close();
            Response.Redirect("success.aspx");
        } 
    }
}