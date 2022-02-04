---
layout: layouts/post.njk
title: 5 motivos para testar acessibilidade com leitor de telas
metaTitle: 5 motivos para testar acessibilidade com leitor de telas
metaDesc: Aprenda 5 motivos principais para testar acessibilidade com leitor de telas
date: 2022-02-04T12:23:57.788Z
tags:
  - leitor-de-telas
---
# 5 motivos para testar acessibilidade com um leitor de telas

Assim como o eslint é uma ferramenta de checagem estática de um arquivo Javascript, o leitor de telas é algo similar para pessoas com deficiência que utilizam tal tecnologia assistiva. 

Esse artigo irá te dar 5 motivos para testar com um leitor de telas
Vamos lá?

## Porque devo testar com um leitor de telas?

Essa pergunta é extremamente pertinente e válida. Leitores de telas, são tecnologias que visam facilitar a vida de pessoas com deficiência. 

chamada pro CTA
Escrevi um artigo contendo detalhes sobre a forma de navegacao, dos leitores disponiveis

## 1. Prevenir bugs de acessibilidade

Quem nunca pegou um bug de acessibilidade chatinho para resolver, não é mesmo? Na grande parte, são bugs bobos que viram uma bola de neve. 

Um exemplo que encontro no meu cotidiano são botões sem rótulo. Por padrão cada botão da tela ter duas informações extremamente importantes: **rótulo** e **semântica** adequada. 

No exempo a seguir vou simular um botão sem o rótulo adequado 

```html
<button>X</button>
```

Nesse exemplo, o leitor de telas iria ler algo como "Botão X", mas afinal o que seria botão X? 

Além disso, quebra as duas diretrizes da WCAG **2.5.3** e **3.3.2**.

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