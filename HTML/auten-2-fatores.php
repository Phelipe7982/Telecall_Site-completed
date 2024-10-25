<?php
session_start();
include_once('../php/config.php');

$sql = "SELECT nomeMaterno, DATE_FORMAT(dataNasc, '%Y-%m-%d') as dataNasc, endereco FROM usuarios";

$questionsAndAnswers = array();
$result = $conexao->query($sql);

if ($result->num_rows > 0) {
    // Obter cada linha da consulta
    while ($row = $result->fetch_assoc()) {
    // Adicionar pergunta e resposta ao array
    $userId = uniqid();

    $questionsAndAnswers[$userId]['pergunta_motherName'] = 'motherName';
    $questionsAndAnswers[$userId]['resposta_motherName'] = $row['nomeMaterno'];

    $questionsAndAnswers[$userId]['pergunta_birthDate'] = 'birthDate';
    $questionsAndAnswers[$userId]['resposta_birthDate'] = $row['dataNasc'];

    $questionsAndAnswers[$userId]['pergunta_addressZip'] = 'addressZip';
    $questionsAndAnswers[$userId]['resposta_addressZip'] = $row['endereco'];
}
} else {
    echo "Nenhum resultado encontrado na tabela";
}
// Inicializa ou recupera as respostas armazenadas em uma sessão

if (!isset($_SESSION['login'])) {
    $_SESSION['login'] = array();
}

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verifica as respostas
    $isValid = false;

    foreach ($questionsAndAnswers as $userId => $entry) {
        $userAnswerMotherName = isset($_POST['motherName']) ? $_POST['motherName'] : '';
        $userAnswerBirthDate = isset($_POST['birthDate']) ? $_POST['birthDate'] : '';
        $userAnswerAddressZip = isset($_POST['addressZip']) ? $_POST['addressZip'] : '';

        if (
            trim(strtolower($userAnswerMotherName)) === trim(strtolower($entry['resposta_motherName'])) &&
            trim(strtolower($userAnswerBirthDate)) === trim(strtolower($entry['resposta_birthDate'])) &&
            trim(strtolower($userAnswerAddressZip)) === trim(strtolower($entry['resposta_addressZip']))
        ) {
            $isValid = true;
            break;
        }
    }

    // Se as respostas são válidas, o usuário está autenticado
    if ($isValid) {
        ob_clean();
        header('Location: home.php');

        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autenticação de Dois Fatores (2FA)</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff; 
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            background-color: #ffffff; 
            padding: 20px;
            border-radius: 8px;
            box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2);
            width: 300px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333333; 
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #cccccc;
            border-radius: 4px;
        }

        button {
            background-color: #ff3333;
            color: #ffffff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-align: center;
        }

        button:hover {
            background-color: #cc0000;
        }

        #authenticateButton {
            display: none; /* Inicialmente ocultos */
        }

        .error-message {
            color: #ff3333; /* Mensagem de erro vermelha */
            font-size: 12px;
            margin-top: -8px;
            margin-bottom: 8px;
            display: none;
        }

    </style>
</head>
<body>
    <main>              <!-- Main - Form -->
        <form id="two-factor-form" method="post" action="">
            <h2 style="color: #ff3333; text-align: center;">Autenticação de Dois Fatores (2FA)</h2>
            <section id="motherNameSection">
                <label for="motherName">Qual o nome da sua mãe?</label>
                <input type="text" id="motherName" name="motherName" required>
                <span class="error-message" id="motherNameError">Por favor, preencha este campo.</span>
            </section>
            <section id="birthDateSection">
                <label for="birthDate">Qual a data do seu nascimento?</label>
                <input type="date" id="birthDate" name="birthDate" required>
                <span class="error-message" id="birthDateError">Por favor, preencha este campo.</span>
            </section>
            <section id="addressZipSection">
                <label for="addressZip">Qual o seu endereço?</label>
                <input type="text" id="addressZip" name="addressZip" onkeypress="checkEnter(event)" required>
                <span class="error-message" id="addressZipError">Por favor, preencha este campo com um Endereço válido.</span>
            </section>
            <button type="button" id="nextQuestion" onclick="showNextQuestion()">Próxima Pergunta</button>
            <button id="authenticateButton" name="authenticateButton" type="submit">Autenticar</button>
        </form>
        <div id="error-message-container" style="text-align: center; margin-top: 20px;">
            <?php
                if (isset($isValid) && !$isValid) {
                    echo '<div id="error-message" style="color: #ff3333; font-size: 18px;">Respostas incorretas. Tente novamente.</div>';
                }
            ?>
        </div>
    </main>

    <script>
        // Armazenando as sections em um array
        var sections = [
            document.getElementById("motherNameSection"),
            document.getElementById("birthDateSection"),
            document.getElementById("addressZipSection")
        ];

        var errorMessages = [
            document.getElementById("motherNameError"),
            document.getElementById("birthDateError"),
            document.getElementById("addressZipError")
        ];

        var currentSectionIndex = 0;

        function showNextQuestion() {
            // Verifica se o campo atual foi preenchido
            if (validateCurrentSection()) {
                // Esconde a seção atual e a mensagem de erro correspondente
                sections[currentSectionIndex].style.display = "none";
                errorMessages[currentSectionIndex].style.display = "none";
                currentSectionIndex++;

                // Se todas as perguntas foram exibidas, mostra o botão de autenticação
                if (currentSectionIndex === sections.length) {
                    document.getElementById("authenticateButton").style.display = "block";
                    document.getElementById("nextQuestion").style.display = "none";
                } else {
                    // Se não, mostra a próxima pergunta
                    sections[currentSectionIndex].style.display = "block";
                }
            }
        }

        // Inicialmente, esconde todas as perguntas exceto a primeira
        for (var i = 1; i < sections.length; i++) {
            sections[i].style.display = "none";
        }

        // Função para validar se a seção atual foi preenchida
        function validateCurrentSection() {
            var currentSection = sections[currentSectionIndex];
            var inputs = currentSection.querySelectorAll('input[required]');
            var errorMessage = errorMessages[currentSectionIndex];

            for (var i = 0; i < inputs.length; i++) {
                if (!inputs[i].value.trim()) {
                    errorMessage.style.display = "block";
                    return false;
                }
            }

            errorMessage.style.display = "none";
            return true;
        }

        // Função para formatar o CEP enquanto o usuário digita
        function formatCEP(input) {
            // Remove caracteres não numéricos
            var formattedValue = input.value.replace(/\D/g, '');

            // Adiciona o hífen se necessário
            if (formattedValue.length > 5) {
                formattedValue = formattedValue.slice(0, 5) + '-' + formattedValue.slice(5);
            }

            // Atualiza o valor do campo
            input.value = formattedValue;
        }
        
        // Função para formatar a data no padrão americano antes de enviar o formulário
        document.getElementById('two-factor-form').addEventListener('submit', function() {
                var birthDateInput = document.getElementById('birthDate');
                var birthDateValue = birthDateInput.value;

                // Verifica se a data está no formato DD/MM/YYYY
                if (/^\d{2}\/\d{2}\/\d{4}$/.test(birthDateValue)) {
                    // Formata para o padrão americano YYYY-MM-DD
                    var parts = birthDateValue.split('/');
                    var formattedDate = parts[2] + '-' + parts[1] + '-' + parts[0];

                    // Atualiza o valor do campo
                    birthDateInput.value = formattedDate;
                }
            });
    </script>
</body>
</html>
