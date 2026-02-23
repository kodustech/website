# Tutorial: Subir o site Kodus no WordPress

> Guia completo e detalhado. Segue passo a passo na ordem.

---

## Visão geral

O site tem **8 páginas HTML estáticas** + CSS + JS que precisam virar templates PHP dentro de um child theme do WordPress. O blog continua sendo gerenciado pelo Elementor.

### Inventário do que temos hoje

| Arquivo HTML | Página | Slug no WP | Body class |
|---|---|---|---|
| `index.html` | Home | `/` | _(nenhuma)_ |
| `pricing.html` | Pricing | `/pricing/` | _(nenhuma)_ |
| `customers.html` | Customers | `/customers/` | `customers-page` |
| `roi.html` | ROI Calculator | `/roi-with-kodus/` | `roi-page` |
| `benchmark.html` | AI Benchmark | `/benchmark-ai-code-review/` | `benchmark-page` |
| `case-brendi.html` | Case Brendi | `/case-brendi/` | `benchmark-page` |
| `case-lerian.html` | Case Lerian | `/case-lerian/` | `benchmark-page` |
| `case-notificacoes.html` | Case Notificações | `/case-notificacoes/` | `benchmark-page` |

### Assets compartilhados

| Tipo | Arquivo original | Destino no child theme |
|---|---|---|
| CSS | `styles.css` (247KB) | `assets/css/kodus-retro.css` |
| JS | `script.js` (45KB) | `assets/js/kodus-retro.js` |
| Imagens | `assets/img/*` (~100 arquivos) | `assets/img/*` |
| Vídeos | `assets/img/*.webm` (3 arquivos) | `assets/img/*.webm` |

### Google Fonts usadas (todas as páginas)

```
JetBrains Mono: 400, 500, 600, 700, 800
Inter: 400, 500, 600, 700
Press Start 2P: 400
```

---

## PARTE 1 — Preparar os arquivos localmente

### 1.1 Criar a estrutura do child theme

No seu computador, crie esta estrutura de pasta:

```
kodus-child/
├── style.css                       ← declaração do child theme (NÃO é o CSS do site)
├── functions.php                   ← carrega assets, remove Elementor nas páginas custom
├── screenshot.png                  ← opcional, 1200x900px, aparece no painel WP
│
├── page-home.php                   ← Template: Kodus Home          (index.html)
├── page-pricing.php                ← Template: Kodus Pricing       (pricing.html)
├── page-customers.php              ← Template: Kodus Customers     (customers.html)
├── page-roi.php                    ← Template: Kodus ROI           (roi.html)
├── page-benchmark.php              ← Template: Kodus Benchmark     (benchmark.html)
├── page-case-brendi.php            ← Template: Kodus Case Brendi   (case-brendi.html)
├── page-case-lerian.php            ← Template: Kodus Case Lerian   (case-lerian.html)
├── page-case-notificacoes.php      ← Template: Kodus Case Notif.   (case-notificacoes.html)
│
└── assets/
    ├── css/
    │   └── kodus-retro.css         ← copiar styles.css pra cá (renomear)
    ├── js/
    │   └── kodus-retro.js          ← copiar script.js pra cá (renomear)
    └── img/
        ├── kodus_dark.png
        ├── castle.png
        ├── kody-guard.png
        ├── kody-box.png
        ├── cockpit.png
        ├── kilo.png
        ├── copilot.png
        ├── cursor.png
        ├── claude.png
        ├── openai.png
        ├── cline.png
        ├── kody-poeta.png
        ├── kody-money.png
        ├── kody-good-vibes.png
        ├── kody-noise.png
        ├── kody-paws.png
        ├── plaquinha.png
        ├── coracao.png
        ├── coin.png
        ├── crown.png
        ├── lock.png
        ├── gear.png
        ├── cloud.png
        ├── pilar.png
        ├── kody-community.png
        ├── kody-community2.png
        ├── kody-enterprise.png
        ├── kody-config.png
        ├── kody-love.png
        ├── kody-mage.png
        ├── kody-montanha.png
        ├── kody-ninja.png
        ├── kody-painel.png
        ├── kody-porta.png
        ├── kody-queen.png
        ├── kody-review.png
        ├── kody-rocket.png
        ├── kody-security.png
        ├── kody-space.png
        ├── kody-space-cadet.png
        ├── kody-taxa.png
        ├── kody-team.png
        ├── kody-1.png / kody-2.png / kody-3.png
        ├── kody key .png
        ├── bug.svg
        ├── github.png / github.svg
        ├── discord.png / discord.svg
        ├── linkedin.png
        ├── meta.png
        ├── anthropic.png
        ├── claude-ai.png
        ├── open-ai.png
        ├── gemini.png
        ├── deepsek.png
        ├── glm.png
        ├── grok.png
        ├── r10.png
        ├── File 1.png ... File 8.png
        ├── context.webm              ← vídeo
        ├── issues.webm               ← vídeo
        ├── plugins.webm              ← vídeo
        ├── tool1.png ... tool8.png   ← se existirem
        └── logos_new/
            ├── brendi.png / brendi1.png / brendi_v2.png
            ├── lerian.png / lerian1.png / lerian_v2.png
            ├── notificacoes.png / notifica1.png / not.png
            ├── purple_metrics.png
            ├── r10.png
            ├── cred.png
            ├── doji.png
            ├── ikatec.png
            ├── maino.png
            ├── vixt.png
            └── frame_7.png ... frame_19.png
```

