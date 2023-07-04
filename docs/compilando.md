# Compilando o Código do Tema

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

## Compilando a documentação

Toda a documentação do tema está localizada na pasta `/docs` do repositório. A maioria da documentação está escrita em Markdown e pode ser editada seguindo nossas [dicas de contribuição](CONTRIBUTING.md).

### Preparando o ambiente

Em sua máquina ter, é preciso ter instalados:

- Git
- NodeJS
- PHP
- phpDocumentor

Na sua cópia do código, acesse a pasta da documentação:

```
cd docs
```

Agora instale globalmente a `CLI` da Docsify, nossa framework que auxilia na criação da Documentação:

```
npm i docsify-cli -g
```

Tenha certeza de que está no diretório do respositório (`cd docs`, ou qualquer caminho necessário) e inicie o servidor da Docsify:

```
docsify serve docs
```

Isso instanciará um servidor local de testes, geralmente na porta `http://localhost:3000`. Ao acessar este endereço no seu navegador, você terá uma prévia de como ficará a Página após as edições feitas na sua cópia local. Qualquer mudança em algum arquivo dentro do repositório será refletida automaticamente neste endereço, assim que o arquivo for salvo.

### Scripts de extração de código

Parte da documentação é extraída automaticamente do código usando os comentários. Para extrair comentários relacionados à classes e métodos, é usado o [`phpDocumentor`](https://phpdoc.org/3.0/). Tendo ele instalado em seu ambiente, vá para a raiz do projeto (acima da pasta `/docs`) e rode:

```
composer require
phpDocumentor -d ./govbr -t ./docs
```

O primeiro parâmetro instalará um plugin do `phpDocumentor` voltado para gerar arquivos Markdown, além do `wp-documentor`, que usaremos adiante. O parâmetro `-d` está informando de onde vamos extrair o código. Já o `-t` indica o destino dos arquivos Markdown que serão gerados na pasta `/docs/classes`.

Para extrair a documentação de Filtros e Actions do WordPress, é usado o `wp-documentor`, que já está listados nas dependências do composer. Basta então chamar:

```
vendor/bin/wp-documentor parse govbr --output=docs/hooks.md --format=markdown
```

O arquivo gerado `docs/hooks.md` deverá conter os hooks atualizados.
