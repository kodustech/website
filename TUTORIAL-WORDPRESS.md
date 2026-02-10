# Tutorial: Subir o site Kodus no WordPress (Hybrid: Custom Templates + Elementor)

---

## PARTE 1 — Preparar os arquivos localmente

### 1.1 Criar a estrutura do child theme

No seu computador, crie a seguinte estrutura de pasta:

```
kodus-child/
├── style.css
├── functions.php
├── page-home.php
├── page-pricing.php          ← criar quando tiver a página
├── screenshot.png            ← opcional, 1200x900px
├── assets/
│   ├── css/
│   │   └── kodus-retro.css   ← copiar o styles.css atual
│   ├── js/
│   │   └── kodus-retro.js    ← copiar o script.js atual
│   └── img/
│       ├── kodus_dark.png
│       ├── kody-paws.png
│       ├── kody-poeta.png
│       ├── kody-money.png
│       ├── kody-good-vibes.png
│       ├── kody-noise.png
│       └── logos_new/
│           ├── purple_metrics.png
│           ├── r10.png
│           └── ... (todas as imagens da pasta assets/img)
```

### 1.2 Criar o `style.css` (declaração do child theme)

Este arquivo NÃO é o CSS do site. É só a declaração pro WordPress reconhecer o child theme.

```css
/*
 Theme Name:   Kodus Child
 Theme URI:    https://kodus.io
 Description:  Child theme para o site Kodus (custom templates + Elementor blog)
 Author:       Kodus
 Author URI:   https://kodus.io
 Template:     hello-elementor
 Version:      1.0.0
 Text Domain:  kodus-child
*/
```

> **IMPORTANTE:** O campo `Template` deve ser o slug (nome da pasta) do tema pai.
> Se vocês usam Hello Elementor, é `hello-elementor`.
> Se usam Astra, é `astra`. Se usam GeneratePress, é `generatepress`.
> Para descobrir: vá em **Aparência > Temas** no WP e veja qual tema está ativo.

### 1.3 Criar o `functions.php`

```php
<?php
/**
 * Kodus Child Theme — functions.php
 */

// ─── Carregar CSS do tema pai (necessário para o blog/Elementor funcionar) ───
add_action('wp_enqueue_scripts', 'kodus_child_enqueue_parent', 10);
function kodus_child_enqueue_parent() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}

// ─── Carregar assets retro APENAS nas páginas com custom template ───
add_action('wp_enqueue_scripts', 'kodus_enqueue_retro_assets', 999);
function kodus_enqueue_retro_assets() {
    // Lista de templates que usam o CSS/JS retro
    $retro_templates = [
        'page-home.php',
        'page-pricing.php',
        'page-features.php',
    ];

    if (is_page_template($retro_templates)) {
        // ── Remover CSS/JS do Elementor nestas páginas ──
        wp_dequeue_style('elementor-frontend');
        wp_dequeue_style('elementor-common');
        wp_dequeue_style('elementor-global');
        wp_dequeue_style('elementor-icons');
        wp_dequeue_style('elementor-animations');
        wp_dequeue_script('elementor-frontend');
        wp_dequeue_script('elementor-common');

        // ── Remover CSS do tema pai nestas páginas ──
        wp_dequeue_style('parent-style');
        wp_dequeue_style('hello-elementor');
        wp_dequeue_style('hello-elementor-theme-style');

        // ── Carregar os assets retro ──
        wp_enqueue_style(
            'kodus-retro',
            get_stylesheet_directory_uri() . '/assets/css/kodus-retro.css',
            [],
            '1.0.0'
        );
        wp_enqueue_script(
            'kodus-retro',
            get_stylesheet_directory_uri() . '/assets/js/kodus-retro.js',
            [],
            '1.0.0',
            true // carrega no footer
        );

        // ── Google Fonts ──
        wp_enqueue_style(
            'kodus-fonts',
            'https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700&family=Press+Start+2P&display=swap',
            [],
            null
        );
    }
}

// ─── Preconnect pro Google Fonts (performance) ───
add_action('wp_head', 'kodus_preconnect_fonts', 1);
function kodus_preconnect_fonts() {
    if (is_page_template(['page-home.php', 'page-pricing.php', 'page-features.php'])) {
        echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . "\n";
        echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";
    }
}
```