### Comando pra copiar os assets automaticamente

Rode isso no terminal, estando na raiz do projeto (`/Users/gabrielmalinosqui/dev/kodus/website`):

```bash
# Criar estrutura
mkdir -p kodus-child/assets/css
mkdir -p kodus-child/assets/js
mkdir -p kodus-child/assets/img/logos_new

# Copiar CSS e JS (renomeando)
cp styles.css kodus-child/assets/css/kodus-retro.css
cp script.js kodus-child/assets/js/kodus-retro.js

# Copiar TODAS as imagens e vídeos
cp -R assets/img/* kodus-child/assets/img/

# Remover .DS_Store se existir
find kodus-child -name '.DS_Store' -delete
```

---

### 1.2 Criar o `style.css` (declaração do child theme)

Este arquivo **NÃO** contém o CSS do site. É apenas a declaração pro WordPress reconhecer o child theme.

Crie o arquivo `kodus-child/style.css`:

```css
/*
 Theme Name:   Kodus Child
 Theme URI:    https://kodus.io
 Description:  Child theme para o site Kodus (custom templates retro + Elementor blog)
 Author:       Kodus
 Author URI:   https://kodus.io
 Template:     hello-elementor
 Version:      1.0.0
 Text Domain:  kodus-child
*/
```

> **COMO DESCOBRIR O VALOR DE `Template`:**
> 1. Acesse `kodus.io/wp-admin`
> 2. Vá em **Aparência > Temas**
> 3. Veja qual tema está **ativo** (ex: "Hello Elementor")
> 4. Clique nele e veja o **nome da pasta** na URL: `...?theme=hello-elementor`
> 5. Esse é o valor que vai no `Template`
>
> Valores comuns:
> - Hello Elementor → `hello-elementor`
> - Astra → `astra`
> - GeneratePress → `generatepress`
> - OceanWP → `oceanwp`

---

### 1.3 Criar o `functions.php`

Crie o arquivo `kodus-child/functions.php`:

```php
<?php
/**
 * Kodus Child Theme — functions.php
 *
 * Responsável por:
 * 1. Carregar CSS do tema pai (necessário pro blog/Elementor)
 * 2. Carregar CSS/JS retro APENAS nas páginas com custom template
 * 3. Remover Elementor/tema pai nas páginas custom (evita conflito)
 * 4. Preconnect pra Google Fonts (performance)
 * 5. Injetar meta tags de SEO que estão hardcoded no HTML original
 */

// ═══════════════════════════════════════════════════════════════
// 1. CARREGAR CSS DO TEMA PAI (pro blog funcionar)
// ═══════════════════════════════════════════════════════════════
add_action('wp_enqueue_scripts', 'kodus_child_enqueue_parent', 10);
function kodus_child_enqueue_parent() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}

// ═══════════════════════════════════════════════════════════════
// 2. LISTA DE TODOS OS TEMPLATES RETRO
// ═══════════════════════════════════════════════════════════════
function kodus_get_retro_templates() {
    return [
        'page-home.php',
        'page-pricing.php',
        'page-customers.php',
        'page-roi.php',
        'page-benchmark.php',
        'page-case-brendi.php',
        'page-case-lerian.php',
        'page-case-notificacoes.php',
    ];
}

// ═══════════════════════════════════════════════════════════════
// 3. CARREGAR ASSETS RETRO NAS PÁGINAS CUSTOM
// ═══════════════════════════════════════════════════════════════
add_action('wp_enqueue_scripts', 'kodus_enqueue_retro_assets', 999);
function kodus_enqueue_retro_assets() {
    if (!is_page_template(kodus_get_retro_templates())) {
        return; // Não é página retro, sai fora
    }

    // ── Remover CSS/JS do Elementor (evita conflito com nosso CSS) ──
    wp_dequeue_style('elementor-frontend');
    wp_dequeue_style('elementor-common');
    wp_dequeue_style('elementor-global');
    wp_dequeue_style('elementor-icons');
    wp_dequeue_style('elementor-animations');
    wp_dequeue_style('elementor-pro');
    wp_dequeue_script('elementor-frontend');
    wp_dequeue_script('elementor-common');

    // ── Remover CSS do tema pai (nosso CSS já tem tudo) ──
    wp_dequeue_style('parent-style');
    wp_dequeue_style('hello-elementor');
    wp_dequeue_style('hello-elementor-theme-style');
    wp_dequeue_style('hello-elementor-header-footer');

    // ── Carregar o CSS retro ──
    wp_enqueue_style(
        'kodus-retro',
        get_stylesheet_directory_uri() . '/assets/css/kodus-retro.css',
        [],
        filemtime(get_stylesheet_directory() . '/assets/css/kodus-retro.css')
    );

    // ── Carregar o JS retro (no footer) ──
    wp_enqueue_script(
        'kodus-retro',
        get_stylesheet_directory_uri() . '/assets/js/kodus-retro.js',
        [],
        filemtime(get_stylesheet_directory() . '/assets/js/kodus-retro.js'),
        true
    );

    // ── Google Fonts ──
    wp_enqueue_style(
        'kodus-fonts',
        'https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700&family=Press+Start+2P&display=swap',
        [],
        null
    );
}

// ═══════════════════════════════════════════════════════════════
// 4. PRECONNECT GOOGLE FONTS (performance)
// ═══════════════════════════════════════════════════════════════
add_action('wp_head', 'kodus_preconnect_fonts', 1);
function kodus_preconnect_fonts() {
    if (is_page_template(kodus_get_retro_templates())) {
        echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . "\n";
        echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";
    }
}

// ═══════════════════════════════════════════════════════════════
// 5. AUMENTAR LIMITE DE UPLOAD (se as imagens forem grandes)
// ═══════════════════════════════════════════════════════════════
add_filter('upload_size_limit', function() {
    return 50 * 1024 * 1024; // 50MB
});
```

