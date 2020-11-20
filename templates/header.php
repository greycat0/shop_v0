<link href="https://fonts.googleapis.com/css?family=Bad+Script" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
<script src="js/popup.js" type="text/javascript"></script>
<style type="text/css">
	.header
	{
		background: #f5f5f5;
		display: flex;
		height: 100px;
		align-items: stretch;
		justify-content: 
	}
	.logo
	{
		display: inline-flex;
		height: 100%;
		text-decoration: none;
	}
	.logo img
	{
		height: 100%;
	}
	.logo span
	{
		align-self: center;
		font-size: 20px;
		color: #333333;
		margin-right: 10px;
		font-family: 'Bad Script', cursive;
		line-height: 1.2;
	}
	.popup_button
	{
		align-self: flex-end;
		border:none;
		border-radius: 7px;
		background-color: #f5f5f5;
		width: 130px;
		height: 70px;
		font-family: 'Roboto', sans-serif;
	}
	.popup_about
	{
		display: none;
		background-color: #f5f5f5;
		border: solid 1px #e9e9e9;
	}
</style>
<div class="header">
	    
	    	<a class="logo" href="http://<?php echo $_SERVER['SERVER_NAME'];?>/shop">
	     	<img src="imgs/logo.jpg">
	        <span>
	            Michel<br>David<br>Shop
	        </span>
	        </a>
	    
    <button class="popup_button" onmouseenter='showPopup(event, "about")' style="margin-left: 50%;">
        О магазине
    </button>
    <button class="popup_button" onmouseenter='showPopup(event, "about")'>
        Доставка
    </button>
</div>
<div class="popup_about" id="about">
    <ul>
        <li>
            Узнать о магазине
        </li>
        <li>
            Еще какая-то инфа
        </li>
        <li>
            И еще что-то
        </li>
        <li>
            БЛАБЛАБЛА
        </li>
        <li>
            БЛАБЛАБЛА
        </li>
        <li>
            БЛАБЛАБЛА
        </li>
        <li>
            БЛАБЛАБЛА
        </li>
    </ul>
</div>