<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS Dojo</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php include 'data.php'; ?>

    <header>
        <h1>John Doe</h1>
        <h2>Consultant in economics</h2>
    </header>

    <main>
        <section>
            <h1>Trainings</h1>
            <div class="cards">
                <?php foreach ($data['Trainings'] as $training): ?>
                    <figure>
                        <img src="assets/images/<?= $training['image'] ?>" alt="<?= $training['title'] ?>">
                        <figcaption>
                            <div><?= $training['date'] ?></div>
                            <h2><?= $training['title'] ?></h2>
                            <p><?= $training['description'] ?></p>
                            <div><?= $training['location'] ?></div>
                        </figcaption>
                    </figure>
                <?php endforeach; ?>
            </div>
        </section>

        <section>
            <h1>Experiences</h1>
            <div class="cards">
                <?php foreach ($data['Experiences'] as $experience): ?>
                    <figure>
                        <img src="assets/images/<?= $experience['image'] ?>" alt="<?= $experience['title'] ?>">
                        <figcaption>
                            <div><?= $experience['date'] ?></div>
                            <h2><?= $experience['title'] ?></h2>
                            <p><?= $experience['description'] ?></p>
                            <div><?= $experience['location'] ?></div>
                        </figcaption>
                    </figure>
                <?php endforeach; ?>
            </div>
        </section>
    </main>
</body>
</html>