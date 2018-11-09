<html>
    <head>
        <title>Projet PHP - Cécile Porchet</title>
		<!-- liens jquery, bootstrap, fontawesome utilisés pour l'interface -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel='stylesheet' type='text/css' href='//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
        <link rel='stylesheet' type='text/css' href='//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
        <link rel='stylesheet' type='text/css' href='css/index.css'>


        <script src="//cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css">

        
    </head>
    <body>
		<!-- page réservation -->
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Projet PHP</a>
                </div>
				<!-- bouton article -->
                <button class="btn btn-default navbar-btn" style="float:right;" onclick="location.href = 'index.php';">Articles</button>
            </div>

        </nav>
		<!-- article réservé par qui -->
        {$name}
    </body>
<html>