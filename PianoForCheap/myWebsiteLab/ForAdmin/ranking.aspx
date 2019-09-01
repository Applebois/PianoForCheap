<%@ Page Title="" Language="C#" MasterPageFile="~/Site.Master" AutoEventWireup="true" CodeBehind="ranking.aspx.cs" Inherits="myWebsiteLab.ForAdmin.ranking" %>
<asp:Content ID="Content1" ContentPlaceHolderID="MainContent" runat="server">
    <br><br><br><br>
    <h1>Admin Ranking Edit</h1>
    <asp:SqlDataSource ID="SqlDataSource1" runat="server" ConnectionString="<%$ ConnectionStrings:DefaultConnection %>" SelectCommand="SELECT * FROM [TopPurchase]" ConflictDetection="CompareAllValues" DeleteCommand="DELETE FROM [TopPurchase] WHERE [Id] = @original_Id AND [ProductImage] = @original_ProductImage AND [ProductDescriptions] = @original_ProductDescriptions AND [numDownload] = @original_numDownload AND [PlayBy] = @original_PlayBy AND [ProductName] = @original_ProductName AND [Singer] = @original_Singer" InsertCommand="INSERT INTO [TopPurchase] ([ProductImage], [ProductDescriptions], [numDownload], [PlayBy], [ProductName], [Singer]) VALUES (@ProductImage, @ProductDescriptions, @numDownload, @PlayBy, @ProductName, @Singer)" OldValuesParameterFormatString="original_{0}" UpdateCommand="UPDATE [TopPurchase] SET [ProductImage] = @ProductImage, [ProductDescriptions] = @ProductDescriptions, [numDownload] = @numDownload, [PlayBy] = @PlayBy, [ProductName] = @ProductName, [Singer] = @Singer WHERE [Id] = @original_Id AND [ProductImage] = @original_ProductImage AND [ProductDescriptions] = @original_ProductDescriptions AND [numDownload] = @original_numDownload AND [PlayBy] = @original_PlayBy AND [ProductName] = @original_ProductName AND [Singer] = @original_Singer">
        <DeleteParameters>
            <asp:Parameter Name="original_Id" Type="Int32" />
            <asp:Parameter Name="original_ProductImage" Type="String" />
            <asp:Parameter Name="original_ProductDescriptions" Type="String" />
            <asp:Parameter Name="original_numDownload" Type="Int32" />
            <asp:Parameter Name="original_PlayBy" Type="String" />
            <asp:Parameter Name="original_ProductName" Type="String" />
            <asp:Parameter Name="original_Singer" Type="String" />
        </DeleteParameters>
        <InsertParameters>
            <asp:Parameter Name="ProductImage" Type="String" />
            <asp:Parameter Name="ProductDescriptions" Type="String" />
            <asp:Parameter Name="numDownload" Type="Int32" />
            <asp:Parameter Name="PlayBy" Type="String" />
            <asp:Parameter Name="ProductName" Type="String" />
            <asp:Parameter Name="Singer" Type="String" />
        </InsertParameters>
        <UpdateParameters>
            <asp:Parameter Name="ProductImage" Type="String" />
            <asp:Parameter Name="ProductDescriptions" Type="String" />
            <asp:Parameter Name="numDownload" Type="Int32" />
            <asp:Parameter Name="PlayBy" Type="String" />
            <asp:Parameter Name="ProductName" Type="String" />
            <asp:Parameter Name="Singer" Type="String" />
            <asp:Parameter Name="original_Id" Type="Int32" />
            <asp:Parameter Name="original_ProductImage" Type="String" />
            <asp:Parameter Name="original_ProductDescriptions" Type="String" />
            <asp:Parameter Name="original_numDownload" Type="Int32" />
            <asp:Parameter Name="original_PlayBy" Type="String" />
            <asp:Parameter Name="original_ProductName" Type="String" />
            <asp:Parameter Name="original_Singer" Type="String" />
        </UpdateParameters>
    </asp:SqlDataSource>
  <asp:GridView ID="GridViewFaq" runat="server" AllowPaging="True" AllowSorting="True" AutoGenerateColumns="False" CellPadding="4" DataSourceID="SqlDataSource1" ForeColor="#333333" GridLines="None" Height="238px" Width="1282px" OnSelectedIndexChanged="GridViewFaq_SelectedIndexChanged" DataKeyNames="Id" AutoGenerateEditButton="True">
        <AlternatingRowStyle BackColor="White" />
        <Columns>
            <asp:BoundField DataField="Id" HeaderText="Id" SortExpression="Id" InsertVisible="False" ReadOnly="True" />
            <asp:BoundField DataField="ProductImage" HeaderText="ProductImage" SortExpression="ProductImage" />
            <asp:BoundField DataField="ProductDescriptions" HeaderText="ProductDescriptions" SortExpression="ProductDescriptions" />
            <asp:BoundField DataField="numDownload" HeaderText="numDownload" SortExpression="numDownload" />
            <asp:BoundField DataField="PlayBy" HeaderText="PlayBy" SortExpression="PlayBy" />
            <asp:BoundField DataField="ProductName" HeaderText="ProductName" SortExpression="ProductName" />
            <asp:BoundField DataField="Singer" HeaderText="Singer" SortExpression="Singer" />
        </Columns>
        <FooterStyle BackColor="#990000" Font-Bold="True" ForeColor="White" />
        <HeaderStyle BackColor="#990000" Font-Bold="True" ForeColor="White" />
        <PagerStyle BackColor="#FFCC66" ForeColor="#333333" HorizontalAlign="Center" />
        <RowStyle BackColor="#FFFBD6" ForeColor="#333333" />
        <SelectedRowStyle BackColor="#FFCC66" Font-Bold="True" ForeColor="Navy" />
        <SortedAscendingCellStyle BackColor="#FDF5AC" />
        <SortedAscendingHeaderStyle BackColor="#4D0000" />
        <SortedDescendingCellStyle BackColor="#FCF6C0" />
        <SortedDescendingHeaderStyle BackColor="#820000" />
    </asp:GridView>
    <br />
    <br />
</asp:Content>
