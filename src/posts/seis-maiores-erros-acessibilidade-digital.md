---
title: "6 maiores erros de acessibilidade digital"
date: "2020-09-02"
categories: 
  - "a11y"
---

A acessibilidade digital é o assunto do momento, a pandemia evidenciou bastante, nesse post eu trato sobre alguns erros que são bem comuns no mundo digital.

Sumário

- [Texto com baixo contraste](#texto-com-baixo-contraste)
- [Imagens sem texto alternativo](#imagens-sem-texto-alternativo)
- [Links vazios](#links-vazios)
- [Labels de formulários ausentes](#labels-de-formulários-ausentes)
- [Botões vazios](#botões-vazios)
- [Documentos HTML sem definição de linguagem](#documentos-html-sem-definição-de-linguagem)
- [Conclusão](#conclusão)
- [Referências](#referências)

## Texto com baixo contraste

Diariamente sofro na pele com isso, para quem não me acompanha ou está chegando por agora no blog, eu possuo [ceratocone](https://drauziovarella.uol.com.br/doencas-e-sintomas/ceratocone/#:~:text=Ceratocone%20%C3%A9%20uma%20enfermidade%20n%C3%A3o,a%20frente%20do%20globo%20ocular.),uma doença na córnea que aumenta o grau exponencialmente. Algumas combinações de cores e informações ficam bastante confusas para mim.

Para amenizar esse problema eu adotei algumas práticas:

- dar zoom em textos com baixo contraste;
- mudo as cores dos textos para uma com maior contraste via Inspetor de elementos do navegador;
- usar tema escuro.

### Guia sobre contraste

Para aplicarmos as correções de maneira efetiva, devemos consultar as recomendações da WCAG. Abaixo as regras que se aplicam ao contraste:

- [1.4.3 - Contraste (mínimo) \[AA\] - WCAG 2.0](https://www.w3.org/WAI/WCAG21/Understanding/contrast-minimum) (em inglês);
- [1.4.6 - Contraste melhorado \[AAA\] - WCAG 2.0](https://www.w3.org/WAI/WCAG21/Understanding/contrast-enhanced) (em inglês);
- [1.4.11 - Contraste Não-Textual \[AA\] - WCAG 2.1](https://www.w3.org/WAI/WCAG21/Understanding/non-text-contrast) (em inglês);
- [2.3.1 - Três flashes ou abaixo do limite \[A\] - WCAG 2.0](https://www.w3.org/WAI/WCAG21/Understanding/three-flashes-or-below-threshold).

### Ferramentas para verificação

Após compreendermos as regras relacionadas ao constraste, devemos elencar ferramentas para corrigir o problema.

Atualmente estou usando o [Accessible Colors](https://accessible-colors.com/) gosto dele pela simplicidade, provavelmente escreverei sobre ele.

Para exemplificar, imagine que você foi contratado para validar o contraste do menu de um site. Você iria inspecionar a cor usada no background do menu e as cores decada item de menu, usando o Acessible Colors, o resultado será semelhante a:

![](/images/accessible-colors.png)

Resultado de uma avalição das cores: #ccc para textos do tamanho de fonte 16px e background do site #fff

Tendo o resultado em mãos, você pode reportar as inconsistências. Essa correções são feitas alterando as CSS, e com poucas linhas de código o problema é sanado.

Você pode encontrar uma lista delas no [Awesome A11y](https://github.com/brunopulis/awesome-a11y/blob/master/topics/validators.md#colors-and-contrast). 🔥

* * *

## Imagens sem texto alternativo

![Imagem quebrada](https://brunopulis.com/wp-content/uploads/2021/02/noimage.webp)

Segundo uma pesquisa do [Web AIM](https://webaim.org/projects/million/#wcag), em uma amostragem de **1 milhão** de páginas iniciais dos sites mais populares do mundo. Foram encontradas **38,426,701** imagens, ou **38.4%** por página inicial em média.

Cerca de **31.3%** de todas as páginas iniciais (12 por página em média) **não possuiam texto alternativo** (sem contar o `alt=""`) que é uma forma válida. **Mais da metade das imagens sem texto alternativo**.

![Fundo degradê roxo com um homem negro vestindo um terno cinza e blusa salmão, colocando as mãos na cabeça se sentindo surpreso. Escrito em branco ao centro 'Oh, lord, Jesus. What!?'](/images/giphy.gif)

* * *

Existe uma grande discussão ao redor do atributo `alt`, Reinaldo Ferraz escreveu [um artigo](http://reinaldoferraz.com.br/explorando-o-atributo-alt/), onde demonstra os benefícios do atributo. Além de contribuir para a **acessibilidade** ele também ajuda no **SEO** das páginas.

De forma prática a correção desse erro é uma das mais **banais**, basta preencher o atributo `alt` com a descrição correta da imagem.

Ex:

```
<img src="/imagens/duck.png" alt="Pato de borracha amarelo olhando fixamente" />
```

🔥 Consulte o artigo: [Texto alternativo: o guia definitivo](/texto-alternativo-o-guia-definitivo)

* * *

## Links vazios

Links vazios, são um dos maiores erros que já encontrei em avaliações de acessibilidade. Frequentemente me deparo com ele, geralmente ocorrem quando precisamos incluir um **ícone**, em uma página.

Para entendermos isso, vamos consultar a definição do propósito do elemento `<a>`:

> O elemento `<a>` em HTML (ou elemento âncora), com o atributo href cria-se um hiperligação nas páginas web, arquivos, endereços de emails, ligações na mesma página ou endereços na URL. O conteúdo dentro de cada `<a>` **precisará indicar o destino do link**.

Além de descumprir com a especificação do HTML, descumpre também a recomendação [2.4.4 - Finalidade do link (em contexto) \[A\] - WCAG 2.0 (em inglês)](https://www.w3.org/TR/WCAG21/#link-purpose-in-context).

### Exemplo prático

Existem duas soluções que podemos aplicar, quando preciso usar um ícone e somente ele ser exibido, posso usar essa abordagem:

```
<a href="https://twitter.com/obrunopulis">
  <i class="fa fa-twitter"></i>
</a>
```

Qualquer validador de acessibilidade que se deparar com esse elemento, encontrará uma inconsistência, pois ele informa um elemento `<a>` sem um conteúdo textual, descumprindo com o propósito de uso dele. Sem nenhum texto isso fica confuso para usuários de leitores de tela.

Nesse exemplo especifíco, um leitor de tela poderia ler o link da da URL ou o conteúdo do pseudo elemento `:before` que seria `f002`. f002 não quer dizer pesquisa ou nenhuma outra informação. não é mesmo?

Uma abordagem seria adicionar o texto visualmente ao lado dos ícones, pois eles nem sempre são tão claros para os usuários quanto pensamos. No caso dos ícones sociais, acho que é bastante claro o que são e o padrão é usado com bastante frequência. Nesse caso, você pode adicionar conteúdo visualmente oculto.

### Corrigindo

Queremos adicionar texto para ser lido por um leitor de tela e ter certeza de que o conteúdo adicionado via css não seja lido.

```
<a href="https://twitter.com/obrunopulis">
  <span class="fa fa-twitter" aria-hidden="true"></span>
  <span class="sr-only">Perfil de Bruno Pulis no twitter</span>
</a>
```

Com essa abordagem os validadores de acessibilidade não encontrarão nenhum problema, pois o link contém um texto oculto que informa o seu destino.

### Observação importante

Nem sempre ter um conteúdo oculto é uma boa solução. É preciso haver uma compreensão visual de qual é o conteúdo e os links para usuários videntes, bem como para usuários de leitores de tela.

🔥 Aprenda a usar o [Font Awesome do jeito certo](/drops/font-awesome-semantico/)

* * *

## Labels de formulários ausentes

55% dos 4,2 milhões de formulário identificados na pesquisa do WebAIM, não estavam usando o elemento `<label>` ou `aria-label` ou `aria-labelledby`.  
Páginas com pelo menos um controle de formulário sem rótulo tiveram em média mais 43 erros detectáveis do que páginas sem nenhum erro de rótulo.

É preocupante a má da escrita do HTML na web, a grande maioria dos sites possíveis erros básicos de marcação.

Formulários são um dos componentes mais importantes para web, podemos dizer que depois do elemento `<a>` esse componente é o mais importante. Com essas violações também  
ferem a recomendação [3.3.2 - Rótulos e instruções \[A\] - WCAG 2.0 - (em inglês)](https://www.w3.org/WAI/WCAG21/Understanding/labels-or-instructions).

Uma das coisas que percebo muito com formulários é o uso inadequado do placeholder, a maioria dos designers e desenvolvedores utilizam o atributo `placeholder` com a função de um `<label>`.

### Exemplo incorreto

```
<form>
  <input type="email" placeholder="insira o seu melhor e-mail" />
</form>
```

O atributo `placeholder` é uma string que fornece uma breve dica ao usuário quanto ao tipo de informação esperado no campo. Deve ser uma palavra ou frase curta que demonstre o tipo de dados esperado, ao invés de uma mensagem explicativa.

Nota: O atributo placeholder não é semanticamente útil como outras maneiras de explicar seu formulário e pode causar problemas técnicos inesperados com seu conteúdo.

> Vale lembrar, para rotular um formulário o elemento correto para ser usado é o `label`

### Exemplo correto

```
<form>
  <label for="email">E-mail</label>
  <input type="email" id="email" placeholder="insira o seu melhor e-mail" />
</form>
```

## Botões vazios

Semelhantemente com os links vazios, os botões vazios querem dizer que o elemento não possuí uma informação textual definida. Quando navegamos no botão, um texto descritivo deve ser apresentado ao leitor de tela para indicar qual tipo de função que o botão possuí.

Além disso, essa violação fere duas recomendações da WCAG:

- [1.3.3 - Características sensoriais \[A\] - WCAG 2.0 (em inglês)](https://www.w3.org/WAI/WCAG21/Understanding/sensory-characteristics);
- [2.5.3 - Rótulo no nome acessível \[A\] - WCAG 2.1 (em inglês)](https://www.w3.org/WAI/WCAG21/Understanding/label-in-name)

O exemplo a seguir, demonstra o problema de um botão sem informação textual.

```
<button type="submit">
  <svg id="search" viewBox="0 0 16 16.9">
    <path d="M16, 15.7L11.3,11C12.4,9.8,13, 8.2,13,6.5C13"></path>
  </svg>
</button>
```

Qualquer validador de acessibilidade notificará a inconsistência da violação das guidelines citadas acima, Para eles não existe um conteúdo textual definido, uma abordagem para correção seria inserir o elemento `<title>` no SVG, pois ele garante que SVGs sejam acessíveis. Scott O'Hara escreveu um artigo [imagens acessíveis e SVGS (em inglês)](https://www.scottohara.me/blog/2019/05/22/contextual-images-svgs-and-a11y.html).

```
<button type="submit">
  <svg
    id="search"
    role="img"
    aria-describedby="searchIcon"
    viewBox="0 0 16 16.9"
  >
    <title id="searchIcon">Search</title>
    <path d="M16, 15.7L11.3,11C12.4,9.8,13, 8.2,13,6.5C13"></path>
  </svg>
</button>
```

## Documentos HTML sem definição de linguagem

A linguagem do documento HTML na maioria das vezes é ignorada ou esquecida. Já fiz diversas avaliações em sites com conteúdos totalmente em português e a definição do idioma em inglês.

Usuários de leitores de tela, utilizam um sintetizador de voz embutido nos softwares para ler o conteúdo. Uma das primeiras coisas que o sintetizador de voz faz ao navegar em uma página é procurar a definição do idioma daquele documento HTML, quando isso acontece ele configurará a **entonação**, **ritmo** e **sotaque** da língua definida no documento. Caso não encontre uma definição ele utiliza o inglês como padrão.

Além dessa confusão linguística, ele descumpre a recomendação [3.1.1 - Idioma da página \[A\]- WCAG 2.0 (em inglês)](https://www.w3.org/WAI/WCAG21/Understanding/language-of-page)

### Corrigindo

```
<!DOCTYPE html>
<html lang="pt-br">
  ...
</html>
```

Para descobrir mais sobre o atributo lang, acesse: [explorando o atributo lang](/atributo-lang-pequeno-mas-poderoso).

## Conclusão

Bom se fosse chegou até aqui parabéns! Concluímos a maratona dos seis maiores erros de acessibilidade digital. Vimos detalhamente cada erro e quais recomendações eles ferem, também possíveis soluções para cada um.

A conclusão que chego é que existe um défict enorme sobre os padrões web na comunidade de desenvolvedores. A maioria dos problemas de acessibilidade são problemas estruturais e educacionais.

Reciclar nosso conhecimento sobre os fundamentos é sempre importante, pois os frameworks da moda irão passar, mas os velhos amigos HTML, CSS e JavaScript estarão por ai.

E para reflexão gostaria de deixar uma frase do Tim Berners-Lee:

> O poder da Web está na sua universalidade. O acesso por todas as pessoas, não obstante a sua **incapacidade**, é um aspecto essencial.

O que podemos fazer para mudar essa situação? Deixe sua sugestão do que podemos fazer para construirmos uma web acessível para todas as pessoas.

## Referências

- [Guia WCAG](https://guia-wcag.com/)
- [Pesquisa do WebAIM](https://webaim.org/projects/million/#errors)
- [Accessible Colors](https://accessible-colors.com/)
- [Empty link example](https://blog.pope.tech/2020/03/13/empty-link-example/)
- [Documentação do elementro A](https://developer.mozilla.org/pt-BR/docs/Web/HTML/Element/a)
- [Documentação do atributo placeholder](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input#attr-placeholder)
- [Explorando o atributo alt](http://reinaldoferraz.com.br/explorando-o-atributo-alt/)
