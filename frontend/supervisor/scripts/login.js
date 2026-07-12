document.querySelector('form').addEventListener('submit', async function (e) {
  e.preventDefault();

  // Exibe uma mensagem de carregamento no SweetAlert
  Swal.fire({
      title: 'Buscando dados no servidor',
      allowOutsideClick: false,
      didOpen: () => {
          Swal.showLoading();
      }
  });

  // Aguarda 3 segundos para simular carregamento
  await new Promise(resolve => setTimeout(resolve, 1500));

  // Pega os dados do formulário
  const formData = new FormData(this);

  try {
      const response = await fetch('dados-login.php', {
          method: 'POST',
          body: formData
      });

      // Converte a resposta para texto
      const responseText = await response.text();
      console.log('Resposta bruta do servidor:', responseText); // Log da resposta bruta

      let data;
      try {
          data = JSON.parse(responseText);
      } catch (e) {
          console.error('Erro ao parsear JSON:', e);
          console.error('Resposta bruta que causou o erro:', responseText); // Log adicional em caso de erro ao parsear
          await Swal.fire({
              icon: 'error',
              title: 'Erro',
              html: data.message,
              confirmButtonText: 'FECHAR'
          });
          return;
      }

      // Verifica o status da resposta para redefinição de senha
      if (data.redefinir_senha === true) {
          await Swal.fire({
              icon: 'info',
              title: data.message,
              showConfirmButton: false,
              timer: 2000
          });

          // Redireciona para a página de nova senha
          window.location.href = data.redirect;
          return;
      }

      // Verifica redirecionamento para o painel em caso de login bem-sucedido
      if (data.success === true) {
          await Swal.fire({
              icon: 'success',
              title: 'Login realizado com sucesso!',
              showConfirmButton: false,
              timer: 1500
          });

          // Redireciona para o painel
          window.location.href = data.redirect;
          return;
      }

      // Se houver uma mensagem de erro do servidor, exibe-a
      if (data.message) {
          await Swal.fire({
              icon: 'error',
              title: 'Erro',
              html: data.message,
              confirmButtonText: 'FECHAR'
          });
          return;
      }

      // Caso não tenha ocorrido nenhum caso específico, exibe erro padrão
      await Swal.fire({
          icon: 'error',
          title: 'Erro',
          text: 'Erro nao especifico.',
          confirmButtonText: 'FECHAR'
      });

  } catch (error) {
      console.error('Erro na requisição:', error);
      await Swal.fire({
          icon: 'error',
          title: 'Erro',
          text: 'Ocorreu um erro ao processar sua solicitação',
          confirmButtonText: 'FECHAR'
      });
  }
});