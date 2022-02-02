---
layout: layouts/post.njk
title: "Ano novo, stack nova "
metaDesc: ""
date: 2022-02-02T15:35:58.545Z
tags:
  - wordpress
---
Seguindo o ditado popular "ano novo, vida nova", resolvi mudar drasticamente a *stack* do meu blog.

Nesse artigo irei contar os pontos positivos, as dificuldades e o resultado final. 

--- 

## O que eu usava

Por longas datas utilizava a seguinte stack:

* Wordpress;
* MySQL;
* Hospedagem compartilhada;
* FTP 🤣

Nunca tive problemas com essa stack, porém, queria algo mais minimalista. Particularmente gosto bastante do Wordpress, ele possui inúmeras vantagens como:

* praticidade de uso;
* *self hosting*;
* controle do código;
* customização;
* privacidade de dados. 

## Escolhendo a stack

Confesso que já namorava com uma stack que tem bastante popularidade entre os frontenders, a JamStack. 

### O que é a JamStack? 

Segundo o site da [JamStack](https://jamstack.org)

> Jamstack é uma arquitetura projetada para tornar a Web mais rápida, mais segura e mais fácil de dimensionar. Ele se baseia em muitas das ferramentas e fluxos de trabalho que os desenvolvedores adoram e que trazem o máximo de produtividade.

é uma arquitetura criada para construir sites mais rápidos, que escalam com facilidade e que são mais seguros. Essa stack se baseia exclusivamente no ecossistema Javascript, uma das grandes vantagens é a utilização de gerados de sites estáticos. 

que pesquisei bastante até encontrar a stack atual, que basicamente é: o Eleventy, Netlify e Github. 

O [Eleventy](https://www.11ty.dev/) um gerador de site estático, bastante flexível e extremamente rápido. 

Algumas empresas bastantes conhecidas utilizam ele, dentre elas: 

* Chrome Dev Summit;
* A11y Project;
* CSS Tricks;
* ESlint;
* Google V8;
* web.dev.  

Um tempo atrás, me aventurei com o Jekyll, um outro gerador de site estático e me surpreendi pela semelhança. Por sua vez o Eleventy é feito em Javascript, já o Jekyll em Ruby.

O [Netlify](https://www.netlify.com/) utilizo como ferramenta de deploy e o GitHub como repositório. 

Inclusive o código fonte está disponível. Essa arquitetura faz parte da famosa [JamStack](https://www.netlify.com/jamstack/) que basicamente é desacoplar o frontend do backend e entregar website mais rápidos e escaláveis.

## Jamstack e privacidade 

Sou uma pessoa que preza bastante por ter controle das minhas informações na rede, após o escândalo da Cambridge Analytics e diversas notícias relacionadas a privacidade de dados passei a ter maior cuidado sobre isso. 

E sabendo que algumas ferramentas conhecidas como o Google Analytics, por exemplo, são uma fonte de espionar meus passos decidi não utilizar mais. 

Tanto que estou abandonando aos poucos o Gmail, Analytics, Google Photos não tenho mais. 
