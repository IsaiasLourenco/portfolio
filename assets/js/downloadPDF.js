const btnGenerate = document.querySelector("#generate-pdf");
btnGenerate.addEventListener("click", () => {
    // Conteúdo do PDF
    const content = document.querySelector("#content")
    // Configuração do arquivo PDF final
    const options = {
        margin: [10, 10, 10, 10],
        filename: "cvIsaiasLourenco.pdf",
        html2canvas: {scale: 2},
        jsPDF: {unit: "mm", format: "a4", orientatio: "portrait"}
    }
    //Gerar e baixar PDF
    html2pdf().set(options).from(content).save(); 
})