**O que cada parte faz:**

| # | Função | Por quê |
|---|--------|---------|
| 1 | `kodus_child_enqueue_parent` | Carrega o CSS do Hello Elementor pro blog funcionar |
| 2 | `kodus_get_retro_templates` | Lista centralizada de todos os templates — fácil de manter |
| 3 | `kodus_enqueue_retro_assets` | Nas páginas retro: remove Elementor, carrega nosso CSS/JS |
| 4 | `kodus_preconnect_fonts` | Preconnect pro Google Fonts carregar mais rápido |
| 5 | `upload_size_limit` | Garante que imagens grandes podem ser subidas pelo WP |

> **NOTA SOBRE CACHE BUSTING:** Usamos `filemtime()` em vez de versão fixa.
> Isso faz com que, quando você atualizar o CSS/JS via FTP, o browser automaticamente
> baixe a versão nova (o WP adiciona `?ver=timestamp` na URL do asset).

---

### 1.4 Converter cada HTML para template PHP

Para **cada uma** das 8 páginas, você precisa converter o HTML para PHP. O processo é o mesmo para todas. Vou explicar uma vez em detalhe e depois listar o que muda em cada uma.

#### Estrutura base de todo template PHP

```php
<?php
/*
 * Template Name: [NOME QUE APARECE NO DROPDOWN DO WP]
 * Template Post Type: page
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO meta tags (do Yoast, injetados automaticamente) -->
    <?php wp_head(); ?>
</head>
<body <?php body_class('BODY-CLASS-AQUI'); ?>>
<?php wp_body_open(); ?>

    <!-- ═══ COLAR TODO O CONTEÚDO DO <body> DO HTML ORIGINAL AQUI ═══ -->

<?php wp_footer(); ?>
</body>
</html>
```

#### O que trocar no HTML (buscar e substituir)

Faça estes find-and-replace em **cada** arquivo:

| Buscar | Substituir por | Motivo |
|--------|---------------|--------|
| `src="assets/img/` | `src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/` | Caminhos de imagem |
| `src="assets/` | `src="<?php echo get_stylesheet_directory_uri(); ?>/assets/` | Caminhos de vídeo (.webm) |
| `href="index.html"` | `href="<?php echo home_url(); ?>"` | Link pro home |
| `href="pricing.html"` | `href="<?php echo home_url('/pricing/'); ?>"` | Link pro pricing |
| `href="customers.html"` | `href="<?php echo home_url('/customers/'); ?>"` | Link pro customers |
| `href="roi.html"` | `href="<?php echo home_url('/roi-with-kodus/'); ?>"` | Link pro ROI |
| `href="benchmark.html"` | `href="<?php echo home_url('/benchmark-ai-code-review/'); ?>"` | Link pro benchmark |
| `href="case-brendi.html"` | `href="<?php echo home_url('/case-brendi/'); ?>"` | Link pro case |
| `href="case-lerian.html"` | `href="<?php echo home_url('/case-lerian/'); ?>"` | Link pro case |
| `href="case-notificacoes.html"` | `href="<?php echo home_url('/case-notificacoes/'); ?>"` | Link pro case |

> **DICA:** No VS Code, abra a pasta `kodus-child/`, pressione `Cmd+Shift+H` (Find and Replace in Files) e faça todos os replaces de uma vez.

#### O que REMOVER do HTML original

Ao converter pra PHP, **remova** estas linhas de cada arquivo (o WordPress injeta via `wp_head()` e Yoast):

```html
<!-- REMOVER: As tags <meta> de SEO (Yoast cuida disso) -->
<meta name="description" content="...">
<meta name="keywords" content="...">
<meta property="og:..." content="...">
<meta name="twitter:..." content="...">
<link rel="canonical" href="...">
<script type="application/ld+json">...</script>

<!-- REMOVER: O carregamento do CSS/JS (functions.php cuida disso) -->
<link rel="stylesheet" href="styles.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=..." rel="stylesheet">
<script src="script.js"></script>

<!-- REMOVER: Tag <title> (Yoast gera automaticamente) -->
<title>...</title>
```

#### O que ADICIONAR

```html
<!-- ADICIONAR: No lugar de tudo que removeu no <head> -->
<?php wp_head(); ?>

<!-- ADICIONAR: Logo depois do <body> -->
<?php wp_body_open(); ?>

<!-- ADICIONAR: Logo antes do </body> -->
<?php wp_footer(); ?>
```

---

### 1.5 Detalhes específicos de cada template

#### `page-home.php` — Home (index.html)

```php
<?php
/*
 * Template Name: Kodus Home
 * Template Post Type: page
 */
?>
```

