<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        *{
            box-sizing: border-box;
            padding: 0;
            margin: 0;
            color: white;
            font-size: 24px;
        }
        nav{
            width: 100%;
            height: 2.4em;
            background-color: black;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
        }

        header  .right-align{
            margin-left: 20px;
            /* border: 2px solid red; */
        }

        header .right-align #userName{
            color: #03c5fb;
        }

        header  .left-align{
            width: 15%;
            /* border: 2px solid red; */
            display: flex;
            justify-content: space-evenly;
        }

        header > nav span{
            cursor: pointer;
        }

        .card-for-items{

            width: 10em;
            height: 12em;
            /* border: 2px solid red; */
            margin-top: 10px;
            margin-left: 15px;
            box-shadow: 5px 5px 5px 5px lightgrey;
            border-radius: 7px;
        }

        .card-for-items .item-card-color{
            color: black;
        }

        .card-for-items .product-image{
            display: flex;
            justify-content: center;
        }

        .product-name, .product-description, .addItemCard{
            display: flex;
            justify-content: center;
            align-items: center;
            border: 2px solid #03c5fb;
            margin-top: 5px;
            border-radius: 7px;
        } 

        .addItemCard:hover{
            border: none;
            background-color: #03c5fb;
            border-radius: 3px;
        }

    </style>
</head>
<body>
    <header>
        <nav>
            
            <div id="user-nav" class="right-align">
                <span id="userName">
                    User
                </span>
            </div>

            <div id="user-nav" class="left-align">
                <span class="cart-menu-btn">Cart</span>
                <span class="logout-btn">logout</span>
            </div>

        </nav>
    </header>
    
    <div id="item-card" class="card-for-items">
        <div class="product-image">
            <img src="tataPremiumTea.jpeg" alt="product-image" width="150px", height="180px">
        </div>
        <div class="product-name item-card-color">Tata Tea</div>
        <div class="product-description item-card-color">This is the best tea</div>
        <div class="addItemCard item-card-color">Add to Cart</div>
    </div>
</body>
</html>