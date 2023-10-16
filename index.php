<?php
include "data.php";
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
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="img/logo.jpg">

</head>

<body class="gradient-custom-2">
    <section class="vh-100">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">

                <div class="d-flex flex-wrap justify-content-between align-items-center py-3"></div>

                <div class="col-md-12 col-xl-10">
                    <div class="card mask-custom">
                        <div class="card-body text-white">
                            <div class="text-center pb-1">
                                <h2 class="my-4">TnM Bounty List + Direct Link <span class="badge bg-danger"><i class="fa-brands fa-youtube"></i></span></h2>
                                <p>Klik nama untuk deskripsi lebih lanjut. Request link dan pembenahan <i class="fa-solid fa-arrow-right"></i> <a class="btn btn-outline-light btn-sm" href="https://forms.gle/UorQUuKricMXuVD86" role="button" target="_blank"><i class="fa-solid fa-plus"></i></span></a></p>
                                Big Thanks to
                                <div class="dropdown-center">
                                    <a class="btn btn-outline-light btn-sm dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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

                        <h4 class="my-4 text-center text-white"><i class="fa-solid fa-crown"></i> TnM Bounty Rank <i class="fa-solid fa-crown"></i></h4>
                        <table class="table mb-0">
                            <thead>
                                <tr class="text-center">
                                    <th scope="col" class="bg-transparent text-white">No.</th>
                                    <th scope="col" class="bg-transparent text-white">Nama</th>
                                    <th scope="col" class="bg-transparent text-white">Go to</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $a = 1;
                                foreach ($rankbounty as $rank) : ?>
                                    <tr data-bs-toggle="collapse" href="#collapserank<?= $a; ?>" role="button" aria-expanded="false" aria-controls="collapserank<?= $a; ?>">
                                        <td class="bg-transparent text-white text-center"><?= $a ?></td>
                                        <td class="text-center bg-transparent text-white">

                                            <div class="text-white btn-sm" data-bs-toggle="collapse" href="#collapse<?= $a; ?>" role="button" aria-expanded="false" aria-controls="collapse<?= $a; ?>">
                                                <?= $rank["name"] ?>
                                            </div>

                                            <div class="collapse" id="collapse<?= $a; ?>">
                                                <?= $rank["desc"] ?>
                                            </div>

                                        </td>
                                        <td class="bg-transparent text-white text-center">
                                            <?php foreach ($rank["link"] as $link) : ?>
                                                <a href="<?= $link ?>" target="_blank"><span class="badge bg-danger"><i class="fa-brands fa-youtube"></i></span></a>
                                            <?php endforeach; ?>
                                        </td>
                                    </tr>

                                <?php
                                    $a++;
                                endforeach ?>
                            </tbody>
                        </table>

                        <h4 class="my-4 text-center text-white"><i class="fa-solid fa-list-ul"></i> TnM Bounty List <i class="fa-solid fa-list-ul"></i></h4>
                        <div class="row">
                            <div class="col">
                            </div>
                            <div class="col-4">
                                <input id="myInput" type="text" class="form-control form-control-sm" placeholder="Cari Disini.." aria-describedby="inputGroup-sizing-sm">
                            </div>
                        </div>

                        <table class="table mb-0" id="myTable">
                            <thead>
                                <tr class="text-center">
                                    <th scope="col" class="bg-transparent text-white">No.</th>
                                    <th scope="col" class="bg-transparent text-white">Tanggal</th>
                                    <th scope="col" class="bg-transparent text-white">Nama</th>
                                    <th scope="col" class="bg-transparent text-white">Link Youtube</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $a = count($listbounty);
                                $listbounty = array_reverse($listbounty);
                                foreach ($listbounty as $bounty) : ?>
                                    <tr id="list<?= $a; ?>" data-bs-toggle="collapse" href="#collapse<?= $a; ?>" role="button" aria-expanded="false" aria-controls="collapse<?= $a; ?>">
                                        <td class="bg-transparent text-white text-center"><?= $a ?></td>
                                        <?php if ($bounty["tgl"] != "") : ?>
                                            <td class="text-center bg-transparent text-white"><span class="badge bg-success"><?= $bounty["tgl"] ?></span></td>
                                        <?php else : ?>
                                            <td class="text-center bg-transparent text-white"><span class="badge bg-danger">Progressing</span></td>
                                        <?php endif ?>
                                        <td class="text-center bg-transparent text-white">
                                            <div class="text-white btn-sm" data-bs-toggle="collapse" href="#collapse<?= $a; ?>" role="button" aria-expanded="false" aria-controls="collapse<?= $a; ?>">
                                                <?= $bounty["name"] ?>
                                                <?php
                                                if (in_array($bounty["tgl"], $new) || $baru != 1) :
                                                    $baru = 0; ?>
                                                <?php
                                                else : ?>
                                                    <span class="badge rounded-pill text-bg-secondary">New</span>
                                                <?php endif; ?>
                                                </d>

                                                <div class="collapse" id="collapse<?= $a; ?>">
                                                    <?= $bounty["desc"] ?>
                                                </div>
                                        </td>
                                        <td class="text-center bg-transparent text-white"><?php if ($bounty["link"] != "#") : ?>
                                                <a href="<?= $bounty["link"] ?>" target="_blank"><span class="badge bg-danger"><i class="fa-brands fa-youtube"></i></span></a>
                                            <?php endif ?>
                                        </td>
                                    </tr>

                                <?php
                                    $a--;
                                endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                    <div class="col-md-4 d-flex align-items-center">
                        <span class="text-white">&copy; 2023. Made with <i class="fa-solid fa-heart"></i> by Fatkur!</span>
                    </div>

                    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                        <li class="ms-3"><a class="text-white" href="https://twitter.com/inifatkur"><i class="fa-brands fa-x-twitter"></i></a></li>
                        <li class="ms-3"><a class="text-white" href="https://www.instagram.com/_inifatkur/"><i class="fa-brands fa-instagram"></i></a></li>
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