---
layout: layouts/post.njk
title: 5 motivos para testar acessibilidade com leitor de telas
metaTitle: 5 motivos para testar acessibilidade com leitor de telas
metaDesc: Aprenda 5 motivos principais para testar acessibilidade com leitor de telas
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

Sua função básica é converter a informação, através de um API que lê a estrutura do HTML e realiza a conversão para texto.

Existem diversos leitores de telas no mercado, esses são os mais conhecidos:

* NVDA;
* Jaws;
* Talkback;
* VoiceOver.

---

Tendo em vista que, definimos o que são os leitores de tela irei apresentar para vocês, os **5 motivos para testar acessibilidade com leitor de telas**.

E se você gosta do meu conteúdo e quer receber em primeira mão, assine a [minha newsletter](https://buttondown.email/brunopulis). 

## Primeiro motivo: Prevenir bugs de acessibilidade

Pode parecer óbvio, entretanto uma interface impecavél visualmente, pode conter erros grotescos de acessibilidade.

Na grande maioria das vezes, esses bugs são erros de marcação HTML que poderiam ser evitados.

Um exemplo banal que encontro no meu cotidiano são botões sem rótulo. Por padrão todo elemento HTML deve ser **usado para seu propósito**. 

Cada elemento possuí duas informações extremamente importantes: **rótulo** e **semântica** adequada. 

No exempo a seguir, temos um botão que representa uma ação de fechar, porém, ele não está rotulado corretamente.

```html
<button>X</button>
```

Dessa forma compromete drasticamente a experiência de quem usa leitor de telas. O leitor iria verbalizar algo como: **botão X**.

> Mas afinal o que seria o botão X?


Além disso, esse inocente botão fere as diretrizes da WCAG 2.1: 

* [2.5.3 - Rótulo no Nome acessível [A]](https://www.w3.org/WAI/WCAG21/Understanding/label-in-name); 
* **3.3.2**.

A 2.5.3 nos diz:

> Rótulos em botões, ícones acionáveis ou qualquer controle interativo, devem ter uma descrição significativa tanto para quem vê, quanto para quem apenas ouve a informação.

Para resolver podemos adicioanr um **aria-label**, pois quero informar somente ao leitor de tela que a função do botão seria de "Fechar a tela".

```html
<button aria-label="Fechar">X</button>
```

## 2. Cobrir áreas não mapeadas

É bem comum desenvolvermos um componente é esquecermos algumas ações, como por exemplo: 

* teclas de atalho para acionar o componente;
* fallback via teclado do componente;
* navegação via teclado.

Esses itens diversas vezes são ignorados pelos desenvolvedores, costumo chamar isso de programação orientada a mouse, onde o dev desenvolve a funcionalidade ignorando completamente o uso somente do teclado. 

## 3. Adoção de boas

O leitor de telas é amigo íntimo de um HTML bem escrita, utilizar ele irá melhorar seu código consequentemente. 

Lembre-se ele verbaliza o que está escrito no seu HTML.

## 4. Feedback em tempo real

Para mim essa é uma das melhores coisas nos leitores, a capacidade de identificar feedbacks. 

Uma vez que mensagens de aviso, erro e/ou são escritas de forma correta elas são avisadas pelo leitor com ordem de prioridade.

## 5. A experiência do usuário final

### Pode parecer bobagem?

Imagine você preenchendo um formulário com 30 campos ao todo. A regra de negócio definida foi: 
a validação dos campos é feita no momento de envio.

Se o HTML não foi escrito corretamente pensando nisso, o leitor de telas simplesmente não vai identifcar os campos que estão com erro e como corrigi-los, forçando assim, o usuário a preencher novamente. 

Uma péssima experiência não é mesmo?