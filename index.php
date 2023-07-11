<?php
    class Genre {
        public $name;

        public function __construct($name){
            $this->name = $name;

        }
    }

    class Movie {
        public $title;
        public $year;
        public $genre;
        public $length;
        public $rating;

        public function __construct($title, $year , Genre $genre, $lenght , $rating){
            
            $this->title = $title;
            $this->year = $year;
            $this->genre = $genere;
            $this->length = $length;
            


        }

        public function getMovieDetails(){
            $string = "Movie: ".$this->title.", Genre: " .$this->genre." , Year: ".$this->year." , Length: ".$this->length;

            if($this->rating != NULL){
                $string.=", Rating:" .$this->rating;
            }

            retutn $string;

        }       
    }
    $V_per_vendetta = new Movie ('V per Vendetta ','2006',new Genre('Azione'),126);
    $V_per_vendetta->rating =8;

    var_dump($V_per_vendetta);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
</body>
</html>