- Body class: nenhuma extra → `<?php body_class(); ?>`
- Tem SVG sprite `#bug-shape` no início do body → **manter**
- Tem preload de imagens no `<head>` → **manter** (colocar antes do `wp_head()`)
- Tem a seção hero com tabs Git/Terminal
- Tem carrossel VCR (4 slides)
- Tem sistema Basics com 7 features e vídeos `.webm`
- Tem FAQ accordion
- Tem cartridge modals (4 modais)
- Tem bug parallax

Preloads para manter no `<head>` (antes do `wp_head()`):
```html
<link rel="preload" as="image" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/castle.png">
<link rel="preload" as="image" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kody-guard.png">
<link rel="preload" as="image" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kody-box.png">
<link rel="preload" as="image" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/cockpit.png">
<link rel="preload" as="image" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kilo.png">
```

#### `page-pricing.php` — Pricing (pricing.html)

```php
<?php
/*
 * Template Name: Kodus Pricing
 * Template Post Type: page
 */
?>
```

- Body class: nenhuma extra → `<?php body_class(); ?>`
- Tem pricing toggle (Monthly/Annual)
- Tem pricing calculator (5 modelos LLM com sliders)
- Tem modais de cartridge
- Tem botões com Cal.com modal → os links `data-cal-link` devem ser mantidos exatamente como estão

#### `page-customers.php` — Customers (customers.html)

```php
<?php
/*
 * Template Name: Kodus Customers
 * Template Post Type: page
 */
?>
```

- Body class: `customers-page` → `<?php body_class('customers-page'); ?>`
- Tem pixel world map (gera SVG dinâmico via JS)
- Tem logos de clientes
- Tem links pros cases

#### `page-roi.php` — ROI Calculator (roi.html)

```php
<?php
/*
 * Template Name: Kodus ROI
 * Template Post Type: page
 */
?>
```

- Body class: `roi-page` → `<?php body_class('roi-page'); ?>`
- Tem ROI calculator (3 sliders: Devs, Hourly Rate, Time per Review)
- Tem Dossier Station (3 case studies com tabs)
- Links dos cases apontam pras páginas de case → trocar pra `home_url()`

#### `page-benchmark.php` — AI Code Review Benchmark (benchmark.html)

```php
<?php
/*
 * Template Name: Kodus Benchmark
 * Template Post Type: page
 */
?>
```

- Body class: `benchmark-page` → `<?php body_class('benchmark-page'); ?>`
- Tabela de comparação de ferramentas de AI code review

#### `page-case-brendi.php` — Case Study Brendi (case-brendi.html)

```php
<?php
/*
 * Template Name: Kodus Case Brendi
 * Template Post Type: page
 */
?>
```

- Body class: `benchmark-page` → `<?php body_class('benchmark-page'); ?>`
- Dados do case: 70% redução de tempo em code review

#### `page-case-lerian.php` — Case Study Lerian (case-lerian.html)

```php
<?php
/*
 * Template Name: Kodus Case Lerian
 * Template Post Type: page
 */
?>
```

- Body class: `benchmark-page` → `<?php body_class('benchmark-page'); ?>`
- Dados do case: 60% redução de tempo em code review

#### `page-case-notificacoes.php` — Case Study Notificações (case-notificacoes.html)

```php
<?php
/*
 * Template Name: Kodus Case Notificações
 * Template Post Type: page
 */
?>
```

- Body class: `benchmark-page` → `<?php body_class('benchmark-page'); ?>`
- Dados do case: consistência e confiabilidade

---

### 1.6 Ajuste no `script.js` antes de copiar

O `script.js` usa `DOMContentLoaded` e é vanilla JS — funciona sem alterações no WordPress.

**Único cuidado:** se o JS tiver referências a caminhos relativos de imagem (raro, mas verifique). No caso do Kodus, as referências de imagem estão todas no HTML, não no JS, então **não precisa alterar nada**.

Funcionalidades que continuam funcionando automaticamente:
- GitHub Stars (fetch da API) ✓
- Mobile hamburger menu ✓
- Hero tabs (Git/Terminal) ✓
- Copy terminal command ✓
- VCR Carousel (4 slides, auto-rotate) ✓
- Bug parallax ✓
- Header scroll effect ✓
- Intersection Observer fade-in ✓
- Chat case study scroll reveal ✓
- VHS shelf carousel ✓
- Basics feature tabs (7 features) ✓
- FAQ accordion ✓
- Cartridge modals ✓
- Pricing toggle (Monthly/Annual) ✓
- Pricing calculator (5 LLMs) ✓
- ROI calculator (3 sliders) ✓
- Dossier station (case tabs) ✓
- Pixel world map (Customers) ✓

---

## PARTE 2 — Subir pro WordPress

### 2.1 Criar o ZIP

```bash
cd /Users/gabrielmalinosqui/dev/kodus/website

# Se ainda não criou a pasta kodus-child, rode os comandos do passo 1.1

# Criar o ZIP
zip -r kodus-child.zip kodus-child/ -x "*.DS_Store"
```

> O ZIP vai ficar grande (~50MB+) por causa das imagens e vídeos.
> Se der problema de upload, veja a seção "Troubleshooting" no final.

### 2.2 Verificar o tema pai

**ANTES de instalar o child theme**, confirme que o tema pai existe:

1. Acesse `https://kodus.io/wp-admin`
2. Vá em **Aparência > Temas**
3. Verifique se **Hello Elementor** (ou o tema que vocês usam) está na lista
4. Se não estiver → clique **"Adicionar novo"** → busque "Hello Elementor" → **Instale**
5. **NÃO precisa ativar** o tema pai — só precisa estar instalado

