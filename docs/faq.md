# Perguntas Frequentes

Nesta página listamos algumas perguntas frequentes para ajudar na solução de dúvidas à respeito do uso do Tema Gov BR.

## Propósito do Tema

### Posso usar o WordPress ao invés do Plone no meu site institucional?

**Depende**. O [Plone](https://plone.org.br/) é um CMS software livre assim como o WordPress e tem sido usado e recomendado como solução oficial para criação de sites vinculados ao Governo Federal. Sua instalação e configuração costuma ser feita pelo [Serpro](https://www.serpro.gov.br/) na forma do pacote conhecido como [Portal Padrão](https://plone.org.br/projetos/portal-padrao). Esta solução do Portal Padrão já inclui alguns recursos como uma widget de agenda de autoridades e o login via [SSO do Portal Unificado do gov.br](https://sso.acesso.gov.br/). Orgãos diretamente vinculados ao Governo tem como obrigação o uso destas ferramentas em prol de uma unificação dos portais em termos de dados e de interface.

O objetivo deste projeto é servir como um "meio termo", uma alternativa para instituições que não são obrigadas por lei a usarem o Plone mas que desejam seguir a identidade visual proposta pelo [Padrão de Design do Governo (DS-GOV)](https://www.gov.br/ds), em reconhecimento de que a padronização destas interface facilita o acesso do cidadão aos recursos que a instituição pode oferecer. Reforçamos que o _DS-GOV_ em si é um projeto em flanco desenvolvimento e mesmo os sites do Plone ainda não estão 100% adaptados a todos os seus templates, mas esta adoção ocorre de forma gradual, assim como ocorrerá neste tema para WordPress.

### Quem mantém o projeto deste tema ativo?

O Tema Gov BR para WordPress é mantido primariamente por uma comunidade de usuários WordPress interessados em manter seu funcionamento. A priori, esta comunidade é gerida e organizada por membros da [Coordenação de Tecnologias para Informação (COTEC)](https://cotec.ibict.br/) do [Instituto Brasileiro de Inforamção em Ciência e Tecnologia (IBICT)](https://www.gov.br/ibict/pt-br), mas são bem vindas contribuições de desenvolvedores externos e interessados em manter o projeto, como já é esperado de Institutos Federais de Tecnologia e do Instituto Brasileiro de Museus, ambos usuários de sites em WordPress.

## Suporte

### Quero uma nova funcionalidade. Como proceder?

[Abra uma issue!](https://github.com/IBICT/wp-govbr-tema/issues/new/choose) Iremos analisar se temos condições de implementar ou recomendar diferentes caminhos para tê-la. Em geral, fazemos algumas considerações antes de se implementar algo no tema:

1. **É mesmo algo de responsabilidade do tema?** O WordPress tem uma filosofia bem definida sobre o que é "território de tema" vs. "terriório de plugins". Isto significa que algumas coisas que envolvem funcionalidades para o site geralmente deveriam ser obtidas com uso de plugins. Mesmo assim, pode acontecer de que no tema, seja feito algum ajuste para que permita uma melhor integração daquilo que o plugin gera com o layout e a aparência dos componentes visuais que o tema oferece.
2. **É algo que respeita o [Padrão de Design do Governo (DS-GOV)?](https://www.gov.br/ds)** As vezes, alguns ajustes mais drásticos, como a inserção de elementos visuais no cabeçalho ou a troca de cores pode ser algo que não está disponível no tema justamente por ferirem algum requisito do _DS-GOV_. Geralmente averiguamos estas questões discutindo com [a comunidade do próprio DS-GOV](https://www.gov.br/ds/introducao/comunidade) se é algo que poderia ser feito e se não, qual seria o caminho sugerido.

### Acho que encontrei um erro. Como devo proceder?

Estamos sempre a disposição para ajudar no [repositório GitHub do tema](https://github.com/IBICT/wp-govbr-tema), onde podem ser iniciadas conversas via issues. Caso você abra uma issue, recomendamos dar sempre o máximo de detalhes para que possa ajudar a identificar o que está ocorrendo. Algumas sugestões, são:

- Descrever passo a passo o que está sendo feito, o que ocorre e o que era esperado;
- Listar quaisquer plugins que estejam ativados para que possa ser verificado se eles tem relação com o erro;
- Verificar e se possível nos mandar as informações da Página de Diagnóstico do WordPress - [Veja como aqui](#como-acho-a-pagina-de-diagnostico-do-wordpress);
- Caso possua acesso ao servidor, nos mandar os Logs - [Veja como aqui](#como-acho-os-logs-do-meu-servidor);
- Nos mandar informações de rede e console no navegador - [Veja como aqui](#como-vejo-erros-de-rede-ou-no-console-do-navegador);
- Se possuir links para testes, melhor ainda!

#### Como acho a Página de Diagnóstico do WordPress?

Esta página costuma ser útil na hora de se saber informações gerais da sua instalação WordPress, o que pode servir de apoio para os desenvolvedores do tema na hora de tentar identificar possíveis causas para erros. Para acessá-la, basta ir no submenu **Ferramentas**/**Diagnóstico** do seu Painel Administrativo do WordPress.

#### Como acho os logs de erro do meu servidor?

Alguns erros gerados no banco de dados ou operações do lado do servidor podem ser identificados acessando seus logs. Se você tem acesso ao servidor, enviar estes logs para os desenvolvedores pode ser de ajuda. A localização deles varia de instalação. Em servidores _apache_, é comum encontrar logs nestes caminhos:

- `/var/log/apache2/error.log`;
- `/var/log/apache/error.log`;

#### Como vejo erros de rede ou no console do navegador?

Alguns erros podem ser reportados no navegador ao invés do servidor. Isso acontece em situações onde a tela fica presa em algum estado de carregamento infinito, por exemplo. Nesta situação, pode ser útil aos desenvolvedores, saber informações do painel de `rede` ou do `console` do seu navegador, que fazem parte do painel desenvolvedor.

- No Firefox, acesse o painel de Redes com o atalho <kbd>CTRL</kbd><kbd>SHIFT (&#8679;)</kbd><kbd>E</kbd> e o Console com o atalho <kbd>CTRL</kbd><kbd>SHIFT (&#8679;)</kbd><kbd>K</kbd>. Outra opção é clicar com o botão direito na página, ir na opção "Inspecionar" e de lá procurar as abas de Rede e de Console;
- No Google Chrome, acesse o painel de desenvolvedor com o atalho <kbd>CTRL</kbd><kbd>SHIFT (&#8679;)</kbd><kbd>I</kbd> ou clicando com o botão direito na página e indo em "Inspecionar". De lá procure as abas de Rede e de Console.

Na **aba de console**, erros em geral são listados com destaque, em vermelho. Na **aba de rede**, haverá sempre uma lista de várias requisições. Aquelas que podem ter problema em geral são apresentadas em vermelho ou com códigos `404`, `401`, `500`, logo de início. Às vezes, pode ser necessário clicar em uma requisição desta lista para se saber mais informações, como a resposta da mesma. Saber destas informações podem ajudar o desenvolvedor a identificar o problema. Se possível, faça uma captura de tela mostrando o conteúdo destas telas, incluindo informações escondidas por scroll. Se é um erro que acontece logo ao se entrar na página ou se clicar em algum botão, tente repetir a ação com esta tela aberta, para se ter certeza de que foi registrada ali.
