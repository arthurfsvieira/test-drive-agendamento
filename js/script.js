$(document).ready(function() {
    // Inicializa o datepicker
    $('#data-test-drive').datepicker();

    // Lógica para enviar o formulário
    $('#form-agendamento').submit(function(event) {
        let email = $('#email').val();
        let telefone = $('#telefone').val();
        
        // Validação simples do formato do email
        if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
            alert('Por favor, insira um email válido.');
            return false; // Previne o envio do formulário
        }

        // Validação do telefone (apenas um exemplo, ajuste conforme necessário)
        if (!/^\(\d{2}\) \d{5}-\d{4}$/.test(telefone)) {
            alert('Por favor, insira um telefone válido.');
            return false;
        }

        // Continue com o envio se tudo estiver válido
    });
});
