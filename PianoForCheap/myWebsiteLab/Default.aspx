    <%@ Page Title="Home Page" Language="C#" MasterPageFile="~/Site.Master" AutoEventWireup="true" CodeBehind="Default.aspx.cs" Inherits="myWebsiteLab._Default" %>

<asp:Content ID="BodyContent" ContentPlaceHolderID="MainContent" runat="server">  
    
    <asp:repeater ID="d1" runat="server">
        
           <HeaderTemplate>  
             
                	<div class="features">
            
		<div class="container">
			<h3 class="m_3">TOP 8 Purchase</h3>
			
			  <div class="row">
            </HeaderTemplate>
    <ItemTemplate>
        
        <div class="col-md-3 top_box">
                    
				  <div class="view view-ninth"><a href="<%#Eval("ProductDescriptions") %>"">
                    <img src="<%#Eval("ProductImage") %>""  width = "250px" height = "250px" class="img-responsive" alt=""/>
                    <div class="mask mask-1"> </div>
                    <div class="mask mask-2"> </div>
                      <div class="content">
                        <h2><%#Eval("ProductName") %></h2>
                        <p>Downloaded <%#Eval("numDownload")%> times</p>
                      </div>
                   </a>
                  </div>
                  <h4 class="m_4"><a href="https://gum.co/nUWmj">By <%#Eval("PlayBy") %></a></h4>
                  <p class="m_5"><%#Eval("ProductName")%> - <%#Eval("Singer") %> </p>
                </div>
                 
        </ItemTemplate>

        <FooterTemplate>
            </div>
</FooterTemplate>

    </asp:repeater>
    <div align="center"><iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&width=900&layout=standard&action=like&show_faces=true&share=true&height=90&appId" width="300" height="50" style="border:none;overflow:hidden;" scrolling="no" frameborder="2" allowTransparency="true"><p></iframe></font>
</div>
      <table>
    <tr>    
        <td><b>Enter your email to subscribe to get latest piano score<b> &nbsp&nbsp&nbsp&nbsp&nbsp</td>
        <p></p>
         <font color="grey" size="4"><td></td><td></font>
            <td><asp:Textbox ID="t1" runat="server" TextMode="Email" required placeholder="Enter email address"></asp:Textbox>   </td>
            </tr>  

          <tr>
        <td colspan="2" align="center">
            <asp:Button ID="b1" runat="server" Text="Subscribe" OnClick="b1_Click" />
            </td>
        </tr>

</table>

</asp:Content>
