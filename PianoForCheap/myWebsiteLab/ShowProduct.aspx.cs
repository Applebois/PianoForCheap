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
    public partial class ShowProduct : System.Web.UI.Page
    {

        protected void Page_Load(object sender, EventArgs e)
        {

            SqlConnection con = new SqlConnection(@"Data Source=(LocalDb)\MSSQLLocalDB;Initial Catalog=aspnet-myWebsiteLab-20170822082057;Integrated Security=True");

            {
                SqlCommand cmd = new SqlCommand("SELECT * FROM products WHERE ProductName LIKE '%" + Request.QueryString["searchProductName"] + "%'", con);
                con.Open();
                d1.DataSource = cmd.ExecuteReader();
                d1.DataBind();
            }
            
        }

        protected void ButtonSearch_Click(object sender, EventArgs e)
        {
            Response.Redirect("~/ShowProduct.aspx?searchProductName=" + Server.UrlEncode(TextBoxSearch.Text) + "&categoryId=" + Request.QueryString["categoryId"] + "&page=" + Request.QueryString["page"]);
        }
    }
}