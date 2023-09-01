<!DOCTYPE html>
<html lang="en">

<?php $thisSection="SECTION2"; ?>
<?php $thisPage="Jamini_Roy"; ?>

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
        <h1>Jamini Roy</h1>
        
        <figure>
            <img src="/images/jamini.jpg">                       
            <figcaption><em>Indian Artists</em></figcaption>
        </figure>

        <p>Jamini Roy (1887–1972) was a renowned Indian painter recognized for his distinct style that combined traditional Indian folk
            art with modern influences. Hailing from Bengal, Roy's paintings often featured simplified forms, bold lines, and earthy colors,
            evoking the essence of rural Bengal's folk art. He moved away from the academic European style of his early career to embrace 
            indigenous art forms, notably the Kalighat painting tradition. His work, including iconic pieces like "Mother and Child" and "Bride," 
            is celebrated for its fusion of tradition and modernity, making him a significant figure in Indian art history.</p>

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