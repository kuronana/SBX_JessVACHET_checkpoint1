<?php
/**
 * Created by PhpStorm.
 * User: wilder
 * Date: 05/10/18
 * Time: 11:05
 */

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body class="container">
    <table class="table table-hover text-center">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Civility</th>
            <th scope="col">Person</th>
        </tr>
        </thead>
        <tbody>

           <?php foreach ($contacts as $contact){ ?>
            <tr>
                <td scope="row"><?= $contact['civility'] ?></td>
                <td><?= strtoupper($contact['lastname'])." ".$contact['firstname'] ?></td>
            </tr>
            <?php } ?>

        </tbody>
    </table>

    <div class="text-center">
        <h1>Create  a contact :</h1>
        <form method="post">
            <div class="form-row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Lastname" name="last">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Lastname" name="first">
                </div>
            </div>
            <br/>
            <select class="custom-select custom-select-lg mb-3" name="civil">
                <option selected>Select a civility.</option>
                <option value="1">Mr.</option>
                <option value="2">Mme.</option>
            </select>
            <br/>
            <input type="submit" class="btn btn-dark" name="" value="Submit">
        </form>
    </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
