<section class="viata-parohiei">
    <h2>📰 Viața Parohiei</h2>

<?php
$filename = "stiri.json";

if (file_exists($filename)) {
    $stiri = json_decode(file_get_contents($filename), true);

    foreach ($stiri as $stire) {
        echo "<article class='stire'>";
        echo "<span class='data'>" . $stire["data"] . "</span>";
        echo "<h3>" . $stire["titlu"] . "</h3>";
        echo "<p>" . $stire["text"] . "</p>";
        echo "</article>";
    }
} else {
    echo "<p>Nu există știri încă.</p>";
}
?>
</section>
