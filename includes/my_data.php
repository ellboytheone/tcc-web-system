<?php
    require_once __DIR__ . '../../config/database.php';
    $dias_semana = [
    'Sunday'=>'Domingo','Monday'=>'Segunda','Tuesday'=>'Terça','Wednesday'=>'Quarta','Thursday'=>'Quinta','Friday'=>'Sexta','Saturday'=>'Sábado'];
    $hoje = $dias_semana[date('l')];
    $hora_actual = (int) date('H') * 60 + (int) date('i');
    function aula_status(string $ini, string $fim, int $agora): string {
        [$h1,$m1] = explode(':', $ini); [$h2,$m2] = explode(':', $fim);
        $start = (int)$h1*60+(int)$m1; $end = (int)$h2*60+(int)$m2;
        if ($agora >= $start && $agora < $end) return 'activa';
        if ($agora < $start) return 'futura';
        return 'passada';
    }
    if (isset($_SESSION['papel']) && $_SESSION['papel'] === 'Estudante') {
        //pegar dados da tabela aluno.
        $stmt = $pdo->prepare('
              SELECT id, nome, email, id_turma, inscricao, classe, email_encarregado, telefone_encarregado
              FROM aluno
              WHERE email = ?
              LIMIT 1
          ');
        $stmt->execute([$_SESSION['email']]);
        $aluno = $stmt->fetch();

        //pegar dados da tabela turma
        $stmt = $pdo->prepare('
              SELECT nome, classe, periodo
              FROM turma
              WHERE id = ?
              LIMIT 1
          ');
        $stmt->execute([$aluno['id_turma']]);
        $turma = $stmt->fetch();

        //pegar os comunicados da tabela comunicado correspondentes a esse usuario
        $stmt = $pdo->prepare('
              SELECT id, titulo, conteudo, id_autor, importancia, filtro, criado_em
              FROM comunicado
              WHERE (filtro IN ("Todos", "Alunos")
              OR id_turma = ?) 
              AND STATUS = "Aceite"
          ');
        $stmt->execute([$aluno['id_turma']]);
        $comunicados = $stmt->fetchAll(PDO::FETCH_ASSOC);

        //pegar os horarios da tabela horario correspondentes a esse usuario
        $stmt = $pdo->prepare('
            SELECT 
                h.hora_inicio,
                h.hora_fim,
                h.dia_semana,
                h.id_turma,
                d.nome AS disciplina,
                p.nome AS professor
            FROM horario h
            JOIN professores_disciplinas pd 
                ON pd.id = h.professor_disciplina
            JOIN disciplina d 
                ON d.id = pd.disciplina
            JOIN professor p 
                ON p.id = pd.professor
            WHERE h.id_turma = ?
            ORDER BY h.hora_inicio ASC
        ');

        $stmt->execute([$aluno['id_turma']]);
        $horarios = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $stmt = $pdo->prepare('
            SELECT 
                h.hora_inicio,
                h.hora_fim,
                h.dia_semana,
                h.id_turma,
                d.nome AS disciplina,
                p.nome AS professor
            FROM horario h
            JOIN professores_disciplinas pd 
                ON pd.id = h.professor_disciplina
            JOIN disciplina d 
                ON d.id = pd.disciplina
            JOIN professor p 
                ON p.id = pd.professor
            WHERE h.id_turma = ?
            AND h.dia_semana = ?
            ORDER BY h.hora_inicio ASC
        ');

        $stmt->execute([$aluno['id_turma'], $hoje]);
        $aulas_hoje = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $aula_actual = null;
        $proxima_aula = null;

        foreach ($aulas_hoje as $aula) {

            $status = aula_status(
                $aula['hora_inicio'],
                $aula['hora_fim'],
                $hora_actual
            );

            if ($status === 'activa') {
                $aula_actual = $aula;
            }

            if ($status === 'futura' && !$proxima_aula) {
                $proxima_aula = $aula;
            }
        }
    }

    