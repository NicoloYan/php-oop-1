<?php 
class Movie {

    public $title;

    public $releaseDate;

    public $length = 0;

    public function __construct($title, $releaseDate, $length) {
        $this->title = $title;
        $this->releaseDate = $releaseDate;
        $this->length = $length;

        var_dump('Ciao sono ' . $title . '. ' . 'La mia durata è di: ' . $length . ' minuti');
    }
    public function testFunction() {
        return $this->title;
    }

      
}


// FILM 1
$LOTR = new Movie(
    'The Lord of the Rings: The Return of the King', 
    '22/01/2004', 
    201
);

var_dump($LOTR->testFunction());

// FILM 2
$SW = new Movie(
    'Star Wars: Episode VI: Return of the Jedi', 
    '21/10/1983', 
    134
);

var_dump($SW->testFunction());

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>
            Film 1
        </h1>
        <h3>
            Titolo: <?php echo $LOTR->title; ?>
        </h3>
        <h3>
            Data di uscita: <?php echo $LOTR->releaseDate; ?>
        </h3>
        <h3>
            Durata: <?php echo $LOTR->length; ?> minuti
        </h3>
    </div>
    <div>
        <h1>
            Film 2
        </h1>
        <h3>
            Titolo: <?php echo $SW->title; ?>
        </h3>
        <h3>
            Data di uscita: <?php echo $SW->releaseDate; ?>
        </h3>
        <h3>
            Durata: <?php echo $SW->length; ?> minuti
        </h3>
    </div>
</body>
</html>
