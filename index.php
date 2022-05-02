<?php 
    $paragraph = "hello world hello world";
?>

<h1>My first work with PhP</h1>

<p><?php echo $paragraph ?></p>
<span>Il numero di caratteri della stringa è: <?php echo strlen($paragraph) ?></span>

<!--  -->
<form action="" method="get">
    <h2>Inserisci la parola da censurare</h2>
    <input type="text" name="censored-word" id="" placeholder="Choose word to censor">
</form>
<?php 
// get censored word
$getCensoredWord = $_GET['censored-word'];
$newParagraph = str_replace($getCensoredWord,"***", $paragraph);
?>

<p><?php echo $newParagraph ?></p>
<span>Il nuovo numero di caratteri della stringa è: <?php echo strlen($newParagraph) ?></span>



<!-- 
    Creare una variabile con un paragrafo di testo a vostra scelta.
    Stampare a schermo il paragrafo e la sua lunghezza.

    Una parola da censurare viene passata dall'utente tramite parametro GET.

    Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.

 -->