<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  

    <title>Workout Generator</title>

    <link rel="stylesheet" href="css/main.css" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" />
</head>

<body>
    <div class="container">
        <div class="page-header">
            <h1>Workout Generator <small>Each exercise for 1 minute!</small></h1>
        </div>

    <div class="row">
        <div class="col-lg-3">
            <form action="index.php" method="post">
                <div class="input-group">
                    <input type="number" name="exercises" class="form-control" placeholder="How many exercises?"/>
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="submit" name="submit" value="Submit">Go!</button>
                    </span> 
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3">
            <h2>Your workout:</h2>
                <ol>