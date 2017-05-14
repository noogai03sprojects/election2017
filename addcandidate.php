<!DOCTYPE html>
<html>
    <head>
        <title>Add data</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <h1>Add a candidate/party result</h1>
            <form action="#" method="get">
                <div class="form-group">
                    <label for="txt_forename">Forename:</label>
                    <input name="forename" class="form-control" id="txt_forename" />
                </div>

                <div class="form-group">
                    <label for="txt_surname">Surname:</label>
                    <input name="surname" class="form-control" id="txt_surname" />
                </div>

                <div class="form-group">
                    <label for="txt_party">Party name:</label>
                    <input name="party_name" class="form-control" id="txt_party" />
                </div>

                <div class="form-group">
                    <label for="txt_party_code">Party code:</label>
                    <input name="party_code" class="form-control" id="txt_party_code" />
                </div>

                <div class="form-group">
                    <label for="num_votes">Number of votes:</label>
                    <input type="number" class="form-control" name="votes" id="num_votes" />
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-default" value="Submit" />
                </div>
            </form>
        </div>
    </body>
</html>
