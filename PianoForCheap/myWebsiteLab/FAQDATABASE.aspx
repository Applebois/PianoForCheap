<%@ Page Title="" Language="C#" MasterPageFile="~/Site.Master" AutoEventWireup="true" CodeBehind="FAQDATABASE.aspx.cs" Inherits="myWebsiteLab.FAQDATABASE" %>
<asp:Content ID="Content1" ContentPlaceHolderID="MainContent" runat="server">

        <link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style_faq.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->

    <body>
<br><br><br>
<section class="cd-faq">
	<ul class="cd-faq-categories">
		<li><a class="selected" href="#basics">Frequent ask questions</a></li>
	</ul> <!-- cd-faq-categories -->


    <br><br>
    <asp:repeater ID="d1" runat="server">


        <HeaderTemplate>
            	<div class="cd-faq-items">
		<ul id="basics" class="cd-faq-group">
			<li class="cd-faq-title"><h2>FAQ</h2></li>
            </HeaderTemplate>

        <ItemTemplate>
            <li>
				<a class="cd-faq-trigger" href="#0"><%#Eval("FaqQuestion") %></a>
				<div class="cd-faq-content">
					<p><%#Eval("FaqAnswer") %></p>
				</div> <!-- cd-faq-content -->
            </ItemTemplate>

        <FooterTemplate>
            	</li>   
            </FooterTemplate>

    </asp:repeater>
    <script src="js/jquery-2.1.1.js"></script>
<script src="js/jquery.mobile.custom.min.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</asp:Content>
