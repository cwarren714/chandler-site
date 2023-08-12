<?php include './components/header.php';
$card_color = 'cornflowerblue';
$diablo_color = 'sandybrown';
?>

<body class="bg-gray-100 dark:bg-gray-800 dark:text-slate-300 w-full">
    <div class="flex flex-col justify-center max-w-xl mx-4 md:mx-auto text-center my-6">
        <article class="flex justify-center mt-5 text-justify prose prose-l dark:prose-invert">
            <p>We all know there are only two types of games: <i>cards</i> or <i>Diablo</i>. Below is the current breakdown. </p>
        </article>
        <div class="flex justify-center mt-10 prose prose-l dark:prose-invert">
            <div class="flex flex-col">
                <h2 class="prose prose-xl" style="color: <?php echo $card_color ?>;">Cards</h2>
                <div class="pie" style="--p:1;--b:10px;--c:<?php echo $card_color ?>;">1%</div>
            </div>
            <div>
                <h2 class="prose prose-xl" style="color: <?php echo $diablo_color ?>;">Diablo</h2>
                <div class="pie" style="--p:99;--b:10px;--c:<?php echo $diablo_color ?>;">99%</div>
            </div>
        </div>

    </div>

    <?php include './components/footer.php' ?>

</body>