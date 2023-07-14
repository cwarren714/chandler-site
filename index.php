<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include './header.php' ?>
</head>

<body>
  <h1 class="text-3xl font-bold underline text-red-400">
    Tailwind is working!
  </h1>
  <div x-data="{ count: 0 }">
    <button x-on:click="count++">Increment, cause Alpine is working</button>

    <span x-text="count"></span>
  </div>
</body>

</html>