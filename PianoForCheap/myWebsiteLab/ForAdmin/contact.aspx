<%@ Page Title="" Language="C#" MasterPageFile="~/Site.Master" AutoEventWireup="true" CodeBehind="contact.aspx.cs" Inherits="myWebsiteLab.ForAdmin.contact" %>
<asp:Content ID="Content1" ContentPlaceHolderID="MainContent" runat="server">
    <br><br><br><br>
    <h1>Admin edit contact_page</h1>
    <asp:SqlDataSource ID="SqlDataSource1" runat="server" ConnectionString="<%$ ConnectionStrings:DefaultConnection %>" SelectCommand="SELECT * FROM [Contact]" OldValuesParameterFormatString="original_{0}" ConflictDetection="CompareAllValues" DeleteCommand="DELETE FROM [Contact] WHERE [Id] = @original_Id AND [Content] = @original_Content AND [GoogleMap_Display] = @original_GoogleMap_Display AND [GoogleMap_Nav] = @original_GoogleMap_Nav" InsertCommand="INSERT INTO [Contact] ([Id], [Content], [GoogleMap_Display], [GoogleMap_Nav]) VALUES (@Id, @Content, @GoogleMap_Display, @GoogleMap_Nav)" UpdateCommand="UPDATE [Contact] SET [Content] = @Content, [GoogleMap_Display] = @GoogleMap_Display, [GoogleMap_Nav] = @GoogleMap_Nav WHERE [Id] = @original_Id AND [Content] = @original_Content AND [GoogleMap_Display] = @original_GoogleMap_Display AND [GoogleMap_Nav] = @original_GoogleMap_Nav">
        <DeleteParameters>
            <asp:Parameter Name="original_Id" Type="Int32" />
            <asp:Parameter Name="original_Content" Type="String" />
            <asp:Parameter Name="original_GoogleMap_Display" Type="String" />
            <asp:Parameter Name="original_GoogleMap_Nav" Type="String" />
        </DeleteParameters>
        <InsertParameters>
            <asp:Parameter Name="Id" Type="Int32" />
            <asp:Parameter Name="Content" Type="String" />
            <asp:Parameter Name="GoogleMap_Display" Type="String" />
            <asp:Parameter Name="GoogleMap_Nav" Type="String" />
        </InsertParameters>
        <UpdateParameters>
            <asp:Parameter Name="Content" Type="String" />
            <asp:Parameter Name="GoogleMap_Display" Type="String" />
            <asp:Parameter Name="GoogleMap_Nav" Type="String" />
            <asp:Parameter Name="original_Id" Type="Int32" />
            <asp:Parameter Name="original_Content" Type="String" />
            <asp:Parameter Name="original_GoogleMap_Display" Type="String" />
            <asp:Parameter Name="original_GoogleMap_Nav" Type="String" />
        </UpdateParameters>
    </asp:SqlDataSource>
    <asp:GridView ID="GridViewFaq" runat="server" AllowPaging="True" AllowSorting="True" AutoGenerateColumns="False" CellPadding="4" DataSourceID="SqlDataSource1" ForeColor="#333333" GridLines="None" Height="238px" Width="1282px" OnSelectedIndexChanged="GridViewFaq_SelectedIndexChanged" DataKeyNames="Id" AutoGenerateEditButton="True">
        <AlternatingRowStyle BackColor="White" />
        <Columns>
            <asp:BoundField DataField="Id" HeaderText="Id" SortExpression="Id" ReadOnly="True" />
            <asp:BoundField DataField="Content" HeaderText="Content" SortExpression="Content" />
            <asp:BoundField DataField="GoogleMap_Display" HeaderText="GoogleMap_Display" SortExpression="GoogleMap_Display" />
            <asp:BoundField DataField="GoogleMap_Nav" HeaderText="GoogleMap_Nav" SortExpression="GoogleMap_Nav" />
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
