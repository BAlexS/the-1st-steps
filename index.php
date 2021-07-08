<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Example</title>
</head>
<body>
<?php
$data = [
   'authors' => [
       301 => [
           'id' => 301,
           'name' => 'Александр Сергеевич Пушкин',
           'email' => 'alexander_pushkin@example.com',
           'birthYear' => 1799,
       ],
       10 => [
           'id' => 10,
           'name' => 'Николай Васильевич Гоголь',
           'email' => 'nikolay_gogol@example.com',
           'birthYear' => 1809,
       ],
       17 => [
           'id' => 17,
           'name' => 'Михаил Юрьевич Лермонтов',
           'email' => 'mikhail_lermontov@example.com',
           'birthYear' => 1814,
       ],
   ],
   'books' => [
       [
           'title' => 'Евгений Онегин',
           'publishedAt' => '1823—1832',
           'author' => 301,
       ],
       [
           'title' => 'Полтава',
           'publishedAt' => '1828—1829',
           'author' => 301,
       ],
       [
           'title' => 'Мёртвые души',
           'publishedAt' => '1842',
           'author' => 10,
       ],
       [
           'title' => 'Сказка о рыбаке и рыбке',
           'publishedAt' => '1833',
           'author' => 301,

       ],
   ],
];

foreach ($data as $value => $items) { 
    if ($value == 'authors') { 
		echo "<h3>=== Авторы ===</h3>"; 
	}elseIf ($value == 'books') {
		echo "<h3>=== Книги ===</h3>"; 
	}
    echo "<ul>";
		foreach ($items as $key => $val) { 
			if ($value == 'books') { 
				$autor = author($data, $val['author']); 
				echo '<li>'.$val['title'].' - '.$autor.' - '.$val['publishedAt'].'</li>';
			}else{
				echo '<li>'.$val['name'].' - '.$val['email'].' - '.$val['birthYear'].'</li>'; 
			}
		}
    echo "</ul>";
}

function author($data, $id) { 
	foreach ($data as $value => $items) { 
		if ($value == 'authors') { 
			foreach ($items as $key => $val) { 
				if ($id == $val['id']) { 
					$autor = $val['name'];
					return $autor;
				}
			}
		}
	}
}
?>
</body>
</html>