<?php
    $books = [
        [
            'name' => 'summer love',
            'author' => 'subin bhattarai',
            'price' => 300.50,
        ],
        [
            'name' => 'muna madan',
            'author' => 'l.p.d',
            'price' => 105.50
        ],
        [
            'name' => 'saya',
            'author' => 'subin bhattarai',
            'price' => 205.50
        ],
        [
            'name' => 'jukerberg cafe',
            'author' => 'idk',
            'price' => 320.50
        ],
        [
            'name' => 'monalisa',
            'author' => 'dilip bhattarai',
            'price' => 300.50
        ]
    ];
    print_r ($books);
    
?>

<html>
    <head>
    
    </head>
    <body>
        <table border="1">
            <tr>
                <th>Books_Name</th>
                <th>Author</th>
                <th>Price</th>
            </tr>
            <?php
                foreach($books as $book)
                
                
                {
                    echo "<tr>
                    <td>$book[name].</td>
                    <td>$book[author].</td>
                    <td>$book[price].</td>
                    </tr>";
                }
                
            ?>
            
        </table>
    </body>
</html>