<%@ Page Title="" Language="C#" MasterPageFile="~/Site.Master" AutoEventWireup="true" CodeBehind="Payment.aspx.cs" Inherits="myWebsiteLab.Account.Payment" %>
<asp:Content ID="Content1" ContentPlaceHolderID="MainContent" runat="server">
    <center>
    <br><br><br>
    Credit Card Holder
    <asp:textbox runat="server"></asp:textbox>
    <br>    <br>    <br>
      Credit Card Number
    <asp:textbox runat="server"></asp:textbox>
    <br>    <br>    <br>
     Bank Issue
    <asp:textbox runat="server"></asp:textbox>
        <br>    <br>    <br>
        Expires
        <asp:textbox runat="server"></asp:textbox>
CVV <asp:textbox runat="server"></asp:textbox>
        <br>
<asp:Button runat="server" Text="Pay Now"></asp:Button>
        <center>
</asp:Content>
