<?php

function component($icon, $heading, $writeup){
    $element = "
    
    <div class='box'>
    <div class='icon'><img src='$icon' alt=''></div>
    <h3>$heading</h3>
    <p>$writeup</p>
    </div>

";

echo $element;
}

function details($heading, $writeup, $color, $opa, $icon, $right, $left){
    $element = "
    
    <div class='box'>
        <div class='icon'  style='background-color: $color; box-shadow: 0px 10px 20px $opa;' data-aos = $right><img src='$icon' alt=''></div>
        <div class='writeup' data-aos = $left>
            <h3>$heading</h3>
            <p>$writeup</p>
        </div>

    </div>
    
    
    ";

    echo $element;

}

function review($client, $anime) {
    $element = "
    
    <div class= 'box' data-aos = $anime>
        <div class= 'person'><img src='$client' alt=''></div>
        <h3>Andrew Smith</h3>
        <p>One Year With Us</p>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, perferendis, corporis tenetur similique.
        </p>
        <div class='rate'>
            <img src='./img/icons8-star-50.png' alt=''>
            <img src='./img/icons8-star-50.png' alt=''>
            <img src='./img/icons8-star-50.png' alt=''>
            <img src='./img/icons8-star-50.png' alt=''>
            <img src='./img/icons8-star-50.png' alt=''>
        </div>
    </div>
    
    ";

    echo $element;
}