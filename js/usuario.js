$(document).ready(() => {
  buscarUsuario();
});

$("#form-usuario").validate({
  rules: {
    nome: "required",
    email: {
      required: true,
      email: true,
    },
    senha1: "required",
    senha2: {
      required: true,
      equalTo: "#senha1",
    },
  },
});

$("#usuario-form-salvar").click(async () => {
  const isValid = $("#form-usuario").valid();

  if (isValid) {
    const formData = new FormData($("#form-usuario")[0]);

    const res = await fetch("model/inserir-usuario.php", {
      method: "POST",
      body: formData,
    });

    const resposta = await res.text();

    if (resposta == "true") {
      $("#usuario-close-modal").click();
      buscarUsuario();
    }
  }
});

async function buscarUsuario() {
  const res = await fetch("model/select-usuario.php");
  const dados = await res.text();
  $("#usuario-table tbody").html(dados);
}
