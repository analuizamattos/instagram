<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>CSS - Galeria de Fotos</title>
    </head>
    <body>
        <?php
            require_once 'menu.php';
        ?>
        
       
        <div class="container">
            <div class="foto">
                <span target="_blank" href="img/dog.jpg">
                    <img src="img/dog.jpg" alt="Dog" />
                </span>
                <div class="descricao">
                    Dog
                </div>
            </div>
        </div>
        
        
               
        
        <style>
            .container{
                width: 24%;
                float: left;
                padding: 2px 5px; 
            }
            @media only screen and ( max-width: 700px){
                .container{
                    width: 49%;
                    margin: 5px 2px;
                }
                .descricao{
                    font-size: 14px;
                    color: red;
                }
            }
            
            @media only screen and ( max-width: 500px){
                .container{
                    width: 100%;
                }
                .descricao{
                    font-size: 22px;
                    color: blue;
                }
            }
            
            .foto{
                border: 1px solid black;
            }
            .foto img{
                width: 100%;
                height: auto;
            }
            .descricao{
                padding: 10px;
                text-align: center;
            }
            
            
        </style>
    </body>
</html>












