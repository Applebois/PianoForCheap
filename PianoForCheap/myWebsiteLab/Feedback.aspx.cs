using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace myWebsiteLab
{
    public partial class Feedback : System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {

        }

        protected void btnSubmit0_Click(object sender, EventArgs e)
        {
            SqlDataSourceFeedback.Insert();
            clearText();
            Response.Redirect("ThankYou.aspx");
        }
        protected void clearText()
        {
            txtName.Text = "";
            txtEmail.Text = "";
            txtComment.Text = "";
        }

        protected void btnClear_Click(object sender, EventArgs e)
        {
            clearText();
        }
    }
}