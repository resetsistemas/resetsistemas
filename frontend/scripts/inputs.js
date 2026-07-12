document.addEventListener("DOMContentLoaded", function () {
  const rotacionar = document.querySelector(".rotacionar");
  if (rotacionar) {
    document.querySelectorAll(".rotacionar").forEach((botao) => {
      botao.addEventListener("click", function () {
        this.classList.add("rotating");
        setTimeout(() => {
          this.classList.remove("rotating");
        }, 500);
      });
    });
  }

  const uploadImagens = document.querySelector(".upload-imagens");
  const inputImagens = document.getElementById("imagens");

  if (uploadImagens && inputImagens) {
    uploadImagens.addEventListener("click", function (event) {
      if (event.target.tagName !== "INPUT") {
        inputImagens.click();
      }
    });

    inputImagens.addEventListener("click", function (event) {
      event.stopPropagation();
    });

    inputImagens.addEventListener("change", function (event) {
      const qtdImagens = document.querySelector(".qtd-imagens");
      if (qtdImagens) {
        const arquivos = event.target.files;
        qtdImagens.style.display = arquivos.length === 0 ? "none" : "flex";
        qtdImagens.textContent =
          arquivos.length === 1
            ? "1 imagem selecionada"
            : `${arquivos.length} imagens selecionadas`;
      }
    });

    const inputContainer = document.querySelector(".input-imagens");
    if (inputContainer) {
      inputImagens.addEventListener("change", function () {
        inputContainer.style.borderColor =
          inputImagens.files.length > 0 ? "#79B3FF" : "";
      });
    }
  }

  const inputData = document.querySelector(".input-data");
  if (inputData) {
    inputData.addEventListener("click", function () {
      const dateInput = this.querySelector('input[type="datetime-local"]');
      if (dateInput) {
        dateInput.focus();
        dateInput.showPicker();
      }
    });
  }

  const campoPreco = document.querySelectorAll(".preco");
  if (campoPreco.length > 0) {
    campoPreco.forEach((element) => {
      if (element.value.trim() !== "") {
        formatarPreco(element);
      }

      element.addEventListener("input", function (event) {
        formatarPreco(event.target);
      });
    });

    function formatarPreco(elemento) {
      let valor = elemento.value.replace(/\D/g, "");
      if (valor === "") {
        elemento.value = "";
        return;
      }

      valor = parseFloat(valor) / 100;
      elemento.value = valor.toLocaleString("pt-BR", {
        style: "currency",
        currency: "BRL",
        minimumFractionDigits: 2,
        maximumFractionDigits: 2,
      });
    }
  }

  const clienteInput = document.querySelector("#cliente");
  if (clienteInput) {
    clienteInput.addEventListener("input", function () {
      const selectedOption = [
        ...document.querySelectorAll("#clientes-cadastrados option"),
      ].find(
        (option) =>
          option.value === clienteInput.value &&
          option.getAttribute("data-id") !== null
      );

      if (selectedOption) {
        clienteInput.setAttribute(
          "data-id",
          selectedOption.getAttribute("data-id")
        );
      }
    });
  }

  const whatsappInput = document.querySelector("#whatsapp");
  if (whatsappInput) {
    whatsappInput.addEventListener("input", function () {
      const selectedOption = [
        ...document.querySelectorAll("#cadastro-whatsapp option"),
      ].find(
        (option) =>
          option.value === whatsappInput.value &&
          option.getAttribute("data-id") !== null
      );

      if (selectedOption) {
        whatsappInput.setAttribute(
          "data-id",
          selectedOption.getAttribute("data-id")
        );
      }
    });
  }

  const whatsappValue = document.querySelector(".whatsapp");

  if (whatsappValue) {
    whatsappValue.addEventListener("input", function () {
      let value = whatsappValue.value.replace(/\D/g, "");

      // Limita a 15 dígitos
      value = value.slice(0, 15);

      if (value.length > 10) {
        whatsappValue.value = `(${value.slice(0, 2)}) ${value.slice(
          2,
          7
        )}-${value.slice(7, 11)}`;
      } else if (value.length > 6) {
        whatsappValue.value = `(${value.slice(0, 2)}) ${value.slice(
          2,
          6
        )}-${value.slice(6, 10)}`;
      } else if (value.length > 2) {
        whatsappValue.value = `(${value.slice(0, 2)}) ${value.slice(2)}`;
      } else {
        whatsappValue.value = value;
      }
    });

    whatsappValue.addEventListener("keydown", function (e) {
      if (e.key === "Backspace" || e.key === "Delete") {
        // Deixa o comportamento padrão para deletar corretamente
        return;
      }
    });
  }

  const emailInput = document.querySelector(".input-email");

  if (emailInput) {
    emailInput.addEventListener("input", function () {
      let value = emailInput.value.toLowerCase();

      // Permitir apenas caracteres válidos
      value = value.replace(/[^a-z0-9@._-]/g, "");
      value = value.slice(0, 60);
      emailInput.value = value;
    });
  }

  const btnAtualizarCliente = document.getElementById("atualizar-cliente");
  if (btnAtualizarCliente) {
    btnAtualizarCliente.addEventListener("click", function () {
      if (!clienteInput) return;

      const clienteId = clienteInput.getAttribute("data-id");
      const clientesDatalist = document.getElementById("clientes-cadastrados");

      if (clientesDatalist) {
        const clienteOption = Array.from(clientesDatalist.options).find(
          (option) => option.value === clienteInput.value
        );

        if (!clienteOption) {
          clienteInput.setAttribute("data-id", "");
          if (whatsappInput) {
            whatsappInput.value = "";
            whatsappInput.setAttribute("data-id", "");
          }
        } else {
          clienteInput.setAttribute(
            "data-id",
            clienteOption.getAttribute("data-id")
          );
          const whatsappDatalist = document.getElementById("cadastro-whatsapp");
          if (whatsappDatalist) {
            const whatsappOption = Array.from(whatsappDatalist.options).find(
              (option) =>
                option.getAttribute("data-id") ===
                clienteOption.getAttribute("data-id")
            );

            if (whatsappOption && whatsappInput) {
              whatsappInput.value = whatsappOption.value;
              whatsappInput.setAttribute(
                "data-id",
                clienteOption.getAttribute("data-id")
              );
            }
          }
        }
      }
    });
  }

  const placaInput = document.querySelector(".placa");
  if (placaInput) {
    placaInput.addEventListener("input", function () {
      // Remove any character that isn't a letter or number
      let value = this.value.replace(/[^A-Za-z0-9]/g, "");
      // Convert to uppercase
      value = value.toUpperCase();
      // Update the input value
      this.value = value;
    });
  }

  const btnAtualizarWhatsapp = document.getElementById("atualizar-whatsapp");
  if (btnAtualizarWhatsapp) {
    btnAtualizarWhatsapp.addEventListener("click", function () {
      if (!whatsappInput) return;

      const whatsappId = whatsappInput.getAttribute("data-id");
      const whatsappDatalist = document.getElementById("cadastro-whatsapp");

      if (whatsappDatalist) {
        const whatsappOption = Array.from(whatsappDatalist.options).find(
          (option) => option.value === whatsappInput.value
        );

        if (!whatsappOption) {
          whatsappInput.setAttribute("data-id", "");
          if (clienteInput) {
            clienteInput.setAttribute("data-id", "");
            clienteInput.value = "";
          }
        } else {
          whatsappInput.setAttribute(
            "data-id",
            whatsappOption.getAttribute("data-id")
          );
          const clientesDatalist = document.getElementById(
            "clientes-cadastrados"
          );

          if (clientesDatalist) {
            const clienteOption = Array.from(clientesDatalist.options).find(
              (option) =>
                option.getAttribute("data-id") ===
                whatsappOption.getAttribute("data-id")
            );

            if (clienteOption && clienteInput) {
              clienteInput.value = clienteOption.value;
              clienteInput.setAttribute(
                "data-id",
                whatsappOption.getAttribute("data-id")
              );
            }
          }
        }
      }
    });
  }

  const documentInputCpfCnpj = document.querySelector(".cpf-cnpj");
  if (documentInputCpfCnpj) {
    documentInputCpfCnpj.addEventListener("input", function () {
      let value = this.value.replace(/\D/g, "");
      value = value.slice(0, 18);
      if (value.length > 11) {
        this.value = `${value.slice(0, 2)}.${value.slice(2, 5)}.${value.slice(
          5,
          8
        )}/${value.slice(8, 12)}-${value.slice(12, 14)}`;
      } else if (value.length > 9) {
        this.value = `${value.slice(0, 3)}.${value.slice(3, 6)}.${value.slice(
          6,
          9
        )}-${value.slice(9)}`;
      } else if (value.length > 6) {
        this.value = `${value.slice(0, 3)}.${value.slice(3, 6)}.${value.slice(
          6
        )}`;
      } else if (value.length > 3) {
        this.value = `${value.slice(0, 3)}.${value.slice(3)}`;
      } else {
        this.value = value;
      }
    });

    documentInputCpfCnpj.addEventListener("keydown", function (e) {
      if (e.key === "Backspace" || e.key === "Delete") {
        this.value = this.value.replace(/\D/g, "");
      }
    });
  }

  // Nome formatter
  const nomePessoaInputs = document.querySelectorAll(".input-nome");
  nomePessoaInputs.forEach((input) => {
    input.addEventListener("input", function () {
      // Permitir apenas letras, letras específicas com acentos (ã, õ, á, é, í) e espaços
      this.value = this.value.replace(/[^a-zA-ZÀ-ÿ\s]/g, "");
      
      // Formatar para capitalizar cada palavra corretamente
      this.value = capitalizeWords(this.value);
      this.value = value.slice(0, 60);
    });
  });

  function capitalizeWords(str) {
    return str
      .split(" ")
      .map((word) => {
        if (word.length > 0) {
          return word[0].toUpperCase() + word.slice(1).toLowerCase();
        }
        return "";
      })
      .join(" ");
  }

  const minusculasInputs = document.querySelectorAll(
    ".minusculas-nospace-nonumber"
  );
  if (minusculasInputs.length) {
    minusculasInputs.forEach((input) => {
      input.addEventListener("input", function () {
        let value = this.value.normalize("NFD").replace(/[\u0300-\u036f]/g, "");
        value = value.toLowerCase().replace(/[^a-z]/g, "");
        this.value = value;
      });
    });
  }

  const numerosInputs = document.querySelectorAll(".somente-numeros");
  if (numerosInputs.length) {
    numerosInputs.forEach((input) => {
      input.addEventListener("input", function () {
        // Remove any non-numeric characters
        let value = this.value.replace(/[^0-9]/g, "");
        this.value = value;
      });
    });
  }

  const apenasLetrasInputs = document.querySelectorAll(".apenas-letras");
  if (apenasLetrasInputs.length) {
    apenasLetrasInputs.forEach((input) => {
      input.addEventListener("input", function () {
        // Remove caracteres inválidos mantendo letras, acentos e espaços
        let value = this.value.replace(/[^a-záàâãéèêíïóôõöúçñ\s]/gi, "");
        // Remove espaços múltiplos
        value = value.replace(/\s+/g, " ");
        // Remove espaços no início e fim
        value = value.trim();
        this.value = value;
      });
    });
  }
});
