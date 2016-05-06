<?php
/**
 * Created by PhpStorm.
 * User: Savan
 * Date: 16-03-2016
 * Time: 09:15
 */

class Tree extends View
{
    function render()
    {
        ?>
        <div class="tree_div">
            <canvas id="tree_canvas" class="tree_canvas">
                Your browser does not support the HTML5 canvas tag.
            </canvas>
        </div>
        <script>
            var canvas = document.getElementById("tree_canvas");
            var context = canvas.getContext("2d");
            context.font = "12px Arial";
            context.fillStyle = "#000000";
            context.fillText("This area is under construction", 40, 80);
        </script>
        <?php
    }

}