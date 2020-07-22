<a href="/catalog" class="silka_prod"><i class="fa fa-arrow-left" aria-hidden="true"></i>Назад</a>
<!-- <div><image src="/images/markus-spiske-temporausch-by-markus-spiske-temporausch-mar-2.jpg" width="1113vh" height="250px"></image></div></div> -->
<div class="theme"><h1><?=$product['name']?><div class="product_image"><image src="/uploads/<?=$product['image_url']?>" alt="<?=$product['name']?>" title="<?=$product['name']?>" /></div></h1></div>
<div class="card_product">

				<div class="product_desc">
					<strong></strong>
					 <?=$product['desc']?>
				</div>		
				<hr>
				<div class="com_buy">			
					<div class="product_com">
					
						<textarea type="text" name="comment" placeholder="Оставьте свой комментарий..."></textarea>
					</div>
					<div class="product_buy">
						
						<a href="/catalog?in-cart-product-id=<?=$product["id"]?>">Пройдено</a>
					</div>
				</div>
				<hr>


</div>				
<style>			
					.product_desc{
						white-space: normal;
						overflow:hidden;
					}
					.card_product hr{
						border: none; /* Убираем границу */
						background-color: #333; /* Цвет линии */
						color: #333; /* Цвет линии для IE6-7 */
						height: 2px; /* Толщина линии */
						opacity:0.35;
					}

					.com_buy textarea{
						margin-left:50px;
						border-radius:20px;
					-webkit-writing-mode: horizontal-tb !important;
					text-rendering: auto;
					color: #b2becd;
					text-indent: 20px;
					text-shadow: none;
					display: flex;
					text-align: start;
					-webkit-appearance: textfield;
					background: transparent;
					cursor: text;
					border: none;
					box-shadow: rgba(113,113,113,0.15) -5px -5px 11px, rgba(0,0,0,0.15) 5px 5px 11px;
						border-radius: 20px;
						width: 325px;
						height: 75px;
						display: flex;
					align-items: center;
						font-size: 14px;
						outline: 0;
					}
					.theme{
						padding:20px;
						height:200px;
						color:#fff;
						/* background-image:url("/images/markus-spiske-temporausch-by-markus-spiske-temporausch-mar-2.jpg"); */
						background:url("/images/bg-pattern.png"),linear-gradient(to left,#497580,#333);
					}

					.silka_prod{
						width: 20px;
						align-items: center;
						justify-content: center;
						font-size: 30px !important;
						font-weight: bold;
					}
					.card_product{
						flex:row;
						text-align:center;
						padding: 10px;
						margin: 0;
					}
					.card_product .product_image {
						float:left;
						margin: 10px;
						padding: 10px;
					}
					.product_image img{
						float:center;
						margin-top:5px;
						margin-left:60px;
						width:280px;
						height:210px;
						opacity:0.7;
					}
					.card_product .product_desc{
						float:center;
						text-align:left;
						padding: 10px;
					
					}
					.card_product .product_buy a{
					float:right;
					padding: 5px;
					font-size: 14pt;
					margin: 10px;
					text-decoration: none;
					}
					.com_buy{
						display:flex;
						bottom:5px;
					}
					.product_com{
						flex-direction:row;
						display:block;
						width:45%;
					}
					.product_buy{
						display:block;
						width:45%;
					}
					.product_buy a{
						font-family: Montserrat,sans-serif;
						border-radius:4px;
						width:170px;
						height:40px;
						border:0;
						background-color: #5fd80e;
						
					}
					.product_buy a:hover{
						background-color: #417b1a;
						color:#fff;
						
						text-decoration: none;
					}
				</style>