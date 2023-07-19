# Tema GovBR

## Objetivo

O objetivo deste projeto é criar um tema que permita o uso do [WordPress](https://br.wordpress.org/) como alternativa ao [Plone](https://plone.org.br/) em portais vinculados ao Governo Federal Brasileiro. Há muitos recursos no WordPress dos quais diferentes instituições podem tirar proveito e fazer uma migração de existentes não é uma tarefa simples. Mesmo em situações onde projetos não diretamente relacionados queiram manter uma aproximação visual com os sites institucionais, é um grande desafio. Por isso estamos criando este projeto que visa respeitar a nova identidade visual proposta pelo [Design System do Gov.br](https://www.gov.br/ds/) (DSGov).

## Decisões de Projeto

Durante o planejamento deste projeto, algumas decisões de projeto foram tomadas, das quais novos contribuidores devem estar informados:

### Práticas de programação

Tentaremos seguir [as exigências do WordPress.org para temas](https://make.wordpress.org/themes/handbook/review/required/) serem submetidos no repositório deles. Há um objetivo final de que isso permita que a submissão ocorra, mas não temos certeza se dado o foco institucional do projeto ele será aceito. De qualquer forma, isso implica, por exemplo, que todas as strings devem ser [traduzíveis](https://developer.wordpress.org/apis/internationalization/).

O esqueleto deste projeto vem do tema TwentyTwentyOne, de onde aproveitamos algumas boas práticas incluindo organização de pastas, scripts de compilação e _linters_ (veja mais adiante os passos para build).

### Compatibilidade com o Editor de Blocos.

Este projeto se inicia em 2023, pouco após o WordPress lançar sua [versão 6.2](https://br.wordpress.org/news/). Há um forte incentivo na comunidade para o desenvolvimento de _temas de edição completa do site_, ou seja, aqueles cuja estrutura de templates seja totalmente configurável via editor. Porém, dada a maturidade deste recurso e o nosso apreço por tecnologias com maior aceitação entre desenvolvedores, estamos desenvolvendo um [tema "hibrido"](https://wptavern.com/block-fse-hybrid-universal-what-do-we-call-these-new-wordpress-themes). Isto significa que partes fixas do site, como o cabeçalho e rodapé continuam sendo construídas com a clássica estrutura de templates em PHP que sempre existiu no WordPress. Também decidimos isso em particular porque estas áreas são mais engessadas no DSGov e portanto não há muitos motivos para oferecer a experiência completa de edição ali.

Por outro lado, para a criação do restante do conteúdo, queremos incentivar ao máximo o editor de blocos. Por isso está sendo adotada a criação de um arquivo [theme.json](https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-json/), que permite tirar proveito de muitos dos avanços de customização e mesmo performance que a geração de páginas pelo editor de blocos entrega. O uso de Padrões de Bloco também é incentivado, em oposição à criação de shortcodes, quando possível. Acreditamos que cobrindo bem estas features, o tema poderá ser usado pela maioria dos casos sem a necessidade da instalação de um _page builder_ extra como Elementor, embora o uso desde, claro, também pode ser feito se necessário.

### Recomendação de plugins externos

Seguindo a filosofia de extensibilidade via plugins do WordPress, queremos evitar "re-inventar a roda" em algumas situações onde recursos mais complexos precisem ser implementados no tema quando dada a existência de plugins que cumprem bem certo papel. Sabemos do risco que isso pode gerar de criar dependências com códigos terceiros, mas também nos comprometemos a seguir um acompanhamento de como essas alternativas estão sendo utilizadas e se elas podem ou não ser substituídas. Algumas áreas onde visualizamos esta possibilidade:

- Carrosseis e Banners;
- Collapses e Abas;
- Multilinguagem no site;

### Remoção de suporte ao Internet Explorer

Embora hajam scripts que podem ajudar a aumentar a compatibilidade do CSS gerado com o Internet Explorer, decidimos seguir [a recomendação da comunidade WordPress](https://make.wordpress.org/core/2021/03/04/discussion-dropping-support-for-ie11/) e não oferecer este suporte, o que nos reduz tempo de compilação e tamanho final do bundle. Em resumo, tanto o WordPress quanto a própria Microsoft já estão seguindo essa filosofia.

## Roadmap

Acompanhe as features planejadas e o ritmo do desenvolvimento [aqui](https://github.com/IBICT/wp-govbr-tema/issues/1).

## Compilando o projeto

Se você como desenvolvedor pretende contribuir para o desenvolvimento deste tema, precisa ter instalados o **node** (usamos a versã 19.1.0, _stable_) e o **npm** (versão 8.19.3).

Para compilar o tema basta rodar:

```
./build.sh
```

Isto chama os scripts necessários que estão configurados no [package.json](/govbr/package.json), covnertendo o .scss em .css, dentre outras otimizações. Se você quiser copiar para sua pasta de temas somente os arquivos necessários para o tema em si:

```
./build.sh /<CAMINHO-PARA-SEU-WORDPRESS>/wp-content/themes
```

Neste script são removidas pastas como `node_modules` e `assets/sass` que são úteis apenas para desenvolvimento.
