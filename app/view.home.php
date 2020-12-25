<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>Phake Mailer · v1.0.0</title>


    <!-- Bootstrap core CSS -->
    <link href="../public/assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../public/iziToast/css/iziToast.min.css" rel="stylesheet">
    <link href="../public/home.css" rel="stylesheet">

    <!-- JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body class="bg-light">

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand" style="font-weight: 500; font-size: 1.1rem; color:white"> Phake Mailer</a>
        </div>
    </nav>

    <main class="container">

        <div class="row">
            <div class="col-md-5 col-sm-12">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="num" class="form-label">Số lượng</label>
                            <input type="number" class="form-control" id="num">
                            <div class="form-text">Điền vào số lượng mail cần lấy.</div>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input btnSettings" type="checkbox" id="Advanced_settings">
                            <label class="form-check-label" for="Advanced_settings">Cài đặt nâng cao</label>
                        </div>
                        <div id="settings">
                            <hr>
                            <form class="row g-3">
                                <div class="col-md-6">
                                    <label for="username" class="form-label">Prefix</label>
                                    <input type="text" class="form-control" id="username" placeholder="Ex: hongphuc">
                                </div>
                                <div class="col-md-6">
                                    <label for="domain" class="form-label">Domain</label>
                                    <input type="text" class="form-control" id="domain" placeholder="Ex: hotmail.com">
                                </div>
                                <div class="col-md-12">
                                    <label for="dot" class="form-label">Kí tự</label>
                                    <select class="form-select" id="dot">
                                        <option value="" selected>Không kí tự</option>
                                        <option value="random">Ngẫu nhiên</option>
                                        <option value="_">"_"</option>
                                        <option value=".">"."</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-footer text-muted">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button class="btn btn-primary btn-get" type="button">Submit</button>
                        </div>
                    </div>
                </div>
                <br>
            </div>
            <div class="col-md-7 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        ⚡ Kết quả
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <textarea class="form-control" id="result" rows="7" readonly="readonly"></textarea>
                        </div>
                        <div class="d-grid col-md-2 mx-auto">
                            <button class="btn btn-primary btn-sm" type="button" onclick="coppy_list_mail()">SAO CHÉP</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <!-- /.container -->
    <script src="../public/iziToast/js/iziToast.min.js" type="text/javascript"></script>
    <script src="../public/assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../public/home.min.js"></script>

</body>

</html>