<?php

/**
 * Arquivo que faz a configuração incial da página.
 */
require($_SERVER['DOCUMENT_ROOT'] . '/_config.php');

/***********************************************
 * Seus códigos PHP desta página iniciam aqui! *
 ***********************************************/

// Variável que armazena todos os artigos para exibição no HTML.
$artigos = '';

// SQL que obtém todos os artigos.
$sql = <<<SQL

SELECT art_id, art_title, art_intro, art_thumb 
FROM `articles`
WHERE art_status = 'on'
AND art_date <= NOW()
ORDER BY art_date DESC;

SQL;

// Executa a query. $res contém os artigos encontrados.
$res = $conn->query($sql);

// Obtém cada registro de $res
while ($artigo = $res->fetch_assoc()) :

    $artigos .= <<<HTML

        <div class="item" onclick="location.href = '/ler/?id={$artigo['art_id']}'">
            <div class="thumb" style="background-image: url('{$artigo['art_thumb']}')" title="{$artigo['art_title']}"></div>
            <div class="body">
                <h4>{$artigo['art_title']}</h4>
                <span>{$artigo['art_intro']}</span>
            </div>
        </div>

HTML;

endwhile;

/************************************************
 * Seus códigos PHP desta página terminam aqui! *
 ************************************************/

/**
 * Variável que define o título desta página.
 */
$title = "Quem tem fome tem pressa...";

/**
 * Inclui o cabeçalho da página.
 */
require($_SERVER['DOCUMENT_ROOT'] . '/_header.php');

?>

<section>

    <div class="items">
        <?php
        // Exibe todos os artigos.
        echo $artigos;
        ?>
    </div>

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
