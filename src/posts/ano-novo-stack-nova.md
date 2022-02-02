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

Existem tecnologias que ficamos pensando "um dia vou experimentar você", o meu namoro com a **Jamstack** durou muito tempo. Entretanto, esse ano decidi utilizá-la. 

### O que é a JamStack?

Segundo o próprio site da [JamStack](https://jamstack.org), ela é:

> Uma arquitetura projetada para tornar a Web mais rápida, mais segura e mais fácil de dimensionar. Ele se baseia em muitas das ferramentas e fluxos de trabalho que os desenvolvedores adoram e que trazem o máximo de produtividade.

Existem diversas vantagens ao utilizar essa arquitetura, dentre elas, podemos destacar: 

* segurança;
* escalabilidade;
* performance;
* manutenbilidade;
* portabilidade;
* experiência de desenvolvimento (DX).

## Pontos positivos

A experiência de usar a stack é bem agradável, o desenvolvedor se sente confortável e pelo menos eu, me senti bastante produtivo.

Além disso, o nível de controle de código é total, facilitando assim o controle e privacidade de dados.

### Tecnologias utilizadas

Para realizar essa transição escolhi três tecnologias que contribuíram bastante:

* [Eleventy](https://www.11ty.dev/) um gerador de site estático; 
* [Netlify](https://www.netlify.com/);
* [Github](http://github.com/).

#### Eleventy

Ele é um gerador de sites estáticos bastante famoso, open source e prioriza a privacidade dos dados. Alguns projetos de empresas de renome utilizam ele. 

Entre elas podemos destacar:

* [Chrome Dev Summit](https://developer.chrome.com/devsummit/);
* [A11y Project](https://www.a11yproject.com/);
* [CSS Tricks](https://css-tricks.com/);
* [ESlint](https://eslint.org/);
* [Google V8](https://v8.dev/);
* [web.dev](https://web.dev/).

Sua flexibilidade e praticidade me impressionaram, me lembrou bastante o Jekyll que é escrito em Ruby.

#### Netlify

O [Netlify](https://www.netlify.com/) utilizo como ferramenta de deploy, com ele conseguimos subir um site estático em questão de segundos. 

Além disso, conta com diversas ferramentas que valem muito a pena experimentar.

#### GitHub

Na minha stack utilizo o GitHub como versionamento de código e de certa forma como uma "hospedagem" tradicional. 

Tenho controle total do código e posso criar **Actions** para automatizar diversas tarefas que posso julgar necessárias.

Sou uma pessoa que preza bastante por ter controle das minhas informações na rede, após o escândalo da Cambridge Analytics e diversas notícias relacionadas a privacidade de dados passei a ter maior cuidado sobre isso. 

E sabendo que algumas ferramentas conhecidas como o Google Analytics, por exemplo, são uma fonte de espionar meus passos decidi não utilizar mais. 

Tanto que estou abandonando aos poucos o Gmail, Analytics, Google Photos não tenho mais. 

Referências

* [JamStack](https://jamstack.org/)
*