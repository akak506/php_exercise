<!DOCTYPE html>
<html lang="en">

<?php $thisSection="SECTION1"; ?>
<?php $thisPage="Jean_Jullien"; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    <?php include("../php/meta.php"); ?>
</head>

<body>
<header><a href="/">MULTIPAGE PHP WEBSITE</a></header>

<div class="content-wrap">

    <main>
        <h1>Jean Jullien</h1>
        
        <figure>
            <img src="/images/jean_jullien.png">                       
            <figcaption><em>The French Illustrator</em></figcaption>
        </figure>

        <p>Jean Jullien is a celebrated French graphic designer and illustrator known for his witty,
        minimalist style. His work combines bold lines and minimal color to create humorous yet thought-provoking images. 
        He gained worldwide recognition for the "Peace for Paris" symbol after the 2015 attacks. Jullien's versatility 
        spans editorial illustrations, books, and public art installations. His art often explores modern life, 
        technology, and human behavior. He studied at Central Saint Martins and the Royal College of Art. Collaborations
        with major brands and publications like The New Yorker showcase his international influence, making him a notable
        figure in contemporary illustration and design.</p>

    </main>

    <aside>
    <?php include("../php/nav.php"); ?>

       
        <br>
        <hr>
        <p class="s">(This is an extra paragraph in the aside element)</p>
    </aside>
</div>

<?php include("../php/footer.php"); ?>


</body>

</html>