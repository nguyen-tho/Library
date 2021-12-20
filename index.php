
<html>
    <head>
        <title>Library</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css">

    </head>
    <body>
    
        <!--Navigation bar-->
        <?php require_once('include/header.php'); ?>
        <!--Search bar-->
        <div class="container body-content">
            <div class="container">
                <div class="row justify-content-start" style="padding-top:10px;">
                    <div class="col" style="padding-top:10px;">
                        <input class="form-control" type="text" placeholder="Nhập từ khóa"></input>
                    </div>
                    <div class="col" style="padding-top:10px;">
                        <button class="btn btn-primary">Tìm Kiếm</button>
                    </div>
                </div>
                <!--Book list-->
                <div class="row justify-content-start" style="padding-top:10px;">
                    <div class="col-sm-4" style="padding-top:10px;">
                        <img alt="Image html" width="90%" height="90%" style="max-height:500px;max-width:500px;" src="img/sach-noi-Harry-potter-va-bao-boi-tu-than.jpg" />
                        <div class="col" style="padding-top:10px;">
                            <button class="btn btn-primary">LOAN</button>
                        </div>
                    </div>
                    <div class="col-sm-4" style="padding-top:10px;"> 
                        <img alt="Image html" width="90%" height="90%" style="max-height:500px;max-width:500px;" src="img/nxbtre_full_29292017_042903.jpg" />
                        <div class="col" style="padding-top:10px;">
                            <button class="btn btn-primary">LOAN</button>
                        </div>
                    </div>
                    <div class="col-sm-4" style="padding-top:10px;">
                        <img alt="Image html" width="90%" height="90%" style="max-height:500px;max-width:500px;" src="img/sach-noi-Harry-Potter-va-chiec-coc-lua.jpg" />
                        <div class="col" style="padding-top:10px;">
                            <button class="btn btn-primary">LOAN</button>
                        </div>
                    </div>
                    <div class="col-sm-4" style="padding-top:10px;">
                            <img alt="Image html" width="90%" height="90%" style="max-height:500px;max-width:500px;" src="img/nxbtre_full_20282017_032849.jpg" />
                            <div class="col" style="padding-top:10px;">
                            <button class="btn btn-primary">LOAN</button>
                        </div>
                        </div>
                        <div class="col-sm-4" style="padding-top:10px;"> 
                            <img alt="Image html" width="90%" height="90%" style="max-height:500px;max-width:500px;" src="img/2020_04_13_11_10_18_1-390x510.jpg" />
                            <div class="col" style="padding-top:10px;">
                            <button class="btn btn-primary">LOAN</button>
                        </div>
                        </div>
                        <div class="col-sm-4" style="padding-top:10px;">
                            <img alt="Image html" width="90%" height="90%" style="max-height:500px;max-width:500px;" src="img/harrypotter.jpg" />
                            <div class="col" style="padding-top:10px;">
                            <button class="btn btn-primary">LOAN</button>
                        </div>
                        </div>
                </div>
            </div>  
        </div>

    </body>
</html>
