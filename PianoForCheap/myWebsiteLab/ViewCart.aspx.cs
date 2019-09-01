using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Data;
using System.Data.SqlClient;

namespace myWebsiteLab
{
    public partial class ViewCart : System.Web.UI.Page
    {
        string s;
        string t;
        string[] a = new string[7];
        protected void Page_Load(object sender, EventArgs e)
        {
            try
            {

                DataTable dt = new DataTable();
                dt.Columns.AddRange(new DataColumn[7] { new DataColumn("ProductName"), new DataColumn("PlayBy"), new DataColumn("PDF"), new DataColumn("OVE"), new DataColumn("MIDI"), new DataColumn("Sell"), new DataColumn("ProductImage") });

                if (Request.Cookies["aa"] != null)
                {
                    s = Convert.ToString(Request.Cookies["aa"].Value);
                    string[] strArr = s.Split('|');

                    for (int i = 0; i < strArr.Length; i++)
                    {
                        t = Convert.ToString(strArr[i].ToString());
                        string[] strArr1 = t.Split('&');
                       
                        for (int j = 0; j < strArr1.Length; j++)
                        {
                            a[j] = strArr1[j].ToString();
                        }
                        dt.Rows.Add(a[0].ToString(), a[1].ToString(), a[2].ToString(), a[3].ToString(), a[4].ToString(), a[5].ToString(), a[6].ToString());
                    }


                }
                d1.DataSource = dt;
                d1.DataBind();
               
            }
            catch (Exception ex)
            {
            }
        }
        protected void bb2_Click(object sender, EventArgs e)
        {
 
                Response.Redirect("checkout.aspx");

            }

          

    }
}








