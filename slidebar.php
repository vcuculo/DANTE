  
<?php
    $type = "";
    $start_lbl = "";
    $end_lbl = "";

    if (isset($_GET['type'])) {
        $type = filter_input(INPUT_GET, 'type', FILTER_SANITIZE_SPECIAL_CHARS); 
    }         

    if($type == "arousal"){
        $start_lbl = 'Very Passive';
        $end_lbl = 'Very Active';
    }else if($type == "valence"){
        $start_lbl = 'Very Negative';
        $end_lbl = 'Very Positive';
    }else if($type == "dominance"){
        $start_lbl = 'In control';
        $end_lbl = 'Uncontrolled';
    }
?>

<input onblur="this.focus()" autofocus id="slider" data-slider-id='annoSlider' type="text" data-slider-min="-1" data-slider-max="1" data-slider-step="0.001" data-slider-value="0" data-slider-ticks="[-1, 0, 1]"
data-slider-ticks-labels='["<b><?php echo $start_lbl ?></b>", "0", "<b><?php echo $end_lbl ?></b>"]'/>

<!--carico immagine del sam in base al tipo di video-->
<div class="sam">
        <?php 
        if($type == "arousal"){
            echo '<img class="samimg" src="img/samarousal.png"/>';
        }else if($type == "valence"){
            echo '<img class="samimg" src="img/samvalence.png"/>';
        }else if($type == "dominance"){
            echo '<img class="samimg" src="img/samdom.png"/>';
        }
        ?>
</div>