<?php
include "../data.php";
$baru = 1; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Fatkur!">
    <title>TNM Bounty List + Direct Link Youtube</title>
    <script src="https://kit.fontawesome.com/659604d02a.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" type="image/x-icon" href="../img/logo.jpg">

</head>

<body class="gradient-custom-2">
    <section class="vh-100">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="d-flex flex-wrap justify-content-between align-items-center py-3"></div>

                <div class="col-md-12 col-xl-10">
                    <div class="card mask-custom">
                        <div class="card-body text-white">
                            <h2 class="my-4 text-center">Ngejawab-in beberapa pertanyaan seputar Website bounty TnM </h2>

                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            Bang, ini website apa?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Ini website bounty TnM dimana didalemnya Web ini berisi orang2 yang di bounty di TnM, kalo semua video saya masukkan disini berarti namanya bukan website list bounty, tapi <strong>list cerita malam minggu</strong>.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Bang, buat listnya manual atau otomatis gitu pake bantuan sistem?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            List bounty dibuat secara <strong>manual</strong>, yup manual. Yang artinya:
                                            <ol>
                                                <li>Saya nonton live streaming dan mencari bounty.</li>
                                                <li>Saya cari timestamp di comment (kalo gaada bikin sendiri). </li>
                                                <li>Lalu saya masukkan link dari timestamp dan semua info yang didapat ke dataset yang sudah saya buat dengan menambahkan deskripsi bounty.</li>
                                            </ol>
                                            jadi terimakasih penulis timestamp :).

                                            <div class="dropdown-center">
                                                <a class="btn btn-outline-dark btn-sm dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Penulis Timeline
                                                </a>

                                                <ul class="dropdown-menu">
                                                    <?php foreach ($sepuh_timestamp as $sepuh) : ?>
                                                        <li><a class="dropdown-item" href="<?= $sepuh[1]; ?>" target="_blank"><i class="fa-brands fa-youtube text-danger"></i> <?= $sepuh[0]; ?></a></li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Pengen Kontribusi dong bang, harus gimana ya?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Yang pengen kontribusi bisa DM IG ya, nnti kita kerjakan sama2 via github.
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                    <div class="col-md-4 d-flex align-items-center">
                        <span class="text-white">&copy; 2023. Made with
                            <i class="fa-solid fa-heart"></i> by
                            Fatkur!</span>
                    </div>

                    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                        <li class="ms-3">
                            <a class="text-white" href="https://twitter.com/inifatkur"><i class="fa-brands fa-x-twitter"></i></a>
                        </li>
                        <li class="ms-3">
                            <a class="text-white" href="https://www.instagram.com/_inifatkur/"><i class="fa-brands fa-instagram"></i></a>
                        </li>
                    </ul>
                </footer>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <script>
        $(document).ready(function() {
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });

        const myModal = document.getElementById('myModal')
        const myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', () => {
            myInput.focus()
        })
    </script>
</body>

</html>