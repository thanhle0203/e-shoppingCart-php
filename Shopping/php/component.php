<?php

function component(){
    $element="
        <div class=\"col-md-3 col-sm-6 my-3 my-md-0 diplay: block \">
            <form action=\"index.php\" method=\"post\">

                <div class=\"card shadow\" >
            
                        <div>
                            <img 
                                src=\"https://m.media-amazon.com/images/I/61L5QgPvgqL._AC_SL1500_.jpg\" 
                                class=\"card-fluid card-img-top\" 
                                alt=\"Image1\">
                        </div>
                        
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Macbook Pro 14</h5>
                            <h6>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"far fa-star\"></i>
                            
                            </h6>
                            <p class=\"card-text\">
                                The new MacBook Pro delivers game-changing performance for pro users. 
                            </p>
                            <h5>
                                <small><s class=\"text-secondary\">$1600</s><small>
                                <span class=\"price\">$1400</span>
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