---
layout: layouts/post.njk
title: "Ano novo, stack nova "
metaDesc: ""
date: 2022-02-02T15:35:58.545Z
tags:
  - wordpress
---
![](/images/happy-new-year.jpg)



Um ano novo começou e seguimos o velho mantra de todos os anos, aquele famoso ditado popular:  

> Ano novo, vida nova.

Nesse artigo, irei contar para vocês algumas mudanças que fiz no meu site. 

Se você me acompanha há um tempo percebeu que o layout dele mudou, não é mesmo? 

Além da parte visual, algumas coisas na arquitetura também foram modificadas.  Então vem comigo que vou detalhar todo o processo.

## Início de tudo

Em meados de 2017 decidi criar um blog para escrever sobre acessibilidade e outros assuntos. Na maior parte do tempo, utilizei o Wordpress hospedado em um domínio próprio. 

Dessa forma eu tinha controle do código de ponta a ponta, a stack que utilizei por muito tempo foi:

* Wordpress;
* MySQL;
* Hospedagem compartilhada;
* FTP 🤣

Nunca tive problemas com essa *stack*, porém, em 2022 queria algo mais minimalista. 

Comecei a perceber que estava com certas burocracias no Wordpress que me impediam ser mais criativo e produtivo com meu conteúdo.

## Escolhendo a stack

Confesso que já namorava com uma stack que tem bastante popularidade entre os frontenders, a JamStack. 

### O que é a JamStack?

Segundo o site da [JamStack](https://jamstack.org)

> Jamstack é uma arquitetura projetada para tornar a Web mais rápida, mais segura e mais fácil de dimensionar. Ele se baseia em muitas das ferramentas e fluxos de trabalho que os desenvolvedores adoram e que trazem o máximo de produtividade.

Existem diversas vantagens ao utilizar essa arquitetura, dentre elas, podemos destacar: 

* segurança;
* escalabilidade;
* performance;
* manutenbilidade;
* portabilidade;
* experiência de desenvolvimento (DX).

### Pontos positivos

Realmente a stack traz uma experiência bem agradável para quem curte colocar a mão na massa. Me lembrei bastante do tempo que era frontend. 

Eu curto ter controle do meu código e fazer algumas intervenções necessárias. Além disso, realizar alguns ajustes de acessibilidade foram necessárias mas nada tão gritante. 

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

Referências

* [JamStack](https://jamstack.org/)
*