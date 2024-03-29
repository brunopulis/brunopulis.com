---
layout: layouts/post.njk
title: 5 motivos para testar acessibilidade com leitor de telas
metaTitle: 5 motivos para testar acessibilidade com leitor de telas
metaDesc: Aprenda 5 motivos principais para testar acessibilidade com leitor de telas
socialImage: /images/screen-reader.jpeg
date: 2022-02-04T12:23:57.788Z
tags:
  - leitor-de-telas
---
Testar acessibilidade é quase uma arte, ela encontra-se nos detalhes. Alguns comportamentos são reconhecidos somente com muita prática e experiência. 

Os leitores de telas, de modo geral, tem comportamentos padrões para determinados componentes e as pessoas que os utilizam identificam de forma natural.

Neste artigo irei mostrar 5 motivos para testar com um leitor de telas. Vamos lá?

---

## O que são leitores de telas?

Bom, se você nunca ouviu falar sobre leitores de telas eles são softwares construídos para auxiliar pessoas com deficiência visual para utilizar um computador/smartphone e navegar na web.

Sua função básica é converter a informação, através de um API que lê a estrutura do HTML e converte o texto em aúdio.

Existem diversos leitores de telas no mercado, podemos citar alguns:

* NVDA;
* Jaws;
* Talkback;
* VoiceOver.

---

Tendo em vista que, definimos o que são os leitores de tela irei apresentar para vocês, os **5 motivos para testar acessibilidade com leitor de telas**.

Se você gostou do meu conteúdo e quer receber em primeira mão, assine a [minha newsletter](https://buttondown.email/brunopulis). 

## Primeiro motivo: Prevenção de bugs

Pode parecer óbvio, entretanto, uma interface impecavél visualmente, pode conter erros grotescos de acessibilidade.

Na grande maioria das vezes, esses bugs são erros de marcação HTML que poderiam ser evitados.

Um exemplo banal são botões sem rótulo. Por padrão todo elemento HTML deve ser **usado para seu propósito**. 

Cada elemento possuí duas informações extremamente importantes: **rótulo** e **semântica** adequada. 

No exempo a seguir, temos um botão que representa a ação de fechar, porém, ele não está rotulado corretamente.

```html
<button>X</button>
```

Dessa forma compromete drasticamente a experiência de quem usa leitor de telas. O leitor iria verbalizar algo como: **botão X**.

> Mas afinal o que seria o botão X?


Além disso, esse inocente botão fere as diretrizes da WCAG 2.1: 

* [1.3.1 - Informações e Relações [A]](https://www.w3.org/WAI/WCAG21/Understanding/info-and-relationships); 
* [2.5.3 - Rótulo no Nome acessível [A]](https://www.w3.org/WAI/WCAG21/Understanding/label-in-name); 

A **1.3.1** nos diz:

> A organização estrutural de uma tela deve ser construída de forma que sua arquitetura de informação **faça sentido tanto para quem vê, quanto para quem ouve** o conteúdo.

A **2.5.3** nos diz:

> Rótulos em botões, ícones acionáveis ou qualquer controle interativo, devem ter uma descrição significativa tanto para quem vê, quanto para quem apenas ouve a informação.

Fica nítido que o descumprimento de uma diretriz afeta a outra proporcionalmente.

### Como resolvemos?

Uma das possíveis soluções é adicionar um atributo da WAI-ARIA o **aria-label**, dessa forma o leitor de tela receberá o *feedback* apropriado.

O exemplo a seguir adotamos a técnica com o uso do *aria-label* 

```html
<button aria-label="Fechar">X</button>
```

## Segundo motivo: cobrir áreas não mapeadas

É bem comum desenvolvermos um componente é esquecermos algumas ações, como por exemplo: 

* teclas de atalho para acionar o componente;
* navegação via teclado;
* ordem de foco.

Esses itens diversas vezes são ignorados pelos desenvolvedores, costumo chamar isso de programação orientada a mouse. 

Dessa forma pessoas que utilizam somente o teclado ficam extremamente prejudicadas e ignoradas.

> Dica: sempre pense na possibilidade de navegar somente via teclado. Afinal quando utilizamos um smartphone, usamos somente o teclado. 

## Terceiro motivo: HTML semântico

O leitor de telas é amigo íntimo do HTML, como um fiel amigo ele informa **exatamente** como foi escrito. 

É de extrema importância desenvolvedores escreverem um HTML decente. Já cansei de realizar testes e identificar um problema: a grande maioria dos desenvolvedores **ignoram uma escrita correta de HTML**. 

> Como podemos construir uma casa sem um bom fundamento? O primeiro temporal leva nosso esforço aos ares.

Estude HTML semântico, caso você tenha dúvidas a respeito marque uma [mentoria gratuita comigo](https://calendly.com/brunopulis). 

## Quarto motivo: Feedback em tempo real para os usuários

Usando leitores de telas para testes de acessibilidade eu aprendi uma coisa: 

> de feedback ao usuário o mais rápido possível.

Imagina a seguinte situação, um formulário para aplicar em uma vaga de emprego. Esse formulário possuí 20 campos que não informam em tempo de preenchimento se os dados estão corretos. 

Somente no momento do envio e também não possui mensagens claras dos erros. Uma pessoa que usa um leitor de telas provavelmente vai tentar novamente ou desistir da candidatura.

### Possibilidades

Dar o feedback enquanto as informações são preenchidas é uma excelente prática. Mensagens contextuais e concisas auxiliam bastante. 

Existem técnicas que podemos usamos em alguns casos, como o atributo **aria-live**. 

## Quinto motivo: a experiência do usuário final

A acessibilidade está intimamente ligada com a experiência de uso das pessoas. Escrever um HTML semântico e adotar boas práticas de desenvolvimento podem contribuir muito para usuários de leitor de telas. 

Usando leitores de telas para testes de acessibilidade, conseguimos captar a experiência dos usuário, assim, podemos corrigir de forma preventiva possíveis problemas.

## Conclusão

Recomendo fortemente você desenvolvedor, enquanto estiver fazendo suas interfaces use algum leitor de telas para identifcar possíveis problemas.

Dessa forma, você irá "sentir na pele" como é uma navegação com tecnologia assistiva. E isso pode contribuir significamente em sua carreira. 

Com esses conhecimentos, poderá explorar novos horizontes e quem sabe se tornar um especialista em desenvolvimento acessível. 

Tudo depende de você e como diria o Tio Ben: 

> Com grandes poderes, vem grandes responsabilidades 