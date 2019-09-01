<%@ Page Title="" Language="C#" MasterPageFile="~/Site.Master" AutoEventWireup="true" CodeBehind="Productedit.aspx.cs" Inherits="myWebsiteLab.ForAdmin.ranking" %>
<asp:Content ID="Content1" ContentPlaceHolderID="MainContent" runat="server">
    <br><br><br><br>
    <h1>Admin Product Edit</h1>
    <asp:SqlDataSource ID="SqlDataSource1" runat="server" ConnectionString="<%$ ConnectionStrings:DefaultConnection %>" SelectCommand="SELECT * FROM [products]" ConflictDetection="CompareAllValues" DeleteCommand="DELETE FROM [products] WHERE [id] = @original_id AND [ProductName] = @original_ProductName AND [Playby] = @original_Playby AND [PDF] = @original_PDF AND [OVE] = @original_OVE AND [MIDI] = @original_MIDI AND [Original] = @original_Original AND [Sell] = @original_Sell AND [Purchaselink] = @original_Purchaselink AND [ProductImage] = @original_ProductImage" InsertCommand="INSERT INTO [products] ([ProductName], [Playby], [PDF], [OVE], [MIDI], [Original], [Sell], [Purchaselink], [ProductImage]) VALUES (@ProductName, @Playby, @PDF, @OVE, @MIDI, @Original, @Sell, @Purchaselink, @ProductImage)" OldValuesParameterFormatString="original_{0}" UpdateCommand="UPDATE [products] SET [ProductName] = @ProductName, [Playby] = @Playby, [PDF] = @PDF, [OVE] = @OVE, [MIDI] = @MIDI, [Original] = @Original, [Sell] = @Sell, [Purchaselink] = @Purchaselink, [ProductImage] = @ProductImage WHERE [id] = @original_id AND [ProductName] = @original_ProductName AND [Playby] = @original_Playby AND [PDF] = @original_PDF AND [OVE] = @original_OVE AND [MIDI] = @original_MIDI AND [Original] = @original_Original AND [Sell] = @original_Sell AND [Purchaselink] = @original_Purchaselink AND [ProductImage] = @original_ProductImage">
        <DeleteParameters>
            <asp:Parameter Name="original_id" Type="Int32" />
            <asp:Parameter Name="original_ProductName" Type="String" />
            <asp:Parameter Name="original_Playby" Type="String" />
            <asp:Parameter Name="original_PDF" Type="Int32" />
            <asp:Parameter Name="original_OVE" Type="Int32" />
            <asp:Parameter Name="original_MIDI" Type="Int32" />
            <asp:Parameter Name="original_Original" Type="Decimal" />
            <asp:Parameter Name="original_Sell" Type="Decimal" />
            <asp:Parameter Name="original_Purchaselink" Type="String" />
            <asp:Parameter Name="original_ProductImage" Type="String" />
        </DeleteParameters>
        <InsertParameters>
            <asp:Parameter Name="ProductName" Type="String" />
            <asp:Parameter Name="Playby" Type="String" />
            <asp:Parameter Name="PDF" Type="Int32" />
            <asp:Parameter Name="OVE" Type="Int32" />
            <asp:Parameter Name="MIDI" Type="Int32" />
            <asp:Parameter Name="Original" Type="Decimal" />
            <asp:Parameter Name="Sell" Type="Decimal" />
            <asp:Parameter Name="Purchaselink" Type="String" />
            <asp:Parameter Name="ProductImage" Type="String" />
        </InsertParameters>
        <UpdateParameters>
            <asp:Parameter Name="ProductName" Type="String" />
            <asp:Parameter Name="Playby" Type="String" />
            <asp:Parameter Name="PDF" Type="Int32" />
            <asp:Parameter Name="OVE" Type="Int32" />
            <asp:Parameter Name="MIDI" Type="Int32" />
            <asp:Parameter Name="Original" Type="Decimal" />
            <asp:Parameter Name="Sell" Type="Decimal" />
            <asp:Parameter Name="Purchaselink" Type="String" />
            <asp:Parameter Name="ProductImage" Type="String" />
            <asp:Parameter Name="original_id" Type="Int32" />
            <asp:Parameter Name="original_ProductName" Type="String" />
            <asp:Parameter Name="original_Playby" Type="String" />
            <asp:Parameter Name="original_PDF" Type="Int32" />
            <asp:Parameter Name="original_OVE" Type="Int32" />
            <asp:Parameter Name="original_MIDI" Type="Int32" />
            <asp:Parameter Name="original_Original" Type="Decimal" />
            <asp:Parameter Name="original_Sell" Type="Decimal" />
            <asp:Parameter Name="original_Purchaselink" Type="String" />
            <asp:Parameter Name="original_ProductImage" Type="String" />
        </UpdateParameters>
    </asp:SqlDataSource>
  <asp:GridView ID="GridViewFaq" runat="server" AllowPaging="True" AllowSorting="True" AutoGenerateColumns="False" CellPadding="4" DataSourceID="SqlDataSource1" ForeColor="#333333" GridLines="None" Height="238px" Width="1282px" OnSelectedIndexChanged="GridViewFaq_SelectedIndexChanged" DataKeyNames="id" AutoGenerateEditButton="True">
        <AlternatingRowStyle BackColor="White" />
        <Columns>
            <asp:CommandField ShowDeleteButton="True" />
            <asp:BoundField DataField="id" HeaderText="id" SortExpression="id" InsertVisible="False" ReadOnly="True" />
            <asp:BoundField DataField="ProductName" HeaderText="ProductName" SortExpression="ProductName" />
            <asp:BoundField DataField="Playby" HeaderText="Playby" SortExpression="Playby" />
            <asp:BoundField DataField="PDF" HeaderText="PDF" SortExpression="PDF" />
            <asp:BoundField DataField="OVE" HeaderText="OVE" SortExpression="OVE" />
            <asp:BoundField DataField="MIDI" HeaderText="MIDI" SortExpression="MIDI" />
            <asp:BoundField DataField="Original" HeaderText="Original" SortExpression="Original" />
            <asp:BoundField DataField="Sell" HeaderText="Sell" SortExpression="Sell" />
            <asp:BoundField DataField="Purchaselink" HeaderText="Purchaselink" SortExpression="Purchaselink" />
            <asp:BoundField DataField="ProductImage" HeaderText="ProductImage" SortExpression="ProductImage" />
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
