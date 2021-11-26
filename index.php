<?php
$wordToHide = $_GET["badWordInput"];
$originalParagraph = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias commodi ea necessitatibus iusto distinctio consectetur voluptates, expedita odit delectus ipsa architecto natus nam nisi magnam! Voluptatum veniam facere est? Unde.
Nostrum quasi odit officia, et, neque vero repellendus atque laboriosam ab, ipsum ratione recusandae eius fugit magnam rerum. Consectetur veritatis impedit eius placeat facere distinctio voluptatibus. Labore est minima nam?
A, fugiat rerum unde, illo beatae modi itaque eaque molestias suscipit similique quis sapiente eos ex quia at quas tempore exercitationem molestiae. Quae culpa aperiam harum reiciendis ut laudantium quidem?
Magnam necessitatibus quaerat dolorem quasi quod cupiditate ea doloribus illum nemo libero ratione, voluptates deleniti maiores impedit blanditiis soluta exercitationem molestias perferendis! Eos quaerat quia, eaque tempora necessitatibus saepe soluta!
Id, sequi pariatur dolores rerum consequuntur delectus nisi voluptas illo labore, eum laborum numquam rem voluptatem ullam nobis ex, tempore minima. Cumque fugiat nobis at non voluptatum temporibus libero molestiae!
Molestias quo aliquid illum debitis quibusdam eum, rem ducimus beatae nesciunt eaque obcaecati dolores itaque nam, inventore iure totam voluptas nihil non? Doloribus, dolores iusto voluptas quibusdam voluptatum nihil cum.
Vel consectetur cupiditate optio perferendis labore, molestiae veniam iure praesentium est totam sapiente asperiores eos laboriosam, voluptate incidunt officia natus iste saepe harum aspernatur? Totam, aliquid. Laudantium perferendis ratione provident!
Vitae aut fugit, ea atque dolor recusandae officia accusantium aperiam culpa enim iusto est, quam quas excepturi. Magni maxime corrupti aperiam, tenetur dignissimos deserunt! Non neque fugiat consequatur odio porro.";
$displayPatagraph = str_replace($wordToHide, "***", $originalParagraph);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Bad Words</title>
</head>

<body>
    <main>
        <h1>Php Bad Words Exercise</h1>

        <form action="" method="get">
            <input type="text" name="badWordInput" id="badWordInput">
            <button type="submit">Censure</button>
        </form>
        <h2>HTML Display</h2>
        <section>
            <h3>Main Paragraph</h3>
            <h4>Paragraph Length</h4>
            <p><?php echo strlen($displayPatagraph) ?></p>
            <h4>Paragraph Text</h4>
            <p><?php echo $displayPatagraph ?></p>
        </section>
        <h2>Var Dump Display</h2>
        <?php
        echo "<pre>";
        var_dump($displayPatagraph);
        echo "<pre>";
        ?>

    </main>


</body>

</html>