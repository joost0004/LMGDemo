<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../build/css/style.css" rel="stylesheet">
    <title>LMG Demo Site</title>
</head>

<body>

    <nav class="navbar navbar-light bg-light justify-content-between p-4">
        <a class="navbar-brand">
            <!-- Logo totaal niet stolen van lmg.nl -->
            <svg xmlns="http://www.w3.org/2000/svg" width="125" viewBox="0 0 160 113.143" fill="black">
                <path
                    d="M1399,3959.711v113.143h160V3959.711Zm52.754,76.095h-29.886v-39.248h10.878v29.717h19.008Zm46.369,0H1487.3v-22.539l-10.008,15.363h-.225l-9.953-15.252v22.428h-10.709v-39.248H1467.9l9.363,15.195,9.363-15.195h11.495Zm42.333-5.271a28.548,28.548,0,0,1-7.4,4.318,25.375,25.375,0,0,1-9.644,1.738,23.682,23.682,0,0,1-8.5-1.486,20.238,20.238,0,0,1-6.756-4.177,19.3,19.3,0,0,1-4.485-6.42,20.31,20.31,0,0,1-1.626-8.214v-.113a20.319,20.319,0,0,1,5.969-14.493,19.891,19.891,0,0,1,6.682-4.346,22.333,22.333,0,0,1,8.432-1.571,24.2,24.2,0,0,1,9,1.514,24.654,24.654,0,0,1,6.925,4.205l-6.392,7.682a17.655,17.655,0,0,0-4.345-2.749,12.917,12.917,0,0,0-5.131-.952,9.324,9.324,0,0,0-3.953.841,9.931,9.931,0,0,0-3.168,2.3,11.065,11.065,0,0,0-2.13,3.42,11.215,11.215,0,0,0-.785,4.205v.112a11.927,11.927,0,0,0,.787,4.374,9.862,9.862,0,0,0,2.222,3.45,10.45,10.45,0,0,0,3.375,2.242,11.046,11.046,0,0,0,4.3.813,11.261,11.261,0,0,0,6.3-1.626v-4.766H1522.4v-7.962h18.055Z"
                    transform="translate(-1399 -3959.711)" />
            </svg>
        </a>
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <?php
                foreach ($breadcrumbs as $breadcrumb) {
                    echo "<li class='breadcrumb-item'><a href='{$breadcrumb['url']}'>{$breadcrumb['label']}</a></li>";
                }
                ?>
            </ol>
        </nav>
        <p class="lead font-weight-bold">
            <a href="mailto: joostb.photo@gmail.com" class="link-dark">Let's talk!</a>
        </p>
    </nav>

    <div class="container mt-4">

        <!-- Main section -->
        <?php echo $pageContent; ?>

    </div>

</body>

</html>
