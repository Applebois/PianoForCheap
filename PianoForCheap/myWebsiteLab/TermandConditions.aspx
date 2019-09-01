<%@ Page Title="" Language="C#" MasterPageFile="~/Site.Master" AutoEventWireup="true" CodeBehind="TermandConditions.aspx.cs" Inherits="myWebsiteLab.TermandConditions" %>
<asp:Content ID="Content1" ContentPlaceHolderID="MainContent" runat="server">
    <br><br>
<center><b>Terms and Conditions</center></b><br>
    <asp:repeater ID="d1" runat="server">
           <HeaderTemplate>  
            </HeaderTemplate>
    <ItemTemplate>
        
        <%#Eval("content")%>
<p><p>
        </ItemTemplate>
        <FooterTemplate>
</FooterTemplate>
    </asp:repeater>


    <br><br>
    
    <a href="account/register.aspx">Click here to Agree </a> 
        <br><br><br>
    <a align="right" href="default.aspx">Not Agree </a> 
</asp:Content>
