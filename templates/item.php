<style type="text/css">
    .item
	{
		display: inline-block;
		margin: 10px;
	}
	.item:hover
	{
		margin-left: 9px;
		margin-right: 9px;
		border-left: 1px solid #e9e9e9;
		border-right: 1px solid #e9e9e9;
	}
	.item_img
	{
		color: rgba(0,0,0,0);
	}
	.item_img img
	{
		border-radius: 3px;
		width: 200px;
		height: 200px;
	}
	.item_name
	{
		font-size: 17px;
		color: black;
		margin: 0px;
		//text-align: center;
		display: block;
		font-weight: 100; 
		font-family: 'Roboto', sans-serif;
		text-decoration: none;
	}
	.item_price
	{
		margin: 0px;
		font-family: 'Roboto', sans-serif;
	}
	.item_amoung
	{
		margin: 0px;
		font-family: 'Roboto', sans-serif;
	}
</style>
<div class="item">
    <a class="item_img" href="show_item.php?id=<?php echo $id;?>">
        <img src="imgs/<?php echo $img; ?>">
        </img>
    </a>
    <a align="center" class="item_name" href="show_item.php?id=<?php echo $id;?>">
        <?php echo $name; ?>
    </a>
    <div align="center" class="item_price">
        <?php echo $price; ?>
        р.
    </div>
<!--     <div align="center" class="item_amoung">
        В наличии
        <?php echo $amoung; ?>
        шт.
    </div> -->
</div>