### 2.3 Instalar o child theme

1. Vá em **Aparência > Temas**
2. Clique **"Adicionar novo"** (botão no topo)
3. Clique **"Enviar tema"** (botão no topo)
4. Clique **"Escolher arquivo"** → selecione `kodus-child.zip`
5. Clique **"Instalar agora"**
6. Aguarde o upload e instalação
7. **NÃO clique em "Ativar" ainda**

### 2.4 Verificar instalação

Antes de ativar, confirme:

1. Vá em **Aparência > Temas**
2. Passe o mouse sobre **"Kodus Child"**
3. Clique em **"Detalhes do tema"**
4. Verifique:
   - Nome: Kodus Child
   - Versão: 1.0.0
   - Tema pai: Hello Elementor (ou o que você configurou)
   - Se aparecer "tema pai quebrado" → o valor de `Template` no `style.css` está errado

### 2.5 Ativar o child theme

1. Vá em **Aparência > Temas**
2. Passe o mouse sobre **"Kodus Child"**
3. Clique **"Ativar"**

> **O que acontece quando ativa:**
> - As páginas de blog continuam funcionando (Elementor + tema pai)
> - As páginas custom ainda não existem (precisamos criá-las no passo seguinte)
> - O site pode ficar "estranho" temporariamente — é normal

---

## PARTE 3 — Criar as 8 páginas no WordPress

### Processo para CADA página

Repita este processo para cada uma das 8 páginas:

#### 3.1 Página: Home

1. Vá em **Páginas > Adicionar nova**
2. **Título:** `Home`
3. No painel direito → seção **"Template"** (ou "Atributos da Página")
   - Se não aparecer, clique no ícone de engrenagem (⚙) no canto superior direito
   - Procure em "Modelo de página" ou "Page Template"
4. Selecione **"Kodus Home"** no dropdown
5. O corpo do editor pode ficar **vazio** (o conteúdo vem do template PHP)
6. Em **"Slug"** (no painel direito, seção URL) → defina como `home`
7. Clique **"Publicar"**
8. Confirme clicando **"Publicar"** novamente

#### 3.2 Página: Pricing

1. **Páginas > Adicionar nova**
2. **Título:** `Pricing`
3. **Template:** `Kodus Pricing`
4. **Slug:** `pricing`
5. **Publicar**

#### 3.3 Página: Customers

1. **Páginas > Adicionar nova**
2. **Título:** `Customers`
3. **Template:** `Kodus Customers`
4. **Slug:** `customers`
5. **Publicar**

#### 3.4 Página: ROI Calculator

1. **Páginas > Adicionar nova**
2. **Título:** `ROI Calculator`
3. **Template:** `Kodus ROI`
4. **Slug:** `roi-with-kodus`
5. **Publicar**

#### 3.5 Página: AI Code Review Benchmark

1. **Páginas > Adicionar nova**
2. **Título:** `AI Code Review Benchmark`
3. **Template:** `Kodus Benchmark`
4. **Slug:** `benchmark-ai-code-review`
5. **Publicar**

#### 3.6 Página: Case Study Brendi

1. **Páginas > Adicionar nova**
2. **Título:** `Case Study: Brendi`
3. **Template:** `Kodus Case Brendi`
4. **Slug:** `case-brendi`
5. **Publicar**

#### 3.7 Página: Case Study Lerian

1. **Páginas > Adicionar nova**
2. **Título:** `Case Study: Lerian`
3. **Template:** `Kodus Case Lerian`
4. **Slug:** `case-lerian`
5. **Publicar**

#### 3.8 Página: Case Study Notificações

1. **Páginas > Adicionar nova**
2. **Título:** `Case Study: Notificações Inteligentes`
3. **Template:** `Kodus Case Notificações`
4. **Slug:** `case-notificacoes`
5. **Publicar**

---

### 3.9 Definir a Home como página inicial

1. Vá em **Configurações > Leitura**
2. Em "Sua página inicial exibe" → selecione **"Uma página estática"**
3. **Página inicial:** selecione `Home`
4. **Página de posts:** selecione `Blog` (se não existir, crie uma página chamada "Blog" com template Default)
5. Clique **"Salvar alterações"**

### 3.10 Configurar permalinks (URLs bonitas)

1. Vá em **Configurações > Links Permanentes**
2. Selecione **"Nome do post"** (que gera URLs tipo `/pricing/`, `/blog/meu-post/`)
3. Clique **"Salvar alterações"**

> Isso garante que os slugs que definimos vão funcionar como URLs limpas.

---

## PARTE 4 — Configurar SEO com Yoast

### 4.1 Instalar o Yoast SEO

1. **Plugins > Adicionar novo**
2. Busque **"Yoast SEO"**
3. Clique **"Instalar agora"** → depois **"Ativar"**
4. Ignore o wizard de configuração inicial (ou siga se preferir)

### 4.2 Configurar SEO de cada página

Para cada página, vá em **Páginas > Todas as páginas** → clique na página → role até a seção do Yoast:

#### Home

| Campo | Valor |
|-------|-------|
| **SEO Title** | `Kodus — The Open Source Alternative to CodeRabbit` |
| **Meta Description** | `AI Code Review With Full Control Over Model Choice and Costs. Open source, model agnostic, zero markup.` |
| **Canonical URL** | `https://kodus.io/en/` |
| **OG Title** | `Kodus — The Open Source Alternative to CodeRabbit` |
| **OG Description** | `AI Code Review With Full Control Over Model Choice and Costs.` |
| **OG Image** | Upload imagem 1200x630px |

