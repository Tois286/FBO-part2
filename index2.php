<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style3.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <title>Data Santri</title>
</head>

<body>
    <div class="navigation">
        <div class="menuToggle"></div>
        <ul>
            <li class="list active">
                <a href="#" style="--clr:#f44336;" onclick="toggleCard(event)">
                    <span class="icon">
                        <ion-icon name="home-outline"></ion-icon>
                    </span>
                    <span class="text">Home</span>
                </a>
                <?php include 'modul/content/home.php' ?>
            </li>
            <li class="list">
                <a href="#" style="--clr:#ffa117;" onclick="toggleCard(event)">
                    <span class="icon">
                        <ion-icon name="person-outline"></ion-icon>
                    </span>
                    <span class="text">Person</span>
                </a>
                <?php include 'modul/content/person.php';
                ?>
            </li>
            <li class="list">
                <a href="#" style="--clr:#0fc70f;" onclick="toggleCard(event)">
                    <span class="icon">
                        <ion-icon name="chatbubble-outline"></ion-icon>
                    </span>
                    <span class="text">information</span>
                </a>
                <?php include 'modul/content/info.php' ?>
            </li>
            <li class="list">
                <a href="#" style="--clr:#2196f3;" onclick="toggleCard(event)">
                    <span class="icon">
                        <ion-icon name="book-outline"></ion-icon>
                    </span>
                    <span class="text">Registration</span>
                </a>
                <?php include 'modul/content/regis.php' ?>
            </li>
            <div class="indicator"></div>
        </ul>
    </div>

    <script src="css/script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>

<script>
    function toggleCard(event) {
        event.preventDefault();
        var listItem = event.currentTarget.parentElement;
        var card = listItem.querySelector('.card');
        if (listItem.classList.contains('active')) {
            listItem.classList.remove('active');
        } else {
            listItem.classList.add('active');
        }
    }
</script>