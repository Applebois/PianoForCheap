using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Data;
using System.Data.SqlClient;
using System.Configuration;

namespace groceria
{
    public partial class ViewProduct : System.Web.UI.Page
    {
        int pageNumber;
        protected void Page_Load(object sender, EventArgs e)
        {
            syncHiddenValuePage();
            navigationButtonVisibility();
        }

        protected void Page_PreRenderComplete(object sender, EventArgs e)
        {
            if (!IsPostBack)
            {
                addAllSelection(DropDownListCategory, "Category");
                addDefaultSelection(DropDownListCategory, "Category");
            }
        }
        protected int getPageNumber()
        {
            int row;
            string stringConnection = ConfigurationManager.ConnectionStrings["GroceriaConnectionString"].ConnectionString;
            using (SqlConnection connection = new SqlConnection(stringConnection))
            {
                SqlCommand cmd = new SqlCommand("getPageNumber", connection);
                cmd.CommandType = CommandType.StoredProcedure;
                if (Request.QueryString["searchProduct"] == null)
                {
                    cmd.Parameters.AddWithValue("@searchProduct", DBNull.Value);
                }
                else
                {
                    cmd.Parameters.AddWithValue("@searchProduct", Request.QueryString["searchProduct"]);
                }
                if (Request.QueryString["categoryId"] == null)
                {
                    cmd.Parameters.AddWithValue("@CategoryId", DBNull.Value);
                }
                else
                {
                    cmd.Parameters.AddWithValue("@CategoryId", Request.QueryString["categoryId"]);
                }
                connection.Open();
                row = (int)cmd.ExecuteScalar();
            }

            if ((row % 10) != 0)
            {
                return ((row / 10) + 1);
            }
            else
            {
                return (row / 10);
            }
        }
        protected void syncHiddenValuePage()
        {
            if (Request.QueryString["Page"] == null)
            {
                HiddenFieldPage.Value = "1";
            }
            else if (Request.QueryString["Page"].Equals(""))
            {
                HiddenFieldPage.Value = "1";
            }
            else
            {
                HiddenFieldPage.Value = Request.QueryString["Page"];
            }
        }
        protected void addAllSelection(ListControl listControl, string allSelectionString)
        {
            ListItem allSelection = new ListItem("All " + allSelectionString, "-2");
            listControl.Items.Insert(0, allSelection);
        }
        protected void addDefaultSelection(ListControl listControl, string defaultSelectionString)
        {
            ListItem defaultItem = new ListItem("Select " + defaultSelectionString, "-1");
            listControl.Items.Insert(0, defaultItem);
        }
        protected void DropDownListCategory_SelectedIndexChanged(object sender, EventArgs e)
        {
            Response.Redirect("~/ViewProduct.aspx?searchProduct=" + Request.QueryString["searchProduct"] + "&categoryId=" + DropDownListCategory.SelectedValue + "&page=1");
        }
        protected void ButtonSearch_Click(object sender, EventArgs e)
        {
            Response.Redirect("~/ViewProduct.aspx?searchProduct=" + Server.UrlEncode(TextBoxSearch.Text) + "&categoryId=" + Request.QueryString["categoryId"] + "&page=" + Request.QueryString["page"]);
        }
        protected void navigationButtonVisibility()
        {
            int currentPage = Convert.ToInt32(HiddenFieldPage.Value);
            pageNumber = getPageNumber();
            ButtonPrev.Visible = true;
            ButtonNext.Visible = true;
            if (currentPage == 1)
            {
                ButtonPrev.Visible = false;
            }
            if (currentPage == pageNumber || pageNumber == 0)
            {
                ButtonNext.Visible = false;
            }
        }
        protected void ButtonPrev_Click(object sender, EventArgs e)
        {
            int page = Convert.ToInt32(HiddenFieldPage.Value);
            --page;
            Response.Redirect("~/ViewProduct.aspx?searchProduct=" + Request.QueryString["searchProduct"] + "&categoryId=" +
                Request.QueryString["categoryId"] + "&page=" + page);
        }

        protected void ButtonNext_Click(object sender, EventArgs e)
        {
            int page = Convert.ToInt32(HiddenFieldPage.Value);
            ++page;
            Response.Redirect("~/ViewProduct.aspx?searchProduct=" + Request.QueryString["searchProduct"] + "&categoryId=" + 
                Request.QueryString["categoryId"] + "&page=" + page);
        }
    }
}