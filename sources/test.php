<?php

function make_cards($amount) {
    for($i = 0; $i < $amount; $i++):

    echo '<div class="col">
            <div class="card shadow-sm m-1">
                <div class="card-body">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between align-items-center"> <small class="text-muted">9 mins</small> </div>
                </div>
            </div>
        </div>';
        
    endfor;
}

?>