### 1.4 Criar o `page-home.php`

Este é o template da homepage. Copie o conteúdo do `index.html` atual, mas adaptado pro WordPress:

```php
<?php
/*
 * Template Name: Kodus Home
 * Template Post Type: page
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- SVG sprite -->
<svg xmlns="http://www.w3.org/2000/svg" style="display:none;">
    <symbol id="bug-shape" viewBox="0 0 11 8">
        <!-- ... conteúdo do SVG sprite ... -->
    </symbol>
</svg>

<!-- ========== HEADER / NAV ========== -->
<header class="header" id="header">
    <nav class="nav container">
        <a href="<?php echo home_url(); ?>" class="nav__logo">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kodus_dark.png"
                 alt="Kodus" class="nav__logo-img">
        </a>

        <ul class="nav__links" id="navLinks">
            <li><a href="#" class="nav__link">Docs</a></li>
            <li><a href="#" class="nav__link">Community</a></li>
            <li class="nav__dropdown">
                <a href="#" class="nav__link">Resources <span class="nav__chevron">&#9662;</span></a>
            </li>
            <li><a href="<?php echo home_url('/blog'); ?>" class="nav__link">Blog</a></li>
            <li><a href="#" class="nav__link">Pricing</a></li>
        </ul>

        <div class="nav__actions">
            <a href="https://github.com/kodustech/kodus-ai" target="_blank" class="btn btn--github">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor">
                    <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59..."/>
                </svg>
                <span id="ghStars">--</span>
            </a>
            <a href="#" class="btn btn--outline-light">Login</a>
            <a href="#" class="btn btn--primary">Start Free Trial</a>
        </div>

        <button class="nav__hamburger" id="navHamburger" aria-label="Toggle menu">
            <span></span><span></span><span></span>
        </button>
    </nav>
</header>

<main>
    <!-- ========== COLE TODO O CONTEÚDO DO <main> DO index.html AQUI ========== -->
    <!-- Troque TODOS os caminhos de imagem de:                                  -->
    <!--   src="assets/img/..."                                                  -->
    <!-- para:                                                                   -->
    <!--   src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/..."     -->
    <!--                                                                         -->
    <!-- Troque links de navegação de href="#" para URLs reais quando tiver       -->
</main>

<!-- ========== FOOTER ========== -->
<footer class="footer">
    <div class="container footer__container">
        <div class="footer__brand">
            <a href="<?php echo home_url(); ?>" class="nav__logo">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kodus_dark.png"
                     alt="Kodus" class="nav__logo-img">
            </a>
            <p class="footer__tagline">The Open Source Alternative to CodeRabbit</p>
        </div>
        <div class="footer__columns">
            <div class="footer__col">
                <h4 class="footer__col-title">Product</h4>
                <ul class="footer__col-list">
                    <li><a href="#">Features</a></li>
                    <li><a href="#">Pricing</a></li>
                    <li><a href="#">Docs</a></li>
                    <li><a href="#">Changelog</a></li>
                </ul>
            </div>
            <div class="footer__col">
                <h4 class="footer__col-title">Community</h4>
                <ul class="footer__col-list">
                    <li><a href="https://github.com/kodustech/kodus-ai" target="_blank">GitHub</a></li>
                    <li><a href="#">Discord</a></li>
                    <li><a href="<?php echo home_url('/blog'); ?>">Blog</a></li>
                </ul>
            </div>
            <div class="footer__col">
                <h4 class="footer__col-title">Company</h4>
                <ul class="footer__col-list">
                    <li><a href="#">About</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
        </div>
        <div class="footer__bottom">
            <p>&copy; <?php echo date('Y'); ?> Kodus. All rights reserved.</p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
```

**Pontos importantes neste template:**
- `<?php wp_head(); ?>` — permite Yoast, Analytics, etc. injetar no head
- `<?php wp_footer(); ?>` — permite scripts de tracking, Yoast, etc.
- `<?php wp_body_open(); ?>` — hook pro GTM body snippet
- `<?php echo get_stylesheet_directory_uri(); ?>` — caminho correto pros assets
- `<?php echo home_url(); ?>` — link pro home dinâmico
- `<?php echo date('Y'); ?>` — copyright sempre atualizado
- `<?php language_attributes(); ?>` — lang correto
- `<?php body_class(); ?>` — classes do WP no body (útil pra Yoast e plugins)