#### Pricing

| Campo | Valor |
|-------|-------|
| **SEO Title** | `Pricing — Kodus` |
| **Meta Description** | `Transparent pricing for AI code review. Pay only for the LLM you choose. Open source, zero markup on AI costs.` |
| **Canonical URL** | `https://kodus.io/en/pricing/` |

#### Customers

| Campo | Valor |
|-------|-------|
| **SEO Title** | `Customers — Kodus` |
| **Meta Description** | `See how engineering teams use Kodus AI Code Review to ship faster with fewer bugs.` |
| **Canonical URL** | `https://kodus.io/en/customers/` |

#### ROI Calculator

| Campo | Valor |
|-------|-------|
| **SEO Title** | `ROI Calculator — Kodus` |
| **Meta Description** | `Calculate how much time and money your team can save with AI-powered code review.` |
| **Canonical URL** | `https://kodus.io/en/roi-with-kodus/` |

#### AI Code Review Benchmark

| Campo | Valor |
|-------|-------|
| **SEO Title** | `AI Code Review Benchmark — Kodus` |
| **Meta Description** | `Independent benchmark evaluation of AI code review tools. Compare performance across real-world scenarios.` |
| **Canonical URL** | `https://kodus.io/en/benchmark-ai-code-review/` |

#### Case Study: Brendi

| Campo | Valor |
|-------|-------|
| **SEO Title** | `Case Study: Brendi — Kodus` |
| **Meta Description** | `How Brendi reduced code review time by 70% with Kodus AI Code Review.` |
| **Canonical URL** | `https://kodus.io/en/case-brendi/` |

#### Case Study: Lerian

| Campo | Valor |
|-------|-------|
| **SEO Title** | `Case Study: Lerian — Kodus` |
| **Meta Description** | `How Lerian reduced code review time by 60% with Kodus AI Code Review.` |
| **Canonical URL** | `https://kodus.io/en/case-lerian/` |

#### Case Study: Notificações

| Campo | Valor |
|-------|-------|
| **SEO Title** | `Case Study: Notificações Inteligentes — Kodus` |
| **Meta Description** | `How Notificações Inteligentes achieved consistency and reliability with Kodus AI Code Review.` |
| **Canonical URL** | `https://kodus.io/en/case-notificacoes/` |

### 4.3 Configurar título global

1. **Yoast SEO > Configurações de busca > Geral**
2. Formato padrão de título: `%%title%% — Kodus`
3. Em **Tipos de Conteúdo > Páginas** → confirme o formato

### 4.4 Schema.org / JSON-LD

O Yoast gera JSON-LD automaticamente. As tags `<script type="application/ld+json">` que estavam no HTML original podem ser **removidas** — o Yoast cria isso.

Se quiser Schema customizado (ex: `WebSite` com `potentialAction` de busca), use o filtro:

```php
// Adicionar no functions.php se precisar de Schema custom
add_filter('wpseo_schema_graph_pieces', function($pieces) {
    // Customize aqui se necessário
    return $pieces;
}, 10, 1);
```

### 4.5 Sitemap

O Yoast gera automaticamente. Verifique em:
```
https://kodus.io/sitemap_index.xml
```

Deve listar:
- `page-sitemap.xml` → com todas as 8 páginas
- `post-sitemap.xml` → com os posts do blog

---

## PARTE 5 — Configurar o Blog com Elementor

O blog continua funcionando com Elementor. Não precisa mudar nada se já estava funcionando.

### 5.1 Verificar que o blog funciona

1. Acesse `https://kodus.io/blog/`
2. Deve mostrar a listagem de posts
3. Clique em um post → deve abrir com o layout do Elementor

### 5.2 Se precisar criar templates do blog

Se o blog ainda não tem templates:

#### Template de listagem (Archive)
1. **Elementor > Theme Builder > Adicionar novo**
2. Tipo: **"Archive"**
3. Monte o layout (Posts widget, etc.)
4. Condição: **"Blog Archive"**
5. Publique

#### Template de post individual (Single)
1. **Elementor > Theme Builder > Adicionar novo**
2. Tipo: **"Single Post"**
3. Monte o layout (Post Title, Post Content, etc.)
4. Condição: **"All Posts"**
5. Publique

### 5.3 Header e Footer do blog

O blog usa o header/footer do Elementor (diferente do retro). Duas abordagens:

**Opção A (Recomendada):** Aceitar que o blog tem visual mais limpo. As marketing pages têm o estilo retro, o blog tem o estilo do Elementor. Muito comum em sites assim.

**Opção B:** Criar header/footer retro no Elementor Theme Builder que replique o visual. Mais trabalhoso.

---

## PARTE 6 — Upload e edição posterior (FTP/SFTP)

Depois de instalado, pra editar templates sem re-uplodar o ZIP toda vez:

### 6.1 Via SFTP (recomendado)

**Instalar FileZilla:**
1. Baixe em https://filezilla-project.org (versão Client, gratuita)
2. Instale

**Conectar no servidor:**

| Campo | Valor |
|-------|-------|
| Host | IP do droplet DigitalOcean (ex: `143.198.xxx.xxx`) |
| Protocolo | SFTP - SSH File Transfer Protocol |
| Porta | 22 |
| Tipo de login | Arquivo de chave (use sua chave SSH) ou Senha |
| Usuário | `root` (ou o user que vocês usam) |

