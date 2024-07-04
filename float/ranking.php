<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JUDGING SHEET</title>
    <link rel="stylesheet" href="/float/css/float.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <div class="tnalaklogo">
        <img src="../tnalak.png" alt="t'nalak image">
    </div>
    <div class="deduction">
                    <button><strong>Deduction</strong></button>
                </div> 
    <div class="emblem">
        <img src="../emblem.png" alt="t'nalak image">
    </div>

    <div class="container_ranking">
        <h1>FLOAT COMPETITION</h1>
        <h1>JUDGING SHEET</h1>
        <!-- <table>
            <thead>
                <tr>
                    <th>Entry No.</th>
                    <th>Overall Appearance and Impact (30%)
                        <p>(Overall look, aesthetic value, and attractiveness of the float)</p>
                    </th>
                    <th>Artistry/Design (20%)
                        <p>(Concept and artistic merits of the design and costumes if there is/are any taking into account balance, proportion, emphasis, harmony as primarily reflected in shapes/image and colors)</p>
                    </th>
                    <th>Craftsmanship (30%)
                        <p>(This pertains to how the design is realized and how the float is made. Such factors to be considered are the quality of the craftsmanship, stability of structure and decoration, choice, and creative use of materials)</p>
                    </th>
                    <th>Relevance to the Festive Theme (20%)
                        <p>"Onward South Cotabato: Dreaming Big, Weaving more progress. Rising above challenges"</p>
                    </th>
                    <th>Total</th>
                    <th>Ranking</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'fetch_scores.php';
                foreach ($scores as $score) {
                    $class = $score['ranking'] <= 10 ? 'top10' : '';
                    echo "<tr class='{$class}'>";
                    echo "<td>" . htmlspecialchars($score['entry_num']) . "</td>";
                    echo "<td>" . htmlspecialchars($score['avg_oa']) . "</td>";
                    echo "<td>" . htmlspecialchars($score['avg_ad']) . "</td>";
                    echo "<td>" . htmlspecialchars($score['avg_cr']) . "</td>";
                    echo "<td>" . htmlspecialchars($score['avg_rt']) . "</td>";
                    echo "<td>" . htmlspecialchars($score['avg_total']) . "</td>";
                    echo "<td>" . htmlspecialchars($score['ranking']) . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table> -->
        <div class="judge-signatures">
            <?php $judgeCount = 1;
            foreach ($judges as $judge) : ?>
                <div class="judge-signature" style="font-family:Kanit, sans-serif; text-decoration:none">
                    <a href="/float/indivscores.php?judge=<?php echo $judge; ?>" class="no-underline">
                        <img src="/images/tnalakfest.png" style="height:auto; width:70%" alt="">
                        <p style="font-size:100%"><?php echo htmlspecialchars($judge); ?></p>
                    </a>
                    <p style="font-size:20px">judge <?php echo $judgeCount; ?></p>
                </div>
            <?php $judgeCount++;
            endforeach; ?>
        </div>
    </div>

</body>

</html>