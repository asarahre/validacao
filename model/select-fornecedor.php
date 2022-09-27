<?php
include "conexao.php";


$fornecedores = $pdo->query("select * from fornecedor")->fetchAll();

$dados = "";

foreach ($fornecedores as $key => $value) {
  $dados .= " <tr class='bg-white border-b dark:bg-gray-900 dark:border-gray-700'>
  <th scope='row' class='py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white'>
   {$value['nome']}
  </th>
  <td class='py-4 px-6'>
  {$value['cnpj']}
  </td>
  <td class='py-4 px-6'>
    <a href='#' class='font-medium text-blue-600 dark:text-blue-500 hover:underline'
      data-modal-toggle='fornecedor-form-modal'>Edit</a>
  </td>
</tr>";
};

echo $dados;