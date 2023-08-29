<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>localfoods</title>
    <link rel="stylesheet" href="/FoodPoint_CSS/foodcontainer/cart.css">
    <style>
        table{
            position: relative;
            top: 0px;
            width: 100%;
        }
        td.inpar{
           width: 17%;
           margin-left: 1px;
        }
        td.fod{
            width: 170px;
        }
        thead{
            width:80px;
        }
    </style>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <td >SN</td>
                <td class="fod">Food Name</td>
                <td class="pri">Price</td>
                <td>Quantity</td>
                <td>Total Price</td>
            </tr>
        </thead>
        <tbody>
            <?php
               $fon = 1;
                    echo '
                    <tr>
                        <td>'.$fon.'</td>
                        <td></td>
                        <td style="text-align:center"><span>&#8358;</span></td>
                        <td class="inpar"><input type="button"  value="+"><input type="number" name="numb" style="width:18.7px"><input type="button" value="-" style="width:23px"></td>
                        <td><span>&#8358;</span></td>
                        ';
            ?>
        </tbody>
        </table>
</body>
</html>