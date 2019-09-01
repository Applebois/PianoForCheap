using System;
using System.Collections.Generic;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Data;
using System.Data.SqlClient;

namespace myWebsiteLab
{
    public partial class ProductDetails : System.Web.UI.Page
    {
        SqlConnection con = new SqlConnection(@"Data Source=(LocalDb)\MSSQLLocalDB;Initial Catalog=aspnet-myWebsiteLab-20170822082057;Integrated Security=True;");
        int id;
        string Names, PlayBys, MIDIs, OVEs, PDFs, Originals, Sells, ProductCategorys, ProductImages, Purchaselinks, ProductQuantitys;
        String s;

        protected void Page_Load(object sender, EventArgs e)
        {
           
            if (!IsPostBack)
                if (Request.QueryString["id"] == null)
                {
                    Response.Redirect("Showproduct.aspx");
                }
                else
                {
                    id = Convert.ToInt32(Request.QueryString["id"].ToString());
                    con.Open();
                    SqlCommand cmd = con.CreateCommand();
                    cmd.CommandType = CommandType.Text;
                    cmd.CommandText = "select * from products where id = " + id + "";
                    cmd.ExecuteNonQuery();
                    DataTable dt = new DataTable();
                    SqlDataAdapter da = new SqlDataAdapter(cmd);
                    da.Fill(dt);
                    d1.DataSource = dt;
                    d1.DataBind();

                }
        }
        protected void b1_Click(object sender, EventArgs e)
        {
            id = Convert.ToInt32(Request.QueryString["id"].ToString());
            con.Open();
            SqlCommand cmd = con.CreateCommand();
            cmd.CommandType = CommandType.Text;
            cmd.CommandText = "select * from products where id=" + id + "";
            cmd.ExecuteNonQuery();
            DataTable dt = new DataTable();
            SqlDataAdapter da = new SqlDataAdapter(cmd);
            da.Fill(dt);

            foreach (DataRow dr in dt.Rows)
            {
                Names = dr["ProductName"].ToString();
                
                PlayBys = dr["PlayBy"].ToString();
                
                PDFs = dr["PDF"].ToString();
                
                OVEs = dr["OVE"].ToString();
                
                MIDIs = dr["MIDI"].ToString();
                
                //ProductCategorys = dr["ProductCategory"].ToString();
                
                Originals = dr["Original"].ToString();
               
                Sells = dr["Sell"].ToString();
               
              //  ProductQuantitys = dr["ProductQuantity"].ToString();
               
                Purchaselinks = dr["Purchaselink"].ToString();
               
                ProductImages = dr["ProductImage"].ToString();
            }
            con.Close();
           
            if (Request.Cookies["aa"] == null)
                {
                    Response.Cookies["aa"].Value = Names.ToString() + "&" + PlayBys.ToString() + "&" + PDFs.ToString()+ "&" + OVEs.ToString() + "&" + MIDIs.ToString() + "&" + Sells.ToString() + "&" + ProductImages.ToString();
                    Response.Cookies["aa"].Expires = DateTime.Now.AddDays(1);
                }
                else
                {
           
                Response.Cookies["aa"].Value = Request.Cookies["aa"].Value + "|" + Names.ToString() + "&" + PlayBys.ToString() + "&" + PDFs.ToString() + "&" + OVEs.ToString()+ "&" + MIDIs.ToString()+ "&" + Sells.ToString()+ "&" + ProductImages.ToString();
                Response.Cookies["aa"].Expires = DateTime.Now.AddDays(1);
                }
       
        }


        protected void b2_Click(object sender, EventArgs e)
                          {
                                   s = Convert.ToString(Request.Cookies["aa"].Value);
                                  string[] strArr = s.Split('.');
                            for (int i = 0; i < strArr.Length; i++)
                              {
                                       Response.Write(strArr[i].ToString());
                                 Response.Write("<br>");
                                      }

                                 }
        } 

    }