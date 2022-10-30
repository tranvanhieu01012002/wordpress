
<?php
function render_information(){
    echo '
    <style>
    .wp3-container{
        display: flex;
        font-weight: bold;
        background-color: "#ffff";
    }
    .wp3-component{
        display: flex;
        width: 25%;
        padding: 20px;
        
    }
    .wp3-text{
        padding:10px;
    }
    .wp3-component:not(:last-child){
        border-left: 10px solid "#000";
    }
    @media only screen and (max-width: 600px) {
        .wp3-container{
            display: grid;
            grid-template-columns: auto auto;
            font-weight: bold;
        }
        .wp3-component{
            width: 50%;
            padding: 20px;  
        }
    }
    </style>
    <div class="wp3-container woocommerce">
        <div class="wp3-component">
            <img  src="https://bizweb.dktcdn.net/100/365/442/themes/737549/assets/image-shipping3.png?1664720334923"/>
            <div class="wp3-text">Lorem, ipsum dolor sit amet consectet</div>
        </div>
        <div class="wp3-component">
            <img src="https://bizweb.dktcdn.net/100/365/442/themes/737549/assets/image-shipping3.png?1664720334923"/>
            <div class="wp3-text">Lorem, ipsum dolor sit amet consectet</div>
        </div>
        <div class="wp3-component">
            <img src="https://bizweb.dktcdn.net/100/365/442/themes/737549/assets/image-shipping3.png?1664720334923"/>
            <div class="wp3-text">Lorem, ipsum dolor sit amet consectet</div>
        </div>
        <div class="wp3-component">
            <img src="https://bizweb.dktcdn.net/100/365/442/themes/737549/assets/image-shipping3.png?1664720334923"/>
            <div class="wp3-text">Lorem, ipsum dolor sit amet consectet</div>
        </div>
    </div>
';
}
// include('wp-content/themes/own-shop-wp3/inc/information/content.php');
?>