**Navegar até os templates:**
```
/var/www/html/wp-content/themes/kodus-child/
```

Ou, dependendo da instalação:
```
/var/www/kodus.io/wp-content/themes/kodus-child/
```

**Editar um template:**
1. Navegue até o arquivo (ex: `page-pricing.php`)
2. Clique com botão direito → **"Ver/Editar"**
3. Abre no editor local → edite → salve
4. O FileZilla faz upload automático quando salva

**Substituir um arquivo:**
1. No painel esquerdo (local), navegue até o arquivo novo
2. Arraste pro painel direito (servidor)
3. Confirme substituição

### 6.2 Via WP File Manager (alternativa sem FTP)

1. **Plugins > Adicionar novo** → busque **"WP File Manager"**
2. Instale e ative
3. Vá em **WP File Manager** no menu lateral
4. Navegue até `wp-content/themes/kodus-child/`
5. Clique em qualquer arquivo → **"Code Editor"** pra editar direto
6. Ou use o botão **"Upload"** pra subir arquivos novos

> **SEGURANÇA:** Desative o plugin quando não estiver usando.
> Plugins de file manager são alvo de bots.

### 6.3 Via Editor de Temas do WP (emergência apenas)

1. **Aparência > Editor de Temas**
2. Selecione **"Kodus Child"** no dropdown de tema
3. Selecione o arquivo na lista lateral
4. Edite e clique **"Atualizar arquivo"**

> **NÃO RECOMENDADO:** sem versionamento, sem undo, erro de PHP = site quebrado.

---

## PARTE 7 — Plugins recomendados

### Obrigatórios

| Plugin | Pra quê |
|--------|---------|
| **Yoast SEO** | SEO, sitemap, meta tags, OG image |
| **LiteSpeed Cache** ou **WP Super Cache** | Cache de página (performance) |
| **UpdraftPlus** | Backup automático |

### Recomendados

| Plugin | Pra quê |
|--------|---------|
| **Wordfence** ou **Sucuri** | Segurança, firewall |
| **WP File Manager** | Editar arquivos sem FTP |
| **Redirection** | Gerenciar redirects 301 |
| **Google Site Kit** | Analytics + Search Console no WP |
| **Insert Headers and Footers** | GTM / scripts de tracking |

### Para Analytics / GTM

Se usam Google Tag Manager:

1. Instale **"Insert Headers and Footers"** (ou "WPCode")
2. Cole o snippet do GTM no campo "Header"
3. Cole o snippet `<noscript>` no campo "Body"

O `wp_head()` e `wp_body_open()` nos templates garantem que esses snippets aparecem em todas as páginas.

---

## PARTE 8 — Configurações finais

### 8.1 Favicon

1. **Aparência > Personalizar > Identidade do site**
2. **Ícone do site:** upload do favicon (512x512px, PNG)
3. Publique

### 8.2 SSL (HTTPS)

Se ainda não tem:

1. Conecte no servidor via SSH
2. Instale Certbot: `sudo apt install certbot python3-certbot-nginx` (ou apache)
3. Gere o certificado: `sudo certbot --nginx -d kodus.io -d www.kodus.io`
4. No WP: **Configurações > Geral** → mude ambas as URLs pra `https://`

### 8.3 Cache

1. Instale **LiteSpeed Cache** (se servidor LiteSpeed) ou **WP Super Cache**
2. Ative e use as configurações padrão
3. Teste acessando o site em aba anônima

### 8.4 Testar performance

1. Acesse https://pagespeed.web.dev
2. Cole `https://kodus.io`
3. Rode teste Mobile e Desktop
4. Alvo: 80+ no score de Performance

---

## PARTE 9 — Troubleshooting

### "Template não aparece no dropdown"

**Causa:** O comentário PHP no topo do arquivo está errado.

**Verificar:** Abra o arquivo PHP e confirme que tem exatamente:
```php
<?php
/*
 * Template Name: Nome Aqui
 * Template Post Type: page
 */
?>
```

> O `Template Name` é case-sensitive e precisa ter o asterisco `*` no comentário.

### "CSS/JS não carrega"

**Causa 1:** Caminho do asset errado.

Verifique se o arquivo existe no caminho:
```
wp-content/themes/kodus-child/assets/css/kodus-retro.css
wp-content/themes/kodus-child/assets/js/kodus-retro.js
```

**Causa 2:** Elementor ou tema pai estão sobrescrevendo.

Verifique se `kodus_enqueue_retro_assets` está rodando com prioridade 999.

**Debug:** Adicione temporariamente no `functions.php`:
```php
add_action('wp_footer', function() {
    echo '<!-- Template: ' . get_page_template_slug() . ' -->';
});
```

Abra o código-fonte da página no browser e procure por esse comentário pra ver qual template está ativo.

### "Imagens não carregam"

**Causa:** Caminho relativo em vez de absoluto.

**Verificar no código-fonte:** Ctrl+U no browser → procure por `src="assets/` → qualquer ocorrência que NÃO tenha `get_stylesheet_directory_uri()` precisa ser corrigida.

### "ZIP muito grande pro upload"

O WordPress tem limite padrão de 2MB pra upload.

**Solução 1:** Aumente via `.htaccess` (Apache):
```
php_value upload_max_filesize 64M
php_value post_max_size 64M
```

