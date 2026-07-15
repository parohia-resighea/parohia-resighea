<!DOCTYPE html>
<html lang="ro">
<head>
<meta charset="UTF-8">
<title>Panou Administrare Parohie</title>

<style>
body {
    font-family: "Segoe UI", Arial;
    background: #f2f4f7;
    padding: 20px;
}

h1 {
    text-align: center;
    color: #1f3b5c;
    margin-bottom: 30px;
}

.admin-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: 20px;
}

.card {
    background: white;
    padding: 20px;
    border-radius: 12px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.15);
    text-align: center;
    border-left: 5px solid #8b6b3f;
}

.card h3 {
    color: #1f3b5c;
    margin-bottom: 15px;
}

.card a {
    display: inline-block;
    padding: 10px 15px;
    background: #1f3b5c;
    color: white;
    text-decoration: none;
    border-radius: 6px;
    font-weight: bold;
}

.card a:hover {
    background: #355c7d;
}
</style>
</head>

<body>

<h1>Panou Administrare Parohie</h1>

<div class="admin-grid">

    <div class="card">
        <h3>📷 Galerie Foto</h3>
        <a href="galerie-foto.php">Deschide</a>
    </div>

    <div class="card">
        <h3>🎥 Galerie Video</h3>
        <a href="galerie-video.php">Deschide</a>
    </div>

    <div class="card">
        <h3>🎧 Galerie Audio</h3>
        <a href="galerie-audio.php">Deschide</a>
    </div>

    <div class="card">
        <h3>📰 Viața Parohiei</h3>
        <a href="adauga-stire.html">Adaugă Știre</a>
    </div>

    <div class="card">
        <h3>📅 Program Slujbe</h3>
        <a href="admin-program.php">Editează</a>
    </div>

    <div class="card">
        <h3>📚 Activități Parohiale</h3>
        <a href="admin-activitati.php">Editează</a>
    </div>

    <div class="card">
        <h3>🗑️ Ștergere Fișiere</h3>
        <a href="admin-delete.php">Deschide</a>
    </div>

</div>

</body>
</html>
