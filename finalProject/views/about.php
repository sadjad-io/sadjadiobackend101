<!DOCTYPE html>
<html>
    <head>
    <style>
        div {
            width: 300px;
        }
        
        h2 {
            font: 400 40px/1.5 Helvetica, Verdana, sans-serif;
            margin: 0;
            padding: 0;
        }
        
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }
        
        li {
            font: 200 20px/1.5 Helvetica, Verdana, sans-serif;
            border-bottom: 1px solid #ccc;
        }
                
        li a {
            text-decoration: none;
            color: #000;
            display: block;
            width: 200px;
            -webkit-transition: font-size 0.3s ease, background-color 0.3s ease;
            -moz-transition: font-size 0.3s ease, background-color 0.3s ease;
            -o-transition: font-size 0.3s ease, background-color 0.3s ease;
            -ms-transition: font-size 0.3s ease, background-color 0.3s ease;
            transition: font-size 0.3s ease, background-color 0.3s ease;
        }
        
        li a:hover {
            font-size: 30px;
            background: #f6f6f6;
        }
        
    </style>
    </head>
    <body>
        <div>
            <h2>Our Team</h2>
            <ul>
            <?php
                foreach ($team_member as $person) {
                    echo "<li><a href=\"#\">$person</a></li>";
                }
            ?>
            </ul>
        </div>
    </body>
</html>