**Solução 2:** Aumente via `php.ini`:
```ini
upload_max_filesize = 64M
post_max_size = 64M
```

**Solução 3:** Suba via FTP/SFTP em vez de pelo painel WP.
```bash
# No servidor, extrair o ZIP
cd /var/www/html/wp-content/themes/
unzip kodus-child.zip
```

### "Site quebrou depois de ativar o child theme"

1. Conecte via FTP/SFTP
2. Navegue até `wp-content/themes/`
3. Renomeie a pasta `kodus-child` pra `kodus-child-BROKEN`
4. O WordPress volta pro tema padrão automaticamente
5. Corrija o problema e renomeie de volta

### "Elementor não funciona nas páginas custom"

**Isso é esperado.** As páginas custom (Home, Pricing, etc.) usam templates PHP puros — o Elementor é desativado nelas propositalmente pelo `functions.php`.

O Elementor só funciona nas páginas de **blog** (posts, archive, single post).

---

## PARTE 10 — Checklist final

### Antes de ir pro ar

- [ ] Hello Elementor (tema pai) instalado
- [ ] Kodus Child (child theme) ativado
- [ ] Todas as 8 páginas criadas com o template correto:
  - [ ] Home → Kodus Home
  - [ ] Pricing → Kodus Pricing
  - [ ] Customers → Kodus Customers
  - [ ] ROI Calculator → Kodus ROI
  - [ ] AI Code Review Benchmark → Kodus Benchmark
  - [ ] Case Study: Brendi → Kodus Case Brendi
  - [ ] Case Study: Lerian → Kodus Case Lerian
  - [ ] Case Study: Notificações → Kodus Case Notificações
- [ ] Configurações > Leitura → Home como página estática
- [ ] Configurações > Links Permanentes → "Nome do post"
- [ ] Yoast SEO configurado (title + description pra cada página)
- [ ] OG Image configurada pra cada página
- [ ] Sitemap funcionando → `/sitemap_index.xml`
- [ ] Imagens carregando corretamente em TODAS as páginas
- [ ] Vídeos .webm carregando (context.webm, issues.webm, plugins.webm)
- [ ] GitHub stars carregando via API
- [ ] Blog acessível em `/blog/`
- [ ] Links de navegação entre páginas funcionando
- [ ] Links internos (cases ↔ customers ↔ ROI) funcionando
- [ ] Cal.com modals funcionando nos CTAs de pricing
- [ ] Pricing calculator funcionando (slider + modelos LLM)
- [ ] ROI calculator funcionando (3 sliders)
- [ ] Mobile responsivo em todas as páginas
- [ ] Hamburger menu funcionando
- [ ] FAQ accordion funcionando
- [ ] Google Analytics / GTM instalado
- [ ] Favicon configurado
- [ ] SSL ativo (HTTPS)
- [ ] Cache plugin ativado
- [ ] Performance > 80 no PageSpeed Insights

### URLs para testar

```
https://kodus.io/                              ← Home
https://kodus.io/pricing/                      ← Pricing
https://kodus.io/customers/                    ← Customers
https://kodus.io/roi-with-kodus/               ← ROI Calculator
https://kodus.io/benchmark-ai-code-review/     ← Benchmark
https://kodus.io/case-brendi/                  ← Case Brendi
https://kodus.io/case-lerian/                  ← Case Lerian
https://kodus.io/case-notificacoes/            ← Case Notificações
https://kodus.io/blog/                         ← Blog (Elementor)
https://kodus.io/sitemap_index.xml             ← Sitemap
```

---

## Resumo da arquitetura

```
Requisição HTTP
       │
       ▼
   WordPress
       │
       ├── É página com custom template? (Home, Pricing, Customers, ROI, Benchmark, Cases)
       │   └── SIM → Renderiza page-*.php
       │            ├── Carrega kodus-retro.css + kodus-retro.js + Google Fonts
       │            ├── NÃO carrega Elementor CSS/JS (removido via wp_dequeue)
       │            ├── wp_head() → injeta Yoast SEO, Analytics, GTM
       │            └── wp_footer() → injeta scripts de tracking
       │
       └── É blog ou outra página?
           └── SIM → Renderiza via Elementor + tema pai (Hello Elementor)
                    ├── Carrega CSS/JS do Elementor normalmente
                    ├── NÃO carrega kodus-retro.css/js
                    └── wp_head() → injeta Yoast SEO, Analytics, GTM
```

### Mapa de templates

```
kodus-child/
├── style.css                    → Declaração do child theme
├── functions.php                → Lógica de carga de assets + dequeue
│
├── page-home.php                → index.html    → kodus.io/
├── page-pricing.php             → pricing.html  → kodus.io/pricing/
├── page-customers.php           → customers.html→ kodus.io/customers/
├── page-roi.php                 → roi.html      → kodus.io/roi-with-kodus/
├── page-benchmark.php           → benchmark.html→ kodus.io/benchmark-ai-code-review/
├── page-case-brendi.php         → case-brendi   → kodus.io/case-brendi/
├── page-case-lerian.php         → case-lerian   → kodus.io/case-lerian/
├── page-case-notificacoes.php   → case-notif.   → kodus.io/case-notificacoes/
│
└── assets/
    ├── css/kodus-retro.css      → styles.css original (247KB)
    ├── js/kodus-retro.js        → script.js original (45KB)
    └── img/                     → todas as imagens + vídeos .webm
```
