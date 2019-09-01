<%@ Page Title="About Us | PianoSheet" Language="C#" MasterPageFile="~/Site.Master" AutoEventWireup="true" CodeBehind="About.aspx.cs" Inherits="myWebsiteLab.About" %>
<asp:Content ID="BodyContent" ContentPlaceHolderID="MainContent" runat="server">
    <br><br><br><br>
       <asp:repeater ID="d1" runat="server">

           <HeaderTemplate>  
            </HeaderTemplate>
    <ItemTemplate>

    <a href="<%#Eval("images_nav_link")%>""><IMG STYLE="position:absolute; TOP:<%#Eval("top") %>px; LEFT:<%#Eval("left") %>px; WIDTH:<%#Eval("imagewidth")%>px; HEIGHT:<%#Eval("imageheight") %>px" SRC="\images\<%#Eval("images") %>"" draggable="false"/></a>
        <%#Eval("Content") %>

    <br><br><br><br><br><br><br><br><br><br>
                   </ItemTemplate>
        <FooterTemplate>

        </FooterTemplate>
        </asp:repeater>
</asp:Content>
