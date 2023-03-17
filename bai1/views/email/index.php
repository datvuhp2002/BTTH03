<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <form class="container-fluid mx-3" method ="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name = "emailAddress" class="form-control" id="exampleInputEmail1" required aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="subject" class="form-label">subject</label>
            <input type="text" class="form-control" id="subject" name = 'subject'>
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">message</label>
            <input type="text" class="form-control" id="message" name = 'message'>
        </div>
        <input type="submit"  value ="Send" class="btn btn-success">
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>