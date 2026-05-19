<?php

//$papel_permitido avisa ao auth_check, o papel de usuario permitido nesta pagina
$papel_permitido = 'Administrador';
require __DIR__ . '/../../auth/auth_check.php';

//retorna todos os dados do aluno em um array aluno[etc...]
require __DIR__ . '/../../includes/my_data.php';

//$titulo_documento avisa ao head.php qual e o titulo da pagina
$titulo_documento = 'Turmas';
//$class_body avisa qual e a class do body (para questoes de estilizacao)
$class_body = 'admin';
//$css_body avisa qual e o link css a se adicionar, ATT: que esteja dentro de assets/css/
$css_extra = ['admin.css'];
require __DIR__ . '/../../includes/head.php';
?>

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
        <a href="classes.php" class="nav-link active">
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
            GABnet &rsaquo; <a href="index.php">Painel de Administrador</a> &rsaquo; <strong>Turmas</strong>
          </div>
        </section>
        <section class="topbar-right">
          <div class="topbar-date"><?= date('d/m/Y') ?></div>
          <span class="topbar-avatar">A</span>
        </section>
      </header>
      <main class="content">
        <section class="main-header">
          <div>
            <h1>Gestão de <em>Turmas</em></h1>
            <p>Cria, edita e consulta as turmas da escola. Clica numa turma para ver os alunos matriculados.</p>
          </div>
          <a href="#" class="announce-btn">
            <svg viewBox="0 0 24 24">
              <line x1="12" y1="5" x2="12" y2="19"/>
              <line x1="5" y1="12" x2="19" y2="12"/>
            </svg>
            Nova turma
          </a>
        </section>
        <div class="quick-filters">
          <a href=""
            class="qf-pill active">
            Todas
          </a>
          <a href=""
            class="qf-pill blue">
            Manhã
          </a>
          <a href=""
            class="qf-pill green">
            Tarde
          </a>
          <a href=""
            class="qf-pill purple">
            Noite
          </a>
        </div>
        <section class="classes-grid">
          <div class="class-card">
            <!-- Topo colorido -->
            <div class="cc-top morning">
              <span class="cc-period-badge">
                <svg viewBox="0 0 24 24">
                  <circle cx="12" cy="12" r="5"/>
                  <line x1="12" y1="1" x2="12" y2="3"/>
                  <line x1="12" y1="21" x2="12" y2="23"/>
                </svg>
                Manhã
              </span>
            </div>
            <!-- Corpo -->
            <div class="cc-body">
              <div class="cc-name">10ª Informática</div>
              <div class="cc-classe">10ª Classe</div>

              <!-- Barra de ocupação -->
              <div class="cc-ocupation">
                <div class="cc-oc-row">
                  <span class="cc-oc-label">Alunos matriculados</span>
                  <span class="cc-oc-val">0</span>
                </div>
              </div>
            </div>
            <div class="cc-footer">
              <button class="cc-link" onclick="openModal()">
                <svg viewBox="0 0 24 24">
                  <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/>
                  <circle cx="9" cy="7" r="4"/>
                  <path d="M23 21v-2a4 4 0 00-3-3.87"/>
                </svg>
                Ver alunos
              </button>
              <div class="cc-actions">
                <!-- Editar -->
                <button class="icon-btn edit" title="Editar turma" onclick="openEditDrawer()">
                  <svg viewBox="0 0 24 24">
                    <path d="M11 4H4a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7"/>
                    <path d="M18.5 2.5a2.121 2.121 0 013 3L12 15l-4 1 1-4 9.5-9.5z"/>
                  </svg>
                </button>
                <!-- Eliminar -->
                <form method="POST" action="classes.php" style="display:inline"
                      onsubmit="return confirm('Eliminar a turma 10ª Informática? Esta acção só é possível se não tiver alunos.')">
                  <input type="hidden" name="act" value="eliminar"/>
                  <input type="hidden" name="class_id"  value=""/>
                  <button type="submit" class="icon-btn remove" title="Eliminar turma">
                    <svg viewBox="0 0 24 24">
                      <polyline points="3 6 5 6 21 6"/>
                      <path d="M19 6l-1 14a2 2 0 01-2 2H8a2 2 0 01-2-2L5 6"/>
                      <path d="M9 6V4a1 1 0 011-1h4a1 1 0 011 1v2"/>
                    </svg>
                  </button>
                </form>
              </div>
            </div>
          </div>
          <div class="class-card">
            <!-- Topo colorido -->
            <div class="cc-top afternoon">
              <span class="cc-period-badge">
                <svg viewBox="0 0 24 24">
                  <path d="M17 18a5 5 0 00-10 0"/>
                  <line x1="12" y1="9" x2="12" y2="2"/>
                </svg>
                Tarde
              </span>
            </div>
            <!-- Corpo -->
            <div class="cc-body">
              <div class="cc-name">11ª Informática</div>
              <div class="cc-classe">11ª Classe</div>

              <!-- Barra de ocupação -->
              <div class="cc-ocupation">
                <div class="cc-oc-row">
                  <span class="cc-oc-label">Alunos matriculados</span>
                  <span class="cc-oc-val">0</span>
                </div>
              </div>
            </div>
            <div class="cc-footer">
              <button class="cc-link" onclick="openModal()">
                <svg viewBox="0 0 24 24">
                  <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/>
                  <circle cx="9" cy="7" r="4"/>
                  <path d="M23 21v-2a4 4 0 00-3-3.87"/>
                </svg>
                Ver alunos
              </button>
              <div class="cc-actions">
                <!-- Editar -->
                <button class="icon-btn edit" title="Editar turma" onclick="openEditDrawer()">
                  <svg viewBox="0 0 24 24">
                    <path d="M11 4H4a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7"/>
                    <path d="M18.5 2.5a2.121 2.121 0 013 3L12 15l-4 1 1-4 9.5-9.5z"/>
                  </svg>
                </button>
                <!-- Eliminar -->
                <form method="POST" action="classes.php" style="display:inline"
                      onsubmit="return confirm('Eliminar a turma 10ª Informática? Esta acção só é possível se não tiver alunos.')">
                  <input type="hidden" name="act" value="eliminar"/>
                  <input type="hidden" name="class_id"  value=""/>
                  <button type="submit" class="icon-btn remove" title="Eliminar turma">
                    <svg viewBox="0 0 24 24">
                      <polyline points="3 6 5 6 21 6"/>
                      <path d="M19 6l-1 14a2 2 0 01-2 2H8a2 2 0 01-2-2L5 6"/>
                      <path d="M9 6V4a1 1 0 011-1h4a1 1 0 011 1v2"/>
                    </svg>
                  </button>
                </form>
              </div>
            </div>
          </div>
          <div class="class-card">
            <!-- Topo colorido -->
            <div class="cc-top night">
              <span class="cc-period-badge">
                <svg viewBox="0 0 24 24">
                  <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"/>
                </svg>
                Noite
              </span>
            </div>
            <!-- Corpo -->
            <div class="cc-body">
              <div class="cc-name">12ª Informática</div>
              <div class="cc-classe">12ª Classe</div>

              <!-- Barra de ocupação -->
              <div class="cc-ocupation">
                <div class="cc-oc-row">
                  <span class="cc-oc-label">Alunos matriculados</span>
                  <span class="cc-oc-val">0</span>
                </div>
              </div>
            </div>
            <div class="cc-footer">
              <button class="cc-link" onclick="openModal()">
                <svg viewBox="0 0 24 24">
                  <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/>
                  <circle cx="9" cy="7" r="4"/>
                  <path d="M23 21v-2a4 4 0 00-3-3.87"/>
                </svg>
                Ver alunos
              </button>
              <div class="cc-actions">
                <!-- Editar -->
                <button class="icon-btn edit" title="Editar turma" onclick="openEditDrawer()">
                  <svg viewBox="0 0 24 24">
                    <path d="M11 4H4a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7"/>
                    <path d="M18.5 2.5a2.121 2.121 0 013 3L12 15l-4 1 1-4 9.5-9.5z"/>
                  </svg>
                </button>
                <!-- Eliminar -->
                <form method="POST" action="classes.php" style="display:inline"
                      onsubmit="return confirm('Eliminar a turma 10ª Informática? Esta acção só é possível se não tiver alunos.')">
                  <input type="hidden" name="act" value="eliminar"/>
                  <input type="hidden" name="class_id"  value=""/>
                  <button type="submit" class="icon-btn remove" title="Eliminar turma">
                    <svg viewBox="0 0 24 24">
                      <polyline points="3 6 5 6 21 6"/>
                      <path d="M19 6l-1 14a2 2 0 01-2 2H8a2 2 0 01-2-2L5 6"/>
                      <path d="M9 6V4a1 1 0 011-1h4a1 1 0 011 1v2"/>
                    </svg>
                  </button>
                </form>
              </div>
            </div>
          </div>
          <div class="new-class-card" onclick="openDrawerCriar()">
            <div class="new-icon">
              <svg viewBox="0 0 24 24">
                <line x1="12" y1="5" x2="12" y2="19"/>
                <line x1="5" y1="12" x2="19" y2="12"/>
              </svg>
            </div>
            <span class="new-txt">Criar nova turma</span>
          </div>
        </section>
      </main>
    </div>
    <script src="/gabnet-system/assets/js/dashboard.js"></script>
    </body>
</html>