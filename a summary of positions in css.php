<?php



?>
<html>
    <head>
        <style>
            /*accepts none of top to bottom attributes plus z-index, its default*/
            .static{
                position:static;
                width:50px;
                height:50px;
                background-color:aqua;
                margin-left:50px;
            }

            /*accepts top to bottom attributes plus z-index, its position changees according to its current pos*/
            .relative{
                position:relative;
                width:50px;
                height:50px;
                background-color:bisque;
            }

            /*accepts top to bottom attributes plus z-index, its position changes accordings its closest ancestor, if none exists viewport, no body tag is its default ancestor*/
            .absolute{
                position: absolute;
                width: 50px;
                height:50px;
                background-color:aquamarine;
                bottom:0;
            }

            /*accepts top to bottom attributes plus z-index, sticks to browser's screen*/
            .fixed{
                position:fixed;
                width: 50px;
                height:50px;
                background-color:gold;
                bottom:0;
                right:0;
            }

            /*accepts top to bottom attributes plus z-index, if its top be 0 then sticks to browser's ceil otherwise depends on its top properties that how many px should have distance with ceil of browser*/
            .sticky{
                position:sticky;
                width: 50px;
                height:50px;
                background-color:darkgreen;
                top:10;
            }
        </style>
    </head>
    <body style="height:1500px">
            
            <div class="static">static</div>
            <div class="relative">relative</div>
            <div class="absolute">absolute</div>
            <div class="fixed">fixed</div>
            <div class="sticky">sticky</div>
        </body>
</html>
