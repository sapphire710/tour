<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    aside {
        width: 200px;
        position: absolute;
        top: 50px;
        bottom: 0;
        left: 0;
        background: #243B50;
    }

    aside .panel {
        margin: 0;
        border-radius: 0px;
        -webkit-box-shadow: none;
        color: #f5f5f5;
        background: #243B50;

    }

    aside .panel .list-group-item {
        margin-left: 20px;
        background: #243B50;
    }

    aside .panel .list-group-item a {
        color: #999999;
    }

    main {
        position: absolute;
        top: 50px;
        left: 200px;
        right: 0;
        bottom: 0;
        background: #FCFCFC;
        padding: 15px;
    }

    iframe {
        width: 100%;
        height: 100%;
    }

    .glyphicon {
        float: right;
        transition: all ease 0.3s;
    }

    .glyphicon.active {
        transform: rotateZ(180deg);
    }

</style>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">TOUR</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<aside>
    <div class="panel">
        <div class="panel-heading">导航管理
            <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span>
        </div>
        <ul class="list-group">
            <li class="list-group-item">
                <a href="navinsert.php" target="nav">导航添加</a>
            </li>
            <li class="list-group-item">
                <a href="navselect.php" target="nav">导航查看</a>
            </li>
        </ul>
    </div>
    <div class="panel">
        <div class="panel-heading">景点分类
            <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span>
        </div>
        <ul class="list-group">
            <li class="list-group-item">
                <a href="cateinsert.php" target="nav">分类添加</a>
            </li>
            <li class="list-group-item">
                <a href="cateselect.php" target="nav">分类查看</a>
            </li>
        </ul>
    </div>
    <div class="panel">
        <div class="panel-heading">景点管理
            <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span>
        </div>
        <ul class="list-group">
            <li class="list-group-item">
                <a href="goodsinsert.php" target="nav">景点添加</a>
            </li>
            <li class="list-group-item">
                <a href="goodsselect.php" target="nav">景点查看</a>
            </li>
        </ul>
    </div>
    <div class="panel">
        <div class="panel-heading">预约管理
            <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span>
        </div>
        <ul class="list-group">
            <li class="list-group-item">
                <a href="onlineselect.php" target="nav">预约查看</a>
            </li>
        </ul>
    </div>
    <div class="panel">
        <div class="panel-heading">新闻管理
            <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span>
        </div>
        <ul class="list-group">
            <li class="list-group-item">
                <a href="newsinsert.php" target="nav">新闻添加</a>
            </li>
            <li class="list-group-item">
                <a href="newsselect.php" target="nav">新闻查看</a>
            </li>
        </ul>
    </div>
</aside>
<main>
    <iframe src="goodsinsert.php" name="nav" frameborder="0"></iframe>


</main>
</body>
</html>
<script src=" https://cdn.bootcss.com/jquery/3.4.1/jquery.min.js"></script>
<script>
    $('.panel-heading').on('click', function () {
        $(this).children('span').toggleClass('active');
        $(this).next('.list-group').slideToggle();
    })
</script>