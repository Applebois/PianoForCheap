<%@ Page Title="" Language="C#" MasterPageFile="~/Site.Master" AutoEventWireup="true" CodeBehind="FeedBackView.aspx.cs" Inherits="myWebsiteLab.ForAdmin.FeedBackView" %>
<asp:Content ID="Content1" ContentPlaceHolderID="MainContent" runat="server">

    <br><br><br><br>
    <asp:repeater id="d1" runat="server">
        <HeaderTemplate>  
            </HeaderTemplate>
    <ItemTemplate>
        ID=<%#Eval("FeedbackId") %>
        <p>
        Name =<%#Eval("Name") %>
        <p>
        Email =<%#Eval("Email") %>
            <p>
        Message = <%#Eval("Comment") %>
                <hr>
                </ItemTemplate>
        <FooterTemplate>
            </FooterTemplate>

    </asp:repeater>

</asp:Content>
