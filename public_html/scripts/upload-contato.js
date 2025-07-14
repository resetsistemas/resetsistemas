document
  .querySelector("#contatoForm")
  .addEventListener("submit", function (event) {
    event.preventDefault();

    const form = event.target;
    const formData = new FormData(form);

    const nome = formData.get("nome");
    const empresa = formData.get("empresa");
    const email = formData.get("email");
    const whatsapp = formData.get("whatsapp");

    if (!nome || nome === "0") {
      Swal.fire({
        icon: "warning",
        title: "Nome obrigatório!",
        text: "Você deve escrever seu nome.",
      });
      return;
    }

    if (!empresa || empresa === "0") {
      Swal.fire({
        icon: "warning",
        title: "Empresa obrigatória!",
        text: "Você deve escrever seu nome.",
      });
      return;
    }

    if (!email || email === "0") {
      Swal.fire({
        icon: "warning",
        title: "Email obrigatório!",
        text: "Você deve escrever seu email.",
      });
      return;
    }

    if (!whatsapp || whatsapp === "0") {
      Swal.fire({
        icon: "warning",
        title: "Whatsapp obrigatório!",
        text: "Você deve escrever seu whatsapp.",
      });
      return;
    }

    let html = `<div style="text-align: left;">
      <p><strong>Nome:</strong> ${nome}</p>
      <p><strong>Empresa:</strong> ${empresa}</p>
      <p><strong>Email:</strong> ${email}</p>
      <p><strong>WhatsApp:</strong> ${whatsapp}</p>
      </div>`;

    Swal.fire({
      title: "Deseja fazer seu cadastro?",
      html: html,
      icon: "question",
      showCancelButton: true,
      confirmButtonText: "SIM",
      cancelButtonText: "NÃO",
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire({
          title: "Enviando dados...",
          allowOutsideClick: false,
          didOpen: () => {
            Swal.showLoading();
          },
        });

        fetch("upload-contato.php", {
          method: "POST",
          body: formData,
        })
          .then((response) => response.json())
          .then((data) => {
            console.log("Resposta do servidor:", data);

            // Se o CPF já estiver cadastrado, pede confirmação do usuário
            if (data.confirm) {
              Swal.fire({
                title: "Atenção!",
                html: data.message,
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "SIM, pode cadastrar",
                cancelButtonText: "Cancelar",
              }).then((confirmResult) => {
                if (confirmResult.isConfirmed) {
                  formData.append("confirmado", "1");

                  Swal.fire({
                    title: "Enviando novamente...",
                    allowOutsideClick: false,
                    didOpen: () => {
                      Swal.showLoading();
                    },
                  });

                  fetch("upload-contato.php", {
                    method: "POST",
                    body: formData,
                  })
                    .then((r) => r.json())
                    .then((res) => {
                      if (res.success) {
                        Swal.fire({
                          icon: "success",
                          title: "Mensagem Enviada!",
                          html: res.message,
                        }).then(() => {
                          window.location.href = res.redirect;
                        });
                      } else {
                        Swal.fire("Erro!", res.message, "error");
                      }
                    });
                }
              });
            } else if (data.success) {
              Swal.fire({
                icon: "success",
                title: "Inscrição realizada!",
                html: data.message,
              }).then(() => {
                window.location.href = data.redirect;
              });
            } else {
              Swal.fire({
                icon: "error",
                title: "Temos um problema!",
                html: data.message,
              });
            }
          })
          .catch((error) => {
            console.error("Erro na requisição:", error);
            Swal.fire({
              icon: "error",
              title: "Erro!",
              text: "Ocorreu um problema ao enviar sua inscrição.",
            });
          });
      }
    });
  });
