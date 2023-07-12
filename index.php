<?php
    class Genre {
        public $name;

        public function __construct($name){
            $this->name = $name;
        }
    }
    //creo una classe con le sue istanze
    class Movie {
        public $title;
        public $year;
        public $genre;
        public $length;
        public $rating;

        //creo un costruttore
        public function __construct($title, $year,$genre, $length){
            $this->title = $title;
            $this->year = $year;
            $this->genre = $genre;
            $this->length = $length;
        }

        //creo un metodo
        public function getMovieDetails(){
            $string = "Movie: ".$this->title.", Genre: ".$this->get_genres_as_string().", Year: ".$this->year.", Length: ".$this->length;

            if($this->rating !== NULL){
                $string.= ", Rating: ".$this->rating;
            }

            return $string;
        }
        public function get_genres_as_string(){
            $genres = [];
            foreach($this->genre as $genre){
                //creo un array vuoto per i nomi delle istanze della classe genre
                array_push($genres, $genre->name);
            }

            $genres_string = implode(', ', $genres);
            return $genres_string;
        }
    }

    $genres = [
        new Genre ('Azione'),
        new Genre ('Pulp'),
        new Genre ('Thriller')
    ];


    //creo due oggetti movie
    $v_per_vendetta = new Movie ("V per Vendetta", "2006", $genres, 126); //da rincontrollare in base ai parametriù
    $v_per_vendetta->rating = 8;

    $pulp_fiction = new Movie ('Pulp Fiction', "1994", $genres, 150);
    //var_dump($v_per_vendetta); per controllare non abbia errori

    echo $v_per_vendetta->getMovieDetails();
    echo "<br/>";
    echo $pulp_fiction->getMovieDetails();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--bootstrap-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js" integrity="sha512-3dZ9wIrMMij8rOH7X3kLfXAzwtcHpuYpEgQg1OA4QAob1e81H8ntUQmQm3pBudqIoySO5j0tHN4ENzA6+n2r4w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>oop</title>
</head>
<body>
    
</body>
</html>