---

## PARTE 2 — Subir pro WordPress

### 2.1 Criar o ZIP do child theme

Comprima a pasta `kodus-child/` inteira em um arquivo `kodus-child.zip`.

```bash
cd /caminho/para/a/pasta/pai
zip -r kodus-child.zip kodus-child/
```

### 2.2 Instalar o child theme no WordPress

1. Acesse o painel WordPress: `kodus.io/wp-admin`
2. Vá em **Aparência > Temas**
3. Clique **"Adicionar novo"** > **"Enviar tema"**
4. Selecione o `kodus-child.zip`
5. Clique **"Instalar agora"**
6. **NÃO ATIVE AINDA** — primeiro verifique se o tema pai está instalado

### 2.3 Verificar tema pai

O tema pai (ex: Hello Elementor) precisa estar **instalado** (não precisa estar ativo).

- Vá em **Aparência > Temas**
- Confirme que o tema pai (ex: Hello Elementor) aparece na lista
- Se não estiver, instale-o primeiro

### 2.4 Ativar o child theme

1. Vá em **Aparência > Temas**
2. Encontre **"Kodus Child"**
3. Clique **"Ativar"**

> O Elementor vai continuar funcionando normalmente para as páginas de blog.

---

## PARTE 3 — Criar as páginas no WordPress

### 3.1 Criar a página "Home"

1. Vá em **Páginas > Adicionar nova**
2. Título: `Home` (ou qualquer nome)
3. No painel direito, procure **"Template"** (ou "Atributos da Página")
4. Selecione **"Kodus Home"** no dropdown
5. Clique **"Publicar"**

> O conteúdo do editor pode ficar vazio — o template já tem tudo hardcoded.

### 3.2 Definir como página inicial

1. Vá em **Configurações > Leitura**
2. Em "Sua página inicial exibe", selecione **"Uma página estática"**
3. **Página inicial:** selecione a página "Home" que você criou
4. **Página de posts:** selecione "Blog" (crie uma página chamada "Blog" se não existir)
5. Salve

### 3.3 Criar a página "Blog" (se não existir)

1. **Páginas > Adicionar nova**
2. Título: `Blog`
3. Template: **Default** (ou o template do Elementor que vocês já usam)
4. Publicar
5. Volte em **Configurações > Leitura** e selecione esta página como "Página de posts"

### 3.4 Repetir para outras páginas (Pricing, Features, etc.)

Quando criar essas páginas:
1. Crie o template PHP (ex: `page-pricing.php`) com `Template Name: Kodus Pricing`
2. Suba o arquivo atualizado via FTP/SFTP ou re-upload do ZIP
3. Crie a página no WP e selecione o template correspondente

---

## PARTE 4 — Configurar SEO (Yoast ou RankMath)

### 4.1 Instalar Yoast SEO (se não tiver)

1. **Plugins > Adicionar novo**
2. Busque "Yoast SEO"
3. Instale e ative

### 4.2 Configurar a homepage

1. Vá em **Páginas** e edite a página "Home"
2. Role até a seção do **Yoast SEO** (abaixo do editor)
3. Preencha:
   - **SEO Title:** `Kodus — The Open Source Alternative to CodeRabbit`
   - **Meta description:** `AI Code Review With Full Control Over Model Choice and Costs. Open source, model agnostic, zero markup.`
   - **Slug:** deixe como `/` (é a home)
4. Clique na aba **"Social"** no Yoast:
   - **Facebook image:** suba uma imagem OG (1200x630px) do site
   - **Facebook title:** `Kodus — The Open Source Alternative to CodeRabbit`
   - **Facebook description:** `AI Code Review With Full Control Over Model Choice and Costs.`
   - Repita para Twitter
5. Atualize a página

### 4.3 Configurar títulos globais

1. **Yoast SEO > Configurações de busca > Geral**
2. Defina o formato do título padrão: `%%title%% — Kodus`
3. Em **Tipos de Conteúdo > Páginas**, configure o template de título

