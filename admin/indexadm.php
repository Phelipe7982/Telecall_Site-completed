<?php


include('../layout/header.php');

// print_r($_SESSION);
if((!isset($_SESSION['login']) == true) and (!isset($_SESSION['senha']) == true))
{
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    header('Location: ../HTML/loginTele.php');
}
$logado = $_SESSION['login'];
if(!empty($_GET['search']))
{
    $data = $_GET['search'];
    $sql = "SELECT * FROM usuarios WHERE id LIKE '%$data%' or nome LIKE '%$data%' or login LIKE '%$data%' ORDER BY id DESC";
}
else
{
    $sql = "SELECT * FROM usuarios ORDER BY id DESC";
}
$result = $conexao->query($sql);


?>

<main>
    <section class="py-4 d-flex px-4" id="box-adm">
        <div class="d-flex justify-content">
            <a href="registeradm.php"><button class="btn btn-success px-4 me-2">Criar Usuário</button></a>
            <a href="../HTML/home.php"><button class="btn btn-info px-2 me-2">Sair Administração</button></a>
            <a href="../php/logout.php"><button type="submit" name="usuarios" value="logout" class="btn btn-danger px-4 me-2">Fazer Logout</button></a>
            <a href="#" onclick="gerarPDF()" class="btn btn-warning px-4 me-2">Imprimir PDF</a>
        </div>
        <div class="box-search mx-5 d-flex">
            <input type="search" class="form-control w-100" placeholder="Pesquisar" id="pesquisar">
            <button onclick="searchData()" class="btn btn-primary mx-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
            </button>
        </div>
    </section>
    <section>
        <div id="container-tabela" class="table-responsive">
            <table class="table">
                <thead class="table-secondary">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Data nascimento</th>
                        <th scope="col">CPF</th>
                        <th scope="col">Celular</th>
                        <th scope="col">Login</th>
                        <th scope="col">Senha</th>
                        <th scope="col">Administrador</th>
                        <th scope="col">Endereço</th>
                        <th scope="col">Gerenciar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    while($user_data = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                         echo "<td>".$user_data['id']."</td>";
                        echo "<td>".$user_data['nome']."</td>";
                        echo "<td>".$user_data['dataNasc']."</td>";
                        echo "<td>".$user_data['cpf']."</td>";
                        echo "<td>".$user_data['celular']."</td>";
                        echo "<td>".$user_data['login']."</td>";
                        echo "<td>".$user_data['senha']."</td>";
                        echo "<td>".($user_data['adm'] == '1' ? 'Sim' : 'Não')."</td>";
                        echo "<td>".$user_data['endereco']."</td>";
                        echo "<td>
                        <a class='btn btn-sm btn-primary' href='editarUser.php?id=$user_data[id]' title='Editar'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                                <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                            </svg>
                            </a> 
                            <a class='btn btn-sm btn-danger' href='../php/delete.php?id=$user_data[id]' title='Deletar'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                    <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                                </svg>
                            </a>
                            </td>";
                        echo "</tr>";
                        
                    }
                    ?>

                        <!-- Modal -->
                        <div class="modal fade" id="deletar<?= $usuario['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Deletar usuário</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Esta operção não poderá ser desfeita. Tem certeza que deseja deletar este usuário ?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                        <a href="../controlador/controlar-usuario.php"><button type="button" class="btn btn-danger">Confirmar</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Fim modal -->
                </tbody>
            </table>
        </div>
    </section>
</main>

<script src="https://rawgit.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script>

<script>
    function gerarPDF() {
        var elemento = document.getElementById('container-tabela'); // Substitua 'container-tabela' pelo ID real do seu contêiner de tabela
        var opcoes = {
            margin: 10,
            filename: 'usuarios-cadastrados.pdf', // Defina o nome do arquivo desejado aqui
            image: { type: 'jpeg', quality: 0.98 },
            html2canvas: {
                scale: 2, // Ajuste a escala conforme necessário para evitar cortes
                letterRendering: true
            },
            jsPDF: { unit: 'mm', format: 'a4', orientation: 'landscape' }
        }

        html2pdf(elemento, opcoes);
    }
</script>

<script>
    var search = document.getElementById('pesquisar');

    search.addEventListener("keydown", function(event) {
        if (event.key === "Enter") 
        {
            searchData();
        }
    });

    function searchData()
    {
        window.location = 'indexadm.php?search='+search.value;
    }
</script>