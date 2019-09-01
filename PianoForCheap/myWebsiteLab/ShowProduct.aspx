<%@ Page Title="" Language="C#" MasterPageFile="~/Site.Master" AutoEventWireup="true" CodeBehind="ShowProduct.aspx.cs" Inherits="myWebsiteLab.ShowProduct" %>

<asp:Content ID="Content1" ContentPlaceHolderID="MainContent" runat="server">
   
    <br><br><br><br><br>
        <div class="col-md-offset-8">
            <div class="form-group col-md-8">
                <asp:TextBox ID="TextBoxSearch" CssClass="form-control" runat="server"></asp:TextBox>
            </div>
            <%--<asp:Button ID="ButtonSearch" runat="server" Text="Search" CssClass="btn btn-default" OnClick="ButtonSearch_Click" />--%>
            <div class="col-md-1">
                <button runat="server" id="ButtonSearchProduct" class="btn btn-default" onserverclick="ButtonSearch_Click">
                    <span class="glyphicon glyphicon-search"></span>Search</button>
            </div>
        </div>
<asp:Repeater ID="d1" runat="server">
    
    <HeaderTemplate>  
      <div class="main">
      <div class="shop_top">
	<div class="container">
       <div class="row shop_box-top">
				
            </HeaderTemplate>
    <ItemTemplate>
        <div class="col-md-3 shop_box"><a href="single.html">
					<a href="ProductDetails.aspx?id=<%#Eval("id")%>"> <img src="../<%#Eval("ProductImage")%>" class="img-responsive" alt="" height="200" width="300" /></a>
					<span class="new-box">
						<span class="new-label">SALE</span>
					</span>
					<span class="sale-box">
						<span class="sale-label">11.11</span>
					</span>
					<div class="shop_desc">
                         <b><%#Eval("ProductName")%></b><p>
                                  Play by = <%#Eval("Playby")%>
					  </p>
					 
						<span class="reducedfrom"><%# Eval("Original", "{0:C}") %></span>
						<span class="actual">=<%# Eval("Sell", "{0:C}") %></span><br>
						<ul class="buttons">
							<li class="cart"><a href="#">Add To Cart</a></li>
							<li class="shop_btn"><a href="<%#:Eval("Purchaselink","{0:C}")%>">Instant Buy</a></li>
							<div class="clear"> </div>
					    
                        </div>
                    </a></div>
        </ItemTemplate>
        <FooterTemplate>		 </div>
	   </div>
	  </div>
        </ul></FooterTemplate>

</asp:Repeater>    

</asp:Content>  

