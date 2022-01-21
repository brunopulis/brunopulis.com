---
title: "Criando botões acessíveis"
date: "2017-02-10"
categories: 
  - "a11y"
---

## Introdução

Botões e links são uma das estruturas mais básicas de páginas web. Uma de suas funções é a **conversão de leads**. que contribuem para o tráfego na web.

Porém, a maioria deles estão marcados incorretamente. Neste artigo, vou mostrar os **pontos positivos** e **negativos** e como realizar as correções necessárias.

Vamos lá?

## Contexto

Em uma pesquisa rápida no Google, você pode encontrar um número muito grande de resultados com as frases: clique aqui, saiba mais, leia mais.

### O problema

Os links "clique aqui", "saiba mais" e etc, possuem algumas barreiras de acessibilidade como:

- não informam o contexto da ação;
- não exibem a finalidade clara para o link.

Um exemplo simples dessa situação seria:

```
<div class=”card-action”>
  <a href=”#”>Leia mais</a>
</div>
```

Pessoas que utilizam uma tecnologia assistiva, como um leitor de telas ficaria perdida pois os botões de “Leia mais” não tem em seu contexto ou nenhuma informação.

Geralmente usuários de leitores de tela, podem navegar em uma página com os seguintes atalhos:

- através de cabeçalhos (h1,h2..h6);
- através de links;
- através da tecla TAB.

Ao chegar em um link de “Leia mais” o usuário não saberá porque ele deve clicar, e qual a finalidade daquele link.

## Possível solução

Uma possível solução seria incluir uma tag span e colocar uma classe para ocultar a informação, sendo assim, ela ficará disponível somente para quem não pode enxergar.

O exemplo abaixo mostra de forma clara como fazer.

### Marcação HTML

```
<div class="”card-action”">
  <a href="”#”" role="button">
    Leia mais
    <span class="”sr-only”">sobre Galo na libertadores</span>
  </a>
</div>

<button>
  Leia mais
  <span class="sr-only">sobre o Galo na libertadores</span>
</button>
```

### CSS

```
.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0,0,0,0);
  border: 0;
}
```

## Conclusão

Construir botões acessíveis é de suma importância para todas as pessoas terem acesso as informações e como vimos é uma técnica muito simples.

A partir de hoje superamos mais uma barreira e poderemos fazer botões mais acessíveis para todos.

Gostou? Me conta se você conhecia essa técnica.
