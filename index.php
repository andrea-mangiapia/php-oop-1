<?php
class Movie {
    public $title;
    public $genre;
    public $year;
    public $duration;
    public $rating;
    public $description;
    public $poster;

    public function __construct($_title, $_genre, $_year) {
        $this->title = $_title;
        $this->genre = $_genre;
        $this->year = $_year;
    }

    public function getRating() {
        return $this->rating;
    }

}

$matrix = new Movie ('Matrix Resurrections', 'Fantascienza, Azione, Avventura', '2021');
$matrix->duration = '2h 28m';
$matrix->rating = '7/10';
$matrix-> description = 'Due realtà differenti caratterizzano il mondo: una rappresentata dalla vita di tutti i giorni e un\'altra nascosta e inaccessibile. Per scoprire se la sua realtà è un costrutto fisico o mentale, per conoscere veramente se stesso, Mr. Anderson dovrà scegliere di seguire ancora una volta il Bianconiglio. E se Thomas, Neo, ha imparato qualcosa è che la scelta, pur essendo un\'illusione, è ancora una volta la via d\'uscita o di ingresso in Matrix. Ovviamente, Neo sa già cosa deve fare. Ma quello che ancora non sa è che Matrix è più forte, più sicura e più pericolosa che mai. Salvato da Matrix per diventare il salvatore dell\'umanità, ancora una volta dovrà scegliere quale strada prendere.';
$matrix-> poster = 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/tiXqnZSlLpgsY38N3k4eaHiPbWu.jpg';

$fastFurious = new Movie ('Fast & furious - Solo parti originali', 'Azione, Crime, Dramma, Thriller', '2009');
$fastFurious->duration = '1h 47m';
$fastFurious->rating = '7/10';
$fastFurious-> description = 'Richiamati a Los Angeles in seguito a un atto criminale, l\'ex detenuto in fuga Dom Toretto e l\'agente Brian O\'Conner riaccendono un\'antica faida che li ha visti protagonisti. Costretti ad affrontare lo stesso nemico, Dom e Brian dovranno arrendersi a una nuova, improbabile alleanza per poterlo sconfiggere. E dopo aver assalito convogli e strisciato in lunghi tunnel senza luce, i due uomini troveranno il modo migliore per vendicarsi: spingere l\'acceleratore della propria auto al di là di ogni limite.';
$fastFurious-> poster = 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/iByIFSBZtZq6D7zjKU0IOTkSXzS.jpg';

$theImitationGame = new Movie ('The Imitation Game', 'Storia, Dramma, Thriller, Guerra', '2014');
$theImitationGame->duration = '1h 47m';
$theImitationGame->rating = '8/10';
$theImitationGame-> description = 'Manchester, primi anni \'50. Alan Turing, brillante matematico ed esperto di crittografia, viene interrogato dall\'agente di polizia che lo ha arrestato per atti osceni. Turing inizia a raccontare la sua storia partendo dall\'episodio di maggiore rilevanza pubblica: il periodo, durante la Seconda Guerra Mondiale, in cui fu affidato a lui e ad un piccolo gruppo di cervelloni, fra cui un campione di scacchi e un\'esperta di enigmistica, il compito di decrittare il codice Enigma, ideato dai Nazisti per comunicare le loro operazioni militari in forma segreta. È il primo di una serie di flashback che scandaglieranno la vita dello scienziato morto suicida a 41 anni e considerato oggi uno dei padri dell\'informatica in quanto ideatore di una macchina progenitrice del computer.';
$theImitationGame-> poster = 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/5Uc82xW62CoDMbSvcopOq5Zn6uK.jpg';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Movies (oop)</title>

    <link rel="stylesheet" href="css/style.css">

    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
</head>
<body>
    <div id="root">
        <header>
            <h1>
                Film preferiti
            </h1>
        </header>
        <main>
            <section>                
                <!-- Album List -->
                <div class="list-movies">               
                    <div class="single-card">
                        <div class="img-card">
                            <img src="<?php echo $matrix->poster; ?>" alt="<?php echo $matrix->title; ?>">
                        </div>
                        <div class="movie-text">
                            <h2><?php echo $matrix->title; ?> (<?php echo $matrix->year; ?>)</h2>
                            <div class="content-text"><b>Genere: </b><?php echo $matrix->genre; ?></div>
                            <div class="content-text"><b>Durata: </b><?php echo $matrix->duration; ?></div>
                            <div class="content-text"><b>Voto: </b><?php echo $matrix->getRating(); ?></div>
                            <div class="content-text"><b>Descrizione: </b><br><?php echo $matrix->description; ?></div>
                        </div>
                    </div>

                    <div class="single-card">
                        <div class="img-card">
                            <img src="<?php echo $fastFurious->poster; ?>" alt="<?php echo $fastFurious->title; ?>">
                        </div>
                        <div class="movie-text">
                            <h2><?php echo $fastFurious->title; ?> (<?php echo $fastFurious->year; ?>)</h2>
                            <div class="content-text"><b>Genere: </b><?php echo $fastFurious->genre; ?></div>
                            <div class="content-text"><b>Durata: </b><?php echo $fastFurious->duration; ?></div>
                            <div class="content-text"><b>Voto: </b><?php echo $fastFurious->getRating(); ?></div>
                            <div class="content-text"><b>Descrizione: </b><br><?php echo $fastFurious->description; ?></div>    
                        </div>
                    </div>

                    <div class="single-card">
                        <div class="img-card">
                            <img src="<?php echo $theImitationGame->poster; ?>" alt="<?php echo $theImitationGame->title; ?>">
                        </div>
                        <div class="movie-text">
                            <h2><?php echo $theImitationGame->title; ?> (<?php echo $theImitationGame->year; ?>)</h2>
                            <div class="content-text"><b>Genere: </b><?php echo $theImitationGame->genre; ?></div>
                            <div class="content-text"><b>Durata: </b><?php echo $theImitationGame->duration; ?></div>
                            <div class="content-text"><b>Voto: </b><?php echo $theImitationGame->getRating(); ?></div>
                            <div class="content-text"><b>Descrizione: </b><br><?php echo $theImitationGame->description; ?></div>  
                        </div>
                    </div>
                </div>    
            </section>
        </main>
    </div>
</body>
</html>