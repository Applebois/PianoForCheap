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
    public partial class _Default : Page
    {
        SqlConnection con = new SqlConnection(@"Data Source=(LocalDb)\MSSQLLocalDB;Initial Catalog=aspnet-myWebsiteLab-20170822082057;Integrated Security=True");
        protected void Page_Load(object sender, EventArgs e)
        {
            con.Open();
            SqlCommand cmd = con.CreateCommand();
            cmd.CommandType = CommandType.Text;
            cmd.CommandText = "select * from TopPurchase ";
            cmd.ExecuteNonQuery();
            DataTable dt = new DataTable();
            SqlDataAdapter da = new SqlDataAdapter(cmd);
            da.Fill(dt);
            d1.DataSource = dt;
            d1.DataBind();
            con.Close();
        }

        protected void b1_Click(object sender, EventArgs e)
        {
            SqlCommand cmd = new SqlCommand("SELECT COUNT(Id) FROM Subscription WHERE Email = '" +
                           t1.Text + "'", con);
            con.Open();
            if (Convert.ToInt32(cmd.ExecuteScalar()) > 0)
            {
                con.Close();
                Response.Redirect("WebForm1.aspx");

            }

            else
            {
                cmd.CommandType = CommandType.Text;
                cmd.CommandText = "INSERT INTO Subscription VALUES ('" + t1.Text + "')";
                cmd.ExecuteNonQuery();

                Response.Redirect("subscribesuccess.aspx");
            }
        }
            protected void txtUsername_TextChanged(object sender, EventArgs e)

        {

        }
    }
}