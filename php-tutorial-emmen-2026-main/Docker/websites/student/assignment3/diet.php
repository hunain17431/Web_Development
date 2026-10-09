<?php 

    function diet($calories,$carbs,$protein,$fat,$confirm){
        $approved = "";

        if($confirm){
            $approved = "Yes";
        }else{
            $approved = "No";
        }

        $list = [$calories,$carbs,$protein,$fat,$approved];
        return $list;
    }

    $tableList = diet(100,200,300,400,False);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASSIGNMENT-3-DIET</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="../../../../assignments/resources/week-03/images/favicon-32x32.png" type="image/x-icon">
</head>
<body>    
        <section>            
                <div>
                    <table>
                        <tr>
                            <td>Calories</td>
                            <td class="data"><b><?= $tableList[0] . "kcal" ?></b></td>
                        </tr>
                        <tr>
                            <td>Carbs</td>
                            <td class="data"><b><?= $tableList[1] . "g"?></b></td>
                        </tr>
                        <tr>
                            <td>Protein</td>
                            <td class="data"><b><?=$tableList[2] . "g"?></b></td>
                        </tr>
                        <tr>
                            <td>Fat</td>
                            <td class="data" ><b><?= $tableList[3] . "g"?></b></td>
                        </tr>
                        <tr>
                            <td>Diet Approved</td>
                            <td class="data" ><b><?= $tableList[4]?></b></td>
                        </tr>
                    </table>
                </div>
        </section>
</body>
</html>