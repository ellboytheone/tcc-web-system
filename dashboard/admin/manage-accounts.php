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
    <link rel="stylesheet" href="/gabnet-system/assets/css/dashboard.css" />
    <link rel="stylesheet" href="/gabnet-system/assets/css/styles.css" />
    <title>Gerir Contas - GABnet</title>
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
        <a href="manage-accounts.php" class="nav-link active">
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
        <a href="announcements.php" class="nav-link">
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
            GABnet &rsaquo; <a href="index.php">Painel de Administrador</a> &rsaquo; <strong>Gerir Contas</strong>
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
            <h1>Gerir <em>Contas</em></h1>
            <p>Cria, edita, activa e desativa contas de alunos, professores e administradores.</p>
          </div>
          <a href="#" class="announce-btn">
            <svg viewBox="0 0 24 24">
              <line x1="12" y1="5" x2="12" y2="19"/>
              <line x1="5" y1="12" x2="19" y2="12"/>
            </svg>
            Nova conta
          </a>
        </header>
        <div class="quick-filters">
          <a href="?filter=everyone"
            class="qf-pill active">
            Todos <span class="qf-count">3</span>
          </a>
          <a href="?filter=student"
            class="qf-pill blue">
            Alunos <span class="qf-count">1</span>
          </a>
          <a href="?filter=teacher"
            class="qf-pill green">
            Professores <span class="qf-count">1</span>
          </a>
          <a href="?filter=adm"
            class="qf-pill purple">
            Administradores <span class="qf-count">1</span>
          </a>
        </div>
        <form method="GET" action="manage-accounts.php" class="search-bar">
          <input type="hidden" name="papel"  value=""/>
          <input type="hidden" name="status" value=""/>
          <div class="search-wrap">
            <svg viewBox="0 0 24 24">
              <circle cx="11" cy="11" r="8"/>
              <line x1="21" y1="21" x2="16.65" y2="16.65"/>
            </svg>
            <input type="text" name="q" value="" placeholder="Pesquisar por nome ou email..."/>
          </div>
          <select name="status" class="filter-select" onchange="this.form.submit()">
            <option value="">Todos os estados</option>
            <option value="active" selected>Ativos</option>
            <option value="unactive">Não ativos</option>
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
            <div class="table-panel">
              <div class="table-panel-header">
                <div class="tph-title">
                  <svg viewBox="0 0 24 24">
                    <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/>
                    <circle cx="9" cy="7" r="4"/>
                    <path d="M23 21v-2a4 4 0 00-3-3.87"/>
                    <path d="M16 3.13a4 4 0 010 7.75"/>
                  </svg>
                  Utilizadores do sistema
                </div>
                <span class="tph-count">
                  Mostrando <strong>1-3</strong>
                  de <strong>3</strong> resultados
                </span>
              </div>
              <div class="empty-state" style="display: none;">
                <svg viewBox="0 0 24 24">
                  <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/>
                  <circle cx="9" cy="7" r="4"/>
                  <line x1="23" y1="11" x2="17" y2="11"/>
                </svg>
                <p>Nenhuma conta encontrada com os filtros aplicados.</p>
                <a href="manage-accounts.php">Remover filtros</a>
              </div>
              <div class="table-wrap">
                <table>
                  <thead>
                    <tr>
                      <th>Utilizador</th>
                      <th>Tipo</th>
                      <th>Estado</th>
                      <th>Criado em</th>
                      <th>Acções</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="td-user">
                          <div class="td-av admin">P</div>
                          <div>
                            <span class="td-name">Pedro Manuel</span>
                            <span class="td-email">pedro@gabnet.ao</span>
                          </div>
                        </div>
                      </td>
                      <td><span class="badge admin">Administrador</span></td>
                      <td>
                        <span class="status-active">
                          Ativo
                        </span>
                      </td>
                      <td class="td-data">12/05/2026</td>
                      <td>
                        <div class="td-actions">
                          <a href="manage-accounts.php?editar=1" title="Editar conta">
                            <div class="icon-btn editar">
                              <svg viewBox="0 0 24 24">
                                <path d="M11 4H4a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7"/>
                                <path d="M18.5 2.5a2.121 2.121 0 013 3L12 15l-4 1 1-4 9.5-9.5z"/>
                              </svg>
                            </div>
                          </a>
                          <!-- Própria conta — não pode remover -->
                          <div class="icon-btn" style="opacity:.3;cursor:not-allowed" title="Não podes remover a tua própria conta">
                            <svg viewBox="0 0 24 24">
                              <rect x="3" y="11" width="18" height="11" rx="2"/>
                              <path d="M7 11V7a5 5 0 0110 0v4"/>
                            </svg>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="td-user">
                          <div class="td-av teacher">A</div>
                          <div>
                            <span class="td-name">António Calunga</span>
                            <span class="td-email">antoniocalunga@gabnet.ao</span>
                          </div>
                        </div>
                      </td>
                      <td><span class="badge teacher">Professor</span></td>
                      <td>
                        <span class="status-active">
                          Ativo
                        </span>
                      </td>
                      <td class="td-data">12/05/2026</td>
                      <td>
                        <div class="td-actions">
                          <a href="manage-accounts.php?editar=2" title="Editar conta">
                            <div class="icon-btn editar">
                              <svg viewBox="0 0 24 24">
                                <path d="M11 4H4a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7"/>
                                <path d="M18.5 2.5a2.121 2.121 0 013 3L12 15l-4 1 1-4 9.5-9.5z"/>
                              </svg>
                            </div>
                          </a>
                          <form method="POST" action="manage-accounts.php" style="display:inline"
                                onsubmit="return confirmarToggle()">
                            <input type="hidden" name="acao"   value="toggle_status"/>
                            <input type="hidden" name="uid"    value=""/>
                            <input type="hidden" name="status" value=""/>
                            <button type="submit" class="icon-btn remove" title="Remover conta">
                              <svg viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="10"/>
                                <line x1="4.93" y1="4.93" x2="19.07" y2="19.07"/>
                              </svg>
                            </button>
                          </form>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="td-user">
                          <div class="td-av student">E</div>
                          <div>
                            <span class="td-name">Emmanuel Mateus</span>
                            <span class="td-email">emmanuelmateus@gabnet.ao</span>
                          </div>
                        </div>
                      </td>
                      <td><span class="badge student">Estudante</span></td>
                      <td>
                        <span class="status-active">
                          Ativo
                        </span>
                      </td>
                      <td class="td-data">12/05/2026</td>
                      <td>
                        <div class="td-actions">
                          <a href="manage-accounts.php?editar=3" title="Editar conta">
                            <div class="icon-btn editar">
                              <svg viewBox="0 0 24 24">
                                <path d="M11 4H4a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7"/>
                                <path d="M18.5 2.5a2.121 2.121 0 013 3L12 15l-4 1 1-4 9.5-9.5z"/>
                              </svg>
                            </div>
                          </a>
                          <form method="POST" action="manage-accounts.php" style="display:inline"
                                onsubmit="return confirmarToggle()">
                            <input type="hidden" name="acao"   value="toggle_status"/>
                            <input type="hidden" name="uid"    value=""/>
                            <input type="hidden" name="status" value=""/>
                            <button type="submit" class="icon-btn remove" title="Remover conta">
                              <svg viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="10"/>
                                <line x1="4.93" y1="4.93" x2="19.07" y2="19.07"/>
                              </svg>
                            </button>
                          </form>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- Paginação -->
              <div class="pages">
                <span class="pag-info">
                  Página <strong>1</strong> de <strong>1</strong>
                </span>
                <div class="pag-btns">
                  <a href="" class="pag-btn disabled" aria-label="Página anterior">
                    <svg viewBox="0 0 24 24">
                      <polyline points="15 18 9 12 15 6"/>
                    </svg>
                  </a>
                  <a href="" class="pag-btn active ">1</a>
                  <span class="pag-btn" style="pointer-events:none">…</span>
                  <a href="" class="pag-btn">2</a>
                  <a href="" class="pag-btn" aria-label="Próxima página">
                    <svg viewBox="0 0 24 24">
                      <polyline points="9 18 15 12 9 6"/>
                    </svg>
                  </a>
                </div>
              </div>
            </div>
      </main>
    </div>
    <script src="/gabnet-system/assets/js/dashboard.js"></script>
    </body>
</html>