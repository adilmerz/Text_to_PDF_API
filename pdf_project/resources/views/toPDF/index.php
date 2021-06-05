<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>--Text to PDF--</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="page container">
        <div class="border-light p-4 m-4">
            <h2 class="alert alert-danger text-dark" >How to use API ?
            </h2>
            <h4 class="text-info border-bottom">1- Use URL </h4>
            <h5 class="text-primary ml-3">
                <li>
                    http://www.domaine.com/pdf/<b>Your text</b>
                </li>
                <hr>
            </h5>
            <h4 class="text-info border-bottom">2- Use Form for testing </h4>
            <form class="form-group" action="pdf" method="post">
            <code>
                <textarea placeholder="Write HTML code" class="form-control" rows="10" type="text" name="text" ></textarea>
                </code>
                <button class="btn btn-sm btn-dark my-2" type="submit">Export to PDF</button>
            </form>
        </div>
    </div>
</body>

</html>
