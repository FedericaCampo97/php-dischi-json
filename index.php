<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div id="app">
        <div class="container">
            <div class="row">
                <div class="col-4 p-5" v-for="disk in disks">
                    <div class="card text-center p-3">
                        <img :src="disk.poster" class="mx-auto " alt="">
                        <div class="card_text">
                            <h6 class="mt-3">
                                {{disk.title}}
                            </h6>
                            <p class="mb-1">
                                {{disk.author}}
                            </p>
                            <p>
                                {{disk.year}}
                            </p>
                        </div>

                    </div>

                </div>
            </div>
        </div>


    </div>

</body>


<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.5.1/axios.min.js" integrity="sha512-emSwuKiMyYedRwflbZB2ghzX8Cw8fmNVgZ6yQNNXXagFzFOaQmbvQ1vmDkddHjm5AITcBIZfC7k4ShQSjgPAmQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script src="main.js"></script>

</html>