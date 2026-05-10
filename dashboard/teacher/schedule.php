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
    <link rel="stylesheet" href="/gabnet-system/assets/css/schedule.css">
    <link rel="stylesheet" href="/gabnet-system/assets/css/dashboard.css">
    <link rel="stylesheet" href="/gabnet-system/assets/css/styles.css" />
    <title>Horario Completo - GABnet</title>
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
          <strong>António Calunga</strong>
          <small>Engenharia Electrônica</small>
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
        <a href="schedule.php" class="nav-link active">
          <svg viewBox="0 0 24 24">
            <rect x="3" y="4" width="18" height="18" rx="2"/>
            <line x1="16" y1="2" x2="16" y2="6"/>
            <line x1="8" y1="2" x2="8" y2="6"/>
            <line x1="3" y1="10" x2="21" y2="10"/>
          </svg>
          Horário Completo
        </a>
        <a href="announce.php" class="nav-link">
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
            GABnet &rsaquo; <a href="index.php">Painel de Professor</a> &rsaquo; <strong>Horario Completo</strong>
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
          <h1>O teu <em>horário</em></h1>
          <p>Informática e Sistemas · 3 turmas · 3 disciplinas</p>
        </header>
        <section class="week-charge-card">
          <div class="wcc-icon">
            <svg viewBox="0 0 24 24">
              <path d="M22 10v6M2 10l10-5 10 5-10 5z"/>
              <path d="M6 12v5c3 3 9 3 12 0v-5"/>
            </svg>
          </div>
          <div class="wcc-text">
            <div class="wcc-label">Carga lectiva semanal</div>
            <h2>
              14h de <em>aulas por semana</em>
            </h2>
            <p>9 aulas distribuídas por 5 dias lectivos</p>
          </div>
          <div class="wcc-chips">
            <div class="wcc-chip">
              <strong>2</strong>
              <span>Segunda</span>
            </div>
            <div class="wcc-chip">
              <strong>3</strong>
              <span>Terça</span>
            </div>
            <div class="wcc-chip">
              <strong>1</strong>
              <span>Quarta</span>
            </div>
            <div class="wcc-chip">
              <strong>2</strong>
              <span>Quinta</span>
            </div>
            <div class="wcc-chip">
              <strong>1</strong>
              <span>Sexta</span>
            </div>
          </div>
        </section>
        <section class="class-now-card" style="display: none;">
          <div class="cnc-pulse">
            <svg viewBox="0 0 24 24">
              <path d="M22 10v6M2 10l10-5 10 5-10 5z"/>
              <path d="M6 12v5c3 3 9 3 12 0v-5"/>
            </svg>
          </div>
          <div class="cnc-info">
            <div class="cnc-label">Aula em curso agora</div>
            <div class="cnc-disc">Electrotecnia</div>
            <div class="cnc-class">12ª Informática · 11:30 – 13:00</div>
          </div>
          <div class="cnc-hour">
            <strong id="hora-live"><?= date('H:i') ?></strong>
            <span>em curso</span>
          </div>
        </section>
        <section class="next-lesson-card-t">
          <div class="nlc-icon">
            <svg viewBox="0 0 24 24">
              <circle cx="12" cy="12" r="10"/>
              <polyline points="12 6 12 12 16 14"/>
            </svg>
          </div>
          <div class="nlc-info">
            <div class="nlc-label">Próxima aula</div>
            <div class="nlc-disc">Introdução à Electrônica</div>
            <div class="nlc-meta">11ª Informática</div>
          </div>
          <div class="nlc-hour">
            <strong>09:30</strong>
            <span>até 11:00</span>
          </div>
        </section>
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
                  Horário semanal - Prof. António Calunga
                </h2>
                <p class="panel-header-text">
                  13 aulas · 2 disciplinas 
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
                      <div class="wd-lesson-discipline">Electrotecnia</div>
                      <div class="wd-lesson-class">12ª Informática</div>
                      <div class="wd-lesson-hour">07:30-09:00</div>
                      <div class="now-badge">
                        <span class="now-dot"></span>Agora
                      </div> 
                    </div>
                    <div class="wd-lesson">
                      <div class="wd-lesson-discipline">Introdução à Electrônica</div>
                      <div class="wd-lesson-class">11ª Informática</div>
                      <div class="wd-lesson-hour">09:30-11:00</div>
                    </div>
                    <div class="wd-lesson">
                      <div class="wd-lesson-discipline">Electrotecnia</div>
                      <div class="wd-lesson-class">10ª Informática</div>
                      <div class="wd-lesson-hour">11:30-13:00</div>
                    </div>
                  </div>
                  <div class="week-day-col">
                    <div class="wd-lesson">
                      <div class="wd-lesson-discipline">Electrotecnia</div>
                      <div class="wd-lesson-class">12ª Informática</div>
                      <div class="wd-lesson-hour">07:30-09:00</div>
                    </div>
                    <div class="wd-lesson">
                      <div class="wd-lesson-discipline">Electrotecnia</div>
                      <div class="wd-lesson-class">10ª Informática</div>
                      <div class="wd-lesson-hour">11:30-13:00</div>
                    </div>
                  </div>
                  <div class="week-day-col">
                    <div class="wd-lesson">
                      <div class="wd-lesson-discipline">Electrotecnia</div>
                      <div class="wd-lesson-class">12ª Informática</div>
                      <div class="wd-lesson-hour">07:30-09:00</div>
                    </div>
                    <div class="wd-lesson">
                      <div class="wd-lesson-discipline">Introdução à Electrônica</div>
                      <div class="wd-lesson-class">11ª Informática</div>
                      <div class="wd-lesson-hour">09:30-11:00</div>
                    </div>
                    <div class="wd-lesson">
                      <div class="wd-lesson-discipline">Electrotecnia</div>
                      <div class="wd-lesson-class">10ª Informática</div>
                      <div class="wd-lesson-hour">11:30-13:00</div>
                    </div>
                  </div>
                  <div class="week-day-col">
                    <div class="wd-lesson">
                      <div class="wd-lesson-discipline">Electrotecnia</div>
                      <div class="wd-lesson-class">12ª Informática</div>
                      <div class="wd-lesson-hour">07:30-09:00</div>
                    </div>
                    <div class="wd-lesson">
                      <div class="wd-lesson-discipline">Electrotecnia</div>
                      <div class="wd-lesson-class">10ª Informática</div>
                      <div class="wd-lesson-hour">11:30-13:00</div>
                    </div>
                  </div>
                  <div class="week-day-col">
                    <div class="wd-lesson">
                      <div class="wd-lesson-discipline">Electrotecnia</div>
                      <div class="wd-lesson-class">12ª Informática</div>
                      <div class="wd-lesson-hour">07:30-09:00</div>
                    </div>
                    <div class="wd-lesson">
                      <div class="wd-lesson-discipline">Introdução à Electrônica</div>
                      <div class="wd-lesson-class">11ª Informática</div>
                      <div class="wd-lesson-hour">09:30-11:00</div>
                    </div>
                    <div class="wd-lesson">
                      <div class="wd-lesson-discipline">Electrotecnia</div>
                      <div class="wd-lesson-class">10ª Informática</div>
                      <div class="wd-lesson-hour">11:30-13:00</div>
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