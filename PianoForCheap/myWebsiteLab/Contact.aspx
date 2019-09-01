<%@ Page Title="Contacing Us | PianoSheet" Language="C#" MasterPageFile="~/Site.Master" AutoEventWireup="true" CodeBehind="Contact.aspx.cs" Inherits="myWebsiteLab.Contact" %>

<asp:Content ID="BodyContent" ContentPlaceHolderID="MainContent" runat="server">
    <br>
    <asp:repeater ID="d1" runat="server">

           <HeaderTemplate>  
            </HeaderTemplate>
    <ItemTemplate>
        
         <div class="main">
      <div class="shop_top">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
				  <div class="map">
					<iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<%#Eval("GoogleMap_Display") %>""></iframe><br><small><a href="<%#Eval("GoogleMap_Nav") %>"" style="color:#666;text-align:left;font-size:12px"></a></small>
				  </div>
				</div>
				<div class="col-md-5">
       <%#Eval("Content") %>
				</div>
			</div>
                </ItemTemplate>
        <FooterTemplate>

        </FooterTemplate>
        </asp:repeater>
</asp:Content>
