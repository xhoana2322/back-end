<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <form class="w-50 mx-auto mt-3" method="POST" action="gestione.php?action=insert-db">
        <div class="mb-3">
          <label for="exampleInputfirstname1" class="form-label">Nome</label>
          <input type="text" name="firstname" class="form-control" id="exampleInputfirstname1">
        </div>
        <div class="mb-3">
          <label for="exampleInputsurname1" class="form-label">Cognome</label>
          <input type="text" name="surname"  class="form-control" id="exampleInputsurname1">
        </div>
        <div class="mb-3">
            <label for="exampleInputage1" class="form-label">Eta</label>
            <input type="number" name="age"  class="form-control" id="exampleInputage1">
        </div>
        <div class="mb-3">
            <label for="exampleInputemail1" class="form-label">Email</label>
            <input type="email" name="email"  class="form-control" id="exampleInputemail1">
        </div>
        <button type="submit" class="btn btn-primary">Submit to DB</button>
      </form>

      <div class="w-50 mx-auto mt-3">
        <a class='btn btn-success' href='gestione.php?action=insert-csv'>Show CSV</a>
      </div>
      

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>   
</body>
</html>