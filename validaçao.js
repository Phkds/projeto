
document.getElementById("form-contato").addEventListener("submit", function (e) {
  e.preventDefault(); // Impede envio automático

  let nome = document.getElementById("nome").value.trim();
  let sobrenome = document.getElementById("sobrenome").value.trim();
  let email = document.getElementById("email").value.trim();
  let telefone = document.getElementById("telefone").value.trim();
  let cep = document.getElementById("cep").value.trim();
  let mensagem = document.getElementById("mensagem").value.trim();

  let erros = [];

  if (nome === "") erros.push("Preencha o nome.");
  if (sobrenome === "") erros.push("Preencha o sobrenome.");

  // Validação de e-mail
  let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!emailRegex.test(email)) erros.push("Digite um e-mail válido.");

  // Telefone: pelo menos 10 dígitos
  let telNumeros = telefone.replace(/\D/g, "");
  if (telNumeros.length < 10) erros.push("Digite um telefone válido com DDD.");

  // CEP: exatamente 8 dígitos
  let cepNumeros = cep.replace(/\D/g, "");
  if (cepNumeros.length !== 8) erros.push("Digite um CEP válido com 8 dígitos.");

  if (mensagem.length < 10) erros.push("A mensagem deve ter pelo menos 10 caracteres.");

  if (erros.length > 0) {
    alert("Erro no envio:\n" + erros.join("\n"));
  } else {
    // Mostra mensagem de sucesso
    document.getElementById("mensagem-sucesso").classList.remove("d-none");

    // Limpa o formulário
    document.getElementById("form-contato").reset();

    // Oculta a mensagem após 5 segundos
    setTimeout(() => {
      document.getElementById("mensagem-sucesso").classList.add("d-none");
    }, 5000);
  }
});
