# Colabore com esta Documentação

Se você chegou a esta página, provavelmente está pensando em contribuir com a documentação do tema :smile: . Isto é ótimo! Como usuário, você pode trazer contribuições valorosas para deixar nosso material mais claro e acessível.

Para colaborar, entretanto, é preciso se familiarizar um pouco com nossas ferramentas de documentação. Não se preocupe - aqui te daremos o auxílio necessário para que você possa fazer contribuições de qualidade sem dificuldades! Nesta página você vai ver:

- [Como editar arquivos online via GitHub](#editando-arquivos-diretamente-no-github)
- [Como funciona a sintaxe dos artigos da Documentação](#familiarizando-se-com-a-formatação-markdown)
- [Como testar e fazer contribuições avançadas na Documentação](#contribuição-avançada-com-a-docsify)
- [Como funciona a estrutura de arquivos da Documentação](#entendendo-a-estrutura-da-Documentação)

## Editando arquivos diretamente no GitHub

Nossa Documentação está hospedada inteiramente no GitHub no seguinte repositório: https://github.com/IBICT/wp-govbr-tema/docs. Não é necessário ter muita experiência com Git para realizar contribuições pontuais, a própria plataforma já simplifica grande parte do processo. Por exemplo, se você viu algum erro de ortografia em um artigo, clique no botão **Edit on github** que aparece no canto superior direito da página. Você será redirecionado para o "código fonte" desta página:

![Captura de Tela da página de edição de conteúdo no Github, onde está em destaque o botão editar, formado por uma caneta.](/_assets/images/contributing.png)

Clicando no botão de editar, em formato de pincel, você poderá fazer as alterações desejadas, e ao final do formulário, explicar quais mudanças estão sendo propostas. Ao submeter uma proposta de mudança, o GitHub está, por trás dos panos, criando uma _Fork_ para você e aplicando uma _Pull-Request_.

Para contribuições mais complexas, que envolvam criar páginas, inserção de imagens, abas, vídeos, ou mesmo alterações na estrutura de navegação da Documentação, sugerimos seguir nossas [instruções para rodar a Docsify](#contribuição-avançada-com-a-docsify).

## Familiarizando-se com a formatação markdown

Vários sistemas colaborativos adotam determinadas convenções de formatação para tornar o trabalho dos editores mais fácil. Em nossa Documentação, utilizamos a linguagem **`markdown`** para tal, mas também utlizamos alguns recursos extras. Esse sistema consiste em sintaxes e palavras-chave específicas para comunicar ao software como determinado texto deve ser exibido.

### Funcionam em qualquer lugar do texto:

| O que é                                     | O que você escreve                                                                        | O que você vê                                                                           |
| ------------------------------------------- | ----------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------- |
| Texto em itálico, negrito ou ambos          | `*itálico*, **negrito** ou ***ambos***`                                                   | _itálico_, **negrito** ou **_ambos_**                                                   |
| Texto pré-formatado                         | `Aqui vai o nome de uma função`                                                           | `Aqui vai o nome de uma função`                                                         |
| Links para páginas da Documentação          | `[Página principal](README.md)`                                                           | [Página principal](README.md)                                                           |
| Links para uma seção                        | `[Página de uma Classe](/classes/Gov_BR_Admin_Page#govbr_theme_admin_settings_page_tabs)` | [Página de uma Classe](/classes/Gov_BR_Admin_Page#govbr_theme_admin_settings_page_tabs) |
| Referência a um endereço de um website      | `https://www.gov.br/ds`                                                                   | https://www.gov.br/ds                                                                   |
| Referência a um link com nome personalizado | `[Site Oficial do Design System do Governo](https://www.gov.br/ds)`                       | [Site Oficial do Design System do Governo](https://www.gov.br/ds)                       |
| Comentários em texto                        | `<!--Este comentário não será exibido na página, somente em seu código-fonte-->`          | <!--Este comentário não será exibido na página, somente em seu código-fonte-->          |

### Funcionam apenas no início das linhas:

| O que é               | O que você escreve                                                                                    | O que você vê                                                                                                                                                                                                                                                                                                                                                                 |
| --------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| Cabeçalho de Seção    | `## Nível 2`                                                                                          | <h2>Nível 2</h2>                                                                                                                                                                                                                                                                                                                                                              |
| Cabeçalho de Seção    | `### Nível 3`                                                                                         | <h3>Nível 3</h3>                                                                                                                                                                                                                                                                                                                                                              |
| Cabeçalho de Seção    | `#### Nível 4`                                                                                        | <h4>Nível 4</h4>                                                                                                                                                                                                                                                                                                                                                              |
| Cabeçalho de Seção    | `##### Nível 5`                                                                                       | <h5>Nível 5</h5>                                                                                                                                                                                                                                                                                                                                                              |
| Cabeçalho de Seção    | `###### Nível 6`                                                                                      | <h6>Nível 6</h6>                                                                                                                                                                                                                                                                                                                                                              |
| Listas com marcadores | `* Este é um ponto`<br>`* Este é outro ponto`<br>&nbsp;&nbsp;`* Ponto dentro de um ponto`             | <ul><li>Este é um ponto</li><li>Este é outro ponto<ul><li>Ponto dentro de um ponto</li></ul></li></ul>                                                                                                                                                                                                                                                                        |
| Listas enumeradas     | `1. Este é um ponto`<br>`2. Este é outro ponto`<br>&nbsp;&nbsp;`1. Ponto dentro de um ponto`          | <ol><li>Este é um ponto</li><li>Este é outro ponto<ol><li>Ponto dentro de um ponto</li></ol></li></ol>                                                                                                                                                                                                                                                                        |
| Lista de checks       | `- [ ] Este é um ponto`<br>`- [x] Este é outro ponto`<br>&nbsp;&nbsp;`- [ ] Ponto dentro de um ponto` | <ul class="task-list"><li class="task-list-item"><label><input disabled="" type="checkbox">Este é um ponto</label></li><li class="task-list-item"><label><input checked disabled="" type="checkbox">Este é outro ponto</label><ul class="task-list"><li class="task-list-item"><label><input disabled="" type="checkbox">Ponto dentro de um ponto</label></li></ul></li></ul> |
| Destaques             | `> Esta é uma observação importante.`                                                                 | <blockquote><p>Esta é uma observação importante.</p></blockquote>                                                                                                                                                                                                                                                                                                             |
| Alertas               | `!> Esta é uma observação sensivível.`                                                                | <p class="tip">Esta é uma observação sensivível.</p>                                                                                                                                                                                                                                                                                                                          |
| Notas                 | `?> Esta é uma observação secundária.`                                                                | <p class="warn">Esta é uma observação secundária.</p>                                                                                                                                                                                                                                                                                                                         |

### Linhas

Para simples separação de sessões com uma linha, use:

```
------
```

Que será renderizado como:

---

> Obs: deixe pelo menos uma linha em branco entre este símbolo e qualquer outro texto, caso contrário será entendido como cabeçalho.

### Imagens

| O que é                            | O que você escreve                                           | O que você vê                                              |
| ---------------------------------- | ------------------------------------------------------------ | ---------------------------------------------------------- |
| Imagem e descrição                 | `![Logo do GovBR](_assets/images/govbr-logo.png)`            | ![Logo do GovBR](_assets/images/govbr-logo.png)            |
| Imagem e descrição, redimensionada | `![Logo do GovBR](_assets/images/govbr-logo.png ':size=50')` | ![Logo do GovBR](_assets/images/govbr-logo.png ":size=50") |

### Vídeos

Usamos um `iframe` para incorporar mídia, que é a alternativa padrão para a maioria das plataformas online de vídeo. Por exemplo, para incorporar um vídeo do YouTube:

```html
<iframe
  width="560"
  height="513"
  src="https://www.youtube.com/embed/gFJfyHRKaE0?start=18"
  frameborder="0"
  allow="accelerometer; 
    autoplay; encrypted-media; gyroscope; picture-in-picture"
  allowfullscreen
></iframe>
```

> Note que estão configurados a largura (560px), a altura (513px) e também o tempo de início do vídeo (18s).

O resultado será como abaixo:

<iframe width="560" height="513" src="https://www.youtube.com/embed/gFJfyHRKaE0?start=18" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

### Trechos de código

Para mostrar trechos de código pré-formatado, o próprio `markdown` já possibilita isso, mas também podemos acrescentar diretivas para dar destaque a algumas linguagens, basta envolver o código desejado com três crases ` ``` ` antes e depois de seu conteúdo. Se for um código em `php`, por exemplo, basta começar com ` ```php `. O resultado será como abaixo:

```php
<?php
function foo($arg_1, $arg_2, /* ..., */ $arg_n)
{
    echo "Example function.\n";
    return $retval;
}
?>
```

### Tabelas

A maneira de se criar tabelas é um pouco limitada em `markdown`. Segue um exemplo:

```
| Cabeçalho 1   | Cabeçalho 2   |
|---------------|---------------|
| Dados 1       | Dados 2       |
| Dados 3       | Dados 4       |
```

Que gera a seguinte tabela:

| Cabeçalho 1 | Cabeçalho 2 |
| ----------- | ----------- |
| Dados 1     | Dados 2     |
| Dados 3     | Dados 4     |

Para inserir quebras de linha dentro de tabelas `markdown`, usamos a tag `HTML` `<br>`:

```
| Cabeçalho 1   | Cabeçalho 2        |
|---------------|--------------------|
| Dados 1       | Dados 2            |
| Dados 3       | Dados 4<br>Dados 5 |
```

Que resulta na seguinte tabela:

| Cabeçalho 1 | Cabeçalho 2        |
| ----------- | ------------------ |
| Dados 1     | Dados 2            |
| Dados 3     | Dados 4<br>Dados 5 |
