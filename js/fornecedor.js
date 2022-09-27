$(document).ready(() => {
  buscarfornecedor();
});

$("#form-fornecedor").validate({
  rules: {
    nome: "required",
    cnpj: {
      required: true,
      rangelength: [15, 15],
    },
  },
});

$("#fornecedor-form-salvar").click(async () => {
  const isValid = $("#form-fornecedor").valid();

  if (isValid) {
    const formData = new FormData($("#form-fornecedor")[0]);

    const res = await fetch("model/inserir-fornecedor.php", {
      method: "POST",
      body: formData,
    });

    const resposta = await res.text();

    if (resposta == "true") {
      $("#fornecedor-close-modal").click();
      buscarfornecedor();
    }
  }
});

async function buscarfornecedor() {
  const res = await fetch("model/select-fornecedor.php");
  const dados = await res.text();
  $("#fornecedor-table tbody").html(dados);
}