### 4.4 Sitemap

O Yoast gera automaticamente. Verifique em: `kodus.io/sitemap_index.xml`

---

## PARTE 5 — Configurar o Blog com Elementor

### 5.1 Template do blog (listagem)

1. No WordPress, vá em **Elementor > Theme Builder**
2. Clique **"Adicionar novo"**
3. Tipo: **"Archive"**
4. Monte o layout da listagem de posts (título, excerpt, thumbnail, etc.)
5. Na condição de exibição, selecione **"Blog Archive"** ou **"All Archives"**
6. Publique

### 5.2 Template do post individual

1. **Elementor > Theme Builder > Adicionar novo**
2. Tipo: **"Single Post"**
3. Monte o layout do post (título, conteúdo, autor, data, etc.)
4. Condição: **"All Posts"**
5. Publique

### 5.3 Header e Footer do blog

O blog vai usar o header/footer do Elementor (diferente do header retro).
Duas opções:

**Opção A:** Criar header/footer no Elementor Theme Builder que replique
visualmente o estilo retro (mais trabalhoso mas consistente).

**Opção B:** Aceitar que o blog tem um visual mais limpo/padrão e só o
marketing pages têm o estilo retro (mais prático, muito comum).

---

## PARTE 6 — Upload de arquivos (FTP/SFTP)

Para editar os templates depois sem re-uplodar o ZIP toda vez:

### 6.1 Acesso via FTP/SFTP

Você precisa de:
- Host: o IP ou domínio do servidor
- Usuário/senha FTP (peça ao time de infra ou veja no painel da hospedagem)
- Porta: 21 (FTP) ou 22 (SFTP)

Use o **FileZilla** (gratuito):
1. Baixe em https://filezilla-project.org
2. Conecte com as credenciais
3. Navegue até: `wp-content/themes/kodus-child/`
4. Edite/substitua arquivos diretamente

### 6.2 Alternativa: Editor de tema no WP (NÃO recomendado)

**Aparência > Editor de Temas** permite editar PHP direto no browser.
Use só em emergência — sem controle de versão, sem undo.

### 6.3 Alternativa: Plugin "File Manager"

1. Instale o plugin **"WP File Manager"**
2. Navegue até `wp-content/themes/kodus-child/`
3. Edite arquivos pelo browser com interface de arquivo

---

## PARTE 7 — Checklist final

### Antes de ir pro ar:

- [ ] Child theme ativado
- [ ] Página "Home" criada com template "Kodus Home"
- [ ] Configurações > Leitura: página estática definida
- [ ] Yoast SEO configurado (title, description, OG image)
- [ ] Sitemap funcionando (`/sitemap_index.xml`)
- [ ] Imagens carregando corretamente (verificar caminhos)
- [ ] GitHub stars carregando via API
- [ ] Blog acessível em `/blog`
- [ ] Links de navegação apontando pros URLs corretos
- [ ] Mobile responsivo funcionando
- [ ] Google Analytics / GTM instalado
- [ ] Favicon configurado (**Aparência > Personalizar > Identidade do site**)
- [ ] SSL ativo (HTTPS)
- [ ] Cache plugin instalado (WP Super Cache, W3 Total Cache, ou LiteSpeed Cache)
- [ ] Testar no Google PageSpeed Insights

### URLs para testar:

```
https://kodus.io/                  ← Home (template custom)
https://kodus.io/blog/             ← Blog (Elementor)
https://kodus.io/blog/post-slug/   ← Post individual (Elementor)
https://kodus.io/sitemap_index.xml ← Sitemap
```

---

## Resumo da arquitetura

```
Requisição HTTP
       │
       ▼
   WordPress
       │
       ├── É página com custom template? (Home, Pricing, Features...)
       │   └── SIM → Renderiza page-home.php
       │            ├── Carrega kodus-retro.css + kodus-retro.js
       │            ├── NÃO carrega Elementor
       │            └── wp_head() injeta Yoast, Analytics, etc.
       │
       └── É blog ou outra página?
           └── SIM → Renderiza via Elementor / tema pai
                    ├── Carrega CSS/JS do Elementor normalmente
                    └── wp_head() injeta Yoast, Analytics, etc.
```
