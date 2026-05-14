<!doctype html>
<html lang="pt-PT">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="shortcut icon"
      href="/gabnet-system/assets/images/favicon.ico"
      type="image/x-icon"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Sora:wght@100..800&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Sora:wght@100..800&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="/gabnet-system/assets/css/admin.css">
    <link rel="stylesheet" href="/gabnet-system/assets/css/announcements.css">
    <link rel="stylesheet" href="/gabnet-system/assets/css/dashboard.css" />
    <link rel="stylesheet" href="/gabnet-system/assets/css/styles.css" />
    <title>Comunicados - GABnet</title>
  </head>
  <body class="admin">
    <div class="sidebar-overlay" id="overlay" onclick="toggleSidebar()"></div>
    <aside class="sidebar" id="sidebar">
      <div class="sidebar-logo">
        <img
          src="/gabnet-system/assets/images/gabnet-logo.png"
          alt="Logo de GABnet"
          class="logo"
        />
        <div class="logo-txt">
          <strong>GABnet</strong>
          <small>Portal Escolar</small>
        </div>
      </div>
      <div class="id-card">
        <div class="avatar-lg">P</div>
        <div class="id-info">
          <strong>Pedro Manuel</strong>
          <small>Auxiliar Técnico</small>
          <div class="id-badge">
            <svg viewBox="0 0 24 24">
              <path d="M22 10v6M2 10l10-5 10 5-10 5z" />
              <path d="M6 12v5c3 3 9 3 12 0v-5" />
            </svg>
            Administrador
          </div>
        </div>
      </div>
      <span class="nav-section">Visão Geral</span>
      <nav class="nav-links">
        <a href="index.php" class="nav-link">
          <svg viewBox="0 0 24 24">
            <rect x="3" y="3" width="7" height="7" />
            <rect x="14" y="3" width="7" height="7" />
            <rect x="14" y="14" width="7" height="7" />
            <rect x="3" y="14" width="7" height="7" />
          </svg>
          Dashboard
        </a>
        <span class="nav-section">Gestão</span>
        <a href="manage-accounts.php" class="nav-link">
          <svg viewBox="0 0 24 24">
            <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/>
            <circle cx="9" cy="7" r="4"/>
            <path d="M23 21v-2a4 4 0 00-3-3.87"/>
            <path d="M16 3.13a4 4 0 010 7.75"/>
          </svg>
          Gerir Contas
        </a>
        <a href="classes.php" class="nav-link">
          <svg viewBox="0 0 24 24">
            <path d="M2 3h6a4 4 0 014 4v14a3 3 0 00-3-3H2z"/>
            <path d="M22 3h-6a4 4 0 00-4 4v14a3 3 0 013-3h7z"/>
          </svg>
          Turmas
        </a>
        <a href="schedules.php" class="nav-link">
          <svg viewBox="0 0 24 24">
            <rect x="3" y="4" width="18" height="18" rx="2" />
            <line x1="16" y1="2" x2="16" y2="6" />
            <line x1="8" y1="2" x2="8" y2="6" />
            <line x1="3" y1="10" x2="21" y2="10" />
          </svg>
          Horários
        </a>
        <span class="nav-section">Comunicação</span>
        <a href="create-announcement.php" class="nav-link">
          <svg viewBox="0 0 24 24">
            <line x1="22" y1="2" x2="11" y2="13"/>
            <polygon points="22 2 15 22 11 13 2 9 22 2"/>
          </svg>
          Criar Comunicado
          <span class="nav-badge">3</span>
        </a>
        <a href="announcements.php" class="nav-link active">
          <svg viewBox="0 0 24 24">
            <path d="M18 8A6 6 0 006 8c0 7-3 9-3 9h18s-3-2-3-9"/>
            <path d="M13.73 21a2 2 0 01-3.46 0"/>
          </svg>
          Comunicados
        </a>
      </nav>
      <footer class="sidebar-footer">
        <form method="POST" action="/auth/logout.php">
          <button type="submit" class="btn-logout">
            <svg viewBox="0 0 24 24">
              <path d="M9 21H5a2 2 0 01-2-2V5a2 2 0 012-2h4" />
              <polyline points="16 17 21 12 16 7" />
              <line x1="21" y1="12" x2="9" y2="12" />
            </svg>
            Terminar sessão
          </button>
        </form>
      </footer>
    </aside>
    <div class="main-wrap">
      <header class="topbar">
        <section class="topbar-left">
          <button
            class="hamburger-btn"
            onclick="toggleSidebar()"
            aria-label="Menu"
          >
            <span></span>
            <span></span>
            <span></span>
          </button>
          <div class="breadcrumb">
            GABnet &rsaquo; <a href="index.php">Painel de Administrador</a> &rsaquo; <strong>Comunicados</strong>
          </div>
        </section>
        <section class="topbar-right">
          <div class="topbar-date"><?= date('d/m/Y') ?></div>
          <span class="topbar-avatar">A</span>
        </section>
      </header>
      <main class="content">
        <header class="main-header">
          <div>
            <h1>Gestão de <em>Comunicados</em></h1>
            <p>Todos os comunicados do sistema — publicados, pendentes de aprovação e rejeitados.</p>
          </div>
          <a href="create-announcement.php" class="announce-btn">
            <svg viewBox="0 0 24 24">
              <line x1="12" y1="5" x2="12" y2="19"/>
              <line x1="5" y1="12" x2="19" y2="12"/>
            </svg>
            Nova comunicado
          </a>
        </header>
        <div class="quick-filters">
          <a href=""
            class="qf-pill active">
            Todos <span class="qf-count">3</span>
          </a>
          <a href="?status=posted"
            class="qf-pill">
            Publicados <span class="qf-count">1</span>
          </a>
          <a href="?status=pending"
            class="qf-pill orange">
            Pendentes <span class="qf-count">1</span>
          </a>
          <a href="?status=denied"
            class="qf-pill red">
            Rejeitados <span class="qf-count">1</span>
          </a>
        </div>
        <form method="GET" action="announcements.php" class="search-bar">
          <input type="hidden" name="status"  value=""/>
          <div class="search-wrap">
            <svg viewBox="0 0 24 24">
              <circle cx="11" cy="11" r="8"/>
              <line x1="21" y1="21" x2="16.65" y2="16.65"/>
            </svg>
            <input type="text" name="q" value="" placeholder="Pesquisar por título ou conteúdo..."/>
          </div>
          <select name="importance" class="filter-select" onchange="this.form.submit()">
            <option value="">Todas importâncias</option>
            <option value="high">Alta</option>
            <option value="medium">Média</option>
            <option value="low">Baixa</option>
          </select>
          <button type="submit" class="btn-search">
            <svg viewBox="0 0 24 24">
              <circle cx="11" cy="11" r="8"/>
              <line x1="21" y1="21" x2="16.65" y2="16.65"/>
            </svg>
            Pesquisar
          </button>
          <a href="" class="btn-clean" style="display: none">
            <svg viewBox="0 0 24 24">
              <line x1="18" y1="6" x2="6" y2="18"/>
              <line x1="6" y1="6" x2="18" y2="18"/>
            </svg>
            Limpar
          </a>
        </form>
        <section class="main-grid">
            <div class="left-col">
              <section class="panel" id="announcements-panel-s">
                <div class="panel-header">
                  <h2>
                    <svg viewBox="0 0 24 24">
                      <path d="M18 8A6 6 0 006 8c0 7-3 9-3 9h18s-3-2-3-9"/>
                      <path d="M13.73 21a2 2 0 01-3.46 0"/>
                    </svg>
                    Comunicados recentes
                  </h2>
                  <span class="panel-header-text">7 resultados</span>
                </div>
                <div class="ann-item active" id="ci-1" onclick="lerComunicado()">
                  <div class="imp-bar high"></div>
                  <div class="ann-body">
                    <div class="ann-r1">
                      <span class="ann-title">Reunião de encarregados de educação</span>
                      <span class="imp-label high">Alta</span>
                    </div>
                    <div class="ann-r2">
                      <span class="ann-meta">
                        <svg viewBox="0 0 24 24">
                          <circle cx="12" cy="12" r="10"/>
                          <polyline points="12 6 12 12 16 14"/>
                        </svg>
                        14/04/2026
                      </span>
                      <span class="target-tag">Todos</span>
                    </div>
                    <div class="ann-excerpt">A reunião realiza-se no dia 18 de Abril às 09h00 no salão principal da escola.</div>
                  </div>
                </div>
                <div class="ann-item" id="ci-2" onclick="lerComunicado()">
                  <div class="imp-bar medium"></div>
                  <div class="ann-body">
                    <div class="ann-r1">
                      <span class="ann-title">Calendário de exames do 2.º trimestre</span>
                      <span class="imp-label medium">Média</span>
                    </div>
                    <div class="ann-r2">
                      <span class="ann-meta">
                        <svg viewBox="0 0 24 24">
                          <circle cx="12" cy="12" r="10"/>
                          <polyline points="12 6 12 12 16 14"/>
                        </svg>
                        12/04/2026
                      </span>
                      <span class="target-tag">Tua turma</span>
                    </div>
                    <div class="ann-excerpt">Os exames decorrem entre os dias 22 e 30 de Abril. Consulta o horário afixado.</div>
                  </div>
                </div>
                <div class="ann-item" id="ci-5" onclick="lerComunicado()">
                  <div class="imp-bar low"></div>
                  <div class="ann-body">
                    <div class="ann-r1">
                      <span class="ann-title">Inscrição para actividades extracurriculares</span>
                      <span class="imp-label low">Baixa</span>
                    </div>
                    <div class="ann-r2">
                      <span class="ann-meta">
                        <svg viewBox="0 0 24 24">
                          <circle cx="12" cy="12" r="10"/>
                          <polyline points="12 6 12 12 16 14"/>
                        </svg>
                        10/04/2026
                      </span>
                      <span class="target-tag">Todos</span>
                    </div>
                    <div class="ann-excerpt">As inscrições para o clube de robótica e o grupo de teatro estão abertas.</div>
                  </div>
                </div>
                <div class="ann-item" id="ci-6" onclick="lerComunicado()">
                  <div class="imp-bar low"></div>
                  <div class="ann-body">
                    <div class="ann-r1">
                      <span class="ann-title">Manutenção do sistema — Sábado</span>
                      <span class="imp-label low">Baixa</span>
                    </div>
                    <div class="ann-r2">
                      <span class="ann-meta">
                        <svg viewBox="0 0 24 24">
                          <circle cx="12" cy="12" r="10"/>
                          <polyline points="12 6 12 12 16 14"/>
                        </svg>
                        08/04/2026
                      </span>
                      <span class="target-tag">Todos</span>
                    </div>
                    <div class="ann-excerpt">O portal estará indisponível no sábado entre as 02h00 e as 06h00.</div>
                  </div>
                </div>
              </section>
            </div>
            <div class="right-col">
              <section class="reading-panel" id="reading-panel">
                <div class="reading-placeholder" id="reading-placeholder" style="display: block;">
                  <svg viewBox="0 0 24 24">
                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                    <circle cx="12" cy="12" r="3"/>
                  </svg>
                  <p>Clica num comunicado para ler o conteúdo completo.</p>
                </div>
                <div id="rp-wrapper" class="rp-imp-high" style="display: none;">
                  <div class="rp-imp-stripe" id="rp-stripe"></div>
                  <div class="rp-header">
                    <div class="rp-badge-row">
                      <span class="imp-label high" id="rp-badge">ALta</span>
                      <span class="target-tag" id="rp-target">Todos</span>
                    </div>
                    <div class="rp-title" id="rp-title">Titulo do Comunicado</div>
                  </div>
                  <div class="rp-body">
                    <div class="rp-content" id="rp-content">Exemplo de conteudo, aqui fica o comunicado em si.</div>
                    <div class="rp-meta">
                      <div class="rp-meta-item">
                        <div class="rp-meta-label">Publicado por</div>
                        <div class="rp-meta-val" id="rp-author">Autor(a)</div>
                      </div>
                      <div class="rp-meta-item">
                        <div class="rp-meta-label">Data</div>
                        <div class="rp-meta-val" id="rp-date">10/05/2026</div>
                      </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
        </section>
      </main>
    </div>
    <script src="/gabnet-system/assets/js/dashboard.js"></script>
    </body>
</html>