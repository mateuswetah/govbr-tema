# Configuração do Tema

<div style="float: right; margin-left: 2rem;">

![Imagem com a tela inicial do admin do WordPress e o submenu Aparência aberto](/_assets/images/configure-01.png ":size=240")

</div>

O tema Gov BR oferece diferentes áreas pré-configuradas para exibir diferentes informações sobre sua instituição. Além disso, existem recursos que podem ou não ser utilizados no seu site que são configurações na página de configurações do tema. Para acessar esta página, digite na URL do seu navegador `<NOME-DO-SEU-SITE-WORDPRESS>/wp-admin/themes.php?page=govbr-settings.php`, ou acesse a página através do submenu **Aparência**/**Gov BR**:

A página de configuração do tema possui quatro abas, sobre as quais falaremos a seguir:

<div class="two-columns-list">

- [Início](#início)
  - [Configurações do Cabeçalho](#configurações-do-cabeçalho)
  - Configurações do Menu Lateral
  - Configurações do Rodapé
- [Funcionalidades](#funcionalidades)
- [Plugins](#plugins)
- [Sobre](#sobre)

</div>

## Início

Logo na primeira aba, é possível ver uma representação visual das diferentes áreas do tema. Esta representação está ali para te ajudar a pular entre as diferentes regiões de configuração do tema. Como o tema foi feito usando diferentes tecnologias do WordPress, algumas áreas podem ser configuradas com mais flezibilidade enquanto outras possuem campos mais restritos, em geral seguindo regras do [Padrão de Design do Governo](https://www.gov.br/ds).

![Imagem com a tela inicial da página de configuração do tema](/_assets/images/configure-02.png)

A seguir vamos descrever um pouco do que é possível fazer em cada uma das áreas:

### Configurações do Cabeçalho

Há três áreas no cabeçalho do tema que podem ser configuradas pelo administrador. Todas elas podem ser acessadas pelo menu "Personalizar" do WordPress, que oferece uma previsão ao lado que mostra como ficará o resultado do site quando a aplicação for publicada:

<div class="three-columns-list">

- [Área de Identificação](#área-de-identificação)
- [Menu Institucional](#menu-institucional)
- [Funcionalidades do Site](#funcionalidades-do-site)

</div>

#### Área de Identificação

Nesta região, configuramos as informações mais importantes do site, dispostas no canto esquerdo do cabeçalho em duas linhas:

![Imagem do menu Personalizar na área de configuração da Identificação do Site](/_assets/images/configure-header-01.png)

Aqui podem ser configuradas:

- A **Logo do site**, disponível na primeira linha mostra. Nos portais do Governo é a logo do gov.br. Esta logo pode ser enviada para a galeria de mídias do WordPress clicando-se em "Selecionar logo". É uma imagem pequena, que não deve ser carregada de muitas informações, especialmente textuais, visto que estas serão exibidas em outros campos.
- O **Título e o Link da Assinatura do site**. A assinatura do site é como é chamado o link que fica na primeira linha, logo ao lado da logo. Geralmente é usada para identificar um órgão do governo ao qual a instituição está vinculada, como um ministério, e claro, o link para o site deste orgão. Estes dois campos podem ser deixados em vazio, se não houver conteúdo para ser exibido.
- O **Título do Site**. Este será o texto mostrado em tamanho maior na segunda linha. É também o título que o site terá na aba do navegador e em buscadores. Em todas as páginas, com exceção da página inicial, este elemento será também um link para a página inicial do site.
- A **Descrição do Site**, se comporta como um subtítulo, que fica logo abaixo do título. Em alguns cenários pode ser uma brevíssima descrição do que se trata a instituição ou uma versão mais detalhada de uma sigla.
- O **Ícone do Site** é uma imagem quadrada pequena, que é usada para identificar o site nas abas do navegador e em resultados de busca em sites indexadores.

Não se esqueça de, após concluir qualquer configuração no menu "Personalizar", clicar em "Publicar", para que o resultado seja salvo.

#### Menu Institucional

O "Menu Institucional" é um conjunto de links, que fica disponível na linha superior do cabeçalho, alinhado à direita. Quando em telas menores (como na imagem abaixo), este menu é collapsado em um menu oculto, que pode ser acessado em um botão com "três pontinhos" verticais. Ao se clicar nele, vê-se os mesmos links, sob o título de "Acesso Rápido".

![Imagem do menu Personalizar na área de configuração do Menu Institucional](/_assets/images/configure-header-02.png)

Estes links são usados para se oferecer um acesso imediato à áreas importantes para a instituição, sejam estes internos ao site ou externos. Quando acessado o menu Personalizar, na área de "Menus", deve ser selecionado ou criado um menu que use a Localização "Links Institucionais". Com este menu configurado, novos links podem ser inseridos pelo botão "Adicionar itens". Os itens do menu também podem ser reordenados, editados e removidos nas opções que aparecem ao se clicar em cada item.

> **Nota**: Os menus também podem ser editados pela tela de Menus, diretamente acessível pelo panel Administrativo do WordPress no submenu **Aparência**/**Menus**.

