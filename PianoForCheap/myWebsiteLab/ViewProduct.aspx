<%@ Page Title="" Language="C#" MasterPageFile="~/Site.Master" AutoEventWireup="true" CodeBehind="ViewProduct.aspx.cs" Inherits="groceria.ViewProduct" %>

<asp:Content ID="Content1" ContentPlaceHolderID="MainContent" runat="server">
    <div class="form-group">
        <div class="col-md-2">
            <asp:DropDownList ID="DropDownListCategory" runat="server" AutoPostBack="True" CssClass="form-control" DataSourceID="ObjectDataSourceListCategory" DataTextField="CategoryName" DataValueField="CategoryId" OnSelectedIndexChanged="DropDownListCategory_SelectedIndexChanged"></asp:DropDownList>
        </div>
        <div class="col-md-offset-8">
            <div class="form-group col-md-8">
                <asp:TextBox ID="TextBoxSearch" CssClass="form-control" runat="server"></asp:TextBox>
            </div>
            <%--<asp:Button ID="ButtonSearch" runat="server" Text="Search" CssClass="btn btn-default" OnClick="ButtonSearch_Click" />--%>
            <div class="col-md-1">
                <button runat="server" id="ButtonSearchProduct" class="btn btn-default" onserverclick="ButtonSearch_Click">
                    <span class="glyphicon glyphicon-search"></span>Search</button>
            </div>
        </div>
    </div>
    <br />
    <br />
    <asp:ListView ID="ListViewProduct" runat="server" DataSourceID="ObjectDataSourceViewProduct" GroupItemCount="4">
        <EmptyDataTemplate>
            <div style="margin-left: 40%; margin-right: 40%;">
                <table>
                    <tr>
                        <td>No data was returned.</td>
                    </tr>
                </table>

            </div>
        </EmptyDataTemplate>
        <EmptyItemTemplate>
            <td />
        </EmptyItemTemplate>
        <GroupTemplate>
            <tr id="itemPlaceholderContainer" runat="server">
                <td id="itemPlaceholder" runat="server"></td>
            </tr>
        </GroupTemplate>
        <ItemTemplate>
            <td runat="server">
                <table>
                    <tr>
                        <td>
                            <a href="ProductDetails.aspx?productId=<%#Eval("ProductId")%>">
                                <asp:Image ID="ImageProduct" ImageUrl='<%# "~/ProductImage/" + Eval("ProductId")+".jpg" %>' Width="250px" Height="250px" runat="server" />
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="ProductDetails.aspx?productId=<%#Eval("ProductId")%>">
                                <span>
                                    <%#Eval("ProductName")%>
                                </span>
                            </a>
                            <br />
                            <span>
                                <b>Price: </b><%#:String.Format("{0:c}", Eval("ProductPrice"))%>
                            </span>
                            <br />
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                </table>
                </p>
            </td>
        </ItemTemplate>
        <LayoutTemplate>
            <table style="width: 100%;">
                <tbody>
                    <tr>
                        <td>
                            <table id="groupPlaceholderContainer" runat="server" style="width: 100%">
                                <tr id="groupPlaceholder"></tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr></tr>
                </tbody>
            </table>
        </LayoutTemplate>
    </asp:ListView>
    <asp:Button ID="ButtonPrev" runat="server" CssClass="btn btn-default" Height="35px" Width="100px" Text="Prev" OnClick="ButtonPrev_Click" />
    <asp:Button ID="ButtonNext" runat="server" CssClass="btn btn-default" Height="35px" Width="100px" Style="float: right; margin-right: 4%;" Text="Next" OnClick="ButtonNext_Click" />
    <br />
    <br />
    <asp:HiddenField ID="HiddenFieldPage" runat="server" />
    <asp:ObjectDataSource ID="ObjectDataSourceViewProduct" runat="server" SelectMethod="searchProductByCategoryIdPage" TypeName="groceria.ProductDataAccessLayer">
        <SelectParameters>
            <asp:QueryStringParameter Name="searchProduct" QueryStringField="searchProduct" Type="String" />
            <asp:QueryStringParameter Name="categoryId" QueryStringField="categoryId" Type="Int32" />
            <asp:QueryStringParameter Name="page" QueryStringField="page" Type="Int32" />
        </SelectParameters>
    </asp:ObjectDataSource>
    <asp:ObjectDataSource ID="ObjectDataSourceListCategory" runat="server" SelectMethod="getCategory" TypeName="groceria.CategoryDataAccessLayer"></asp:ObjectDataSource>
</asp:Content>
