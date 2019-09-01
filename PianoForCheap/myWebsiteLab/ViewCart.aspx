<%@ Page Title="" Language="C#" MasterPageFile="~/Site.Master" AutoEventWireup="true" CodeBehind="ViewCart.aspx.cs" Inherits="myWebsiteLab.ViewCart" %>

<asp:Content ID="Content1" ContentPlaceHolderID="MainContent" runat="server">
    <br><br> <br>


               My Shopping Cart
    <p>
    To delete the order , you are require to clear the cache
        <p>
            Don't worried , when you found item which you didn't add to cart , because we uses cookies to store your shopping cart item.
    <div style="margin-top:50px;">
        <asp:datalist id="d1" runat="server">

        <HeaderTemplate>
            	<div class="container">
            <table border="1">
            </HeaderTemplate>
        <ItemTemplate>
            <tr>
                <td><img src="<%#Eval("ProductImage")%>" height="300" width="200"></td>
                    <p>
                <td  width="400">
     &nbsp &nbsp &nbsp  Product Name =  <%#Eval("ProductName") %> 
                    <br><br>
        &nbsp &nbsp &nbsp    
                     Play by =  <%#Eval("PlayBy") %>
                    
                        <br><br>
      &nbsp &nbsp &nbsp    Price <%#Eval("Sell", "{0:C}") %>
                 
                        <br><br>
        &nbsp &nbsp &nbsp       OVE &nbsp X <%#Eval("OVE") %>
        
                <br><br>
         &nbsp &nbsp &nbsp    PDF  &nbsp X <%#Eval("PDF") %>
                <br><br>
          &nbsp &nbsp &nbsp    MIDI X <%#Eval("MIDI") %>
                    <br><br><br>
                        </td>

                        <td>
                <a href="delete_cart.aspx?ProductImage=<%#Eval("ProductImage") %>"> delete</a>
                </td>
                </tr>
            </ItemTemplate>
        <FooterTemplate>
            </table>
            </FooterTemplate>
    </asp:datalist>
        <br>
        <asp:button id="dd2" runat="server" text="Checkout" OnClick="bb2_Click" Style="margin-top: 26px; margin-left: 1024px" />


    </div>

</asp:Content>
