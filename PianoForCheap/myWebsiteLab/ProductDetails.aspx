<%@ Page Title="" Language="C#" MasterPageFile="~/Site.Master" AutoEventWireup="true" CodeBehind="ProductDetails.aspx.cs" Inherits="myWebsiteLab.ProductDetails" %>
<asp:Content ID="Content1" ContentPlaceHolderID="MainContent" runat="server">

<br><br><br>





        <asp:Repeater ID="d1" runat="server">
    <HeaderTemplate>  
            </HeaderTemplate>
    <ItemTemplate>

            <div style="height:400px; width:800px; border-style:solid; border-width:1px;">
        <div style="height:400px; width:300px; float:left;border-style:solid;border-width:1px;">
            <img src="../<%#Eval("ProductImage")%>" height="398" width="300" />
        </div>


        <div style="height:400px; width:498px; float:left;border-style:solid;border-width:1px;"> 
           <b>&nbsp Product Name = <font color="red"><%#Eval("ProductName")%></font>  <p>
         &nbsp   Product Description = PDF X  <%#Eval("PDF") %> , MIDI x <%#Eval("MIDI") %> , OVE x <%#Eval("OVE") %><br/>
          &nbsp  Play By = <%#Eval("Playby") %><br/>
             &nbsp       Original Seller Price=<%# Eval("Original", "{0:C}") %><br/>
              &nbsp      Price for <b><font color="red"> ( Score for Cheap and Cheat )</font> <b> are selling =<%# Eval("Sell", "{0:C}") %><br/><b>
                        <br>
                     &nbsp <asp:Button ID="b1" runat="server" Text="Add shopping Cart" onclick="b1_Click" />
                        
                     <br><br><br><br>
                   <a href="<%#Eval("Purchaselink") %>""><img src="/SiteImages/580b57fcd9996e24bc43c462.png" height="100" width="200" /></a> &nbsp &nbsp &nbsp &nbsp <a href="viewcart"><img src="/SiteImages/carts.png" height="100" width="200" /></a>
                  <br><br>
                 
            </div>          
</div>  
        
<br><br><br>  <br> 
        
        
        </ItemTemplate>
        <FooterTemplate>
            
</FooterTemplate>
</asp:Repeater>  
    

</asp:Content>


