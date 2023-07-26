<?php 

    include_once('connect.php');

    $sql = "SELECT * FROM scores, students WHERE scores.student_id = students.id";
    $result = $conn->query($sql);
    $data = $result->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <title>
        Daftar Ranking XI RPL
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1 text-white" href="#">Class Ranks</span>
        </div>
    </nav>

    <div class="container mt-3">
        <div class="row">
            <div class="col-4">
                <h3>INPUT DATA</h3>
                <div class="card-body">
                    <form method="POST" action="">
                        <div class="mb-3">
                            <label class="form-label" for="name">Nama</label>
                            <input id="nama" name="nama" type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="nilai">Nilai</label>
                            <input id="nilai" name="nilai" type="number" class="form-control">
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <div class="d-grip gap-2">
                        <button class="btn btn-primary" type="submit">KIRIM</button>
                    </div>
                </div>
            </div>

            <div class="col-8">
                <div class="card">
                    <div class="card-header">
                        <h3>DAFTAR RANKING</h3>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped text-center">
                        <thead class="table-dark">
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Nilai</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($data as $key => $d): ?>
                            <tr>
                                <td><?= $key + 1 ?></td>
                                <td><?= $d['name'] ?></td>
                                <td><?= $d['score'] ?></td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Nilai</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

            <footer class="py-3 my-3 bg-primary">
                    <p class="text-center text-white">&copy 2023 Company, Inc</p>
            </footer>

            <script src="<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</div>
</div>


</html>