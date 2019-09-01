<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="Success.aspx.cs" Inherits="myWebsiteLab.ForAdmin.Success" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">

    <title>SUCCESSFULLY</title>
</head>
<body>
      
    <br><br><br><br><br><br>
    <b><center>YOU HAVE SUCCESSFULLY ADDED THE PRODUCT <center></b>
    <b><center> Another 10 seconds will be navigate back to product page <center></b>
    <br><br><br><br><br><br>
    <a href="~/default.aspx" runat="server">Click here to back homepage</a>
    <br><br><br>
    <a href="product.aspx">Click here to back product continue add product</a>
    <br><br><br>
    <a href="~/showproduct.aspx" runat="server">Click here to view products</a>
      <form id="form1" runat="server">
        <div>
        </div>
    </form>
</body>
</html>
