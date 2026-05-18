<?php
$papel_permitido = 'Administrador';
require __DIR__ . '/../../auth/auth_check.php';


?>
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
    <link rel="stylesheet" href="/gabnet-system/assets/css/schedule.css">
    <link rel="stylesheet" href="/gabnet-system/assets/css/dashboard.css" />
    <link rel="stylesheet" href="/gabnet-system/assets/css/styles.css" />
    <title>Horários - GABnet</title>
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
        <a href="schedules.php" class="nav-link active">
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
            GABnet &rsaquo; <a href="index.php">Painel de Administrador</a> &rsaquo; <strong>Horários</strong>
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
            <h1>Gestão de <em>Horários</em></h1>
            <p>Define as aulas semanais de cada turma — disciplina, professor, dia e horário.</p>
          </div>
          <a href="#" class="announce-btn">
            <svg viewBox="0 0 24 24">
              <line x1="12" y1="5" x2="12" y2="19"/>
              <line x1="5" y1="12" x2="19" y2="12"/>
            </svg>
            Nova entrada
          </a>
        </section>
        <div class="class-tabs-wrap">
          <div class="class-tabs-header">
            <div class="class-tabs">
              <a href="?turma=1">
                <button class="class-tab active">
                  10ª Informática
                </button>
              </a>
              <a href="?turma=2">
                <button class="class-tab">
                  11ª Informática
                </button>
              </a>
              <a href="?turma=">
                <button class="class-tab">
                  12ª Informática
                </button>
              </a>
            </div>
            <span class="period-chip morning">
              Manhã
            </span>
          </div>
        </div>
        <section class="panel" id="schedule-panel">
            <div class="schedule-container">
              <div class="panel-header">
                <h2>
                  <svg viewBox="0 0 24 24">
                    <rect x="3" y="4" width="18" height="18" rx="2"/>
                    <line x1="16" y1="2" x2="16" y2="6"/>
                    <line x1="8" y1="2" x2="8" y2="6"/>
                    <line x1="3" y1="10" x2="21" y2="10"/>
                  </svg>
                  10.ª Informática - Horário semanal 
                </h2>
                <p class="panel-header-text">
                  13 aulas · 3 disciplinas 
                </p>
              </div>
              <div class="week-grid-wrap">
                <div class="week-grid">
                  <div class="wg-header today">
                    Segunda
                    <span class="today-dot"></span>
                  </div>
                  <div class="wg-header">
                    Terça
                  </div>
                  <div class="wg-header">
                    Quarta
                  </div>
                  <div class="wg-header">
                    Quinta
                  </div>
                  <div class="wg-header">
                    Sexta
                  </div>

                  <div class="week-day-col today">
                    <div class="wd-lesson active">
                      <div class="wd-lesson-discipline">Matemática</div>
                      <div class="wd-lesson-teacher">Prof. Humberto Kibanzala</div>
                      <div class="wd-lesson-hour">07:30-09:00</div>
                      <form method="POST" action="schedules.php?turma=1" style="display:inline" onsubmit="return confirm('Eliminar esta entrada de horário?')">
                        <input type="hidden" name="act" value="eliminar"/>
                        <input type="hidden" name="hid"  value=""/>
                        <button type="submit" class="icon-btn small remove rm-schedule-btn" title="Eliminar">
                          <svg viewBox="0 0 24 24">
                            <line x1="18" y1="6" x2="6" y2="18"/>
                            <line x1="6" y1="6" x2="18" y2="18"/>
                          </svg>
                        </button>
                      </form>
                    </div>
                    <div class="wd-lesson">
                      <div class="wd-lesson-discipline">Base de Dados</div>
                      <div class="wd-lesson-teacher">Prof. Timóteo José</div>
                      <div class="wd-lesson-hour">09:30-11:00</div>
                      <form method="POST" action="schedules.php?turma=1" style="display:inline" onsubmit="return confirm('Eliminar esta entrada de horário?')">
                        <input type="hidden" name="act" value=""/>
                        <input type="hidden" name="hid"  value=""/>
                        <button type="submit" class="icon-btn small remove rm-schedule-btn" title="Eliminar">
                          <svg viewBox="0 0 24 24">
                            <line x1="18" y1="6" x2="6" y2="18"/>
                            <line x1="6" y1="6" x2="18" y2="18"/>
                          </svg>
                        </button>
                      </form>
                    </div>
                    <div class="wd-lesson">
                      <div class="wd-lesson-discipline">Electrotecnia</div>
                      <div class="wd-lesson-teacher">Prof. António Calunga</div>
                      <div class="wd-lesson-hour">11:30-13:00</div>
                      <form method="POST" action="schedules.php?turma=1" style="display:inline" onsubmit="return confirm('Eliminar esta entrada de horário?')">
                        <input type="hidden" name="act" value=""/>
                        <input type="hidden" name="hid"  value=""/>
                        <button type="submit" class="icon-btn small remove rm-schedule-btn" title="Eliminar">
                          <svg viewBox="0 0 24 24">
                            <line x1="18" y1="6" x2="6" y2="18"/>
                            <line x1="6" y1="6" x2="18" y2="18"/>
                          </svg>
                        </button>
                      </form>
                    </div>
                    <div class="add-slot" onclick="openDrawerDay()" style="margin-top:4px">
                      <svg viewBox="0 0 24 24">
                        <line x1="12" y1="5" x2="12" y2="19"/>
                        <line x1="5" y1="12" x2="19" y2="12"/>
                      </svg>
                    </div>
                  </div>
                  <div class="week-day-col">
                    <div class="wd-lesson">
                      <div class="wd-lesson-discipline">Matemática</div>
                      <div class="wd-lesson-teacher">Prof. Humberto Kibanzala</div>
                      <div class="wd-lesson-hour">07:30-09:00</div>
                      <form method="POST" action="schedules.php?turma=1" style="display:inline" onsubmit="return confirm('Eliminar esta entrada de horário?')">
                        <input type="hidden" name="act" value=""/>
                        <input type="hidden" name="hid"  value=""/>
                        <button type="submit" class="icon-btn small remove rm-schedule-btn" title="Eliminar">
                          <svg viewBox="0 0 24 24">
                            <line x1="18" y1="6" x2="6" y2="18"/>
                            <line x1="6" y1="6" x2="18" y2="18"/>
                          </svg>
                        </button>
                      </form>
                    </div>
                    <div class="wd-lesson">
                      <div class="wd-lesson-discipline">Electrotecnia</div>
                      <div class="wd-lesson-teacher">Prof. António Calunga</div>
                      <div class="wd-lesson-hour">11:30-13:00</div>
                      <form method="POST" action="schedules.php?turma=1" style="display:inline" onsubmit="return confirm('Eliminar esta entrada de horário?')">
                        <input type="hidden" name="act" value=""/>
                        <input type="hidden" name="hid"  value=""/>
                        <button type="submit" class="icon-btn small remove rm-schedule-btn" title="Eliminar">
                          <svg viewBox="0 0 24 24">
                            <line x1="18" y1="6" x2="6" y2="18"/>
                            <line x1="6" y1="6" x2="18" y2="18"/>
                          </svg>
                        </button>
                      </form>
                    </div>
                    <div class="add-slot" onclick="openDrawerDay()" style="margin-top:4px">
                      <svg viewBox="0 0 24 24">
                        <line x1="12" y1="5" x2="12" y2="19"/>
                        <line x1="5" y1="12" x2="19" y2="12"/>
                      </svg>
                    </div>
                  </div>
                  <div class="week-day-col">
                    <div class="wd-lesson">
                      <div class="wd-lesson-discipline">Matemática</div>
                      <div class="wd-lesson-teacher">Prof. Humberto Kibanzala</div>
                      <div class="wd-lesson-hour">07:30-09:00</div>
                      <form method="POST" action="schedules.php?turma=1" style="display:inline" onsubmit="return confirm('Eliminar esta entrada de horário?')">
                        <input type="hidden" name="act" value=""/>
                        <input type="hidden" name="hid"  value=""/>
                        <button type="submit" class="icon-btn small remove rm-schedule-btn" title="Eliminar">
                          <svg viewBox="0 0 24 24">
                            <line x1="18" y1="6" x2="6" y2="18"/>
                            <line x1="6" y1="6" x2="18" y2="18"/>
                          </svg>
                        </button>
                      </form>
                    </div>
                    <div class="wd-lesson">
                      <div class="wd-lesson-discipline">Base de Dados</div>
                      <div class="wd-lesson-teacher">Prof. Timóteo José</div>
                      <div class="wd-lesson-hour">09:30-11:00</div>
                      <form method="POST" action="schedules.php?turma=1" style="display:inline" onsubmit="return confirm('Eliminar esta entrada de horário?')">
                        <input type="hidden" name="act" value=""/>
                        <input type="hidden" name="hid"  value=""/>
                        <button type="submit" class="icon-btn small remove rm-schedule-btn" title="Eliminar">
                          <svg viewBox="0 0 24 24">
                            <line x1="18" y1="6" x2="6" y2="18"/>
                            <line x1="6" y1="6" x2="18" y2="18"/>
                          </svg>
                        </button>
                      </form>
                    </div>
                    <div class="wd-lesson">
                      <div class="wd-lesson-discipline">Electrotecnia</div>
                      <div class="wd-lesson-teacher">Prof. António Calunga</div>
                      <div class="wd-lesson-hour">11:30-13:00</div>
                      <form method="POST" action="schedules.php?turma=1" style="display:inline" onsubmit="return confirm('Eliminar esta entrada de horário?')">
                        <input type="hidden" name="act" value=""/>
                        <input type="hidden" name="hid"  value=""/>
                        <button type="submit" class="icon-btn small remove rm-schedule-btn" title="Eliminar">
                          <svg viewBox="0 0 24 24">
                            <line x1="18" y1="6" x2="6" y2="18"/>
                            <line x1="6" y1="6" x2="18" y2="18"/>
                          </svg>
                        </button>
                      </form>
                    </div>
                    <div class="add-slot" onclick="openDrawerDay()" style="margin-top:4px">
                      <svg viewBox="0 0 24 24">
                        <line x1="12" y1="5" x2="12" y2="19"/>
                        <line x1="5" y1="12" x2="19" y2="12"/>
                      </svg>
                    </div>
                  </div>
                  <div class="week-day-col">
                    <div class="wd-lesson">
                      <div class="wd-lesson-discipline">Matemática</div>
                      <div class="wd-lesson-teacher">Prof. Humberto Kibanzala</div>
                      <div class="wd-lesson-hour">07:30-09:00</div>
                      <form method="POST" action="schedules.php?turma=1" style="display:inline" onsubmit="return confirm('Eliminar esta entrada de horário?')">
                        <input type="hidden" name="act" value=""/>
                        <input type="hidden" name="hid"  value=""/>
                        <button type="submit" class="icon-btn small remove rm-schedule-btn" title="Eliminar">
                          <svg viewBox="0 0 24 24">
                            <line x1="18" y1="6" x2="6" y2="18"/>
                            <line x1="6" y1="6" x2="18" y2="18"/>
                          </svg>
                        </button>
                      </form>
                    </div>
                    <div class="wd-lesson">
                      <div class="wd-lesson-discipline">Electrotecnia</div>
                      <div class="wd-lesson-teacher">Prof. António Calunga</div>
                      <div class="wd-lesson-hour">11:30-13:00</div>
                      <form method="POST" action="schedules.php?turma=1" style="display:inline" onsubmit="return confirm('Eliminar esta entrada de horário?')">
                        <input type="hidden" name="act" value=""/>
                        <input type="hidden" name="hid"  value=""/>
                        <button type="submit" class="icon-btn small remove rm-schedule-btn" title="Eliminar">
                          <svg viewBox="0 0 24 24">
                            <line x1="18" y1="6" x2="6" y2="18"/>
                            <line x1="6" y1="6" x2="18" y2="18"/>
                          </svg>
                        </button>
                      </form>
                    </div>
                    <div class="add-slot" onclick="openDrawerDay()" style="margin-top:4px">
                      <svg viewBox="0 0 24 24">
                        <line x1="12" y1="5" x2="12" y2="19"/>
                        <line x1="5" y1="12" x2="19" y2="12"/>
                      </svg>
                    </div>
                  </div>
                  <div class="week-day-col">
                    <div class="wd-lesson">
                      <div class="wd-lesson-discipline">Matemática</div>
                      <div class="wd-lesson-teacher">Prof. Humberto Kibanzala</div>
                      <div class="wd-lesson-hour">07:30-09:00</div>
                      <form method="POST" action="schedules.php?turma=1" style="display:inline" onsubmit="return confirm('Eliminar esta entrada de horário?')">
                        <input type="hidden" name="act" value=""/>
                        <input type="hidden" name="hid"  value=""/>
                        <button type="submit" class="icon-btn small remove rm-schedule-btn" title="Eliminar">
                          <svg viewBox="0 0 24 24">
                            <line x1="18" y1="6" x2="6" y2="18"/>
                            <line x1="6" y1="6" x2="18" y2="18"/>
                          </svg>
                        </button>
                      </form>
                    </div>
                    <div class="wd-lesson">
                      <div class="wd-lesson-discipline">Base de Dados</div>
                      <div class="wd-lesson-teacher">Prof. Timóteo José</div>
                      <div class="wd-lesson-hour">09:30-11:00</div>
                      <form method="POST" action="schedules.php?turma=1" style="display:inline" onsubmit="return confirm('Eliminar esta entrada de horário?')">
                        <input type="hidden" name="act" value=""/>
                        <input type="hidden" name="hid"  value=""/>
                        <button type="submit" class="icon-btn small remove rm-schedule-btn" title="Eliminar">
                          <svg viewBox="0 0 24 24">
                            <line x1="18" y1="6" x2="6" y2="18"/>
                            <line x1="6" y1="6" x2="18" y2="18"/>
                          </svg>
                        </button>
                      </form>
                    </div>
                    <div class="wd-lesson">
                      <div class="wd-lesson-discipline">Electrotecnia</div>
                      <div class="wd-lesson-teacher">Prof. António Calunga</div>
                      <div class="wd-lesson-hour">11:30-13:00</div>
                      <form method="POST" action="schedules.php?turma=1" style="display:inline" onsubmit="return confirm('Eliminar esta entrada de horário?')">
                        <input type="hidden" name="act" value=""/>
                        <input type="hidden" name="hid"  value=""/>
                        <button type="submit" class="icon-btn small remove rm-schedule-btn" title="Eliminar">
                          <svg viewBox="0 0 24 24">
                            <line x1="18" y1="6" x2="6" y2="18"/>
                            <line x1="6" y1="6" x2="18" y2="18"/>
                          </svg>
                        </button>
                      </form>
                    </div>
                    <div class="add-slot" onclick="openDrawerDay()" style="margin-top:4px">
                      <svg viewBox="0 0 24 24">
                        <line x1="12" y1="5" x2="12" y2="19"/>
                        <line x1="5" y1="12" x2="19" y2="12"/>
                      </svg>
                    </div>
                  </div>

                  <div class="week-footer-cell">
                    <span>3</span> aulas
                  </div>
                  <div class="week-footer-cell">
                    <span>2</span> aulas
                  </div>
                  <div class="week-footer-cell">
                    <span>3</span> aulas
                  </div>
                  <div class="week-footer-cell">
                    <span>2</span> aulas
                  </div>
                  <div class="week-footer-cell">
                    <span>3</span> aulas
                  </div>
                </div>
              </div>
              <div style="height: 25px;"></div>
            </div>
          </section>
      </main>
    </div>
    <script src="/gabnet-system/assets/js/dashboard.js"></script>
    </body>
</html>