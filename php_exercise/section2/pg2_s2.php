<!DOCTYPE html>
<html lang="en">

<?php $thisSection="SECTION2"; ?>
<?php $thisPage="Amrita_sher_gil"; ?>

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
        <h1>Amrita Sher Gil</h1>
        
        <figure>
            <img src="/images/Amrita.jpeg">                       
            <figcaption><em>Female Indian Artists</em></figcaption>
        </figure>

        <p>Amrita Sher-Gil (1913–1941) was a pioneering Indian-Hungarian painter celebrated
        for her role in shaping modern Indian art. Her work reflects a fusion of Western techniques 
        and Indian themes, with a focus on depicting the lives and struggles of rural Indians. Sher-Gil's 
        evocative portraits and vivid, socially conscious paintings, like "Young Girls" and "Bride's Toilet,"
        made her a significant figure in 20th-century Indian art. She remains an inspirational icon for her 
        contributions to the Indian art world, despite her tragically short life. Sher-Gil's legacy endures 
        as a symbol of artistic innovation and cultural representation.</p>

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