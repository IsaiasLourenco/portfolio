document.getElementById("emailLink").addEventListener("click", function (event) {
    let form = document.getElementById("emailForm"); // Pegando o formulário corretamente
    let nome = document.querySelector('[name="nome"]').value.trim();
    let email = document.querySelector('[name="email"]').value.trim();
    let mensagem = document.querySelector('[name="mensagem"]').value.trim();

    // Validação para garantir que todos os campos estejam preenchidos
    if (nome === "" || email === "" || mensagem === "") {
        alert("Por favor, preencha todos os campos antes de enviar.");
        return;
    }

    console.log("Nome:", nome);
    console.log("Email:", email);
    console.log("Mensagem:", mensagem);

    // Criando a estrutura correta do mailto
    let mailtoLink = `mailto:isaiaslourenco2020@gmail.com,adm.vetor256@gmail.com
        ?subject=Sobre o seu Portfólio
        &body=Nome: ${encodeURIComponent(nome)}%0A
        Email: ${encodeURIComponent(email)}%0A
        Mensagem: ${encodeURIComponent(mensagem)}`;

    // Aguarda antes de abrir o cliente de e-mail
    setTimeout(() => {
        window.location.href = mailtoLink;
    }, 500);

    // Pequeno atraso para permitir reset antes do redirecionamento
    setTimeout(() => {
        form.reset(); // Reseta os campos do formulário
    }, 700);
});
