document.querySelector("#generate-pdf").addEventListener("click", async () => {
    try {
        console.log("Botão Download clicado!");

        // Pegando o idioma selecionado
        const idioma = document.querySelector('input[name="idioma"]:checked').value;
        console.log("Idioma selecionado:", idioma);

        let caminhoArquivo = "";

        // Definindo o caminho do arquivo baseado no idioma escolhido
        if (idioma === "pt") {
            caminhoArquivo = "./cv-pt.html";
        } else if (idioma === "en") {
            caminhoArquivo = "./cv-en.html";
        } else if (idioma === "es") {
            caminhoArquivo = "./cv-es.html";
        }

        console.log("Tentando buscar o arquivo:", caminhoArquivo);

        // Buscando o conteúdo da página HTML do CV
        const response = await fetch(caminhoArquivo);
        if (!response.ok) {
            throw new Error(`Erro ${response.status}: Não foi possível carregar ${caminhoArquivo}`);
        }

        const htmlContent = await response.text();
        console.log("Conteúdo HTML carregado com sucesso!");

        // Criar um container invisível para o conteúdo do HTML
        const tempDiv = document.createElement("div");
        tempDiv.innerHTML = htmlContent;
        tempDiv.style.display = "none"; // Para não exibir na página
        document.body.appendChild(tempDiv);
        console.log("Container temporário criado!");

        // Configuração do PDF
        const options = {
            margin: 10,
            filename: `cv-${idioma}.pdf`,
            html2canvas: { scale: 2 },
            jsPDF: { unit: "mm", format: "a4", orientation: "portrait" }
        };

        console.log("Gerando PDF...");
        await html2pdf().set(options).from(tempDiv).save();

        // Remover o conteúdo temporário após gerar o PDF
        document.body.removeChild(tempDiv);
        console.log("PDF gerado e container removido!");

    } catch (error) {
        alert("Erro ao gerar o PDF. Tente novamente.");
        console.error("Erro ao gerar o PDF:", error);
    }
});
