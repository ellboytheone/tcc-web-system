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
    <link rel="stylesheet" href="/gabnet-system/assets/css/announcements.css">
    <link rel="stylesheet" href="/gabnet-system/assets/css/dashboard.css">
    <link rel="stylesheet" href="/gabnet-system/assets/css/styles.css" />
    <title>Solicitar Anúncio - GABnet</title>
  </head>
  <body class="teacher">
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
          <strong>Antõnio Calunga</strong>
          <small>Engenharia Electrõnica</small>
          <div class="id-badge">
            <svg viewBox="0 0 24 24">
              <path d="M22 10v6M2 10l10-5 10 5-10 5z"/>
              <path d="M6 12v5c3 3 9 3 12 0v-5"/>
            </svg>
            Professor
          </div>
        </div>
      </div>
      <span class="nav-section">
        Menu
      </span>
      <nav class="nav-links">
        <a href="index.php" class="nav-link">
          <svg viewBox="0 0 24 24">
            <rect x="3" y="3" width="7" height="7"/>
            <rect x="14" y="3" width="7" height="7"/>
            <rect x="14" y="14" width="7" height="7"/>
            <rect x="3" y="14" width="7" height="7"/>
          </svg>
          Dashboard
        </a>
        <a href="schedule.php" class="nav-link">
          <svg viewBox="0 0 24 24">
            <rect x="3" y="4" width="18" height="18" rx="2"/>
            <line x1="16" y1="2" x2="16" y2="6"/>
            <line x1="8" y1="2" x2="8" y2="6"/>
            <line x1="3" y1="10" x2="21" y2="10"/>
          </svg>
          Horário Completo
        </a>
        <a href="announce.php" class="nav-link active">
          <svg viewBox="0 0 24 24">
            <path d="M18 8A6 6 0 006 8c0 7-3 9-3 9h18s-3-2-3-9"/>
            <path d="M13.73 21a2 2 0 01-3.46 0"/>
          </svg>
          Solicitar Comunicado
        </a>
        <a href="profile.php" class="nav-link">
          <svg viewBox="0 0 24 24">
            <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/>
            <circle cx="12" cy="7" r="4"/>
          </svg>
          Meu perfil
        </a>
      </nav>
      <footer class="sidebar-footer">
        <form method="POST" action="/auth/logout.php">
          <button type="submit" class="btn-logout">
            <svg viewBox="0 0 24 24">
              <path d="M9 21H5a2 2 0 01-2-2V5a2 2 0 012-2h4"/>
              <polyline points="16 17 21 12 16 7"/>
              <line x1="21" y1="12" x2="9" y2="12"/>
            </svg>
            Terminar sessão
          </button>
        </form>
      </footer>
    </aside>
    <div class="main-wrap">
      <header class="topbar">
        <section class="topbar-left">
          <button class="hamburger-btn" onclick="toggleSidebar()" aria-label="Menu">
            <span></span>
            <span></span>
            <span></span>
          </button>
          <div class="breadcrumb">
            GABnet &rsaquo; <a href="index.php">Painel de Professor</a> &rsaquo; <strong>Solicitar Anúncio</strong>
          </div>
        </section>
        <section class="topbar-right">
          <div class="topbar-date">
            <?= date('d/m/Y') ?>
          </div>
          <a href="profile.php">
            <div class="topbar-avatar">
              A
            </div>
          </a>
        </section>
      </header>
      <main class="content">
        <header class="main-header">
          <h1>Solicitar <em>anúncio</em></h1>
          <p>Envia um pedido ao Administrador para publicar um comunicado no portal.</p>
        </header>
        <section class="flow-card">
          <div class="flow-label">Como funciona o processo</div>
          <div class="flow-steps">
            <div class="flow-step">
              <div class="fs-num">1</div>
              <span class="fs-txt">Preenches o formulário</span>
            </div>
            <span class="flow-arrow">→</span>
            <div class="flow-step">
              <div class="fs-num">2</div>
              <span class="fs-txt">Administrador analisa</span>
            </div>
            <span class="flow-arrow">→</span>
            <div class="flow-step">
              <div class="fs-num">3</div>
              <span class="fs-txt">Aprovado → publicado</span>
            </div>
            <span class="flow-arrow">→</span>
            <div class="flow-step">
              <div class="fs-num">4</div>
              <span class="fs-txt">Alunos recebem o aviso</span>
            </div>
          </div>
          <div class="flow-nota">
            <svg viewBox="0 0 24 24">
              <circle cx="12" cy="12" r="10"/>
              <line x1="12" y1="8" x2="12" y2="12"/>
              <line x1="12" y1="16" x2="12.01" y2="16"/>
            </svg>
            A solicitação fica pendente até o Administrador a aprovar ou rejeitar. Podes acompanhar o estado abaixo.
          </div>
        </section>
        <div class="main-grid">
          <div class="left-col">
            <section class="panel" id="request-panel">
              <div class="panel-header">
                <h2 class="panel-title">  
                  <svg viewBox="0 0 24 24">
                    <line x1="22" y1="2" x2="11" y2="13"/>
                    <polygon points="22 2 15 22 11 13 2 9 22 2"/>
                  </svg>
                  Solicitar anúncio
                </h2>
              </div>
              <div class="requests-form">
                <form method="POST" action="solicitar-anuncio.php" id="form-solic">
                  <div class="form-field">
                    <label for="title">Título <span>*</span></label>
                    <input type="text" id="title" name="title" placeholder="Ex: Cancelamento de aulas..." maxlength="150" required/>
                  </div>
                  <div class="form-field">
                    <label>Nível de importância <span>*</span></label>
                    <div class="imp-cards">
                      <div class="imp-card">
                        <input type="radio" id="imp-b" name="importance" value="Baixa" onchange="updatePreview()"/>
                        <label for="imp-b" class="low">
                          <div class="imp-icon ii-low">
                            <svg viewBox="0 0 24 24">
                              <circle cx="12" cy="12" r="10"/>
                              <line x1="12" y1="8" x2="12" y2="12"/>
                              <line x1="12" y1="16" x2="12.01" y2="16"/>
                            </svg>
                          </div>
                          <div class="imp-lbl">Baixa</div>
                          <div class="imp-desc">Informação geral</div>
                        </label>
                      </div>
                      <div class="imp-card">
                        <input type="radio" id="imp-m" name="importance" value="Média" onchange="updatePreview()"/>
                        <label for="imp-m" class="medium">
                          <div class="imp-icon ii-medium">
                            <svg viewBox="0 0 24 24">
                              <path d="M10.29 3.86L1.82 18a2 2 0 001.71 3h16.94a2 2 0 001.71-3L13.71 3.86a2 2 0 00-3.42 0z"/>
                              <line x1="12" y1="9" x2="12" y2="13"/>
                              <line x1="12" y1="17" x2="12.01" y2="17"/>
                            </svg>
                          </div>
                          <div class="imp-lbl">Média</div>
                          <div class="imp-desc">Requer atenção</div>
                        </label>
                      </div>
                      <div class="imp-card">
                        <input type="radio" id="imp-a" name="importance" value="Alta" onchange="updatePreview()"/>
                        <label for="imp-a" class="high">
                          <div class="imp-icon ii-high">
                            <svg viewBox="0 0 24 24">
                              <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"/>
                              <line x1="12" y1="8" x2="12" y2="12"/>
                              <line x1="12" y1="16" x2="12.01" y2="16"/>
                            </svg>
                          </div>
                          <div class="imp-lbl">Alta</div>
                          <div class="imp-desc">Urgente — destaque</div>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-field">
                    <label for="target">Alvo<span>*</span></label>
                    <select id="target" name="target" required>
                      <option value="" disabled selected>Selecionar...</option>
                      <option value="everyone">Todos</option>
                      <option value="students">Alunos</option>
                      <option value="teachers">Professores</option>
                      <option value="admins">Administradores</option>
                      <option value="class">Turma</option>
                    </select>
                    <select id="target-class" name="target-class" style="display: none;">
                      <option value="" disabled selected>Selecione a turma</option>
                      <option value="10 INF">10ª Informática</option>
                      <option value="11 INF">11ª Informática</option>
                      <option value="12 INF">12ª Informática</option>
                    </select>
                  </div>
                  <div class="form-field">
                    <label for="content">Mensagem <span>*</span></label>
                    <textarea id="content" name="content" placeholder="Descreve o conteúdo do anúncio..." maxlength="1000" required></textarea>
                  </div>
                  <div class="form-field include-parents-field">
                    <input type="checkbox" name="include-parents" id="include-parents"/>
                    <label for="include-parents">Incluir Encarregados?</label>
                  </div>
                  <button type="submit" class="btn-submit">
                    <svg viewBox="0 0 24 24">
                      <line x1="22" y1="2" x2="11" y2="13"/>
                      <polygon points="22 2 15 22 11 13 2 9 22 2"/>
                    </svg>
                    Enviar solicitação
                  </button>
                  <p class="form-note">Será publicado após aprovação do Administrador.</p>
                </form>
              </div>
            </section>
          </div>
          <div class="right-col">
            <section class="preview-section">
              <div class="panel">
                <div class="panel-header">
                  <h2>
                    <svg viewBox="0 0 24 24">
                      <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                      <circle cx="12" cy="12" r="3"/>
                    </svg>
                    Pré-visualização
                  </h2>
                </div>
                <div class="panel-body">
                  <div class="prev-note">
                    <svg viewBox="0 0 24 24">
                      <circle cx="12" cy="12" r="10"/>
                      <line x1="12" y1="8" x2="12" y2="12"/>
                      <line x1="12" y1="16" x2="12.01" y2="16"/>
                    </svg>
                    Assim aparecerá depois de aprovado. Actualiza enquanto escreves.
                  </div>
                  <div class="prev-card" id="prev-card">
                    <div id="rp-wrapper">
                      <div class="rp-imp-stripe" id="rp-stripe"></div>
                      <div class="rp-header">
                        <div class="rp-badge-row">
                          <span class="imp-label low" id="rp-badge">Importância</span>
                          <span class="target-tag" id="rp-target">Alvo</span>
                        </div>
                        <div class="rp-title" id="rp-title">Titulo do Comunicado</div>
                      </div>
                      <div class="rp-body">
                        <div class="rp-content" id="rp-content">Exemplo de conteudo, aqui fica o comunicado em si.</div>
                        <div class="rp-meta">
                          <div class="rp-meta-item">
                            <div class="rp-meta-label">Publicado por</div>
                            <div class="rp-meta-val" id="rp-author">Prof. Antônio Calunga</div>
                          </div>
                          <div class="rp-meta-item">
                            <div class="rp-meta-label">Data</div>
                            <div class="rp-meta-val" id="rp-date"><?= date("d/m/Y")?></div>
                          </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
      </main>
    </div>
    <script src="/gabnet-system/assets/js/dashboard.js"></script>
  </body>
</html>