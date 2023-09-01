<!DOCTYPE html>
<html lang="en">

<?php $thisSection="SECTION2"; ?>
<?php $thisPage="Raja_Ravi_Verma"; ?>

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
        <h1>Raja Ravi Verma</h1>
        
        <figure>
            <img src="/images/Raja.jpeg">                       
            <figcaption><em>The Artist</em></figcaption>
        </figure>

        <p>Raja Ravi Varma (1848–1906) was an influential Indian painter renowned for his fusion of European 
            academic art techniques with Indian themes and subjects. His vivid, realistic portraits and mythological 
            paintings played a pivotal role in popularizing Indian art during the late 19th century. Varma's works, like 
            "Shakuntala" and "Hamsa Damayanti," are celebrated for their rich colors and detailed depictions of 
            Indian mythology and culture. His contributions laid the foundation for the modern Indian art movement and 
            continue to be celebrated as iconic representations of Indian aesthetics and heritage.</p>

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