<%@ Page Title="" Language="C#" MasterPageFile="~/Site.Master" AutoEventWireup="true" CodeBehind="Product.aspx.cs" Inherits="myWebsiteLab.ForAdmin.Product" %>
<asp:Content ID="Content1" ContentPlaceHolderID="MainContent" runat="server">
    <br><br><br><br>
    <b><center><h3>Add new piano Score Sheet</h3> </center></b>
    <br>
<table>

    <tr>    
        <td>Product Name<td>
            <td><asp:Textbox ID="t1" runat="server" required></asp:Textbox>   </td>
            </tr>    

    <tr>    
        <td>Play by <td>
            <td><asp:Textbox ID="t2" runat="server" required></asp:Textbox>   </td>
            </tr>    

    <tr>    
        <td>PDF <td>
            <td><asp:Textbox ID="t3" runat="server" required></asp:Textbox>   </td>
            </tr>    
    <tr>
    <td>OVE  <td>
            <td><asp:Textbox ID="t4" runat="server" required></asp:Textbox>   </td>
            </tr>
    <tr>
    <td>Midi  <td>
            <td><asp:Textbox ID="t5" runat="server" required></asp:Textbox>   </td>
            </tr>
    <tr>    
        <td>Original Seller Price<td>
            <td><asp:Textbox ID="t7" runat="server" required></asp:Textbox>   </td>
            </tr>    
    
    <tr>    
        <td>Product Selling Price From "Score For Cheap"<td>
            <td><asp:Textbox ID="t8" runat="server" required></asp:Textbox>   </td>
            </tr>    

    <tr>    
        <td>Purchase Link<td>
            <td><asp:Textbox ID="t10" runat="server" required></asp:Textbox>   </td>
            </tr>    
    
    <tr>    
        <td>Product images<td>
            <td><asp:FileUpload ID="f1" runat="server" required></asp:FileUpload>   </td>
            </tr>    

    <tr>
        <td colspan="2" align="center">
            <asp:Button ID="b1" runat="server" Text="Upload" OnClick="b1_Click" />
            </td>
        </tr>


    </table>
</asp:Content>
