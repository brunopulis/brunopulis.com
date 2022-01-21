---
title: "Como validar links externos"
date: "2021-01-06"
categories: 
  - "dev"
tags: 
  - "link-quebrados"
  - "markdown"
  - "npm"
---

## Introdução

Em projetos _open source_, usamos o arquivo `README` escrito em _[markdown](https://pt.wikipedia.org/wiki/Markdown#:~:text=Markdown%20%C3%A9%20uma%20linguagem%20simples,seu%20texto%20em%20HTML%20v%C3%A1lido.)_, que é uma forma simples e flexível de documentar informações importantes.

Usamos o markdown para criar as famosas _Awesome Lists_, como o _[Awesome A11y](https://github.com/brunopulis/awesome-a11y)_.

Uma Awesome List geralmente possuí diversos links externos.

Como tratamos com várias referências, será que existe uma forma de garantirmos que aquele link não está quebrado?

Pensando nisso, nesse artigo vou te ensinar uma forma prática de validar os links no padrão markdown.

## Anatomia de um hyperlink

A função principal de um link é promover **conexão** entre páginas web, essas ligações pode ser através de:

- uma página a outra;
- arquivos;
- telefones;
- endereços eletrônicos (e-mail);
- âncorar locais em uma mesma página.

Para maiores informações [consulte a documentação do elemento `<a>`](https://developer.mozilla.org/pt-BR/docs/Web/HTML/Element/a).

### Links quebrados

É bem comum ouvir a expressão "link quebrado", mas o que ela quer dizer?

Um link quebrado, é um recurso que o servidor tentou localizar e não encontrou, gerando o famoso `404 - Page not found`

## Links quebrados vs Markdown

Hoje, estava estudando algumas referências sobre qualidade de software em um repositório no Github e me deparei com alguns links quebrados no Markdown.

Fiquei pensando como poderia corrigir isso, resolvi procurar uma solução que permitisse percorrer todos os links e retornar o status de cada um.

Encontrei o [Markdown link check](https://github.com/tcort/markdown-link-check), ele é um pacote no _npm_ de fácil utilização.

## Usando o Markdown Lint Check

Para usar o Markdown link check, devemos ter um arquivo `package.json` configurado. Caso seu projeto não tenha, execute o seguinte comando:

\# cria uma estrutura padrão do package.json
npm init -y

### Instalando a dependência

Após ter o `package.json` configurado, iremos instalar ele **localmente** no projeto com o comando:

npm install --save-dev markdown-link-check

### Validando os links

Existem duas alternativas de validar os links:

- através da linha de comando;
- através de um comando `script` definido no `package.json`.

### Linha de comando

Pela linha de comando é recomendável para **poucos arquivos**, assim você tem um _feedback_ bem rápido.

markdown-link-check https://github.com/tcort/markdown-link-check/blob/master/README.md

No exemplo acima, validamos o `README` do Markdown link check

### Tarefa no package.json

Eu utilizei esse formato, encontrei no [blog do Gleb Bahmutov](https://glebbahmutov.com/blog/check-markdown-links/).

Abra seu arquivo `package.json` e configure:

{
  "scripts": {
    "check:markdown": "find \*.md -exec npx markdown-link-check {} \\;"
  }
}

Dessa forma ele irá percorrer todos os arquivos com a extensão \*.md

Digite no terminal:

npm run check:markdown

Nessa solução pode demorar um pouco, visto que, percorrerá todos os arquivos do projeto.

## Considerações finais

Esse pacote me auxiliou e economizou um tempo consideralvél.

Ele é uma ótima alternativa para detectar possíveis problemas e resolvê-los de forma rápida e dinâmica.

Existe a possibilidade de usar com o Docker e também incluir ele numa pipeline de desenvolvimento. Legal né?

E você como usaria ele para auxiliar seu trabalho?
