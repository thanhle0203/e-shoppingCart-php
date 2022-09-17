<?php

function component($product_name, $product_price, $product_img){
    $element="
        <div class=\"col-md-3 col-sm-6 my-3 my-md-0 ml-3 mr-3 display: inline-block\">
            <form action=\"index.php\" method=\"post\" display: inline-block class=\"form\" >

                <div class=\"card shadow mb-3 h-100 mt-3 display: inline-block \">
            
                        <div>
                            <img 
                                src=\"$product_img\" 
                                class=\"card-fluid card-img-top\" 
                                alt=\"Image1\">
                        </div>
                        
                        <div class=\"card-body display: inline-block\">
                            <h5 class=\"card-title\">$product_name</h5>
                            <h6>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"far fa-star\"></i>
                            
                            </h6>
                            <p>
                                The new MacBook Pro delivers game-changing performance for pro users. 
                            </p>
                            <h5>
                                <small><s class=\"text-secondary\">$1600</s><small>
                                <span class=\"price\">$product_price</span>
                            </h5>


                            <button 
                                type=\"submit\" 
                                class=\"btn btn-warning my-3\" 
                                name=\"add\">Add to Card 
                                <i 
                                    class=\"fas fa-cart-shopping\">
                                </i></button>
                        </div>
                    </div>
                    
               
            </form>
        </div>
    ";
    echo $element;
}

?>