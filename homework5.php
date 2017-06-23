<?php
/*$phone_book=['id'=>[1,2,3,4,5,6,7,8,9,10],
             'lastname'=>['Petrov','Ivanov','Sidorov','Kozlov','Orlov','Medvedev','Volkov','Frolov','Lavrov','Kostin'],
             'firstname'=>['Ivan','Sergey','Vladimir','Fedor','Andrey','Nikolay','Alexandr','Leonid','Aleksey','Oleg'],
             'city'=>['Moscow','Irkutsk','Ulan-Ude','Saint-Petersburg','Kazan','Vladivostok','Omsk','Tver','Tomsk','Novosibirsk'],
             'street'=>['Lenin','Stroiteley','Tsvetochnaya','Kvesisskaya','Razdelnaya','Pravdy','Obraztsova','Oktyabrskaya','Shchepkina','Mira'],
             'phonenumber'=>['89503542309','89143455467','89244560880','89041233212','89265436735','89145760660','89525906776','89043455434','89506234556','89240980780']
];
file_put_contents('package.json',json_encode($phone_book));*/
$file = file_get_contents('package.json');
$json=json_decode($file,true);
echo '<pre>';
print_r($json);
echo '</pre>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Phone book</title>
</head>
<body>
<?php echo"<table border=1>";

    foreach ($json as $key=>$arr){
          foreach ($arr as $ke=>$data) {
              if($ke==count($data)-1)
              {
                  break;
              }
              else {
                  echo "<tr>";
                  echo "<td>" . $data . "</td>";
                  echo "</tr>";
              }
          }
    }

echo "</table>";
?>
</body>
</html>
