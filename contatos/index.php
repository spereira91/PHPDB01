<?php

/**
 * Arquivo que faz a configuração incial da página.
 */
require($_SERVER['DOCUMENT_ROOT'] . '/_config.php');

/***********************************************
 * Seus códigos PHP desta página iniciam aqui! *
 ***********************************************/


/************************************************
 * Seus códigos PHP desta página terminam aqui! *
 ************************************************/

/**
 * Variável que define o título desta página.
 */
$title = "Faça contato";

/**
 * Inclui o cabeçalho da página.
 */
require($_SERVER['DOCUMENT_ROOT'] . '/_header.php');

?>

<section>

    <h2>Faça contato</h2>

    <form action="envia.php" method="post" name="contatos">

        <p>Preencha todos os campos para entrar em contato com a equipe do Vitugo.</p>

        <p>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required minlength="3" class="valid">
            <!-- O campo é obrigatório (required) e deve ter pelo menos 3 caracteres. -->
        </p>

        <p>
            <label for="emil">E-mail:</label>
            <input type="email" name="email" id="email" required class="valid">
            <!-- O campo é obrigatório e deve ser um e-mail (type="email"). -->
        </p>

        <p>
            <label for="assunto">Assunto:</label>
            <input type="text" name="assunto" id="assunto" required minlength="5" class="valid">
            <!-- O campo é obrigatório e deve ter pelo menos 5 caracteres. -->
        </p>

        <p>
            <label for="mensagem">Mensagem:</label>
            <textarea name="mensagem" id="mensagem" required minlength="5" class="valid"></textarea>
            <!-- O campo é obrigatório e deve ter pelo menos 5 caracteres. -->
        </p>

        <p>
            <button type="submit">Enviar</button>
        </p>

    </form>

</section>

<aside>

    <h3>Lateral</h3>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia, aperiam corporis culpa consequatur iusto.</p>

</aside>

<?php

/**
 * Inclui o rodapé da página.
 */
require($_SERVER['DOCUMENT_ROOT'] . '/_footer.php');
