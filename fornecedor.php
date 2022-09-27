<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>fornecedor</title>
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  <script src="http://jqueryvalidation.org/files/dist/jquery.validate.js"></script>

  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

  <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
</head>

<body>
  <?php
  include "components/navbar.php";
  include "components/fornecedor/toolbar.php";
  include "components/fornecedor/modal.php";
  include "components/fornecedor/table.php";
  ?>

  <script src="./js/fornecedor.js"></script>
  <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js">
  </script>
</body>

</html>