<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>String PHP</title>
</head>
<body>
    <h1>Berlatih String PHP</h1>
    <?php   
        echo "<h3> Soal No 1</h3>";
            $first_sentence = "Hello PHP!" ; 
            $strlen = strlen($first_sentence);
            $wordsCount = str_word_count($first_sentence);
            echo 'Panjang String :' . $strlen;
            echo ", ";
            echo 'Jumlah Kata : ' . $wordsCount;
            echo ' Dari Kata ' . $first_sentence;
            echo ('<br>');
            $second_sentence = "I'm ready for the challenges";
            $strlen = strlen($second_sentence);
            $wordsCount = str_word_count($second_sentence);
            echo 'Panjang String :' . $strlen;
            echo ", ";
            echo 'Jumlah Kata : ' . $wordsCount;
            echo ' Dari Kata ' . $second_sentence;
            
        echo "<h3> Soal No 2</h3>";
        //  Mengambil kata pada string dan karakter-karakter yang ada di dalamnya. 
        
        $string2 = "I Love PHP";
        echo "<label>String: </label> \"$string2\" <br>";
        echo "Kata pertama: " . substr($string2, 0, 1) . "<br>" ; 
        echo "Kata kedua: " . substr($string2, 2, 4) . "<br>" ;
        echo "Kata Ketiga:  " . substr($string2, 7, 3) . "<br>" ;
        
        echo "<h3> Soal No 3 </h3>";
        // Mengubah karakter atau kata yang ada di dalam sebuah string.
        
        $string3 = "PHP is old but Good!";
        echo "String: \"$string3\" " . "<br>"; 
        echo " ". str_replace("Good", "awesome", $string3) . "<br>";
       
        

    ?>
</body>
</html>