#### Funcionalidades do Site

No canto superior direito do cabeçalho ficam os botões das funcionalidades do site. Pelo menu Personalizar podem ser habilitadas ou escondidas elas da mesma forma que na [página de "Funcionalidades" do painel de configuração](#funcionalidades). Quando em telas menores, como na captura de tela a seguir, o menu é escondido em um submenu que pode ser acionado por um ícone de grade, que por sua vez abre um popup chamado "Fucionalidades do Sistema".

![Imagem do menu Personalizar na área de configuração das Funcionalidades do Site](/_assets/images/configure-header-03.png)

Atualmente, estão implementadas as seguintes funcionalidades no tema:

- **Botão de VLibras**. Este botão abre ou esconde o assistente virtual [VLibras](https://www.gov.br/governodigital/pt-br/vlibras/), solução recomendada pelo governo para leitura de elementos da página com tradução para Libras.
- **Botão de Alto Contraste**. Quando habilitada esta função carrega uma paleta de cores de extremo alto contraste no site, deixando as cores de fundo escuras, de texto brancas e os links e elementos interagíveis com cores fortes. Esta funcionalidade é uma solução estrema para usuários que tenham dificuldade de leitura. Idealmente, as cores e tipografias usadas pelos componentes do Design System do Governo já devem resultar em combinações que garantam uma boa leitura. Se mesmo assim não for suficiente, este recurso pode oferecer uma visão alternativa.
  > **Nota**: É comum encontrar em vários sites a ferramenta de "Aumentar/Diminuir" o tamanho de fontes. Recomendamos evitar a inserção deste tipo de funcionalidade visto que os navegadores mais modernos hoje conseguem lidar com este recurso de forma muito mais eficiente com suas próprias configurações de tamanho de fonte e zoom.
- **Botão de Login do WordPress**. A autenticação para Administradores, Editores e Autores no WordPress é feita acessando-se o painel Administrativo, geralmente pelo endereço `/wp-admin`. Se for de desejo do adminsitrador oferecer um botão que leve para a página de login, esta funcionalidade resolve o problema. Além disso, uma vez logado o botão servirá para mostrar qual usuário está logado e oferecer um link para a página do mesmo no painel administrativo ou para deslogar-se do sistema.
  > **Nota**: Esta funcionalidade não implementa a autentação via SSO do governo. Esta funcionalidade está sendo planejada para funções futuras do tema.

### Configurações do Menu Lateral

O Menu Lateral é um painel escondido que pode ser acessado pelo "ícone hamburguer", logo ao lado do Título do Site. Há duas áreas no cabeçalho do tema que podem ser configuradas pelo administrador:

<div class="three-columns-list">

- [Menu de Navegação](#menu-de-navegação)
- [Informações do Painel Lateral](#informações-do-painel-lateral)

</div>

#### Menu de Navegação

Esta área usa a ferramenta de menus do WordPress para criar um menu que represente a listagem das páginas e tópicos do site, mesmo que estas tenha uma estrutura hierárquica mais complexa.

#### Informações do Painel Lateral

Nesta área podem ser colocadas quaisquer outras informações que se queira no Painel Lateral, porém com maior flexibilidade de layouts e de elementos, usando por exemplo imagens e ícones de redes sociais.

## Funcionalidades

Na aba de funcionalidades, estão listados alguns recursos que o próprio tema Gov BR oferece e que podem ou não ser desejados para o seu site. Em geral, estes recursos também podem ser habilitados ou configurados via menu Personalizar, na área de "Funcionalidades do Site". Uma vez ativados, na parte pública do seu site estes recursos estão disponíveis no canto superior direito do cabeçalho.

![Imagem com a aba de funcionalidades da página de configuração do tema](/_assets/images/configure-03.png)

## Plugins

Nesta aba estão disponíveis algumas sugestões de plugins. O tema Gov BR funciona sem a necessidade de plugins extras do WordPress. Porém, alguns plugins do WordPress podem ser instalados para expandir suas funcionalidades. Os que estão listados nesta página, são plugins que tem uma base de usuários sólida e em alguns casos, possuem uma integração visual entre os recursos oferecidos pelo plugin e o que diz respeito ao tema em si.

![Imagem com a aba de plugins da página de configuração do tema](/_assets/images/configure-04.png)

Independente do uso deles, é possível instalar quaisquer plugin do WordPress disponível pela página de **Plugins** no painel administrativo do WordPress.

## Sobre

Nesta aba estão disponíveis alguns links úteis sobre o projeto, como esta documentação e o código fonte, além de uma lista com informações à respeito das últimas versões lançadas e suas modificações.

![Imagem com a aba "sobre" da página de configuração do tema](/_assets/images/configure-05.png)
