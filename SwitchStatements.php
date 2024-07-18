<!DOCTYPE>
<html>
<head>
    <title>Switch Statement</title>
    </head>
    <body>
        
        <?php  ?><br>       
        <?php  
        
        $Weather="Sunny";
        switch($Weather){
            case "Sunny":
                echo "Weather is quite pleasant outside";
                break;
            case "Rainy":
                echo "Its Raining outside <br>";
                break;
            case "Cloudy":
                echo "It is expected to Rain <br>";
                break;
            default:
                echo "Weather can not be forecast <br>";
                break;
        }
        ?><hr>
        <?php 
        
        $Restricted_Area='oh';
        switch($Restricted_Area){
            case 'Guard':
                echo "Permission Granted";
                break;
            case 'Office boy':
            case 'Public':
            case 'Media':
                echo "Permission Denied";
                break;
            default:
                echo "See jazeebakram.com for coupons";
        }
        ?><br> 
    </body>
</html>