<%@ Page Title="" Language="C#" MasterPageFile="~/Site.Master" AutoEventWireup="true" CodeBehind="Feedback.aspx.cs" Inherits="myWebsiteLab.Feedback" %>
<asp:Content ID="Content1" ContentPlaceHolderID="MainContent" runat="server">
    <br><br><br>
    <h2>Feedback Form</h2>
    <table style="width: 800px;">
        <tr>
            <td style="text-align:left" colspan="3"> We welcome and value your feedback. Please check our Announcement and FAQS pages. We may have already answered your questions.  
                <br />
                <br />
                <br />
            </td>

        </tr>
      
        <tr>
            <td style="width: 150px;text-align:right">Name &nbsp&nbsp&nbsp</td>
            <td style="width: 620px;text-align:left">
                <asp:TextBox ID="txtName" runat="server" Width="98%"></asp:TextBox>
            </td>
            <td style="width: 30px;text-align:left">&nbsp;</td>
        </tr>
      
        <tr>
            <td style="width: 150px;text-align:right">&nbsp;</td>
            <td style="width: 620px;text-align:left">
                <asp:RequiredFieldValidator ID="RequiredFieldValidator1" runat="server" ControlToValidate="txtName" ErrorMessage="Name is required" ForeColor="Red" style="font-weight: 700"></asp:RequiredFieldValidator>
            </td>
            <td style="width: 30px;text-align:left">&nbsp;</td>
        </tr>
      
        <tr>
            <td style="width: 150px;text-align:right">Email&nbsp&nbsp&nbsp</td>
            <td style="width: 620px;text-align:left">
                <asp:TextBox ID="txtEmail" runat="server" Width="98%"></asp:TextBox>
            </td>
            <td style="width: 30px;text-align:left">&nbsp;</td>
        </tr>
      
        <tr>
            <td style="width: 150px;text-align:right">&nbsp;</td>
            <td style="width: 620px;text-align:left">
                <asp:RequiredFieldValidator ID="RequiredFieldValidator2" runat="server" ControlToValidate="txtEmail" ErrorMessage="Email is required" ForeColor="Red" style="font-weight: 700"></asp:RequiredFieldValidator>
                .
                <asp:RegularExpressionValidator ID="RegularExpressionValidator1" runat="server" ControlToValidate="txtEmail" ErrorMessage="Invalid email address" ForeColor="Red" style="font-weight: 700" ValidationExpression="\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*"></asp:RegularExpressionValidator>
            </td>
            <td style="width: 30px;text-align:left">&nbsp;</td>
        </tr>
      
        <tr>
            <td style="width: 150px;text-align:right">Comments&nbsp&nbsp&nbsp</td>
            <td style="width: 620px;text-align:left">
                <asp:TextBox ID="txtComment" runat="server" Height="120px" TextMode="MultiLine" Width="98%"></asp:TextBox>
            </td>
            <td style="width: 30px;text-align:left">&nbsp;</td>
        </tr>
      
        <tr>
            <td style="width: 150px;text-align:right">&nbsp;</td>
            <td style="width: 620px;text-align:left">
                <asp:RequiredFieldValidator ID="RequiredFieldValidator3" runat="server" ControlToValidate="txtComment" ErrorMessage="Comment is required" ForeColor="Red" style="font-weight: 700"></asp:RequiredFieldValidator>
            </td>
            <td style="width: 30px;text-align:left">&nbsp;</td>
        </tr>
      
        <tr>
            <td style="width: 150px;text-align:right">
                <asp:SqlDataSource ID="SqlDataSourceFeedback" runat="server" ConnectionString="<%$ ConnectionStrings:DefaultConnection %>" DeleteCommand="DELETE FROM [Feedback] WHERE [FeedbackId] = @FeedbackId" InsertCommand="INSERT INTO [Feedback] ([Name], [Email], [Comment], [Date], [Status]) VALUES (@Name, @Email, @Comment, GETDATE(), @Status)" SelectCommand="SELECT * FROM [Feedback]" UpdateCommand="UPDATE [Feedback] SET [Name] = @Name, [Email] = @Email, [Comment] = @Comment, [Date] = @Date, [Status] = @Status WHERE [FeedbackId] = @FeedbackId">
                    <DeleteParameters>
                        <asp:Parameter Name="FeedbackId" Type="Int32" />
                    </DeleteParameters>
                    <InsertParameters>
                        <asp:ControlParameter ControlID="txtName" Name="Name" PropertyName="Text" Type="String" />
                        <asp:ControlParameter Name="Email" Type="String" ControlID="txtEmail" PropertyName="Text" />
                        <asp:ControlParameter Name="Comment" Type="String" ControlID="txtComment" PropertyName="Text" />
                        <asp:Parameter DefaultValue="New" Name="Status" Type="String" />
                    </InsertParameters>
                    <UpdateParameters>
                        <asp:Parameter Name="Name" Type="String" />
                        <asp:Parameter Name="Email" Type="String" />
                        <asp:Parameter Name="Comment" Type="String" />
                        <asp:Parameter Name="Date" Type="DateTime" />
                        <asp:Parameter Name="Status" Type="String" />
                        <asp:Parameter Name="FeedbackId" Type="Int32" />
                    </UpdateParameters>
                </asp:SqlDataSource>
            </td>
            <td style="width: 620px;text-align:left">
                <asp:Button ID="btnClear" runat="server" Text="Clear" Width="120px" OnClick="btnClear_Click" CausesValidation="False" />
&nbsp;<asp:Button ID="btnSubmit0" runat="server" Text="Submit" Width="120px" OnClick="btnSubmit0_Click" />
            </td>
            <td style="width: 30px;text-align:left">&nbsp;</td>
        </tr>
      
    </table>
</asp:Content>
