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
    <script src="addresult.js"></script>
</head>
<body>
    <div class="container">
        <h1>Add a candidate/party result</h1>


        <form class="form-horizontal" id="results">

            <hr />
            <br />
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-2">
                    Constituency name:
                </div>
                <div class="col-md-4">
                    <input type="text" name="constituency" class="form-control constituency">
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-3">

                </div>
                <div class="col-md-1"></div>
            </div>
            <br />
            <div class="row">
                <div class="col-md-1">

                </div>
                <div class="col-md-2">
                    Party code
                </div>
                <div class="col-md-3">
                    Candidate forename
                </div>
                <div class="col-md-4">
                    Candidate surname
                </div>
                <div class="col-md-2">
                    Votes
                </div>
            </div>
            <div class="row">
                <div class="col-md-1">
                    1.
                </div>
                <div class="col-md-2">
                    <input type="text" name="party_code[]" class="form-control party_code">
                </div>
                <div class="col-md-3">
                    <input type="text" name="candidate_forename[]" class="form-control candidate_forename" />
                </div>
                <div class="col-md-4">
                    <input type="text" name="candidate_surname[]" class="form-control candidate_surname" />
                </div>
                <div class="col-md-2">
                    <input type="number" name="votes[]" class="form-control votes" />
                </div>
            </div>
            <div class="row">
                <div class="col-md-1">
                    2.
                </div>
                <div class="col-md-2">
                    <input type="text" name="party_code[]" class="form-control party_code">
                </div>
                <div class="col-md-3">
                    <input type="text" name="candidate_forename[]" class="form-control candidate_forename" />
                </div>
                <div class="col-md-4">
                    <input type="text" name="candidate_surname[]" class="form-control candidate_surname" />
                </div>
                <div class="col-md-2">
                    <input type="number" name="votes[]" class="form-control votes" />
                </div>
            </div>
            <div class="row">
                <div class="col-md-1">
                    3.
                </div>
                <div class="col-md-2">
                    <input type="text" name="party_code[]" class="form-control party_code">
                </div>
                <div class="col-md-3">
                    <input type="text" name="candidate_forename[]" class="form-control candidate_forename" />
                </div>
                <div class="col-md-4">
                    <input type="text" name="candidate_surname[]" class="form-control candidate_surname" />
                </div>
                <div class="col-md-2">
                    <input type="number" name="votes[]" class="form-control votes" />
                </div>
            </div>
            <div class="row">
                <div class="col-md-1">
                    4.
                </div>
                <div class="col-md-2">
                    <input type="text" name="party_code[]" class="form-control party_code">
                </div>
                <div class="col-md-3">
                    <input type="text" name="candidate_forename[]" class="form-control candidate_forename" />
                </div>
                <div class="col-md-4">
                    <input type="text" name="candidate_surname[]" class="form-control candidate_surname" />
                </div>
                <div class="col-md-2">
                    <input type="number" name="votes[]" class="form-control votes" />
                </div>
            </div>
            <div class="row">
                <div class="col-md-1">
                    5.
                </div>
                <div class="col-md-2">
                    <input type="text" name="party_code[]" class="form-control party_code">
                </div>
                <div class="col-md-3">
                    <input type="text" name="candidate_forename[]" class="form-control candidate_forename" />
                </div>
                <div class="col-md-4">
                    <input type="text" name="candidate_surname[]" class="form-control candidate_surname" />
                </div>
                <div class="col-md-2">
                    <input type="number" name="votes[]" class="form-control votes" />
                </div>
            </div>
            <div class="row">
                <div class="col-md-1">
                    6.
                </div>
                <div class="col-md-2">
                    <input type="text" name="party_code[]" class="form-control party_code">
                </div>
                <div class="col-md-3">
                    <input type="text" name="candidate_forename[]" class="form-control candidate_forename" />
                </div>
                <div class="col-md-4">
                    <input type="text" name="candidate_surname[]" class="form-control candidate_surname" />
                </div>
                <div class="col-md-2">
                    <input type="number" name="votes[]" class="form-control votes" />
                </div>
            </div>

            <div class="row"><br /></div>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-2">
                    Turnout (% to 3 d.p.)
                </div>
                <div class="col-md-4">
                    <input type="text" name="turnout" class="form-control turnout">
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-3">
                    <input type="submit" class="btn btn-success" />
                </div>
                <div class="col-md-1"></div>
            </div>

        </form>
    </div>
</body>
</html>
