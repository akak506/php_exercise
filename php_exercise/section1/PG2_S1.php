<!DOCTYPE html>
<html lang="en">

<?php $thisSection="SECTION1"; ?>
<?php $thisPage="Malika_Favre"; ?>

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
        <h1>Malika Favre</h1>
        
        <figure>
            <img src="/images/Malika_Favre.jpeg">                       
            <figcaption><em>The French Illustrator</em></figcaption>
        </figure>

        <p>Malika Favre is a renowned French illustrator celebrated for her bold, minimalist style.
            She excels in using negative space, geometric forms, and vibrant colors to create striking visual narratives.
            Favre has collaborated with prestigious clients such as The New Yorker, Vogue, and Google, earning her 
            numerous industry awards. Her work spans diverse subjects, from portraits to fashion, all infused with wit 
            and playfulness. Inspired by mid-20th-century design and art history, Favre's ability to convey complex 
            ideas through elegant simplicity has made her an influential figure in contemporary illustration and design, 
            with global recognition and exhibitions worldwide.</p>

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