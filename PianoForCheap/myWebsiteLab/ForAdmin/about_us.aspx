<%@ Page Title="" Language="C#" MasterPageFile="~/Site.Master" AutoEventWireup="true" CodeBehind="about_us.aspx.cs" Inherits="myWebsiteLab.ForAdmin.about_us" %>
<asp:Content ID="Content1" ContentPlaceHolderID="MainContent" runat="server">
    <br><br><br><br>
    <h1>Admin edit About us_page</h1>
    <asp:SqlDataSource ID="SqlDataSource1" runat="server" ConnectionString="<%$ ConnectionStrings:DefaultConnection %>" SelectCommand="SELECT * FROM [About]" OldValuesParameterFormatString="original_{0}" ConflictDetection="CompareAllValues" DeleteCommand="DELETE FROM [About] WHERE [Id] = @original_Id AND [Content] = @original_Content AND (([images] = @original_images) OR ([images] IS NULL AND @original_images IS NULL)) AND (([images_nav_link] = @original_images_nav_link) OR ([images_nav_link] IS NULL AND @original_images_nav_link IS NULL)) AND (([imageheight] = @original_imageheight) OR ([imageheight] IS NULL AND @original_imageheight IS NULL)) AND (([imagewidth] = @original_imagewidth) OR ([imagewidth] IS NULL AND @original_imagewidth IS NULL)) AND (([left] = @original_left) OR ([left] IS NULL AND @original_left IS NULL)) AND (([top] = @original_top) OR ([top] IS NULL AND @original_top IS NULL))" InsertCommand="INSERT INTO [About] ([Id], [Content], [images], [images_nav_link], [imageheight], [imagewidth], [left], [top]) VALUES (@Id, @Content, @images, @images_nav_link, @imageheight, @imagewidth, @left, @top)" UpdateCommand="UPDATE [About] SET [Content] = @Content, [images] = @images, [images_nav_link] = @images_nav_link, [imageheight] = @imageheight, [imagewidth] = @imagewidth, [left] = @left, [top] = @top WHERE [Id] = @original_Id AND [Content] = @original_Content AND (([images] = @original_images) OR ([images] IS NULL AND @original_images IS NULL)) AND (([images_nav_link] = @original_images_nav_link) OR ([images_nav_link] IS NULL AND @original_images_nav_link IS NULL)) AND (([imageheight] = @original_imageheight) OR ([imageheight] IS NULL AND @original_imageheight IS NULL)) AND (([imagewidth] = @original_imagewidth) OR ([imagewidth] IS NULL AND @original_imagewidth IS NULL)) AND (([left] = @original_left) OR ([left] IS NULL AND @original_left IS NULL)) AND (([top] = @original_top) OR ([top] IS NULL AND @original_top IS NULL))">
        <DeleteParameters>
            <asp:Parameter Name="original_Id" Type="Int32" />
            <asp:Parameter Name="original_Content" Type="String" />
            <asp:Parameter Name="original_images" Type="String" />
            <asp:Parameter Name="original_images_nav_link" Type="String" />
            <asp:Parameter Name="original_imageheight" Type="Int32" />
            <asp:Parameter Name="original_imagewidth" Type="Int32" />
            <asp:Parameter Name="original_left" Type="Int32" />
            <asp:Parameter Name="original_top" Type="Int32" />
        </DeleteParameters>
        <InsertParameters>
            <asp:Parameter Name="Id" Type="Int32" />
            <asp:Parameter Name="Content" Type="String" />
            <asp:Parameter Name="images" Type="String" />
            <asp:Parameter Name="images_nav_link" Type="String" />
            <asp:Parameter Name="imageheight" Type="Int32" />
            <asp:Parameter Name="imagewidth" Type="Int32" />
            <asp:Parameter Name="left" Type="Int32" />
            <asp:Parameter Name="top" Type="Int32" />
        </InsertParameters>
        <UpdateParameters>
            <asp:Parameter Name="Content" Type="String" />
            <asp:Parameter Name="images" Type="String" />
            <asp:Parameter Name="images_nav_link" Type="String" />
            <asp:Parameter Name="imageheight" Type="Int32" />
            <asp:Parameter Name="imagewidth" Type="Int32" />
            <asp:Parameter Name="left" Type="Int32" />
            <asp:Parameter Name="top" Type="Int32" />
            <asp:Parameter Name="original_Id" Type="Int32" />
            <asp:Parameter Name="original_Content" Type="String" />
            <asp:Parameter Name="original_images" Type="String" />
            <asp:Parameter Name="original_images_nav_link" Type="String" />
            <asp:Parameter Name="original_imageheight" Type="Int32" />
            <asp:Parameter Name="original_imagewidth" Type="Int32" />
            <asp:Parameter Name="original_left" Type="Int32" />
            <asp:Parameter Name="original_top" Type="Int32" />
        </UpdateParameters>
    </asp:SqlDataSource>
    <asp:GridView ID="GridViewFaq" runat="server" AllowPaging="True" AllowSorting="True" AutoGenerateColumns="False" CellPadding="4" DataSourceID="SqlDataSource1" ForeColor="#333333" GridLines="None" Height="238px" Width="1282px" OnSelectedIndexChanged="GridViewFaq_SelectedIndexChanged" DataKeyNames="Id" AutoGenerateEditButton="True">
        <AlternatingRowStyle BackColor="White" />
        <Columns>
            <asp:BoundField DataField="Id" HeaderText="Id" SortExpression="Id" ReadOnly="True" />
            <asp:BoundField DataField="Content" HeaderText="Content" SortExpression="Content" />
            <asp:BoundField DataField="images" HeaderText="images" SortExpression="images" />
            <asp:BoundField DataField="images_nav_link" HeaderText="images_nav_link" SortExpression="images_nav_link" />
            <asp:BoundField DataField="imageheight" HeaderText="imageheight" SortExpression="imageheight" />
            <asp:BoundField DataField="imagewidth" HeaderText="imagewidth" SortExpression="imagewidth" />
            <asp:BoundField DataField="left" HeaderText="left" SortExpression="left" />
            <asp:BoundField DataField="top" HeaderText="top" SortExpression="top" />
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
